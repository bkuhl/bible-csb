<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Nahum extends Book
{
    public const ABBREVIATION = 'Nah';
    public const ID = 34;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Nahum';
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
                    1 => 'God\'s Vengeance',
                    2 => 'Destruction of Nineveh',
                    3 => 'Promise of Judah\'s Deliverance',
                    4 => 'The Assyrian King\'s Demise',
                ],
                'verses' => [
                    1 => 'The pronouncement concerning Nineveh. The book of the vision of Nahum the Elkoshite.',
                    12 => 'This is what the Lord says:',
                    14 => 'The has issued an order concerning you: There will be no offspring to carry on your name. I will eliminate the carved idol and cast image from the house of your gods; I will prepare your grave, for you are contemptible.',
                ],
                'versesToSections' => [
                    1 => 0,
                    12 => 3,
                    14 => 4,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Attack against Nineveh',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Nineveh\'s Downfall',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 