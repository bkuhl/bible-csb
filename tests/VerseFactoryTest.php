<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\Verse;
use BKuhl\BibleCSB\VerseFactory;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class VerseFactoryTest extends TestCase
{
    private VerseFactory $factory;
    private Chapter|MockObject $chapter;

    protected function setUp(): void
    {
        $this->factory = new VerseFactory();
        $this->chapter = $this->createMock(Chapter::class);
    }

    #[Test]
    public function testCreateReturnsVerseWithCorrectText(): void
    {
        $text = 'In the beginning God created the heavens and the earth.';
        $number = 1;

        $verse = $this->factory->create($text, $number, $this->chapter);

        $this->assertInstanceOf(Verse::class, $verse);
        $this->assertEquals($text, $verse->text());
    }

    #[Test]
    public function testCreateReturnsVerseWithCorrectNumber(): void
    {
        $text = 'In the beginning God created the heavens and the earth.';
        $number = 1;

        $verse = $this->factory->create($text, $number, $this->chapter);

        $this->assertEquals($number, $verse->number());
    }

    #[Test]
    public function testCreateReturnsVerseWithCorrectChapter(): void
    {
        $text = 'In the beginning God created the heavens and the earth.';
        $number = 1;

        $verse = $this->factory->create($text, $number, $this->chapter);

        $this->assertSame($this->chapter, $verse->chapter());
    }
} 