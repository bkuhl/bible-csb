<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\Verse;
use PHPUnit\Framework\TestCase;

class VerseTest extends TestCase
{
    private Verse $verse;
    private Chapter $chapter;

    protected function setUp(): void
    {
        $this->chapter = $this->createMock(Chapter::class);
        $this->verse = new Verse('In the beginning God created the heavens and the earth.', 1, $this->chapter);
    }

    public function testConstructorAndGetters(): void
    {
        $this->assertEquals('In the beginning God created the heavens and the earth.', $this->verse->text());
        $this->assertEquals(1, $this->verse->number());
        $this->assertSame($this->chapter, $this->verse->chapter());
    }

    public function testGetText(): void
    {
        $verse = new Verse('Test verse text', 1, $this->chapter);
        $this->assertEquals('Test verse text', $verse->text());
    }

    public function testGetNumber(): void
    {
        $verse = new Verse('Test verse text', 42, $this->chapter);
        $this->assertEquals(42, $verse->number());
    }

    public function testGetChapter(): void
    {
        $newChapter = $this->createMock(Chapter::class);
        $verse = new Verse('Test verse text', 1, $newChapter);
        $this->assertSame($newChapter, $verse->chapter());
    }
} 