<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class FirstThessalonians extends Book
{
    public const ABBREVIATION = '1 Thess';
    public const ID = 52;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '1 Thessalonians';
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
                    2 => 'Thanksgiving',
                ],
                'verses' => [
                    1 => 'Grace to you and peace.',
                    2 => 'We always thank God for all of you, making mention of you constantly in our prayers.',
                    3 => 'We recall, in the presence of our God and Father, your work produced by faith, your labor motivated by love, and your endurance inspired by hope in our Lord Jesus Christ.',
                    4 => 'For we know, brothers and sisters loved by God, that he has chosen you,',
                    5 => 'because our gospel did not come to you in word only, but also in power, in the Holy Spirit, and with full assurance. You know how we lived among you for your benefit,',
                    6 => 'and you yourselves became imitators of us and of the Lord when, in spite of severe persecution, you welcomed the message with joy from the Holy Spirit.',
                    7 => 'As a result, you became an example to all the believers in Macedonia and Achaia.',
                    8 => 'For the word of the Lord rang out from you, not only in Macedonia and Achaia, but in every place that your faith in God has gone out. Therefore, we don\'t need to say anything,',
                    9 => 'for they themselves report what kind of reception we had from you: how you turned to God from idols to serve the living and true God',
                    10 => 'and to wait for his Son from heaven, whom he raised from the dead — Jesus, who rescues us from the coming wrath.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 2,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Paul\'s Conduct',
                    2 => 'Reception and Opposition to the Message',
                    3 => 'Paul\'s Desire to See Them',
                ],
                'verses' => [
                    1 => 'For you yourselves know, brothers and sisters, that our visit with you was not without result.',
                    2 => 'On the contrary, after we had previously suffered and were treated outrageously in Philippi, as you know, we were emboldened by our God to speak the gospel of God to you in spite of great opposition.',
                    3 => 'For our exhortation didn\'t come from error or impurity or an intent to deceive.',
                    4 => 'Instead, just as we have been approved by God to be entrusted with the gospel, so we speak, not to please people, but rather God, who examines our hearts.',
                    5 => 'For we never used flattering speech, as you know, or had greedy motives — God is our witness —',
                    6 => 'and we didn\'t seek glory from people, either from you or from others.',
                    7 => 'Although we could have been a burden as Christ\'s apostles, instead we were gentle among you, as a nurse nurtures her own children.',
                    8 => 'We cared so much for you that we were pleased to share with you not only the gospel of God but also our own lives, because you had become dear to us.',
                    9 => 'For you remember our labor and hardship, brothers and sisters. Working night and day so that we would not burden any of you, we preached God\'s gospel to you.',
                    10 => 'You are witnesses, and so is God, of how devoutly, righteously, and blamelessly we conducted ourselves with you believers.',
                    11 => 'As you know, like a father with his own children,',
                    12 => 'we encouraged, comforted, and implored each one of you to walk worthy of God, who calls you into his own kingdom and glory.',
                    13 => 'This is why we constantly thank God, because when you received the word of God that you heard from us, you welcomed it not as a human message, but as it truly is, the word of God, which also works effectively in you who believe.',
                    14 => 'For you, brothers and sisters, became imitators of God\'s churches in Christ Jesus that are in Judea, since you have also suffered the same things from people of your own country, just as they did from the Jews',
                    15 => 'who killed the Lord Jesus and the prophets and persecuted us. They displease God and are hostile to everyone,',
                    16 => 'by keeping us from speaking to the Gentiles so that they may be saved. As a result, they are constantly filling up their sins to the limit, and wrath has overtaken them at last.',
                    17 => 'But as for us, brothers and sisters, after we were forced to leave you for a short time (in person, not in heart ), we greatly desired and made every effort to return and see you face to face.',
                    18 => 'So we wanted to come to you — even I, Paul, time and again — but Satan hindered us.',
                    19 => 'For who is our hope or joy or crown of boasting in the presence of our Lord Jesus at his coming? Is it not you?',
                    20 => 'Indeed you are our glory and joy!',
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
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Anxiety in Athens',
                    2 => 'Encouraged by Timothy',
                    3 => 'Prayer for the Church',
                ],
                'verses' => [
                    1 => 'Therefore, when we could no longer stand it, we thought it was better to be left alone in Athens.',
                    2 => 'And we sent Timothy, our brother and God\'s coworker in the gospel of Christ, to strengthen and encourage you concerning your faith,',
                    3 => 'so that no one will be shaken by these afflictions. For you yourselves know that we are appointed to this.',
                    4 => 'In fact, when we were with you, we told you in advance that we were going to experience affliction, and as you know, it happened.',
                    5 => 'For this reason, when I could no longer stand it, I also sent him to find out about your faith, fearing that the tempter had tempted you and that our labor might be for nothing.',
                    6 => 'But now Timothy has come to us from you and brought us good news about your faith and love. He reported that you always have good memories of us and that you long to see us, as we also long to see you.',
                    7 => 'Therefore, brothers and sisters, in all our distress and affliction, we were encouraged about you through your faith.',
                    8 => 'For now we live, if you stand firm in the Lord.',
                    9 => 'How can we thank God for you in return for all the joy we experience before our God because of you,',
                    10 => 'as we pray very earnestly night and day to see you face to face and to complete what is lacking in your faith?',
                    11 => 'Now may our God and Father himself, and our Lord Jesus, direct our way to you.',
                    12 => 'And may the Lord cause you to increase and overflow with love for one another and for everyone, just as we do for you.',
                    13 => 'May he make your hearts blameless in holiness before our God and Father at the coming of our Lord Jesus with all his saints. Amen.',
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
                    11 => 3,
                    12 => 3,
                    13 => 3,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'The Call to Sanctification',
                    2 => 'Loving and Working',
                    3 => 'The Comfort of Christ\'s Coming',
                ],
                'verses' => [
                    1 => 'Additionally then, brothers and sisters, we ask and encourage you in the Lord Jesus, that as you have received instruction from us on how you should live and please God — as you are doing — do this even more.',
                    2 => 'For you know what commands we gave you through the Lord Jesus.',
                    3 => 'For this is God\'s will, your sanctification: that you keep away from sexual immorality,',
                    4 => 'that each of you knows how to control his own body in holiness and honor,',
                    5 => 'not with lustful passions, like the Gentiles, who don\'t know God.',
                    6 => 'This means one must not transgress against and take advantage of a brother or sister in this manner, because the Lord is an avenger of all these offenses, as we also previously told and warned you.',
                    7 => 'For God has not called us to impurity but to live in holiness.',
                    8 => 'Consequently, anyone who rejects this does not reject man, but God, who gives you his Holy Spirit.',
                    9 => 'About brotherly love: You don\'t need me to write you because you yourselves are taught by God to love one another.',
                    10 => 'In fact, you are doing this toward all the brothers and sisters in the entire region of Macedonia. But we encourage you, brothers and sisters, to do this even more,',
                    11 => 'to seek to lead a quiet life, to mind your own business, and to work with your own hands, as we commanded you,',
                    12 => 'so that you may behave properly in the presence of outsiders and not be dependent on anyone.',
                    13 => 'We do not want you to be uninformed, brothers and sisters, concerning those who are asleep, so that you will not grieve like the rest, who have no hope.',
                    14 => 'For if we believe that Jesus died and rose again, in the same way, through Jesus, God will bring with him those who have fallen asleep.',
                    15 => 'For we say this to you by a word from the Lord: We who are still alive at the Lord\'s coming will certainly not precede those who have fallen asleep.',
                    16 => 'For the Lord himself will descend from heaven with a shout, with the archangel\'s voice, and with the trumpet of God, and the dead in Christ will rise first.',
                    17 => 'Then we who are still alive, who are left, will be caught up together with them in the clouds to meet the Lord in the air, and so we will always be with the Lord.',
                    18 => 'Therefore encourage one another with these words.',
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
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'The Day of the Lord',
                    2 => 'Exhortations and Blessings',
                ],
                'verses' => [
                    1 => 'About the times and the seasons: Brothers and sisters, you do not need anything to be written to you.',
                    2 => 'For you yourselves know very well that the day of the Lord will come just like a thief in the night.',
                    3 => 'When they say, "Peace and security," then sudden destruction will come upon them, like labor pains on a pregnant woman, and they will not escape.',
                    4 => 'But you, brothers and sisters, are not in the dark, for this day to surprise you like a thief.',
                    5 => 'For you are all children of light and children of the day. We do not belong to the night or the darkness.',
                    6 => 'So then, let us not sleep, like the rest, but let us stay awake and be self-controlled.',
                    7 => 'For those who sleep, sleep at night, and those who get drunk, get drunk at night.',
                    8 => 'But since we belong to the day, let us be self-controlled and put on the armor of faith and love, and a helmet of the hope of salvation.',
                    9 => 'For God did not appoint us to wrath, but to obtain salvation through our Lord Jesus Christ,',
                    10 => 'who died for us, so that whether we are awake or asleep, we may live together with him.',
                    11 => 'Therefore encourage one another and build each other up as you are already doing.',
                    12 => 'Now we ask you, brothers and sisters, to give recognition to those who labor among you and lead you in the Lord and admonish you,',
                    13 => 'and to regard them very highly in love because of their work. Be at peace among yourselves.',
                    14 => 'And we exhort you, brothers and sisters: warn those who are idle, comfort the discouraged, help the weak, be patient with everyone.',
                    15 => 'See to it that no one repays evil for evil to anyone, but always pursue what is good for one another and for all.',
                    16 => 'Rejoice always,',
                    17 => 'pray constantly,',
                    18 => 'give thanks in everything; for this is God\'s will for you in Christ Jesus.',
                    19 => 'Don\'t stifle the Spirit.',
                    20 => 'Don\'t despise prophecies,',
                    21 => 'but test all things. Hold on to what is good.',
                    22 => 'Stay away from every kind of evil.',
                    23 => 'Now may the God of peace himself sanctify you completely. And may your whole spirit, soul, and body be kept sound and blameless at the coming of our Lord Jesus Christ.',
                    24 => 'He who calls you is faithful; he will do it.',
                    25 => 'Brothers and sisters, pray for us also.',
                    26 => 'Greet all the brothers and sisters with a holy kiss.',
                    27 => 'I charge you by the Lord that this letter be read to all the brothers and sisters.',
                    28 => 'The grace of our Lord Jesus Christ be with you.',
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
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                    23 => 2,
                    24 => 2,
                    25 => 2,
                    26 => 2,
                    27 => 2,
                    28 => 2,
                ],
            ],
        ];
    }
} 