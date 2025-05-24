<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Joel extends Book
{
    private const ABBREVIATION = 'Joel';
    public const ID = 29;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Joel';
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
                    1 => 'A Plague of Locusts',
                    2 => 'The Day of the',
                ],
                'verses' => [
                    1 => 'The word of the that came to Joel son of Pethuel:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'God\'s Call for Repentance',
                    2 => 'God\'s Response to His People',
                    3 => 'God\'s Promise of His Spirit',
                ],
                'verses' => [
                    18 => 'Then the became jealous for his land and spared his people.',
                    19 => 'The answered his people:',
                ],
                'versesToSections' => [
                    18 => 2,
                    19 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Judgment of the Nations',
                    2 => 'Israel Blessed',
                ],
                'verses' => [
                    4 => 'And also: Tyre, Sidon, and all the territories of Philistia — what are you to me? Are you paying me back or trying to get even with me? I will quickly bring retribution on your heads.',
                    5 => 'For you took my silver and gold and carried my finest treasures to your temples.',
                    6 => 'You sold the people of Judah and Jerusalem to the Greeks to remove them far from their own territory.',
                    7 => 'Look, I am about to rouse them up from the place where you sold them; I will bring retribution on your heads.',
                    8 => 'I will sell your sons and daughters to the people of Judah, and they will sell them to the Sabeans, to a distant nation, for the Lord has spoken.',
                ],
                'versesToSections' => [
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 1,
                ],
            ],
        ];
    }
} 