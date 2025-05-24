<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\BookInterface;
use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\Exception\VerseNotFoundException;
use BKuhl\BibleCSB\Verse;
use PHPUnit\Framework\TestCase;

class ChapterTest extends TestCase
{
    private Chapter $chapter;
    private BookInterface $book;

    protected function setUp(): void
    {
        $this->book = $this->createMock(BookInterface::class);
        $this->book->method('name')->willReturn('Genesis');
        $this->chapter = new Chapter(1, $this->book);
    }

    public function testConstructorAndGetters(): void
    {
        $this->assertEquals(1, $this->chapter->number());
        $this->assertSame($this->book, $this->chapter->book());
    }

    public function testAddAndGetVerses(): void
    {
        $verse1 = $this->createMock(Verse::class);
        $verse1->method('number')->willReturn(1);
        $verse2 = $this->createMock(Verse::class);
        $verse2->method('number')->willReturn(2);

        $this->chapter->addVerse($verse1);
        $this->chapter->addVerse($verse2);

        $verses = $this->chapter->verses();
        $this->assertCount(2, $verses);
        $this->assertSame($verse1, $verses[1]);
        $this->assertSame($verse2, $verses[2]);
    }

    public function testGetVerse(): void
    {
        $verse = $this->createMock(Verse::class);
        $verse->method('number')->willReturn(1);
        $this->chapter->addVerse($verse);

        $retrievedVerse = $this->chapter->verse(1);
        $this->assertSame($verse, $retrievedVerse);
    }

    public function testGetVerseThrowsExceptionForNonExistentVerse(): void
    {
        $this->expectException(VerseNotFoundException::class);
        $this->expectExceptionMessage('Verse 1 not found in Genesis chapter 1');

        $this->chapter->verse(1);
    }

    public function testGetVerseCount(): void
    {
        $this->assertEquals(0, $this->chapter->verseCount());

        $verse1 = $this->createMock(Verse::class);
        $verse1->method('number')->willReturn(1);
        $verse2 = $this->createMock(Verse::class);
        $verse2->method('number')->willReturn(2);

        $this->chapter->addVerse($verse1);
        $this->assertEquals(1, $this->chapter->verseCount());

        $this->chapter->addVerse($verse2);
        $this->assertEquals(2, $this->chapter->verseCount());
    }

    public function testHasVerse(): void
    {
        $this->assertFalse($this->chapter->hasVerse(1));

        $verse = $this->createMock(Verse::class);
        $verse->method('number')->willReturn(1);
        $this->chapter->addVerse($verse);

        $this->assertTrue($this->chapter->hasVerse(1));
        $this->assertFalse($this->chapter->hasVerse(2));
    }
} 