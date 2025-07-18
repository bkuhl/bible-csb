<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Micah extends Book
{
    public const ABBREVIATION = 'Mic';
    public const ID = 33;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Micah';
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
                    1 => 'Coming Judgment on Israel',
                    2 => 'Micah\'s Lament',
                ],
                'verses' => [
                    1 => 'The word of the that came to Micah the Moreshite — what he saw regarding Samaria and Jerusalem in the days of Jotham, Ahaz, and Hezekiah, kings of Judah.',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Oppressors Judged',
                    2 => 'God\'s Word Rejected',
                    3 => 'The Remnant Regathered',
                ],
                'verses' => [
                    3 => 'Therefore, the says:',
                ],
                'versesToSections' => [
                    3 => 1,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Unjust Leaders Judged',
                    2 => 'False Prophets Judged',
                    3 => 'Zion\'s Destruction',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'The \'s Rule from Restored Zion',
                    2 => 'From Exile to Victory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'From Defeated Ruler to Conquering King',
                    2 => 'The Glorious and Purified Remnant',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'God\'s Lawsuit against Judah',
                    2 => 'Verdict of Judgment',
                ],
                'verses' => [
                    1 => 'Now listen to what the is saying:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'Israel\'s Moral Decline',
                    2 => 'Zion\'s Vindication',
                    3 => 'Micah\'s Prayer Answered',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 