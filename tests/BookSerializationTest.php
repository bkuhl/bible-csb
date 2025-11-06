<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Book\John;
use BKuhl\BibleCSB\Book\Revelation;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BookSerializationTest extends TestCase
{
    #[Test]
    public function testSerializeStoresOnlyBookId(): void
    {
        $book = new Genesis();
        $serialized = serialize($book);
        $unserialized = unserialize($serialized);

        $this->assertInstanceOf(Genesis::class, $unserialized);
        $this->assertEquals($book->position(), $unserialized->position());
        $this->assertEquals($book->name(), $unserialized->name());
        $this->assertEquals($book->testament(), $unserialized->testament());
        $this->assertEquals($book->abbreviation(), $unserialized->abbreviation());
    }

    #[Test]
    public function testSerializeStoresMinimalData(): void
    {
        $book = new Genesis();
        $data = $book->__serialize();

        $this->assertIsArray($data);
        $this->assertArrayHasKey('bookId', $data);
        $this->assertCount(1, $data);
        $this->assertEquals(Genesis::ID, $data['bookId']);
    }

    #[Test]
    public function testUnserializeReconstructsBookCorrectly(): void
    {
        $originalBook = new Genesis();
        $serialized = serialize($originalBook);
        $reconstructedBook = unserialize($serialized);

        $this->assertInstanceOf(Genesis::class, $reconstructedBook);
        $this->assertEquals($originalBook->position(), $reconstructedBook->position());
        $this->assertEquals($originalBook->name(), $reconstructedBook->name());
        $this->assertEquals($originalBook->testament(), $reconstructedBook->testament());
        $this->assertEquals($originalBook->abbreviation(), $reconstructedBook->abbreviation());
    }

    #[Test]
    public function testUnserializedBookCanAccessChapters(): void
    {
        $originalBook = new Genesis();
        $serialized = serialize($originalBook);
        $reconstructedBook = unserialize($serialized);

        $originalChapter = $originalBook->chapter(1);
        $reconstructedChapter = $reconstructedBook->chapter(1);

        $this->assertEquals($originalChapter->number(), $reconstructedChapter->number());
        $this->assertEquals($originalChapter->verseCount(), $reconstructedChapter->verseCount());
    }

    #[Test]
    public function testSerializeWorksWithDifferentBooks(): void
    {
        $genesis = new Genesis();
        $john = new John();
        $revelation = new Revelation();

        $genesisSerialized = serialize($genesis);
        $johnSerialized = serialize($john);
        $revelationSerialized = serialize($revelation);

        $genesisUnserialized = unserialize($genesisSerialized);
        $johnUnserialized = unserialize($johnSerialized);
        $revelationUnserialized = unserialize($revelationSerialized);

        $this->assertInstanceOf(Genesis::class, $genesisUnserialized);
        $this->assertInstanceOf(John::class, $johnUnserialized);
        $this->assertInstanceOf(Revelation::class, $revelationUnserialized);

        $this->assertEquals($genesis->name(), $genesisUnserialized->name());
        $this->assertEquals($john->name(), $johnUnserialized->name());
        $this->assertEquals($revelation->name(), $revelationUnserialized->name());
    }

    #[Test]
    public function testUnserializeThrowsExceptionOnBookIdMismatch(): void
    {
        $book = new Genesis();
        $data = $book->__serialize();
        
        // Corrupt the data to have wrong book ID
        $data['bookId'] = 999;

        // Create a new Genesis instance and try to unserialize with wrong data
        $newBook = new Genesis();
        
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Book ID mismatch during unserialization');
        
        $newBook->__unserialize($data);
    }

    #[Test]
    public function testSerializedBookMaintainsFunctionality(): void
    {
        $originalBook = new Genesis();
        $serialized = serialize($originalBook);
        $reconstructedBook = unserialize($serialized);

        // Test that all methods still work
        $this->assertEquals(50, $reconstructedBook->chapterCount());
        $this->assertEquals(31, $reconstructedBook->chapterVerseCount(1));
        
        $chapter = $reconstructedBook->chapter(1);
        $this->assertNotNull($chapter);
        $this->assertEquals(1, $chapter->number());
    }
}

