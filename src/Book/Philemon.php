<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Philemon extends Book
{
    private const ABBREVIATION = 'Philem';
    public const ID = 57;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'Philemon';
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
                    2 => 'Philemon\'s Love and Faith',
                    3 => 'An Appeal for Onesimus',
                    4 => 'Final Greetings',
                ],
                'verses' => [
                    1 => 'To Philemon our dear friend and coworker,',
                    2 => 'to Apphia our sister, to Archippus our fellow soldier, and to the church that meets in your home.',
                    3 => 'Grace to you and peace from God our Father and the Lord Jesus Christ.',
                    4 => 'I always thank my God when I mention you in my prayers,',
                    5 => 'because I hear of your love for all the saints and the faith that you have in the Lord Jesus.',
                    6 => 'I pray that your participation in the faith may become effective through knowing every good thing that is in us for the glory of Christ.',
                    7 => 'For I have great joy and encouragement from your love, because the hearts of the saints have been refreshed through you, brother.',
                    8 => 'For this reason, although I have great boldness in Christ to command you to do what is right,',
                    9 => 'I appeal to you, instead, on the basis of love. I, Paul, as an elderly man and now also as a prisoner of Christ Jesus,',
                    10 => 'appeal to you for my son, Onesimus. I became his father while I was in chains.',
                    11 => 'Once he was useless to you, but now he is useful both to you and to me.',
                    12 => 'I am sending him back to you — I am sending my very own heart.',
                    13 => 'I wanted to keep him with me, so that in my imprisonment for the gospel he might serve me in your place.',
                    14 => 'But I didn\'t want to do anything without your consent, so that your good deed might not be out of obligation, but of your own free will.',
                    15 => 'For perhaps this is why he was separated from you for a brief time, so that you might get him back permanently,',
                    16 => 'no longer as a slave, but more than a slave — as a dearly loved brother. He is especially so to me, but how much more to you, both in the flesh and in the Lord.',
                    17 => 'So if you consider me a partner, welcome him as you would me.',
                    18 => 'And if he has wronged you in any way, or owes you anything, charge that to my account.',
                    19 => 'I, Paul, write this with my own hand: I will repay it — not to mention to you that you owe me even your very self.',
                    20 => 'Yes, brother, may I benefit from you in the Lord; refresh my heart in Christ.',
                    21 => 'Since I am confident of your obedience, I am writing to you, knowing that you will do even more than I say.',
                    22 => 'Meanwhile, also prepare a guest room for me, since I hope that through your prayers I will be restored to you.',
                    23 => 'Epaphras, my fellow prisoner in Christ Jesus, sends you greetings, and so do',
                    24 => 'Mark, Aristarchus, Demas, and Luke, my coworkers.',
                    25 => 'The grace of the Lord Jesus Christ be with your spirit.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 3,
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                    23 => 4,
                    24 => 4,
                    25 => 4,
                ],
            ],
        ];
    }
} 