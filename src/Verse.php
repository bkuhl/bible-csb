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

    public function shortReference(): string
    {
        return $this->chapter->number() . ':' . $this->number;
    }

    public function fullReference(): string
    {
        return $this->chapter->book()->name() . ' ' . $this->shortReference();
    }
}