<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Book\John;
use BKuhl\BibleCSB\Chapter;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ChapterSerializationTest extends TestCase
{
    #[Test]
    public function testSerializeStoresOnlyBookIdAndChapterNumber(): void
    {
        $book = new Genesis();
        $chapter = $book->chapter(1);
        
        $data = $chapter->__serialize();

        $this->assertIsArray($data);
        $this->assertArrayHasKey('bookId', $data);
        $this->assertArrayHasKey('chapterNumber', $data);
        $this->assertCount(2, $data);
        $this->assertEquals(Genesis::ID, $data['bookId']);
        $this->assertEquals(1, $data['chapterNumber']);
    }

    #[Test]
    public function testUnserializeReconstructsChapterCorrectly(): void
    {
        $book = new Genesis();
        $originalChapter = $book->chapter(1);
        
        $serialized = serialize($originalChapter);
        $reconstructedChapter = unserialize($serialized);

        $this->assertInstanceOf(Chapter::class, $reconstructedChapter);
        $this->assertEquals($originalChapter->number(), $reconstructedChapter->number());
        $this->assertEquals($originalChapter->book()->position(), $reconstructedChapter->book()->position());
        $this->assertEquals($originalChapter->book()->name(), $reconstructedChapter->book()->name());
    }

    #[Test]
    public function testUnserializedChapterHasVerses(): void
    {
        $book = new Genesis();
        $originalChapter = $book->chapter(1);
        
        $serialized = serialize($originalChapter);
        $reconstructedChapter = unserialize($serialized);

        $this->assertEquals($originalChapter->verseCount(), $reconstructedChapter->verseCount());
        $this->assertTrue($reconstructedChapter->hasVerse(1));
        $this->assertTrue($reconstructedChapter->hasVerse(31));
        
        $verse1 = $reconstructedChapter->verse(1);
        $this->assertNotNull($verse1);
        $this->assertEquals(1, $verse1->number());
    }

    #[Test]
    public function testUnserializedChapterCanAccessVerses(): void
    {
        $book = new Genesis();
        $originalChapter = $book->chapter(1);
        $originalVerse = $originalChapter->verse(1);
        
        $serialized = serialize($originalChapter);
        $reconstructedChapter = unserialize($serialized);
        $reconstructedVerse = $reconstructedChapter->verse(1);

        $this->assertEquals($originalVerse->number(), $reconstructedVerse->number());
        $this->assertEquals($originalVerse->text(), $reconstructedVerse->text());
        $this->assertEquals($originalVerse->chapterReference(), $reconstructedVerse->chapterReference());
    }

    #[Test]
    public function testSerializeWorksWithDifferentChapters(): void
    {
        $book = new Genesis();
        $chapter1 = $book->chapter(1);
        $chapter2 = $book->chapter(2);
        $chapter50 = $book->chapter(50);

        $serialized1 = serialize($chapter1);
        $serialized2 = serialize($chapter2);
        $serialized50 = serialize($chapter50);

        $unserialized1 = unserialize($serialized1);
        $unserialized2 = unserialize($serialized2);
        $unserialized50 = unserialize($serialized50);

        $this->assertEquals(1, $unserialized1->number());
        $this->assertEquals(2, $unserialized2->number());
        $this->assertEquals(50, $unserialized50->number());

        $this->assertEquals($chapter1->verseCount(), $unserialized1->verseCount());
        $this->assertEquals($chapter2->verseCount(), $unserialized2->verseCount());
        $this->assertEquals($chapter50->verseCount(), $unserialized50->verseCount());
    }

    #[Test]
    public function testSerializeWorksWithDifferentBooks(): void
    {
        $genesis = new Genesis();
        $john = new John();

        $genesisChapter = $genesis->chapter(1);
        $johnChapter = $john->chapter(1);

        $genesisSerialized = serialize($genesisChapter);
        $johnSerialized = serialize($johnChapter);

        $genesisUnserialized = unserialize($genesisSerialized);
        $johnUnserialized = unserialize($johnSerialized);

        $this->assertEquals('Genesis', $genesisUnserialized->book()->name());
        $this->assertEquals('John', $johnUnserialized->book()->name());
        $this->assertEquals(Genesis::ID, $genesisUnserialized->book()->position());
        $this->assertEquals(John::ID, $johnUnserialized->book()->position());
    }

    #[Test]
    public function testSerializedChapterMaintainsFunctionality(): void
    {
        $book = new Genesis();
        $originalChapter = $book->chapter(1);
        
        $serialized = serialize($originalChapter);
        $reconstructedChapter = unserialize($serialized);

        // Test all methods still work
        $this->assertEquals(1, $reconstructedChapter->number());
        $this->assertEquals(31, $reconstructedChapter->verseCount());
        $this->assertTrue($reconstructedChapter->hasVerse(1));
        $this->assertFalse($reconstructedChapter->hasVerse(100));
        
        $verse = $reconstructedChapter->verse(1);
        $this->assertNotNull($verse);
        $this->assertEquals('1:1', $reconstructedChapter->verse(1)->chapterReference());
    }
}

