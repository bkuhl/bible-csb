<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

use BKuhl\BibleCSB\Exception\VerseNotFoundException;

class Chapter
{
    /** @var array<int, Verse> */
    private array $verses = [];

    public function __construct(
        private readonly int $number,
        private readonly BookInterface $book
    ) {}

    public function number(): int
    {
        return $this->number;
    }

    public function book(): BookInterface
    {
        return $this->book;
    }

    public function addVerse(Verse $verse): void
    {
        $this->verses[$verse->number()] = $verse;
    }

    /**
     * @return array<int, Verse>
     */
    public function verses(): array
    {
        return $this->verses;
    }

    /**
     * @throws VerseNotFoundException
     */
    public function verse(int $number): Verse
    {
        if (!isset($this->verses[$number])) {
            throw new VerseNotFoundException($number, $this->number, $this->book->name());
        }

        return $this->verses[$number];
    }

    public function verseCount(): int
    {
        return count($this->verses);
    }

    public function hasVerse(int $number): bool
    {
        return isset($this->verses[$number]);
    }

    /**
     * Serialize the chapter to store only book ID and chapter number
     *
     * @return array{bookId: int, chapterNumber: int}
     */
    public function __serialize(): array
    {
        return [
            'bookId' => $this->book->position(),
            'chapterNumber' => $this->number,
        ];
    }

    /**
     * Unserialize the chapter from stored book ID and chapter number
     *
     * @param array{bookId: int, chapterNumber: int} $data
     */
    public function __unserialize(array $data): void
    {
        $bookFactory = new BookFactory();
        $bookEnum = BookEnum::from($data['bookId']);
        $book = $bookFactory->make($bookEnum);

        // BookFactory always returns Book instances (which implement BookInterface)
        if (!$book instanceof Book) {
            throw new \RuntimeException('Expected Book instance from BookFactory');
        }

        // Get the chapter from the book to ensure we have the correct instance with verses
        $reconstructedChapter = $book->chapter($data['chapterNumber']);

        // Use reflection to set private readonly properties
        $reflection = new \ReflectionClass($this);
        
        $numberProperty = $reflection->getProperty('number');
        $numberProperty->setAccessible(true);
        $numberProperty->setValue($this, $data['chapterNumber']);

        $bookProperty = $reflection->getProperty('book');
        $bookProperty->setAccessible(true);
        $bookProperty->setValue($this, $book);

        // Copy verses from the reconstructed chapter
        $versesProperty = $reflection->getProperty('verses');
        $versesProperty->setAccessible(true);
        $versesProperty->setValue($this, $reconstructedChapter->verses());
    }
} 