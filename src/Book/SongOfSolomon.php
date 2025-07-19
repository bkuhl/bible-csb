<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SongOfSolomon extends Book
{
    public const ABBREVIATION = 'Song';
    public const ID = 22;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Song of Solomon';
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
                ],
                'verses' => [
                    4 => 'We will rejoice and be glad in you; we will celebrate your caresses more than wine. It is only right that they adore you.',
                ],
                'versesToSections' => [
                    4 => 0,
                ],
            ],
            2 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            4 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Eat, friends! Drink, be intoxicated with caresses!',
                    2 => 'Open to me, my sister, my darling, my dove, my perfect one. For my head is drenched with dew, my hair with droplets of the night.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                ],
            ],
            6 => [
                'sections' => [
                ],
                'verses' => [
                    13 => 'How you gaze at the Shulammite, as you look at the dance of the two camps!',
                ],
                'versesToSections' => [
                    13 => 0,
                ],
            ],
            7 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            8 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 