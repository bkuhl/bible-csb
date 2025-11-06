<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

class Verse
{
    public function __construct(
        private readonly string $text,
        private readonly int $number,
        private readonly Chapter $chapter
    ) {}

    public function text(): string
    {
        return strip_tags($this->text);
    }

    public function formattedText(): string
    {
        return $this->text;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function chapter(): Chapter
    {
        return $this->chapter;
    }

    public function chapterReference(): string
    {
        return $this->chapter->number() . ':' . $this->number;
    }

    public function bookReference(): string
    {
        return $this->chapter->book()->name() . ' ' . $this->chapterReference();
    }

    public function chapterNumber(): int
    {
        return $this->chapter->number();
    }

    public function book(): BookInterface
    {
        return $this->chapter->book();
    }

    /**
     * Serialize the verse to store only book ID, chapter number, and verse number
     *
     * @return array{bookId: int, chapterNumber: int, verseNumber: int}
     */
    public function __serialize(): array
    {
        return [
            'bookId' => $this->chapter->book()->position(),
            'chapterNumber' => $this->chapter->number(),
            'verseNumber' => $this->number,
        ];
    }

    /**
     * Unserialize the verse from stored book ID, chapter number, and verse number
     *
     * @param array{bookId: int, chapterNumber: int, verseNumber: int} $data
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
        
        $chapter = $book->chapter($data['chapterNumber']);
        $verse = $chapter->verse($data['verseNumber']);

        // Use reflection to set private readonly properties
        $reflection = new \ReflectionClass($this);
        
        $textProperty = $reflection->getProperty('text');
        $textProperty->setAccessible(true);
        $textProperty->setValue($this, $verse->formattedText());

        $numberProperty = $reflection->getProperty('number');
        $numberProperty->setAccessible(true);
        $numberProperty->setValue($this, $data['verseNumber']);

        $chapterProperty = $reflection->getProperty('chapter');
        $chapterProperty->setAccessible(true);
        $chapterProperty->setValue($this, $chapter);
    }
}