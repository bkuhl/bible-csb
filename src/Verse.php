<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

use BKuhl\BibleCSB\BookInterface;

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
}