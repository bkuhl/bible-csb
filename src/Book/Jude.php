<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Jude extends Book
{
    public const ABBREVIATION = 'Jude';
    public const ID = 65;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'Jude';
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
                    2 => 'Jude\'s Purpose in Writing',
                    3 => 'Apostates: Past and Present',
                    4 => 'The Apostates\' Doom',
                    5 => 'Exhortation and Benediction',
                ],
                'verses' => [
                    1 => 'To those who are the called, loved by God the Father and kept for Jesus Christ.',
                    2 => 'May mercy, peace, and love be multiplied to you.',
                    3 => 'Dear friends, although I was eager to write you about the salvation we share, I found it necessary to write, appealing to you to contend for the faith that was delivered to the saints once for all.',
                    4 => 'For some people, who were designated for this judgment long ago, have come in by stealth; they are ungodly, turning the grace of our God into sensuality and denying Jesus Christ, our only Master and Lord.',
                    5 => 'Now I want to remind you, although you came to know all these things once and for all, that Jesus saved a people out of Egypt and later destroyed those who did not believe;',
                    6 => 'and the angels who did not keep their own position but abandoned their proper dwelling, he has kept in eternal chains in deep darkness for the judgment on the great day.',
                    7 => 'Likewise, Sodom and Gomorrah and the surrounding towns committed sexual immorality and perversions, and serve as an example by undergoing the punishment of eternal fire.',
                    8 => 'In the same way these people — relying on their dreams — defile their flesh, reject authority, and slander glorious ones.',
                    9 => 'Yet when Michael the archangel was disputing with the devil in an argument about Moses\'s body, he did not dare utter a slanderous condemnation against him but said, "The Lord rebuke you! "',
                    10 => 'But these people blaspheme anything they do not understand. And what they do understand by instinct — like irrational animals — by these things they are destroyed.',
                    11 => 'Woe to them! For they have gone the way of Cain, have plunged into Balaam\'s error for profit, and have perished in Korah\'s rebellion.',
                    12 => 'These people are dangerous reefs at your love feasts as they eat with you without reverence. They are shepherds who only look after themselves. They are waterless clouds carried along by winds; trees in late autumn — fruitless, twice dead and uprooted.',
                    13 => 'They are wild waves of the sea, foaming up their shameful deeds; wandering stars for whom the blackness of darkness is reserved forever.',
                    14 => 'It was about these that Enoch, in the seventh generation from Adam, prophesied: "Look! The Lord comes with tens of thousands of his holy ones',
                    15 => 'to execute judgment on all and to convict all the ungodly concerning all the ungodly acts that they have done in an ungodly way, and concerning all the harsh things ungodly sinners have said against him."',
                    16 => 'These people are discontented grumblers, living according to their desires; their mouths utter arrogant words, flattering people for their own advantage.',
                    17 => 'But you, dear friends, remember what was predicted by the apostles of our Lord Jesus Christ.',
                    18 => 'They told you, "In the end time there will be scoffers living according to their own ungodly desires."',
                    19 => 'These people create divisions and are worldly, not having the Spirit.',
                    20 => 'But you, dear friends, as you build yourselves up in your most holy faith, praying in the Holy Spirit,',
                    21 => 'keep yourselves in the love of God, waiting expectantly for the mercy of our Lord Jesus Christ for eternal life.',
                    22 => 'Have mercy on those who waver;',
                    23 => 'save others by snatching them from the fire; have mercy on others but with fear, hating even the garment defiled by the flesh.',
                    24 => 'Now to him who is able to protect you from stumbling and to make you stand in the presence of his glory, without blemish and with great joy,',
                    25 => 'to the only God our Savior, through Jesus Christ our Lord, be glory, majesty, power, and authority before all time, now and forever. Amen.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    5 => 3,
                    6 => 3,
                    7 => 3,
                    8 => 3,
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 4,
                    13 => 4,
                    14 => 4,
                    15 => 4,
                    16 => 4,
                    17 => 4,
                    18 => 4,
                    19 => 4,
                    20 => 5,
                    21 => 5,
                    22 => 5,
                    23 => 5,
                    24 => 5,
                    25 => 5,
                ],
            ],
        ];
    }
} 