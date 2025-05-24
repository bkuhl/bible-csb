<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\BookInterface;
use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\ChapterFactory;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ChapterFactoryTest extends TestCase
{
    private ChapterFactory $factory;
    private BookInterface|MockObject $book;

    protected function setUp(): void
    {
        $this->factory = new ChapterFactory();
        $this->book = $this->createMock(BookInterface::class);
    }

    #[Test]
    public function testCreateReturnsChapterWithCorrectNumber(): void
    {
        $chapterNumber = 1;
        $verses = [];

        $chapter = $this->factory->create($chapterNumber, $this->book, $verses);

        $this->assertInstanceOf(Chapter::class, $chapter);
        $this->assertEquals($chapterNumber, $chapter->number());
    }

    #[Test]
    public function testCreateReturnsChapterWithCorrectBook(): void
    {
        $chapterNumber = 1;
        $verses = [];

        $chapter = $this->factory->create($chapterNumber, $this->book, $verses);

        $this->assertSame($this->book, $chapter->book());
    }

    #[Test]
    public function testCreateAddsAllVersesToChapter(): void
    {
        $chapterNumber = 1;
        $verses = [
            1 => 'First verse',
            2 => 'Second verse',
            3 => 'Third verse',
        ];

        $chapter = $this->factory->create($chapterNumber, $this->book, $verses);

        $this->assertCount(3, $chapter->verses());
    }

    #[Test]
    public function testCreateReturnsEmptyChapterWhenNoVersesProvided(): void
    {
        $chapterNumber = 1;
        $verses = [];

        $chapter = $this->factory->create($chapterNumber, $this->book, $verses);

        $this->assertCount(0, $chapter->verses());
    }

    #[Test]
    public function testCreateAddsVersesWithCorrectNumbers(): void
    {
        $chapterNumber = 1;
        $verses = [
            1 => 'First verse',
            2 => 'Second verse',
            3 => 'Third verse',
        ];

        $chapter = $this->factory->create($chapterNumber, $this->book, $verses);

        $this->assertEquals(1, $chapter->verse(1)->number());
        $this->assertEquals(2, $chapter->verse(2)->number());
        $this->assertEquals(3, $chapter->verse(3)->number());
    }
} 