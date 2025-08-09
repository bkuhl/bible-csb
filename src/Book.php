<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB;

use BKuhl\BibleCSB\Exception\ChapterNotFoundException;

abstract class Book implements BookInterface
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
            return 0;
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
} 