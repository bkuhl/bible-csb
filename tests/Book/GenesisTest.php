<?php

declare(strict_types=1);

namespace tests\Book;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\BookInterface;
use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\Exception\ChapterNotFoundException;
use BKuhl\BibleCSB\Testament;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class GenesisTest extends TestCase
{
    private Genesis $genesis;

    protected function setUp(): void
    {
        $this->genesis = new Genesis();
    }

    #[Test]
    public function testImplementsBookInterface(): void
    {
        $this->assertInstanceOf(BookInterface::class, $this->genesis);
    }

    #[Test]
    public function testTestament(): void
    {
        $this->assertEquals(Testament::OLD, $this->genesis->testament());
    }

    #[Test]
    public function testName(): void
    {
        $this->assertEquals('Genesis', $this->genesis->name());
    }

    #[Test]
    public function testPosition(): void
    {
        $this->assertEquals(Genesis::ID, $this->genesis->position());
    }

    #[Test]
    public function testAbbreviation(): void
    {
        $this->assertEquals('Gen', $this->genesis->abbreviation());
    }

    #[Test]
    public function testGetChapterCount(): void
    {
        $this->assertEquals(50, $this->genesis->chapterCount());
    }

    #[Test]
    public function testGetValidChapter(): void
    {
        $chapter = $this->genesis->chapter(1);
        
        $this->assertInstanceOf(Chapter::class, $chapter);
        $this->assertEquals(1, $chapter->number());
        $this->assertSame($this->genesis, $chapter->book());
    }

    #[Test]
    public function testGetInvalidChapterThrowsException(): void
    {
        $this->expectException(ChapterNotFoundException::class);
        $this->expectExceptionMessage('Chapter 51 not found in Genesis');
        
        $this->genesis->chapter(51);
    }
} 