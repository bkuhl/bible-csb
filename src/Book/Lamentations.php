<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Lamentations extends Book
{
    private const ABBREVIATION = 'Lam';
    public const ID = 25;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Lamentations';
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
                    1 => 'Lament over Jerusalem',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Judgment on Jerusalem',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Hope through God\'s Mercy',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Terrors of the Besieged City',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'Prayer for Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 