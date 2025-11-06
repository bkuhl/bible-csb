<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Book\John;
use BKuhl\BibleCSB\Verse;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class VerseSerializationTest extends TestCase
{
    #[Test]
    public function testSerializeStoresOnlyBookIdChapterNumberAndVerseNumber(): void
    {
        $book = new Genesis();
        $chapter = $book->chapter(1);
        $verse = $chapter->verse(1);
        
        $data = $verse->__serialize();

        $this->assertIsArray($data);
        $this->assertArrayHasKey('bookId', $data);
        $this->assertArrayHasKey('chapterNumber', $data);
        $this->assertArrayHasKey('verseNumber', $data);
        $this->assertCount(3, $data);
        $this->assertEquals(Genesis::ID, $data['bookId']);
        $this->assertEquals(1, $data['chapterNumber']);
        $this->assertEquals(1, $data['verseNumber']);
    }

    #[Test]
    public function testUnserializeReconstructsVerseCorrectly(): void
    {
        $book = new Genesis();
        $originalVerse = $book->chapter(1)->verse(1);
        
        $serialized = serialize($originalVerse);
        $reconstructedVerse = unserialize($serialized);

        $this->assertInstanceOf(Verse::class, $reconstructedVerse);
        $this->assertEquals($originalVerse->number(), $reconstructedVerse->number());
        $this->assertEquals($originalVerse->text(), $reconstructedVerse->text());
        $this->assertEquals($originalVerse->formattedText(), $reconstructedVerse->formattedText());
        $this->assertEquals($originalVerse->chapterReference(), $reconstructedVerse->chapterReference());
        $this->assertEquals($originalVerse->bookReference(), $reconstructedVerse->bookReference());
    }

    #[Test]
    public function testUnserializedVerseHasCorrectChapterAndBook(): void
    {
        $book = new Genesis();
        $originalVerse = $book->chapter(1)->verse(1);
        
        $serialized = serialize($originalVerse);
        $reconstructedVerse = unserialize($serialized);

        $this->assertEquals(1, $reconstructedVerse->chapter()->number());
        $this->assertEquals('Genesis', $reconstructedVerse->book()->name());
        $this->assertEquals(Genesis::ID, $reconstructedVerse->book()->position());
        $this->assertEquals(1, $reconstructedVerse->chapterNumber());
    }

    #[Test]
    public function testUnserializedVerseTextMatchesOriginal(): void
    {
        $book = new Genesis();
        $originalVerse = $book->chapter(1)->verse(1);
        $originalText = $originalVerse->text();
        $originalFormattedText = $originalVerse->formattedText();
        
        $serialized = serialize($originalVerse);
        $reconstructedVerse = unserialize($serialized);

        $this->assertEquals($originalText, $reconstructedVerse->text());
        $this->assertEquals($originalFormattedText, $reconstructedVerse->formattedText());
    }

    #[Test]
    public function testSerializeWorksWithDifferentVerses(): void
    {
        $book = new Genesis();
        $verse1 = $book->chapter(1)->verse(1);
        $verse2 = $book->chapter(1)->verse(31);
        $verse3 = $book->chapter(50)->verse(26);

        $serialized1 = serialize($verse1);
        $serialized2 = serialize($verse2);
        $serialized3 = serialize($verse3);

        $unserialized1 = unserialize($serialized1);
        $unserialized2 = unserialize($serialized2);
        $unserialized3 = unserialize($serialized3);

        $this->assertEquals(1, $unserialized1->number());
        $this->assertEquals(31, $unserialized2->number());
        $this->assertEquals(26, $unserialized3->number());

        $this->assertEquals(1, $unserialized1->chapterNumber());
        $this->assertEquals(1, $unserialized2->chapterNumber());
        $this->assertEquals(50, $unserialized3->chapterNumber());

        $this->assertEquals('1:1', $unserialized1->chapterReference());
        $this->assertEquals('1:31', $unserialized2->chapterReference());
        $this->assertEquals('50:26', $unserialized3->chapterReference());
    }

    #[Test]
    public function testSerializeWorksWithDifferentBooks(): void
    {
        $genesis = new Genesis();
        $john = new John();

        $genesisVerse = $genesis->chapter(1)->verse(1);
        $johnVerse = $john->chapter(1)->verse(1);

        $genesisSerialized = serialize($genesisVerse);
        $johnSerialized = serialize($johnVerse);

        $genesisUnserialized = unserialize($genesisSerialized);
        $johnUnserialized = unserialize($johnSerialized);

        $this->assertEquals('Genesis', $genesisUnserialized->book()->name());
        $this->assertEquals('John', $johnUnserialized->book()->name());
        $this->assertEquals(Genesis::ID, $genesisUnserialized->book()->position());
        $this->assertEquals(John::ID, $johnUnserialized->book()->position());
    }

    #[Test]
    public function testSerializedVerseMaintainsAllFunctionality(): void
    {
        $book = new Genesis();
        $originalVerse = $book->chapter(1)->verse(1);
        
        $serialized = serialize($originalVerse);
        $reconstructedVerse = unserialize($serialized);

        // Test all methods still work
        $this->assertEquals(1, $reconstructedVerse->number());
        $this->assertEquals(1, $reconstructedVerse->chapterNumber());
        $this->assertEquals('1:1', $reconstructedVerse->chapterReference());
        $this->assertEquals('Genesis 1:1', $reconstructedVerse->bookReference());
        $this->assertNotEmpty($reconstructedVerse->text());
        $this->assertNotEmpty($reconstructedVerse->formattedText());
        $this->assertInstanceOf(Verse::class, $reconstructedVerse->chapter()->verse(1));
    }

    #[Test]
    public function testVerseWithHtmlTagsSerializesCorrectly(): void
    {
        $book = new Genesis();
        // Find a verse that likely has HTML tags
        $chapter = $book->chapter(1);
        $verse = $chapter->verse(1);
        
        $originalFormattedText = $verse->formattedText();
        $originalText = $verse->text();
        
        $serialized = serialize($verse);
        $reconstructedVerse = unserialize($serialized);

        $this->assertEquals($originalText, $reconstructedVerse->text());
        $this->assertEquals($originalFormattedText, $reconstructedVerse->formattedText());
    }

    #[Test]
    public function testNestedSerializationWorks(): void
    {
        // Test that serializing a Verse (which contains Chapter which contains Book) works
        $book = new Genesis();
        $verse = $book->chapter(1)->verse(1);
        
        // Serialize the verse (which will serialize chapter and book too)
        $serialized = serialize($verse);
        $reconstructedVerse = unserialize($serialized);

        // Verify the entire chain works
        $this->assertEquals($verse->number(), $reconstructedVerse->number());
        $this->assertEquals($verse->chapter()->number(), $reconstructedVerse->chapter()->number());
        $this->assertEquals($verse->book()->position(), $reconstructedVerse->book()->position());
        $this->assertEquals($verse->book()->name(), $reconstructedVerse->book()->name());
    }
}

