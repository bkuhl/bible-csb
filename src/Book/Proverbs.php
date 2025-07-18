<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Proverbs extends Book
{
    public const ABBREVIATION = 'Prov';
    public const ID = 20;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Proverbs';
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
                    1 => 'The Purpose of Proverbs',
                    2 => 'Avoid the Path of the Violent',
                    3 => 'Wisdom\'s Plea',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Wisdom\'s Worth',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Trust the',
                    2 => 'Wisdom Brings Happiness',
                    3 => 'Treat Others Fairly',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'A Father\'s Example',
                    2 => 'Two Ways of Life',
                    3 => 'The Straight Path',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'Avoid Seduction',
                    2 => 'Enjoy Marriage',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'Financial Entanglements',
                    2 => 'Laziness',
                    3 => 'The Malicious Man',
                    4 => 'What the Hates',
                    5 => 'Warning against Adultery',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'A Story of Seduction',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'Wisdom\'s Appeal',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Wisdom versus Foolishness',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            10 => [
                'sections' => [
                    1 => 'A Collection of Solomon\'s Proverbs',
                ],
                'verses' => [
                    1 => 'Solomon\'s proverbs:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            11 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            12 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            13 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            14 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            15 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            16 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            17 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            18 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            19 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            20 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            21 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            22 => [
                'sections' => [
                    1 => 'Words of the Wise',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            23 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            24 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            25 => [
                'sections' => [
                    1 => 'Hezekiah\'s Collection',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            26 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            27 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            28 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            29 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            30 => [
                'sections' => [
                    1 => 'The Words of Agur',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            31 => [
                'sections' => [
                    1 => 'The Words of Lemuel',
                    2 => 'In Praise of a Wife of Noble Character',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 