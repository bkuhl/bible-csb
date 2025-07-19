<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Obadiah extends Book
{
    public const ABBREVIATION = 'Obad';
    public const ID = 31;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Obadiah';
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
                    1 => 'Edom\'s Sins against Judah',
                    2 => 'Judgment of the Nations',
                    3 => 'Future Blessing for Israel',
                ],
                'verses' => [
                    1 => 'The vision of Obadiah. Edom\'s Certain Judgment This is what the Lord God has said about Edom: We have heard a message from the Lord; an envoy has been sent among the nations: "Rise up, and let\'s go to war against her."',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
        ];
    }
} 