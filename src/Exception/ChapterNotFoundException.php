<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Exception;

use BKuhl\BibleCSB\BookInterface;

class ChapterNotFoundException extends \RuntimeException
{
    public function __construct(int $chapterNumber, BookInterface $book)
    {
        parent::__construct(sprintf('Chapter %d not found in %s', $chapterNumber, $book->name()));
    }
} 