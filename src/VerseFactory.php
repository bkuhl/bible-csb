<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

class VerseFactory
{
    public function create(string $text, int $number, Chapter $chapter): Verse
    {
        return new Verse($text, $number, $chapter);
    }
} 