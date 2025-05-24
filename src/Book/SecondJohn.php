<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SecondJohn extends Book
{
    private const ABBREVIATION = '2 John';
    public const ID = 63;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '2 John';
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
                    2 => 'Truth and Deception',
                    3 => 'Farewell',
                ],
                'verses' => [
                    1 => 'To the elect lady and her children, whom I love in the truth — and not only I, but also all who know the truth —',
                    2 => 'because of the truth that remains in us and will be with us forever.',
                    3 => 'Grace, mercy, and peace will be with us from God the Father and from Jesus Christ, the Son of the Father, in truth and love.',
                    4 => 'I was very glad to find some of your children walking in truth, in keeping with a command we have received from the Father.',
                    5 => 'So now I ask you, dear lady — not as if I were writing you a new command, but one we have had from the beginning — that we love one another.',
                    6 => 'This is love: that we walk according to his commands. This is the command as you have heard it from the beginning: that you walk in love.',
                    7 => 'Many deceivers have gone out into the world; they do not confess the coming of Jesus Christ in the flesh. This is the deceiver and the antichrist.',
                    8 => 'Watch yourselves so that you don\'t lose what we have worked for, but that you may receive a full reward.',
                    9 => 'Anyone who does not remain in Christ\'s teaching but goes beyond it does not have God. The one who remains in that teaching, this one has both the Father and the Son.',
                    10 => 'If anyone comes to you and does not bring this teaching, do not receive him into your home, and do not greet him;',
                    11 => 'for the one who greets him shares in his evil works.',
                    12 => 'Though I have many things to write to you, I don\'t want to use paper and ink. Instead, I hope to come to you and talk face to face so that our joy may be complete.',
                    13 => 'The children of your elect sister send you greetings.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 3,
                    13 => 3,
                ],
            ],
        ];
    }
} 