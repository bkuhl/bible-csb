<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class ThirdJohn extends Book
{
    public const ABBREVIATION = '3 John';
    public const ID = 64;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '3 John';
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
                    1 => 'Greeting',
                    2 => 'Gaius Commended',
                    3 => 'Diotrephes and Demetrius',
                    4 => 'Farewell',
                ],
                'verses' => [
                    1 => 'To my dear friend Gaius, whom I love in the truth.',
                    2 => 'Dear friend, I pray that you are prospering in every way and are in good health, just as your whole life is going well.',
                    3 => 'For I was very glad when fellow believers came and testified to your fidelity to the truth — how you are walking in truth.',
                    4 => 'I have no greater joy than this: to hear that my children are walking in truth.',
                    5 => 'Dear friend, you are acting faithfully in whatever you do for the brothers and sisters, especially when they are strangers.',
                    6 => 'They have testified to your love before the church. You will do well to send them on their journey in a manner worthy of God,',
                    7 => 'since they set out for the sake of the Name, accepting nothing from pagans.',
                    8 => 'Therefore, we ought to support such people so that we can be coworkers with the truth.',
                    9 => 'I wrote something to the church, but Diotrephes, who loves to have first place among them, does not receive our authority.',
                    10 => 'This is why, if I come, I will remind him of the works he is doing, slandering us with malicious words. And he is not satisfied with that! He not only refuses to welcome fellow believers, but he even stops those who want to do so and expels them from the church.',
                    11 => 'Dear friend, do not imitate what is evil, but what is good. The one who does good is of God; the one who does evil has not seen God.',
                    12 => 'Everyone speaks well of Demetrius — even the truth itself. And we also speak well of him, and you know that our testimony is true.',
                    13 => 'I have many things to write you, but I don\'t want to write to you with pen and ink.',
                    14 => 'I hope to see you soon, and we will talk face to face.',
                    15 => 'Peace to you. The friends send you greetings. Greet the friends by name.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 4,
                    14 => 4,
                    15 => 4,
                ],
            ],
        ];
    }
} 