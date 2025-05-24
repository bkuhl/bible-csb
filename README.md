# PHP Bible Translation CSB Library

A PHP library for working with the Christian Standard Bible (CSB) translation. This library provides a clean, object-oriented interface for accessing Bible text, chapters, and verses.

# Licensing

This PHP library enables interaction with the Christian Standard Bible (CSB) text.

> [!IMPORTANT]
> The CSB text is copyrighted by Holman Bible Publishers. Users must obtain permission from Holman Bible Publishers for any CSB text used with this library. See [csbible.com](https://csbible.com) for permission details.

## Installation

```bash
composer require bkuhl/bible-csb
```

## Usage

### Creating a Book

The library provides a `BookFactory` to create book instances:

```php
use BKuhl\BibleCSB\BookFactory;

$bookFactory = new BookFactory();

$genesis = $bookFactory->make(BookEnum::GENESIS);

$oldTestamentBooks = $bookFactory->makeByTestament(Testament::OLD);
$newTestamentBooks = $bookFactory->makeByTestament(Testament::NEW);

$allBooks = $bookFactory->makeAll();
```

### Working with Books

Each book provides basic information and access to its chapters:

```php
$name = $genesis->name(); // Returns "Genesis"
$position = $genesis->position(); // Returns 1
$abbreviation = $genesis->abbreviation(); // Returns "Gen"
$testament = $genesis->testament(); // Returns Testament::OLD

$chapterCount = $genesis->chapterCount(); // Returns 50

$chapters = $genesis->chapters(); // Returns array of Chapter objects

$chapter1 = $genesis->chapter(1); // Returns Chapter object for Genesis 1
```

### Working with Chapters

Chapters provide access to verses and chapter information:

```php
$number = $chapter1->number(); // Returns 1

$book = $chapter1->book(); // Returns the Book object

$verseCount = $chapter1->verseCount(); // Returns number of verses in chapter

$verses = $chapter1->verses(); // Returns array of Verse objects

$verse = $chapter1->verse(1); // Returns Verse object for verse 1

$hasVerse = $chapter1->hasVerse(1); // Returns true if verse exists
```

### Working with Verses

Verses provide access to the text and verse information:

```php
$text = $verse1->text(); // Returns the verse text

$number = $verse1->number(); // Returns 1

$chapter = $verse1->chapter(); // Returns the Chapter object
```

## Example: Reading Genesis 1:1

```php
use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookEnum;

$bookFactory = new BookFactory();
$genesis = $bookFactory->make(BookEnum::GENESIS);
$chapter1 = $genesis->chapter(1);
$verse1 = $chapter1->verse(1);

echo $verse1->text(); // Outputs: "In the beginning God created the heavens and the earth."
```

## Example: Reading an Entire Chapter

```php
use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookEnum;

$bookFactory = new BookFactory();
$genesis = $bookFactory->make(BookEnum::GENESIS);
$chapter1 = $genesis->chapter(1);

foreach ($chapter1->verses() as $verse) {
    echo "Verse {$verse->number()}: {$verse->text()}\n";
}
```

## Example: Finding a Verse by Number Across All Chapters

```php
use BKuhl\BibleCSB\BookFactory;
use BKuhl\BibleCSB\BookEnum;

$bookFactory = new BookFactory();
$genesis = $bookFactory->make(BookEnum::GENESIS);

$verseText = $genesis->verse(1); // Returns the text of verse 1 from any chapter
```

## License

This project is licensed under the MIT License - see the LICENSE file for details.

