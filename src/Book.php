<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

use BKuhl\BibleCSB\Exception\ChapterNotFoundException;
use BKuhl\ScriptureRanges\Interfaces\BookInterface as ScriptureRangesBookInterface;

abstract class Book implements BookInterface, ScriptureRangesBookInterface
{
    private ?array $chapterCache = null;

    abstract public function testament(): Testament;
    abstract public function name(): string;
    abstract public function position(): int;
    abstract public function abbreviation(): string;

    /**
     * @return array<int, Chapter>
     */
    public function chapters(): array
    {
        if ($this->chapterCache === null) {
            $this->chapterCache = $this->buildChapters();
        }

        return $this->chapterCache;
    }

    public function chapterCount(): int
    {
        return count($this->getChapterData());
    }

    public function chapterVerseCount(int $chapter): int
    {
        $chapterData = $this->getChapterData();
        if (!isset($chapterData[$chapter])) {
            throw new ChapterNotFoundException($chapter, $this);
        }
        return count($chapterData[$chapter]['verses']);
    }

    public function chapter(int $number): Chapter
    {
        $chapters = $this->chapters();
        if (!isset($chapters[$number])) {
            throw new ChapterNotFoundException($number, $this);
        }
        return $chapters[$number];
    }

    /**
     * @return array<int, Chapter>
     */
    protected function buildChapters(): array
    {
        $chapterFactory = new ChapterFactory();
        $chapters = [];
        foreach ($this->getChapterData() as $number => $chapterData) {
            $chapters[$number] = $chapterFactory->create($number, $this, $chapterData['verses']);
        }

        return $chapters;
    }

    /**
     * @return array<int, array{sections: array<int, string>, verses: array<int, string>, versesToSections: array<int, int>}>
     */
    abstract protected function getChapterData(): array;

    /**
     * Serialize the book to store only the book ID
     *
     * @return array{bookId: int}
     */
    public function __serialize(): array
    {
        return [
            'bookId' => $this->position(),
        ];
    }

    /**
     * Unserialize the book from stored book ID
     *
     * @param array{bookId: int} $data
     */
    public function __unserialize(array $data): void
    {
        // Verify the book ID matches this instance's position
        // (the concrete class already has the correct book ID via position())
        if ($this->position() !== $data['bookId']) {
            throw new \RuntimeException(
                sprintf(
                    'Book ID mismatch during unserialization: expected %d, got %d',
                    $this->position(),
                    $data['bookId']
                )
            );
        }

        // Clear chapter cache so it rebuilds when needed
        $this->chapterCache = null;
    }
} 