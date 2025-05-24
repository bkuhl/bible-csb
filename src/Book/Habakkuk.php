<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Habakkuk extends Book
{
    private const ABBREVIATION = 'Hab';
    public const ID = 35;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Habakkuk';
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
                    1 => 'Habakkuk\'s First Prayer',
                    2 => 'God\'s First Answer',
                    3 => 'Habakkuk\'s Second Prayer',
                ],
                'verses' => [
                    1 => 'The pronouncement that the prophet Habakkuk saw.',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Habakkuk Waits for God\'s Response',
                    2 => 'God\'s Second Answer',
                    3 => 'The Five Woe Oracles',
                ],
                'verses' => [
                    2 => 'The answered me:',
                ],
                'versesToSections' => [
                    2 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Habakkuk\'s Third Prayer',
                    2 => 'Habakkuk\'s Confidence in God Expressed',
                ],
                'verses' => [
                    1 => 'A prayer of the prophet Habakkuk. According to \'Shigionoth\'.',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
        ];
    }
} 