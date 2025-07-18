<?php

declare(strict_types=1);

namespace tests;

use BKuhl\BibleCSB\Book\Acts;
use BKuhl\BibleCSB\Book\Amos;
use BKuhl\BibleCSB\Book\Colossians;
use BKuhl\BibleCSB\Book\Daniel;
use BKuhl\BibleCSB\Book\Deuteronomy;
use BKuhl\BibleCSB\Book\Ecclesiastes;
use BKuhl\BibleCSB\Book\Ephesians;
use BKuhl\BibleCSB\Book\Esther;
use BKuhl\BibleCSB\Book\Exodus;
use BKuhl\BibleCSB\Book\Ezekiel;
use BKuhl\BibleCSB\Book\Ezra;
use BKuhl\BibleCSB\Book\FirstChronicles;
use BKuhl\BibleCSB\Book\FirstCorinthians;
use BKuhl\BibleCSB\Book\FirstJohn;
use BKuhl\BibleCSB\Book\FirstKings;
use BKuhl\BibleCSB\Book\FirstPeter;
use BKuhl\BibleCSB\Book\FirstSamuel;
use BKuhl\BibleCSB\Book\FirstThessalonians;
use BKuhl\BibleCSB\Book\FirstTimothy;
use BKuhl\BibleCSB\Book\Galatians;
use BKuhl\BibleCSB\Book\Genesis;
use BKuhl\BibleCSB\Book\Habakkuk;
use BKuhl\BibleCSB\Book\Haggai;
use BKuhl\BibleCSB\Book\Hebrews;
use BKuhl\BibleCSB\Book\Hosea;
use BKuhl\BibleCSB\Book\Isaiah;
use BKuhl\BibleCSB\Book\James;
use BKuhl\BibleCSB\Book\Jeremiah;
use BKuhl\BibleCSB\Book\Job;
use BKuhl\BibleCSB\Book\Joel;
use BKuhl\BibleCSB\Book\John;
use BKuhl\BibleCSB\Book\Jonah;
use BKuhl\BibleCSB\Book\Joshua;
use BKuhl\BibleCSB\Book\Jude;
use BKuhl\BibleCSB\Book\Judges;
use BKuhl\BibleCSB\Book\Lamentations;
use BKuhl\BibleCSB\Book\Leviticus;
use BKuhl\BibleCSB\Book\Luke;
use BKuhl\BibleCSB\Book\Malachi;
use BKuhl\BibleCSB\Book\Mark;
use BKuhl\BibleCSB\Book\Matthew;
use BKuhl\BibleCSB\Book\Micah;
use BKuhl\BibleCSB\Book\Nahum;
use BKuhl\BibleCSB\Book\Nehemiah;
use BKuhl\BibleCSB\Book\Numbers;
use BKuhl\BibleCSB\Book\Obadiah;
use BKuhl\BibleCSB\Book\Philemon;
use BKuhl\BibleCSB\Book\Philippians;
use BKuhl\BibleCSB\Book\Proverbs;
use BKuhl\BibleCSB\Book\Psalms;
use BKuhl\BibleCSB\Book\Revelation;
use BKuhl\BibleCSB\Book\Romans;
use BKuhl\BibleCSB\Book\Ruth;
use BKuhl\BibleCSB\Book\SecondChronicles;
use BKuhl\BibleCSB\Book\SecondCorinthians;
use BKuhl\BibleCSB\Book\SecondJohn;
use BKuhl\BibleCSB\Book\SecondKings;
use BKuhl\BibleCSB\Book\SecondPeter;
use BKuhl\BibleCSB\Book\SecondSamuel;
use BKuhl\BibleCSB\Book\SecondThessalonians;
use BKuhl\BibleCSB\Book\SecondTimothy;
use BKuhl\BibleCSB\Book\SongOfSolomon;
use BKuhl\BibleCSB\Book\ThirdJohn;
use BKuhl\BibleCSB\Book\Titus;
use BKuhl\BibleCSB\Book\Zechariah;
use BKuhl\BibleCSB\Book\Zephaniah;
use BKuhl\BibleCSB\BookEnum;
use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookInterface;
use BKuhl\BibleCSB\Testament;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BookFactoryTest extends TestCase
{
    private BookFactory $bookFactory;

    protected function setUp(): void
    {
        $this->bookFactory = new BookFactory();
    }

    #[Test]
    public function testMakeByTestamentReturnsCorrectBooksForOldTestament(): void
    {
        $books = $this->bookFactory->makeByTestament(Testament::OLD);

        $this->assertNotEmpty($books);
        $this->assertContainsOnlyInstancesOf(BookInterface::class, $books);

        foreach ($books as $book) {
            $this->assertEquals(Testament::OLD, $book->testament());
        }

        // Verify books are in correct order
        $this->assertEquals(Genesis::ID, $books[Genesis::ID]->position()); // Genesis
        $this->assertEquals(Malachi::ID, $books[Malachi::ID]->position()); // Malachi
    }

    #[Test]
    public function testMakeByTestamentReturnsCorrectBooksForNewTestament(): void
    {
        $books = $this->bookFactory->makeByTestament(Testament::NEW);

        $this->assertNotEmpty($books);
        $this->assertContainsOnlyInstancesOf(BookInterface::class, $books);

        foreach ($books as $book) {
            $this->assertEquals(Testament::NEW, $book->testament());
        }

        // Verify books are in correct order
        $this->assertEquals(Matthew::ID, $books[Matthew::ID]->position()); // Matthew
        $this->assertEquals(Revelation::ID, $books[Revelation::ID]->position()); // Revelation
    }

    #[Test]
    public function testMakeAllReturnsAllBooksInCorrectOrder(): void
    {
        $books = $this->bookFactory->makeAll();

        $this->assertNotEmpty($books);
        $this->assertContainsOnlyInstancesOf(BookInterface::class, $books);

        // Verify total count
        $this->assertCount(66, $books);

        // Verify first and last books
        $this->assertEquals(Genesis::ID, $books[Genesis::ID]->position()); // Genesis
        $this->assertEquals(Revelation::ID, $books[Revelation::ID]->position()); // Revelation

        // Verify books are in ascending order
        $positions = array_keys($books);
        for ($i = 0; $i < count($positions) - 1; $i++) {
            $this->assertLessThan(
                $positions[$i + 1],
                $positions[$i],
                sprintf(
                    'Book %s (position %d) should come before %s (position %d)',
                    $books[$positions[$i]]->name(),
                    $positions[$i],
                    $books[$positions[$i + 1]]->name(),
                    $positions[$i + 1]
                )
            );
        }
    }

    #[Test]
    #[DataProvider('makeBookProvider')]
    public function testMakeReturnsCorrectBook(BookEnum $type, string $expectedName, int $expectedPosition, Testament $expectedTestament): void
    {
        $book = $this->bookFactory->make($type);

        $this->assertInstanceOf(BookInterface::class, $book);
        $this->assertEquals($expectedName, $book->name());
        $this->assertEquals($expectedPosition, $book->position());
        $this->assertEquals($expectedTestament, $book->testament());
    }

    public static function makeBookProvider(): array
    {
        return [
            'Genesis' => [BookEnum::GENESIS, 'Genesis', Genesis::ID, Testament::OLD],
            'Exodus' => [BookEnum::EXODUS, 'Exodus', Exodus::ID, Testament::OLD],
            'Leviticus' => [BookEnum::LEVITICUS, 'Leviticus', Leviticus::ID, Testament::OLD],
            'Numbers' => [BookEnum::NUMBERS, 'Numbers', Numbers::ID, Testament::OLD],
            'Deuteronomy' => [BookEnum::DEUTERONOMY, 'Deuteronomy', Deuteronomy::ID, Testament::OLD],
            'Joshua' => [BookEnum::JOSHUA, 'Joshua', Joshua::ID, Testament::OLD],
            'Judges' => [BookEnum::JUDGES, 'Judges', Judges::ID, Testament::OLD],
            'Ruth' => [BookEnum::RUTH, 'Ruth', Ruth::ID, Testament::OLD],
            '1 Samuel' => [BookEnum::FIRST_SAMUEL, '1 Samuel', FirstSamuel::ID, Testament::OLD],
            '2 Samuel' => [BookEnum::SECOND_SAMUEL, '2 Samuel', SecondSamuel::ID, Testament::OLD],
            '1 Kings' => [BookEnum::FIRST_KINGS, '1 Kings', FirstKings::ID, Testament::OLD],
            '2 Kings' => [BookEnum::SECOND_KINGS, '2 Kings', SecondKings::ID, Testament::OLD],
            '1 Chronicles' => [BookEnum::FIRST_CHRONICLES, '1 Chronicles', FirstChronicles::ID, Testament::OLD],
            '2 Chronicles' => [BookEnum::SECOND_CHRONICLES, '2 Chronicles', SecondChronicles::ID, Testament::OLD],
            'Ezra' => [BookEnum::EZRA, 'Ezra', Ezra::ID, Testament::OLD],
            'Nehemiah' => [BookEnum::NEHEMIAH, 'Nehemiah', Nehemiah::ID, Testament::OLD],
            'Esther' => [BookEnum::ESTHER, 'Esther', Esther::ID, Testament::OLD],
            'Job' => [BookEnum::JOB, 'Job', Job::ID, Testament::OLD],
            'Psalms' => [BookEnum::PSALMS, 'Psalms', Psalms::ID, Testament::OLD],
            'Proverbs' => [BookEnum::PROVERBS, 'Proverbs', Proverbs::ID, Testament::OLD],
            'Ecclesiastes' => [BookEnum::ECCLESIASTES, 'Ecclesiastes', Ecclesiastes::ID, Testament::OLD],
            'Song of Solomon' => [BookEnum::SONG_OF_SONGS, 'Song of Solomon', SongOfSolomon::ID, Testament::OLD],
            'Isaiah' => [BookEnum::ISAIAH, 'Isaiah', Isaiah::ID, Testament::OLD],
            'Jeremiah' => [BookEnum::JEREMIAH, 'Jeremiah', Jeremiah::ID, Testament::OLD],
            'Lamentations' => [BookEnum::LAMENTATIONS, 'Lamentations', Lamentations::ID, Testament::OLD],
            'Ezekiel' => [BookEnum::EZEKIEL, 'Ezekiel', Ezekiel::ID, Testament::OLD],
            'Daniel' => [BookEnum::DANIEL, 'Daniel', Daniel::ID, Testament::OLD],
            'Hosea' => [BookEnum::HOSEA, 'Hosea', Hosea::ID, Testament::OLD],
            'Joel' => [BookEnum::JOEL, 'Joel', Joel::ID, Testament::OLD],
            'Amos' => [BookEnum::AMOS, 'Amos', Amos::ID, Testament::OLD],
            'Obadiah' => [BookEnum::OBADIAH, 'Obadiah', Obadiah::ID, Testament::OLD],
            'Jonah' => [BookEnum::JONAH, 'Jonah', Jonah::ID, Testament::OLD],
            'Micah' => [BookEnum::MICAH, 'Micah', Micah::ID, Testament::OLD],
            'Nahum' => [BookEnum::NAHUM, 'Nahum', Nahum::ID, Testament::OLD],
            'Habakkuk' => [BookEnum::HABAKKUK, 'Habakkuk', Habakkuk::ID, Testament::OLD],
            'Zephaniah' => [BookEnum::ZEPHANIAH, 'Zephaniah', Zephaniah::ID, Testament::OLD],
            'Haggai' => [BookEnum::HAGGAI, 'Haggai', Haggai::ID, Testament::OLD],
            'Zechariah' => [BookEnum::ZECHARIAH, 'Zechariah', Zechariah::ID, Testament::OLD],
            'Malachi' => [BookEnum::MALACHI, 'Malachi', Malachi::ID, Testament::OLD],
            'Matthew' => [BookEnum::MATTHEW, 'Matthew', Matthew::ID, Testament::NEW],
            'Mark' => [BookEnum::MARK, 'Mark', Mark::ID, Testament::NEW],
            'Luke' => [BookEnum::LUKE, 'Luke', Luke::ID, Testament::NEW],
            'John' => [BookEnum::JOHN, 'John', John::ID, Testament::NEW],
            'Acts' => [BookEnum::ACTS, 'Acts', Acts::ID, Testament::NEW],
            'Romans' => [BookEnum::ROMANS, 'Romans', Romans::ID, Testament::NEW],
            '1 Corinthians' => [BookEnum::FIRST_CORINTHIANS, '1 Corinthians', FirstCorinthians::ID, Testament::NEW],
            '2 Corinthians' => [BookEnum::SECOND_CORINTHIANS, '2 Corinthians', SecondCorinthians::ID, Testament::NEW],
            'Galatians' => [BookEnum::GALATIANS, 'Galatians', Galatians::ID, Testament::NEW],
            'Ephesians' => [BookEnum::EPHESIANS, 'Ephesians', Ephesians::ID, Testament::NEW],
            'Philippians' => [BookEnum::PHILIPPIANS, 'Philippians', Philippians::ID, Testament::NEW],
            'Colossians' => [BookEnum::COLOSSIANS, 'Colossians', Colossians::ID, Testament::NEW],
            '1 Thessalonians' => [BookEnum::FIRST_THESSALONIANS, '1 Thessalonians', FirstThessalonians::ID, Testament::NEW],
            '2 Thessalonians' => [BookEnum::SECOND_THESSALONIANS, '2 Thessalonians', SecondThessalonians::ID, Testament::NEW],
            '1 Timothy' => [BookEnum::FIRST_TIMOTHY, '1 Timothy', FirstTimothy::ID, Testament::NEW],
            '2 Timothy' => [BookEnum::SECOND_TIMOTHY, '2 Timothy', SecondTimothy::ID, Testament::NEW],
            'Titus' => [BookEnum::TITUS, 'Titus', Titus::ID, Testament::NEW],
            'Philemon' => [BookEnum::PHILEMON, 'Philemon', Philemon::ID, Testament::NEW],
            'Hebrews' => [BookEnum::HEBREWS, 'Hebrews', Hebrews::ID, Testament::NEW],
            'James' => [BookEnum::JAMES, 'James', James::ID, Testament::NEW],
            '1 Peter' => [BookEnum::FIRST_PETER, '1 Peter', FirstPeter::ID, Testament::NEW],
            '2 Peter' => [BookEnum::SECOND_PETER, '2 Peter', SecondPeter::ID, Testament::NEW],
            '1 John' => [BookEnum::FIRST_JOHN, '1 John', FirstJohn::ID, Testament::NEW],
            '2 John' => [BookEnum::SECOND_JOHN, '2 John', SecondJohn::ID, Testament::NEW],
            '3 John' => [BookEnum::THIRD_JOHN, '3 John', ThirdJohn::ID, Testament::NEW],
            'Jude' => [BookEnum::JUDE, 'Jude', Jude::ID, Testament::NEW],
            'Revelation' => [BookEnum::REVELATION, 'Revelation', Revelation::ID, Testament::NEW],
        ];
    }

    #[Test]
    #[DataProvider('bookPositionProvider')]
    public function testMakeByTestamentReturnsBooksInCorrectOrder(Testament $testament, int $position, string $expectedName): void
    {
        $books = $this->bookFactory->makeByTestament($testament);

        $this->assertArrayHasKey($position, $books);
        $book = $books[$position];

        $this->assertEquals($expectedName, $book->name());
        $this->assertEquals($position, $book->position());
        $this->assertEquals($testament, $book->testament());
    }

    public static function bookPositionProvider(): array
    {
        return [
            // Old Testament books
            'Genesis' => [Testament::OLD, Genesis::ID, 'Genesis'],
            'Exodus' => [Testament::OLD, Exodus::ID, 'Exodus'],
            'Leviticus' => [Testament::OLD, Leviticus::ID, 'Leviticus'],
            'Numbers' => [Testament::OLD, Numbers::ID, 'Numbers'],
            'Deuteronomy' => [Testament::OLD, Deuteronomy::ID, 'Deuteronomy'],
            'Joshua' => [Testament::OLD, Joshua::ID, 'Joshua'],
            'Judges' => [Testament::OLD, Judges::ID, 'Judges'],
            'Ruth' => [Testament::OLD, Ruth::ID, 'Ruth'],
            '1 Samuel' => [Testament::OLD, FirstSamuel::ID, '1 Samuel'],
            '2 Samuel' => [Testament::OLD, SecondSamuel::ID, '2 Samuel'],
            '1 Kings' => [Testament::OLD, FirstKings::ID, '1 Kings'],
            '2 Kings' => [Testament::OLD, SecondKings::ID, '2 Kings'],
            '1 Chronicles' => [Testament::OLD, FirstChronicles::ID, '1 Chronicles'],
            '2 Chronicles' => [Testament::OLD, SecondChronicles::ID, '2 Chronicles'],
            'Ezra' => [Testament::OLD, Ezra::ID, 'Ezra'],
            'Nehemiah' => [Testament::OLD, Nehemiah::ID, 'Nehemiah'],
            'Esther' => [Testament::OLD, Esther::ID, 'Esther'],
            'Job' => [Testament::OLD, Job::ID, 'Job'],
            'Psalms' => [Testament::OLD, Psalms::ID, 'Psalms'],
            'Proverbs' => [Testament::OLD, Proverbs::ID, 'Proverbs'],
            'Ecclesiastes' => [Testament::OLD, Ecclesiastes::ID, 'Ecclesiastes'],
            'Song of Solomon' => [Testament::OLD, SongOfSolomon::ID, 'Song of Solomon'],
            'Isaiah' => [Testament::OLD, Isaiah::ID, 'Isaiah'],
            'Jeremiah' => [Testament::OLD, Jeremiah::ID, 'Jeremiah'],
            'Lamentations' => [Testament::OLD, Lamentations::ID, 'Lamentations'],
            'Ezekiel' => [Testament::OLD, Ezekiel::ID, 'Ezekiel'],
            'Daniel' => [Testament::OLD, Daniel::ID, 'Daniel'],
            'Hosea' => [Testament::OLD, Hosea::ID, 'Hosea'],
            'Joel' => [Testament::OLD, Joel::ID, 'Joel'],
            'Amos' => [Testament::OLD, Amos::ID, 'Amos'],
            'Obadiah' => [Testament::OLD, Obadiah::ID, 'Obadiah'],
            'Jonah' => [Testament::OLD, Jonah::ID, 'Jonah'],
            'Micah' => [Testament::OLD, Micah::ID, 'Micah'],
            'Nahum' => [Testament::OLD, Nahum::ID, 'Nahum'],
            'Habakkuk' => [Testament::OLD, Habakkuk::ID, 'Habakkuk'],
            'Zephaniah' => [Testament::OLD, Zephaniah::ID, 'Zephaniah'],
            'Haggai' => [Testament::OLD, Haggai::ID, 'Haggai'],
            'Zechariah' => [Testament::OLD, Zechariah::ID, 'Zechariah'],
            'Malachi' => [Testament::OLD, Malachi::ID, 'Malachi'],

            // New Testament books
            'Matthew' => [Testament::NEW, Matthew::ID, 'Matthew'],
            'Mark' => [Testament::NEW, Mark::ID, 'Mark'],
            'Luke' => [Testament::NEW, Luke::ID, 'Luke'],
            'John' => [Testament::NEW, John::ID, 'John'],
            'Acts' => [Testament::NEW, Acts::ID, 'Acts'],
            'Romans' => [Testament::NEW, Romans::ID, 'Romans'],
            '1 Corinthians' => [Testament::NEW, FirstCorinthians::ID, '1 Corinthians'],
            '2 Corinthians' => [Testament::NEW, SecondCorinthians::ID, '2 Corinthians'],
            'Galatians' => [Testament::NEW, Galatians::ID, 'Galatians'],
            'Ephesians' => [Testament::NEW, Ephesians::ID, 'Ephesians'],
            'Philippians' => [Testament::NEW, Philippians::ID, 'Philippians'],
            'Colossians' => [Testament::NEW, Colossians::ID, 'Colossians'],
            '1 Thessalonians' => [Testament::NEW, FirstThessalonians::ID, '1 Thessalonians'],
            '2 Thessalonians' => [Testament::NEW, SecondThessalonians::ID, '2 Thessalonians'],
            '1 Timothy' => [Testament::NEW, FirstTimothy::ID, '1 Timothy'],
            '2 Timothy' => [Testament::NEW, SecondTimothy::ID, '2 Timothy'],
            'Titus' => [Testament::NEW, Titus::ID, 'Titus'],
            'Philemon' => [Testament::NEW, Philemon::ID, 'Philemon'],
            'Hebrews' => [Testament::NEW, Hebrews::ID, 'Hebrews'],
            'James' => [Testament::NEW, James::ID, 'James'],
            '1 Peter' => [Testament::NEW, FirstPeter::ID, '1 Peter'],
            '2 Peter' => [Testament::NEW, SecondPeter::ID, '2 Peter'],
            '1 John' => [Testament::NEW, FirstJohn::ID, '1 John'],
            '2 John' => [Testament::NEW, SecondJohn::ID, '2 John'],
            '3 John' => [Testament::NEW, ThirdJohn::ID, '3 John'],
            'Jude' => [Testament::NEW, Jude::ID, 'Jude'],
            'Revelation' => [Testament::NEW, Revelation::ID, 'Revelation'],
        ];
    }

    #[Test]
    #[DataProvider('allBooksProvider')]
    public function testMakeAllReturnsBooksInCorrectOrder(int $position, string $expectedName, Testament $expectedTestament): void
    {
        $books = $this->bookFactory->makeAll();

        $this->assertArrayHasKey($position, $books);
        $book = $books[$position];

        $this->assertEquals($expectedName, $book->name());
        $this->assertEquals($position, $book->position());
        $this->assertEquals($expectedTestament, $book->testament());
    }

    public static function allBooksProvider(): array
    {
        return [
            // Old Testament books
            [Genesis::ID, 'Genesis', Testament::OLD],
            [Exodus::ID, 'Exodus', Testament::OLD],
            [Leviticus::ID, 'Leviticus', Testament::OLD],
            [Numbers::ID, 'Numbers', Testament::OLD],
            [Deuteronomy::ID, 'Deuteronomy', Testament::OLD],
            [Joshua::ID, 'Joshua', Testament::OLD],
            [Judges::ID, 'Judges', Testament::OLD],
            [Ruth::ID, 'Ruth', Testament::OLD],
            [FirstSamuel::ID, '1 Samuel', Testament::OLD],
            [SecondSamuel::ID, '2 Samuel', Testament::OLD],
            [FirstKings::ID, '1 Kings', Testament::OLD],
            [SecondKings::ID, '2 Kings', Testament::OLD],
            [FirstChronicles::ID, '1 Chronicles', Testament::OLD],
            [SecondChronicles::ID, '2 Chronicles', Testament::OLD],
            [Ezra::ID, 'Ezra', Testament::OLD],
            [Nehemiah::ID, 'Nehemiah', Testament::OLD],
            [Esther::ID, 'Esther', Testament::OLD],
            [Job::ID, 'Job', Testament::OLD],
            [Psalms::ID, 'Psalms', Testament::OLD],
            [Proverbs::ID, 'Proverbs', Testament::OLD],
            [Ecclesiastes::ID, 'Ecclesiastes', Testament::OLD],
            [SongOfSolomon::ID, 'Song of Solomon', Testament::OLD],
            [Isaiah::ID, 'Isaiah', Testament::OLD],
            [Jeremiah::ID, 'Jeremiah', Testament::OLD],
            [Lamentations::ID, 'Lamentations', Testament::OLD],
            [Ezekiel::ID, 'Ezekiel', Testament::OLD],
            [Daniel::ID, 'Daniel', Testament::OLD],
            [Hosea::ID, 'Hosea', Testament::OLD],
            [Joel::ID, 'Joel', Testament::OLD],
            [Amos::ID, 'Amos', Testament::OLD],
            [Obadiah::ID, 'Obadiah', Testament::OLD],
            [Jonah::ID, 'Jonah', Testament::OLD],
            [Micah::ID, 'Micah', Testament::OLD],
            [Nahum::ID, 'Nahum', Testament::OLD],
            [Habakkuk::ID, 'Habakkuk', Testament::OLD],
            [Zephaniah::ID, 'Zephaniah', Testament::OLD],
            [Haggai::ID, 'Haggai', Testament::OLD],
            [Zechariah::ID, 'Zechariah', Testament::OLD],
            [Malachi::ID, 'Malachi', Testament::OLD],

            // New Testament books
            [Matthew::ID, 'Matthew', Testament::NEW],
            [Mark::ID, 'Mark', Testament::NEW],
            [Luke::ID, 'Luke', Testament::NEW],
            [John::ID, 'John', Testament::NEW],
            [Acts::ID, 'Acts', Testament::NEW],
            [Romans::ID, 'Romans', Testament::NEW],
            [FirstCorinthians::ID, '1 Corinthians', Testament::NEW],
            [SecondCorinthians::ID, '2 Corinthians', Testament::NEW],
            [Galatians::ID, 'Galatians', Testament::NEW],
            [Ephesians::ID, 'Ephesians', Testament::NEW],
            [Philippians::ID, 'Philippians', Testament::NEW],
            [Colossians::ID, 'Colossians', Testament::NEW],
            [FirstThessalonians::ID, '1 Thessalonians', Testament::NEW],
            [SecondThessalonians::ID, '2 Thessalonians', Testament::NEW],
            [FirstTimothy::ID, '1 Timothy', Testament::NEW],
            [SecondTimothy::ID, '2 Timothy', Testament::NEW],
            [Titus::ID, 'Titus', Testament::NEW],
            [Philemon::ID, 'Philemon', Testament::NEW],
            [Hebrews::ID, 'Hebrews', Testament::NEW],
            [James::ID, 'James', Testament::NEW],
            [FirstPeter::ID, '1 Peter', Testament::NEW],
            [SecondPeter::ID, '2 Peter', Testament::NEW],
            [FirstJohn::ID, '1 John', Testament::NEW],
            [SecondJohn::ID, '2 John', Testament::NEW],
            [ThirdJohn::ID, '3 John', Testament::NEW],
            [Jude::ID, 'Jude', Testament::NEW],
            [Revelation::ID, 'Revelation', Testament::NEW],
        ];
    }

    #[Test]
    #[DataProvider('makeByAbbreviationProvider')]
    public function testMakeByAbbreviationReturnsCorrectBook(string $abbreviation, string $expectedName, int $expectedPosition, Testament $expectedTestament): void
    {
        $book = $this->bookFactory->makeByAbbreviation($abbreviation);

        $this->assertInstanceOf(BookInterface::class, $book);
        $this->assertEquals($expectedName, $book->name());
        $this->assertEquals($expectedPosition, $book->position());
        $this->assertEquals($expectedTestament, $book->testament());
    }

    public static function makeByAbbreviationProvider(): array
    {
        return [
            'Genesis' => ['Gen', 'Genesis', Genesis::ID, Testament::OLD],
            'Exodus' => ['Ex', 'Exodus', Exodus::ID, Testament::OLD],
            'Leviticus' => ['Lev', 'Leviticus', Leviticus::ID, Testament::OLD],
            'Numbers' => ['Num', 'Numbers', Numbers::ID, Testament::OLD],
            'Deuteronomy' => ['Deut', 'Deuteronomy', Deuteronomy::ID, Testament::OLD],
            'Joshua' => ['Josh', 'Joshua', Joshua::ID, Testament::OLD],
            'Judges' => ['Judg', 'Judges', Judges::ID, Testament::OLD],
            'Ruth' => ['Ruth', 'Ruth', Ruth::ID, Testament::OLD],
            '1 Samuel' => ['1 Sam', '1 Samuel', FirstSamuel::ID, Testament::OLD],
            '2 Samuel' => ['2 Sam', '2 Samuel', SecondSamuel::ID, Testament::OLD],
            '1 Kings' => ['1 Kings', '1 Kings', FirstKings::ID, Testament::OLD],
            '2 Kings' => ['2 Kings', '2 Kings', SecondKings::ID, Testament::OLD],
            '1 Chronicles' => ['1 Chron', '1 Chronicles', FirstChronicles::ID, Testament::OLD],
            '2 Chronicles' => ['2 Chron', '2 Chronicles', SecondChronicles::ID, Testament::OLD],
            'Ezra' => ['Ezra', 'Ezra', Ezra::ID, Testament::OLD],
            'Nehemiah' => ['Neh', 'Nehemiah', Nehemiah::ID, Testament::OLD],
            'Esther' => ['Est', 'Esther', Esther::ID, Testament::OLD],
            'Job' => ['Job', 'Job', Job::ID, Testament::OLD],
            'Psalms' => ['Ps', 'Psalms', Psalms::ID, Testament::OLD],
            'Proverbs' => ['Prov', 'Proverbs', Proverbs::ID, Testament::OLD],
            'Ecclesiastes' => ['Eccles', 'Ecclesiastes', Ecclesiastes::ID, Testament::OLD],
            'Song of Solomon' => ['Song', 'Song of Solomon', SongOfSolomon::ID, Testament::OLD],
            'Isaiah' => ['Isa', 'Isaiah', Isaiah::ID, Testament::OLD],
            'Jeremiah' => ['Jer', 'Jeremiah', Jeremiah::ID, Testament::OLD],
            'Lamentations' => ['Lam', 'Lamentations', Lamentations::ID, Testament::OLD],
            'Ezekiel' => ['Ezek', 'Ezekiel', Ezekiel::ID, Testament::OLD],
            'Daniel' => ['Dan', 'Daniel', Daniel::ID, Testament::OLD],
            'Hosea' => ['Hos', 'Hosea', Hosea::ID, Testament::OLD],
            'Joel' => ['Joel', 'Joel', Joel::ID, Testament::OLD],
            'Amos' => ['Amos', 'Amos', Amos::ID, Testament::OLD],
            'Obadiah' => ['Obad', 'Obadiah', Obadiah::ID, Testament::OLD],
            'Jonah' => ['Jonah', 'Jonah', Jonah::ID, Testament::OLD],
            'Micah' => ['Mic', 'Micah', Micah::ID, Testament::OLD],
            'Nahum' => ['Nah', 'Nahum', Nahum::ID, Testament::OLD],
            'Habakkuk' => ['Hab', 'Habakkuk', Habakkuk::ID, Testament::OLD],
            'Zephaniah' => ['Zeph', 'Zephaniah', Zephaniah::ID, Testament::OLD],
            'Haggai' => ['Hag', 'Haggai', Haggai::ID, Testament::OLD],
            'Zechariah' => ['Zech', 'Zechariah', Zechariah::ID, Testament::OLD],
            'Malachi' => ['Mal', 'Malachi', Malachi::ID, Testament::OLD],
            'Matthew' => ['Matt', 'Matthew', Matthew::ID, Testament::NEW],
            'Mark' => ['Mark', 'Mark', Mark::ID, Testament::NEW],
            'Luke' => ['Luke', 'Luke', Luke::ID, Testament::NEW],
            'John' => ['John', 'John', John::ID, Testament::NEW],
            'Acts' => ['Acts', 'Acts', Acts::ID, Testament::NEW],
            'Romans' => ['Rom', 'Romans', Romans::ID, Testament::NEW],
            '1 Corinthians' => ['1 Cor', '1 Corinthians', FirstCorinthians::ID, Testament::NEW],
            '2 Corinthians' => ['2 Cor', '2 Corinthians', SecondCorinthians::ID, Testament::NEW],
            'Galatians' => ['Gal', 'Galatians', Galatians::ID, Testament::NEW],
            'Ephesians' => ['Eph', 'Ephesians', Ephesians::ID, Testament::NEW],
            'Philippians' => ['Phil', 'Philippians', Philippians::ID, Testament::NEW],
            'Colossians' => ['Col', 'Colossians', Colossians::ID, Testament::NEW],
            '1 Thessalonians' => ['1 Thess', '1 Thessalonians', FirstThessalonians::ID, Testament::NEW],
            '2 Thessalonians' => ['2 Thess', '2 Thessalonians', SecondThessalonians::ID, Testament::NEW],
            '1 Timothy' => ['1 Tim', '1 Timothy', FirstTimothy::ID, Testament::NEW],
            '2 Timothy' => ['2 Tim', '2 Timothy', SecondTimothy::ID, Testament::NEW],
            'Titus' => ['Titus', 'Titus', Titus::ID, Testament::NEW],
            'Philemon' => ['Philem', 'Philemon', Philemon::ID, Testament::NEW],
            'Hebrews' => ['Heb', 'Hebrews', Hebrews::ID, Testament::NEW],
            'James' => ['James', 'James', James::ID, Testament::NEW],
            '1 Peter' => ['1 Pet', '1 Peter', FirstPeter::ID, Testament::NEW],
            '2 Peter' => ['2 Pet', '2 Peter', SecondPeter::ID, Testament::NEW],
            '1 John' => ['1 John', '1 John', FirstJohn::ID, Testament::NEW],
            '2 John' => ['2 John', '2 John', SecondJohn::ID, Testament::NEW],
            '3 John' => ['3 John', '3 John', ThirdJohn::ID, Testament::NEW],
            'Jude' => ['Jude', 'Jude', Jude::ID, Testament::NEW],
            'Revelation' => ['Rev', 'Revelation', Revelation::ID, Testament::NEW],
        ];
    }

    #[Test]
    public function testMakeByAbbreviationThrowsExceptionForInvalidAbbreviation(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('No book class found for abbreviation: Invalid');

        $this->bookFactory->makeByAbbreviation('Invalid');
    }
}