<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Exception;

class VerseNotFoundException extends \RuntimeException
{
    public function __construct(int $verseNumber, int $chapterNumber, string $bookName)
    {
        parent::__construct(sprintf('Verse %d not found in %s chapter %d', $verseNumber, $bookName, $chapterNumber));
    }
} 