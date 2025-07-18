<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SecondThessalonians extends Book
{
    public const ABBREVIATION = '2 Thess';
    public const ID = 53;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '2 Thessalonians';
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
                    2 => 'God\'s Judgment and Glory',
                ],
                'verses' => [
                    1 => 'To the church of the Thessalonians in God our Father and the Lord Jesus Christ.',
                    2 => 'Grace to you and peace from God our Father and the Lord Jesus Christ.',
                    3 => 'We ought to thank God always for you, brothers and sisters, and rightly so, since your faith is flourishing and the love each one of you has for one another is increasing.',
                    4 => 'Therefore, we ourselves boast about you among God\'s churches — about your perseverance and faith in all the persecutions and afflictions that you are enduring.',
                    5 => 'It is clear evidence of God\'s righteous judgment that you will be counted worthy of God\'s kingdom, for which you also are suffering,',
                    6 => 'since it is just for God to repay with affliction those who afflict you',
                    7 => 'and to give relief to you who are afflicted, along with us. This will take place at the revelation of the Lord Jesus from heaven with his powerful angels,',
                    8 => 'when he takes vengeance with flaming fire on those who don\'t know God and on those who don\'t obey the gospel of our Lord Jesus.',
                    9 => 'They will pay the penalty of eternal destruction from the Lord\'s presence and from his glorious strength',
                    10 => 'on that day when he comes to be glorified by his saints and to be marveled at by all those who have believed, because our testimony among you was believed.',
                    11 => 'In view of this, we always pray for you that our God will make you worthy of his calling, and by his power fulfill your every desire to do good and your work produced by faith,',
                    12 => 'so that the name of our Lord Jesus will be glorified by you, and you by him, according to the grace of our God and the Lord Jesus Christ.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The Man of Lawlessness',
                    2 => 'Stand Firm',
                ],
                'verses' => [
                    1 => 'Now concerning the coming of our Lord Jesus Christ and our being gathered to him: We ask you, brothers and sisters,',
                    2 => 'not to be easily upset or troubled, either by a prophecy or by a message or by a letter supposedly from us, alleging that the day of the Lord has come.',
                    3 => 'Don\'t let anyone deceive you in any way. For that day will not come unless the apostasy comes first and the man of lawlessness is revealed, the man doomed to destruction.',
                    4 => 'He opposes and exalts himself above every so-called god or object of worship, so that he sits in God\'s temple, proclaiming that he himself is God.',
                    5 => 'Don\'t you remember that when I was still with you I used to tell you about this?',
                    6 => 'And you know what currently restrains him, so that he will be revealed in his time.',
                    7 => 'For the mystery of lawlessness is already at work, but the one now restraining will do so until he is out of the way,',
                    8 => 'and then the lawless one will be revealed. The Lord Jesus will destroy him with the breath of his mouth and will bring him to nothing at the appearance of his coming.',
                    9 => 'The coming of the lawless one is based on Satan\'s working, with every kind of miracle, both signs and wonders serving the lie,',
                    10 => 'and with every wicked deception among those who are perishing. They perish because they did not accept the love of the truth and so be saved.',
                    11 => 'For this reason God sends them a strong delusion so that they will believe the lie,',
                    12 => 'so that all will be condemned — those who did not believe the truth but delighted in unrighteousness.',
                    13 => 'But we ought to thank God always for you, brothers and sisters loved by the Lord, because from the beginning God has chosen you for salvation through sanctification by the Spirit and through belief in the truth.',
                    14 => 'He called you to this through our gospel, so that you might obtain the glory of our Lord Jesus Christ.',
                    15 => 'So then, brothers and sisters, stand firm and hold to the traditions you were taught, whether by what we said or what we wrote.',
                    16 => 'May our Lord Jesus Christ himself and God our Father, who has loved us and given us eternal encouragement and good hope by grace,',
                    17 => 'encourage your hearts and strengthen you in every good work and word.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 1,
                    11 => 1,
                    12 => 1,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Pray for Us',
                    2 => 'Warning against Irresponsible Behavior',
                    3 => 'Final Greetings',
                ],
                'verses' => [
                    1 => 'In addition, brothers and sisters, pray for us that the word of the Lord may spread rapidly and be honored, just as it was with you,',
                    2 => 'and that we may be delivered from wicked and evil people, for not all have faith.',
                    3 => 'But the Lord is faithful; he will strengthen you and guard you from the evil one.',
                    4 => 'We have confidence in the Lord about you, that you are doing and will continue to do what we command.',
                    5 => 'May the Lord direct your hearts to God\'s love and Christ\'s endurance.',
                    6 => 'Now we command you, brothers and sisters, in the name of our Lord Jesus Christ, to keep away from every brother or sister who is idle and does not live according to the tradition received from us.',
                    7 => 'For you yourselves know how you should imitate us: We were not idle among you;',
                    8 => 'we did not eat anyone\'s food free of charge; instead, we labored and toiled, working night and day, so that we would not be a burden to any of you.',
                    9 => 'It is not that we don\'t have the right to support, but we did it to make ourselves an example to you so that you would imitate us.',
                    10 => 'In fact, when we were with you, this is what we commanded you: "If anyone isn\'t willing to work, he should not eat."',
                    11 => 'For we hear that there are some among you who are idle. They are not busy but busybodies.',
                    12 => 'Now we command and exhort such people by the Lord Jesus Christ to work quietly and provide for themselves.',
                    13 => 'But as for you, brothers and sisters, do not grow weary in doing good.',
                    14 => 'If anyone does not obey our instruction in this letter, take note of that person; don\'t associate with him, so that he may be ashamed.',
                    15 => 'Yet don\'t consider him as an enemy, but warn him as a brother.',
                    16 => 'May the Lord of peace himself give you peace always in every way. The Lord be with all of you.',
                    17 => 'I, Paul, am writing this greeting with my own hand, which is an authenticating mark in every letter; this is how I write.',
                    18 => 'The grace of our Lord Jesus Christ be with you all.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                ],
            ],
        ];
    }
} 