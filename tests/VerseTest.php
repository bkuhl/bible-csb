<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Chapter;
use BKuhl\BibleCSB\Verse;
use PHPUnit\Framework\TestCase;

class VerseTest extends TestCase
{
    private Verse $verse;
    private Chapter $chapter;
    private Book $book;

    protected function setUp(): void
    {
        $this->book = $this->createMock(Book::class);
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

    public function testChapterReference(): void
    {
        $this->chapter->method('number')->willReturn(1);
        $verse = new Verse('Test verse text', 1, $this->chapter);
        
        $this->assertEquals('1:1', $verse->chapterReference());
    }

    public function testBookReference(): void
    {
        $this->book->method('name')->willReturn('Genesis');
        $this->chapter->method('number')->willReturn(1);
        $this->chapter->method('book')->willReturn($this->book);
        
        $verse = new Verse('Test verse text', 1, $this->chapter);
        
        $this->assertEquals('Genesis 1:1', $verse->bookReference());
    }

    public function testChapterNumber(): void
    {
        $this->chapter->method('number')->willReturn(5);
        $verse = new Verse('Test verse text', 1, $this->chapter);
        
        $this->assertEquals(5, $verse->chapterNumber());
    }

    public function testBook(): void
    {
        $this->chapter->method('book')->willReturn($this->book);
        $verse = new Verse('Test verse text', 1, $this->chapter);
        
        $this->assertSame($this->book, $verse->book());
    }

    public function testTextStripsTags(): void
    {
        $htmlText = 'Then the <span class="smallcaps">Lord</span> called Samuel, and he answered, "Here I am."';
        $verse = new Verse($htmlText, 4, $this->chapter);
        
        $plainText = $verse->text();
        $this->assertEquals('Then the Lord called Samuel, and he answered, "Here I am."', $plainText);
        $this->assertStringNotContainsString('<span', $plainText);
        $this->assertStringNotContainsString('</span>', $plainText);
    }

    public function testFormattedTextPreservesHtml(): void
    {
        $htmlText = 'Then the <span class="smallcaps">Lord</span> called Samuel, and he answered, "Here I am."';
        $verse = new Verse($htmlText, 4, $this->chapter);
        
        $formattedText = $verse->formattedText();
        $this->assertEquals($htmlText, $formattedText);
        $this->assertStringContainsString('<span class="smallcaps">Lord</span>', $formattedText);
    }

    public function testTextAndFormattedTextWithComplexHtml(): void
    {
        $complexHtml = 'Test with <span class="smallcaps">God</span> and <em>emphasis</em> and <strong>bold</strong> text.';
        $verse = new Verse($complexHtml, 1, $this->chapter);
        
        // text() should strip ALL HTML tags
        $plainText = $verse->text();
        $this->assertEquals('Test with God and emphasis and bold text.', $plainText);
        $this->assertStringNotContainsString('<', $plainText);
        
        // formattedText() should preserve all HTML
        $formattedText = $verse->formattedText();
        $this->assertEquals($complexHtml, $formattedText);
        $this->assertStringContainsString('<span class="smallcaps">God</span>', $formattedText);
        $this->assertStringContainsString('<em>emphasis</em>', $formattedText);
        $this->assertStringContainsString('<strong>bold</strong>', $formattedText);
    }

    public function testTextWithNoHtml(): void
    {
        $plainText = 'Simple text with no HTML tags.';
        $verse = new Verse($plainText, 1, $this->chapter);
        
        $this->assertEquals($plainText, $verse->text());
        $this->assertEquals($plainText, $verse->formattedText());
    }

    public function testTextWithHtmlEntities(): void
    {
        $textWithEntities = 'He said, &#x201C;Hello&#x201D; and &#x2019;goodbye&#x2019;.';
        $verse = new Verse($textWithEntities, 1, $this->chapter);
        
        // Both methods should preserve HTML entities (they're not HTML tags)
        $this->assertEquals($textWithEntities, $verse->text());
        $this->assertEquals($textWithEntities, $verse->formattedText());
    }

    public function testVerseStoresTextAsProvided(): void
    {
        // Test that Verse class stores exactly what text is provided to it
        // (verse number removal happens in BookGenerator, not in Verse class)
        $providedText = 'But he gave a double portion to Hannah, for he loved her.';
        $verse = new Verse($providedText, 5, $this->chapter);
        
        $this->assertEquals($providedText, $verse->text());
        $this->assertEquals($providedText, $verse->formattedText());
        
        // Test that if text without verse numbers is provided, it's preserved
        $this->assertStringStartsWith('But he gave', $verse->text());
    }
} 