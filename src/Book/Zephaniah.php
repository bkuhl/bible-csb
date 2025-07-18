<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Zephaniah extends Book
{
    public const ABBREVIATION = 'Zeph';
    public const ID = 36;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Zephaniah';
    }

    public function position(): int
    {
        return self::ID;
    }

    public function abbreviation(): string
    {
        return self::ABBREVIATION;
    }

    /**
     * @return array<int, array{sections: array<int, string>, verses: array<int, string>, versesToSections: array<int, int>}>
     */
    protected function getChapterData(): array
    {
        return [
            1 => [
                'sections' => [
                    1 => 'The Great Day of the',
                ],
                'verses' => [
                    1 => 'The word of the Lord that came to Zephaniah son of Cushi, son of Gedaliah, son of Amariah, son of Hezekiah, in the days of Josiah son of Amon, king of Judah.',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'A Call to Repentance',
                    2 => 'Judgment against the Nations',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Woe to Oppressive Jerusalem',
                    2 => 'Final Restoration Promised',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 