<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

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

class BookFactory
{
    /**
     * Maps BookEnum values to their concrete Book classes
     * @var array<int, class-string<Book>>
     */
    private static array $bookClassMap = [
        Genesis::ID => Genesis::class,
        Exodus::ID => Exodus::class,
        Leviticus::ID => Leviticus::class,
        Numbers::ID => Numbers::class,
        Deuteronomy::ID => Deuteronomy::class,
        Joshua::ID => Joshua::class,
        Judges::ID => Judges::class,
        Ruth::ID => Ruth::class,
        FirstSamuel::ID => FirstSamuel::class,
        SecondSamuel::ID => SecondSamuel::class,
        FirstKings::ID => FirstKings::class,
        SecondKings::ID => SecondKings::class,
        FirstChronicles::ID => FirstChronicles::class,
        SecondChronicles::ID => SecondChronicles::class,
        Ezra::ID => Ezra::class,
        Nehemiah::ID => Nehemiah::class,
        Esther::ID => Esther::class,
        Job::ID => Job::class,
        Psalms::ID => Psalms::class,
        Proverbs::ID => Proverbs::class,
        Ecclesiastes::ID => Ecclesiastes::class,
        SongOfSolomon::ID => SongOfSolomon::class,
        Isaiah::ID => Isaiah::class,
        Jeremiah::ID => Jeremiah::class,
        Lamentations::ID => Lamentations::class,
        Ezekiel::ID => Ezekiel::class,
        Daniel::ID => Daniel::class,
        Hosea::ID => Hosea::class,
        Joel::ID => Joel::class,
        Amos::ID => Amos::class,
        Obadiah::ID => Obadiah::class,
        Jonah::ID => Jonah::class,
        Micah::ID => Micah::class,
        Nahum::ID => Nahum::class,
        Habakkuk::ID => Habakkuk::class,
        Zephaniah::ID => Zephaniah::class,
        Haggai::ID => Haggai::class,
        Zechariah::ID => Zechariah::class,
        Malachi::ID => Malachi::class,
        Matthew::ID => Matthew::class,
        Mark::ID => Mark::class,
        Luke::ID => Luke::class,
        John::ID => John::class,
        Acts::ID => Acts::class,
        Romans::ID => Romans::class,
        FirstCorinthians::ID => FirstCorinthians::class,
        SecondCorinthians::ID => SecondCorinthians::class,
        Galatians::ID => Galatians::class,
        Ephesians::ID => Ephesians::class,
        Philippians::ID => Philippians::class,
        Colossians::ID => Colossians::class,
        FirstThessalonians::ID => FirstThessalonians::class,
        SecondThessalonians::ID => SecondThessalonians::class,
        FirstTimothy::ID => FirstTimothy::class,
        SecondTimothy::ID => SecondTimothy::class,
        Titus::ID => Titus::class,
        Philemon::ID => Philemon::class,
        Hebrews::ID => Hebrews::class,
        James::ID => James::class,
        FirstPeter::ID => FirstPeter::class,
        SecondPeter::ID => SecondPeter::class,
        FirstJohn::ID => FirstJohn::class,
        SecondJohn::ID => SecondJohn::class,
        ThirdJohn::ID => ThirdJohn::class,
        Jude::ID => Jude::class,
        Revelation::ID => Revelation::class,
    ];

    /**
     * Maps book abbreviations to their concrete Book classes
     * @var array<string, class-string<Book>>
     */
    private static array $abbreviationMap = [
        Genesis::ABBREVIATION => Genesis::class,
        Exodus::ABBREVIATION => Exodus::class,
        Leviticus::ABBREVIATION => Leviticus::class,
        Numbers::ABBREVIATION => Numbers::class,
        Deuteronomy::ABBREVIATION => Deuteronomy::class,
        Joshua::ABBREVIATION => Joshua::class,
        Judges::ABBREVIATION => Judges::class,
        Ruth::ABBREVIATION => Ruth::class,
        FirstSamuel::ABBREVIATION => FirstSamuel::class,
        SecondSamuel::ABBREVIATION => SecondSamuel::class,
        FirstKings::ABBREVIATION => FirstKings::class,
        SecondKings::ABBREVIATION => SecondKings::class,
        FirstChronicles::ABBREVIATION => FirstChronicles::class,
        SecondChronicles::ABBREVIATION => SecondChronicles::class,
        Ezra::ABBREVIATION => Ezra::class,
        Nehemiah::ABBREVIATION => Nehemiah::class,
        Esther::ABBREVIATION => Esther::class,
        Job::ABBREVIATION => Job::class,
        Psalms::ABBREVIATION => Psalms::class,
        Proverbs::ABBREVIATION => Proverbs::class,
        Ecclesiastes::ABBREVIATION => Ecclesiastes::class,
        SongOfSolomon::ABBREVIATION => SongOfSolomon::class,
        Isaiah::ABBREVIATION => Isaiah::class,
        Jeremiah::ABBREVIATION => Jeremiah::class,
        Lamentations::ABBREVIATION => Lamentations::class,
        Ezekiel::ABBREVIATION => Ezekiel::class,
        Daniel::ABBREVIATION => Daniel::class,
        Hosea::ABBREVIATION => Hosea::class,
        Joel::ABBREVIATION => Joel::class,
        Amos::ABBREVIATION => Amos::class,
        Obadiah::ABBREVIATION => Obadiah::class,
        Jonah::ABBREVIATION => Jonah::class,
        Micah::ABBREVIATION => Micah::class,
        Nahum::ABBREVIATION => Nahum::class,
        Habakkuk::ABBREVIATION => Habakkuk::class,
        Zephaniah::ABBREVIATION => Zephaniah::class,
        Haggai::ABBREVIATION => Haggai::class,
        Zechariah::ABBREVIATION => Zechariah::class,
        Malachi::ABBREVIATION => Malachi::class,
        Matthew::ABBREVIATION => Matthew::class,
        Mark::ABBREVIATION => Mark::class,
        Luke::ABBREVIATION => Luke::class,
        John::ABBREVIATION => John::class,
        Acts::ABBREVIATION => Acts::class,
        Romans::ABBREVIATION => Romans::class,
        FirstCorinthians::ABBREVIATION => FirstCorinthians::class,
        SecondCorinthians::ABBREVIATION => SecondCorinthians::class,
        Galatians::ABBREVIATION => Galatians::class,
        Ephesians::ABBREVIATION => Ephesians::class,
        Philippians::ABBREVIATION => Philippians::class,
        Colossians::ABBREVIATION => Colossians::class,
        FirstThessalonians::ABBREVIATION => FirstThessalonians::class,
        SecondThessalonians::ABBREVIATION => SecondThessalonians::class,
        FirstTimothy::ABBREVIATION => FirstTimothy::class,
        SecondTimothy::ABBREVIATION => SecondTimothy::class,
        Titus::ABBREVIATION => Titus::class,
        Philemon::ABBREVIATION => Philemon::class,
        Hebrews::ABBREVIATION => Hebrews::class,
        James::ABBREVIATION => James::class,
        FirstPeter::ABBREVIATION => FirstPeter::class,
        SecondPeter::ABBREVIATION => SecondPeter::class,
        FirstJohn::ABBREVIATION => FirstJohn::class,
        SecondJohn::ABBREVIATION => SecondJohn::class,
        ThirdJohn::ABBREVIATION => ThirdJohn::class,
        Jude::ABBREVIATION => Jude::class,
        Revelation::ABBREVIATION => Revelation::class,
    ];

    public function make(BookEnum $type): BookInterface
    {
        $bookClass = self::$bookClassMap[$type->value] ?? throw new \InvalidArgumentException("No book class found for type: {$type->value}");
        return new $bookClass();
    }

    public function makeByAbbreviation(string $abbreviation): BookInterface
    {
        $bookClass = self::$abbreviationMap[$abbreviation] ?? throw new \InvalidArgumentException("No book class found for abbreviation: {$abbreviation}");
        return new $bookClass();
    }

    /**
     * @return array<BookInterface>
     */
    public function makeByTestament(Testament $testament): array
    {
        $books = [];
        foreach (self::$bookClassMap as $bookClass) {
            $book = new $bookClass();
            if ($book->testament() === $testament) {
                $books[$book->position()] = $book;
            }
        }

        ksort($books);
        return $books;
    }

    /**
     * @return array<BookInterface>
     */
    public function makeAll(): array
    {
        $books = [];
        foreach (self::$bookClassMap as $bookClass) {
            $book = new $bookClass();
            $books[$book->position()] = $book;
        }

        ksort($books);
        return $books;
    }
} 