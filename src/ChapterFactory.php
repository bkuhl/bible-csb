<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

class ChapterFactory
{
    /**
     * @param array<int, string> $verses Array of verse numbers to verse text
     */
    public function create(int $number, BookInterface $book, array $verses): Chapter
    {
        $chapter = new Chapter($number, $book);
     
        $verseFactory = new VerseFactory();   
        foreach ($verses as $verseNumber => $text) {
            $chapter->addVerse($verseFactory->create($text, $verseNumber, $chapter));
        }
        
        return $chapter;
    }
} 