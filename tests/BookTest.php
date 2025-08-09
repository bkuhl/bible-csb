<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Exception\ChapterNotFoundException;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    private Genesis $book;

    protected function setUp(): void
    {
        $this->book = new Genesis();
    }

    public function testChapterVerseCountReturnsCorrectCount(): void
    {
        $count = $this->book->chapterVerseCount(1);
        $this->assertEquals(31, $count);
    }

    public function testChapterVerseCountThrowsExceptionForInvalidChapter(): void
    {
        $this->expectException(ChapterNotFoundException::class);
        $this->expectExceptionMessage('Chapter 999 not found in Genesis');

        $this->book->chapterVerseCount(999);
    }
}