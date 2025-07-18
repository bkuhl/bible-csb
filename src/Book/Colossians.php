<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Colossians extends Book
{
    public const ABBREVIATION = 'Col';
    public const ID = 51;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'Colossians';
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
                    3 => 'Prayer for Spiritual Growth',
                    4 => 'The Centrality of Christ',
                    5 => 'Paul\'s Ministry',
                ],
                'verses' => [
                    1 => 'Paul, an apostle of Christ Jesus by God\'s will, and Timothy our brother:',
                    2 => 'To the saints in Christ at Colossae, who are faithful brothers and sisters. Grace to you and peace from God our Father.',
                    3 => 'We always thank God, the Father of our Lord Jesus Christ, when we pray for you,',
                    4 => 'for we have heard of your faith in Christ Jesus and of the love you have for all the saints',
                    5 => 'because of the hope reserved for you in heaven. You have already heard about this hope in the word of truth, the gospel',
                    6 => 'that has come to you. It is bearing fruit and growing all over the world, just as it has among you since the day you heard it and came to truly appreciate God\'s grace.',
                    7 => 'You learned this from Epaphras, our dearly loved fellow servant. He is a faithful minister of Christ on your behalf,',
                    8 => 'and he has told us about your love in the Spirit.',
                    9 => 'For this reason also, since the day we heard this, we haven\'t stopped praying for you. We are asking that you may be filled with the knowledge of his will in all wisdom and spiritual understanding,',
                    10 => 'so that you may walk worthy of the Lord, fully pleasing to him: bearing fruit in every good work and growing in the knowledge of God,',
                    11 => 'being strengthened with all power, according to his glorious might, so that you may have great endurance and patience, joyfully',
                    12 => 'giving thanks to the Father, who has enabled you to share in the saints\' inheritance in the light.',
                    13 => 'He has rescued us from the domain of darkness and transferred us into the kingdom of the Son he loves.',
                    14 => 'In him we have redemption, the forgiveness of sins.',
                    15 => 'He is the image of the invisible God, the firstborn over all creation.',
                    16 => 'For everything was created by him, in heaven and on earth, the visible and the invisible, whether thrones or dominions or rulers or authorities — all things have been created through him and for him.',
                    17 => 'He is before all things, and by him all things hold together.',
                    18 => 'He is also the head of the body, the church; he is the beginning, the firstborn from the dead, so that he might come to have first place in everything.',
                    19 => 'For God was pleased to have all his fullness dwell in him,',
                    20 => 'and through him to reconcile everything to himself, whether things on earth or things in heaven, by making peace through his blood, shed on the cross.',
                    21 => 'Once you were alienated and hostile in your minds as expressed in your evil actions.',
                    22 => 'But now he has reconciled you by his physical body through his death, to present you holy, faultless, and blameless before him —',
                    23 => 'if indeed you remain grounded and steadfast in the faith and are not shifted away from the hope of the gospel that you heard. This gospel has been proclaimed in all creation under heaven, and I, Paul, have become a servant of it.',
                    24 => 'Now I rejoice in my sufferings for you, and I am completing in my flesh what is lacking in Christ\'s afflictions for his body, that is, the church.',
                    25 => 'I have become its servant, according to God\'s commission that was given to me for you, to make the word of God fully known,',
                    26 => 'the mystery hidden for ages and generations but now revealed to his saints.',
                    27 => 'God wanted to make known among the Gentiles the glorious wealth of this mystery, which is Christ in you, the hope of glory.',
                    28 => 'We proclaim him, warning and teaching everyone with all wisdom, so that we may present everyone mature in Christ.',
                    29 => 'I labor for this, striving with his strength that works powerfully in me.',
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
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 4,
                    16 => 4,
                    17 => 4,
                    18 => 4,
                    19 => 4,
                    20 => 4,
                    21 => 4,
                    22 => 4,
                    23 => 4,
                    24 => 5,
                    25 => 5,
                    26 => 5,
                    27 => 5,
                    28 => 5,
                    29 => 5,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Christ versus the Colossian Heresy',
                ],
                'verses' => [
                    1 => 'For I want you to know how greatly I am struggling for you, for those in Laodicea, and for all who have not seen me in person.',
                    2 => 'I want their hearts to be encouraged and joined together in love, so that they may have all the riches of complete understanding and have the knowledge of God\'s mystery — Christ.',
                    3 => 'In him are hidden all the treasures of wisdom and knowledge.',
                    4 => 'I am saying this so that no one will deceive you with arguments that sound reasonable.',
                    5 => 'For I may be absent in body, but I am with you in spirit, rejoicing to see how well ordered you are and the strength of your faith in Christ.',
                    6 => 'So then, just as you have received Christ Jesus as Lord, continue to walk in him,',
                    7 => 'being rooted and built up in him and established in the faith, just as you were taught, and overflowing with gratitude.',
                    8 => 'Be careful that no one takes you captive through philosophy and empty deceit based on human tradition, based on the elements of the world, rather than Christ.',
                    9 => 'For the entire fullness of God\'s nature dwells bodily in Christ,',
                    10 => 'and you have been filled by him, who is the head over every ruler and authority.',
                    11 => 'You were also circumcised in him with a circumcision not done with hands, by putting off the body of flesh, in the circumcision of Christ,',
                    12 => 'when you were buried with him in baptism, in which you were also raised with him through faith in the working of God, who raised him from the dead.',
                    13 => 'And when you were dead in trespasses and in the uncircumcision of your flesh, he made you alive with him and forgave us all our trespasses.',
                    14 => 'He erased the certificate of debt, with its obligations, that was against us and opposed to us, and has taken it away by nailing it to the cross.',
                    15 => 'He disarmed the rulers and authorities and disgraced them publicly; he triumphed over them in him.',
                    16 => 'Therefore, don\'t let anyone judge you in regard to food and drink or in the matter of a festival or a new moon or a Sabbath day.',
                    17 => 'These are a shadow of what was to come; the substance is Christ.',
                    18 => 'Let no one condemn you by delighting in ascetic practices and the worship of angels, claiming access to a visionary realm. Such people are inflated by empty notions of their unspiritual mind.',
                    19 => 'They don\'t hold on to the head, from whom the whole body, nourished and held together by its ligaments and tendons, grows with growth from God.',
                    20 => 'If you died with Christ to the elements of this world, why do you live as if you still belonged to the world? Why do you submit to regulations:',
                    21 => '"Don\'t handle, don\'t taste, don\'t touch"?',
                    22 => 'All these regulations refer to what is destined to perish by being used up; they are human commands and doctrines.',
                    23 => 'Although these have a reputation for wisdom by promoting self-made religion, false humility, and severe treatment of the body, they are not of any value in curbing self-indulgence.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 1,
                    11 => 1,
                    12 => 1,
                    13 => 1,
                    14 => 1,
                    15 => 1,
                    16 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                    22 => 1,
                    23 => 1,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'The Life of the New Man',
                    2 => 'The Christian Life',
                    3 => 'Christ in Your Home',
                ],
                'verses' => [
                    1 => 'So if you have been raised with Christ, seek the things above, where Christ is, seated at the right hand of God.',
                    2 => 'Set your minds on things above, not on earthly things.',
                    3 => 'For you died, and your life is hidden with Christ in God.',
                    4 => 'When Christ, who is your life, appears, then you also will appear with him in glory.',
                    5 => 'Therefore, put to death what belongs to your earthly nature: sexual immorality, impurity, lust, evil desire, and greed, which is idolatry.',
                    6 => 'Because of these, God\'s wrath is coming upon the disobedient,',
                    7 => 'and you once walked in these things when you were living in them.',
                    8 => 'But now, put away all the following: anger, wrath, malice, slander, and filthy language from your mouth.',
                    9 => 'Do not lie to one another, since you have put off the old self with its practices',
                    10 => 'and have put on the new self. You are being renewed in knowledge according to the image of your Creator.',
                    11 => 'In Christ there is not Greek and Jew, circumcision and uncircumcision, barbarian, Scythian, slave and free; but Christ is all and in all.',
                    12 => 'Therefore, as God\'s chosen ones, holy and dearly loved, put on compassion, kindness, humility, gentleness, and patience,',
                    13 => 'bearing with one another and forgiving one another if anyone has a grievance against another. Just as the Lord has forgiven you, so you are also to forgive.',
                    14 => 'Above all, put on love, which is the perfect bond of unity.',
                    15 => 'And let the peace of Christ, to which you were also called in one body, rule your hearts. And be thankful.',
                    16 => 'Let the word of Christ dwell richly among you, in all wisdom teaching and admonishing one another through psalms, hymns, and spiritual songs, singing to God with gratitude in your hearts.',
                    17 => 'And whatever you do, in word or in deed, do everything in the name of the Lord Jesus, giving thanks to God the Father through him.',
                    18 => 'Wives, submit yourselves to your husbands, as is fitting in the Lord.',
                    19 => 'Husbands, love your wives and don\'t be bitter toward them.',
                    20 => 'Children, obey your parents in everything, for this pleases the Lord.',
                    21 => 'Fathers, do not exasperate your children, so that they won\'t become discouraged.',
                    22 => 'Slaves, obey your human masters in everything. Don\'t work only while being watched, as people-pleasers, but work wholeheartedly, fearing the Lord.',
                    23 => 'Whatever you do, do it from the heart, as something done for the Lord and not for people,',
                    24 => 'knowing that you will receive the reward of an inheritance from the Lord. You serve the Lord Christ.',
                    25 => 'For the wrongdoer will be paid back for whatever wrong he has done, and there is no favoritism.',
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
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                    23 => 3,
                    24 => 3,
                    25 => 3,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Speaking to God and Others',
                    2 => 'Final Greetings',
                ],
                'verses' => [
                    1 => 'Masters, deal with your slaves justly and fairly, since you know that you too have a Master in heaven.',
                    2 => 'Devote yourselves to prayer; stay alert in it with thanksgiving.',
                    3 => 'At the same time, pray also for us that God may open a door to us for the word, to speak the mystery of Christ, for which I am in chains,',
                    4 => 'so that I may make it known as I should.',
                    5 => 'Act wisely toward outsiders, making the most of the time.',
                    6 => 'Let your speech always be gracious, seasoned with salt, so that you may know how you should answer each person.',
                    7 => 'Tychicus, our dearly loved brother, faithful minister, and fellow servant in the Lord, will tell you all the news about me.',
                    8 => 'I have sent him to you for this very purpose, so that you may know how we are and so that he may encourage your hearts.',
                    9 => 'He is coming with Onesimus, a faithful and dearly loved brother, who is one of you. They will tell you about everything here.',
                    10 => 'Aristarchus, my fellow prisoner, sends you greetings, as does Mark, Barnabas\'s cousin (concerning whom you have received instructions: if he comes to you, welcome him),',
                    11 => 'and so does Jesus who is called Justus. These alone of the circumcised are my coworkers for the kingdom of God, and they have been a comfort to me.',
                    12 => 'Epaphras, who is one of you, a servant of Christ Jesus, sends you greetings. He is always wrestling for you in his prayers, so that you can stand mature and fully assured in everything God wills.',
                    13 => 'For I testify about him that he works hard for you, for those in Laodicea, and for those in Hierapolis.',
                    14 => 'Luke, the dearly loved physician, and Demas send you greetings.',
                    15 => 'Give my greetings to the brothers and sisters in Laodicea, and to Nympha and the church in her home.',
                    16 => 'After this letter has been read at your gathering, have it read also in the church of the Laodiceans; and see that you also read the letter from Laodicea.',
                    17 => 'And tell Archippus, "Pay attention to the ministry you have received in the Lord, so that you can accomplish it."',
                    18 => 'I, Paul, am writing this greeting with my own hand. Remember my chains. Grace be with you.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                ],
            ],
        ];
    }
} 