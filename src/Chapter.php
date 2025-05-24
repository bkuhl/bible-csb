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
} 