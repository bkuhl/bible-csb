<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class FirstTimothy extends Book
{
    public const ABBREVIATION = '1 Tim';
    public const ID = 54;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '1 Timothy';
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
                    2 => 'False Doctrine and Misuse of the Law',
                    3 => 'Paul\'s Testimony',
                    4 => 'Engage in Battle',
                ],
                'verses' => [
                    1 => 'Paul, an apostle of Christ Jesus by the command of God our Savior and of Christ Jesus our hope:',
                    2 => 'To Timothy, my true son in the faith. Grace, mercy, and peace from God the Father and Christ Jesus our Lord.',
                    3 => 'As I urged you when I went to Macedonia, remain in Ephesus so that you may instruct certain people not to teach false doctrine',
                    4 => 'or to pay attention to myths and endless genealogies. These promote empty speculations rather than God\'s plan, which operates by faith.',
                    5 => 'Now the goal of our instruction is love that comes from a pure heart, a good conscience, and a sincere faith.',
                    6 => 'Some have departed from these and turned aside to fruitless discussion.',
                    7 => 'They want to be teachers of the law, although they don\'t understand what they are saying or what they are insisting on.',
                    8 => 'But we know that the law is good, provided one uses it legitimately.',
                    9 => 'We know that the law is not meant for a righteous person, but for the lawless and rebellious, for the ungodly and sinful, for the unholy and irreverent, for those who kill their fathers and mothers, for murderers,',
                    10 => 'for the sexually immoral and males who have sex with males, for slave traders, liars, perjurers, and for whatever else is contrary to the sound teaching',
                    11 => 'that conforms to the gospel concerning the glory of the blessed God, which was entrusted to me.',
                    12 => 'I give thanks to Christ Jesus our Lord who has strengthened me, because he considered me faithful, appointing me to the ministry —',
                    13 => 'even though I was formerly a blasphemer, a persecutor, and an arrogant man. But I received mercy because I acted out of ignorance in unbelief,',
                    14 => 'and the grace of our Lord overflowed, along with the faith and love that are in Christ Jesus.',
                    15 => 'This saying is trustworthy and deserving of full acceptance: "Christ Jesus came into the world to save sinners" — and I am the worst of them.',
                    16 => 'But I received mercy for this reason, so that in me, the worst of them, Christ Jesus might demonstrate his extraordinary patience as an example to those who would believe in him for eternal life.',
                    17 => 'Now to the King eternal, immortal, invisible, the only God, be honor and glory forever and ever. Amen.',
                    18 => 'Timothy, my son, I am giving you this instruction in keeping with the prophecies previously made about you, so that by recalling them you may fight the good fight,',
                    19 => 'having faith and a good conscience, which some have rejected and have shipwrecked the faith.',
                    20 => 'Among them are Hymenaeus and Alexander, whom I have delivered to Satan, so that they may be taught not to blaspheme.',
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
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 4,
                    19 => 4,
                    20 => 4,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Instructions on Prayer',
                    2 => 'Instructions to Men and Women',
                ],
                'verses' => [
                    1 => 'First of all, then, I urge that petitions, prayers, intercessions, and thanksgivings be made for everyone,',
                    2 => 'for kings and all those who are in authority, so that we may lead a tranquil and quiet life in all godliness and dignity.',
                    3 => 'This is good, and it pleases God our Savior,',
                    4 => 'who wants everyone to be saved and to come to the knowledge of the truth.',
                    5 => 'For there is one God and one mediator between God and mankind, the man Christ Jesus,',
                    6 => 'who gave himself as a ransom for all, a testimony at the proper time.',
                    7 => 'For this I was appointed a herald, an apostle (I am telling the truth; I am not lying), and a teacher of the Gentiles in faith and truth.',
                    8 => 'Therefore, I want the men in every place to pray, lifting up holy hands without anger or argument.',
                    9 => 'Also, the women are to dress themselves in modest clothing, with decency and good sense, not with elaborate hairstyles, gold, pearls, or expensive apparel,',
                    10 => 'but with good works, as is proper for women who profess to worship God.',
                    11 => 'A woman is to learn quietly with full submission.',
                    12 => 'I do not allow a woman to teach or to have authority over a man; instead, she is to remain quiet.',
                    13 => 'For Adam was formed first, then Eve.',
                    14 => 'And Adam was not deceived, but the woman was deceived and transgressed.',
                    15 => 'But she will be saved through childbearing, if they continue in faith, love, and holiness, with good sense.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Qualifications for Overseers and Deacons',
                    2 => 'The Mystery of Godliness',
                ],
                'verses' => [
                    1 => 'This saying is trustworthy: "If anyone aspires to be an overseer, he desires a noble work."',
                    2 => 'An overseer, therefore, must be above reproach, the husband of one wife, self-controlled, sensible, respectable, hospitable, able to teach,',
                    3 => 'not an excessive drinker, not a bully but gentle, not quarrelsome, not greedy.',
                    4 => 'He must manage his own household competently and have his children under control with all dignity.',
                    5 => '(If anyone does not know how to manage his own household, how will he take care of God\'s church?)',
                    6 => 'He must not be a new convert, or he might become conceited and incur the same condemnation as the devil.',
                    7 => 'Furthermore, he must have a good reputation among outsiders, so that he does not fall into disgrace and the devil\'s trap.',
                    8 => 'Deacons, likewise, should be worthy of respect, not hypocritical, not drinking a lot of wine, not greedy for money,',
                    9 => 'holding the mystery of the faith with a clear conscience.',
                    10 => 'They must also be tested first; if they prove blameless, then they can serve as deacons.',
                    11 => 'Wives, likewise, should be worthy of respect, not slanderers, self-controlled, faithful in everything.',
                    12 => 'Deacons are to be husbands of one wife, managing their children and their own households competently.',
                    13 => 'For those who have served well as deacons acquire a good standing for themselves and great boldness in the faith that is in Christ Jesus.',
                    14 => 'I write these things to you, hoping to come to you soon.',
                    15 => 'But if I should be delayed, I have written so that you will know how people ought to conduct themselves in God\'s household, which is the church of the living God, the pillar and foundation of the truth.',
                    16 => 'And most certainly, the mystery of godliness is great: He was manifested in the flesh, vindicated in the Spirit, seen by angels, preached among the nations, believed on in the world, taken up in glory.',
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
                    13 => 1,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Demonic Influence',
                    2 => 'A Good Servant of Jesus Christ',
                    3 => 'Instructions for Ministry',
                ],
                'verses' => [
                    1 => 'Now the Spirit explicitly says that in later times some will depart from the faith, paying attention to deceitful spirits and the teachings of demons,',
                    2 => 'through the hypocrisy of liars whose consciences are seared.',
                    3 => 'They forbid marriage and demand abstinence from foods that God created to be received with gratitude by those who believe and know the truth.',
                    4 => 'For everything created by God is good, and nothing is to be rejected if it is received with thanksgiving,',
                    5 => 'since it is sanctified by the word of God and by prayer.',
                    6 => 'If you point these things out to the brothers and sisters, you will be a good servant of Christ Jesus, nourished by the words of the faith and the good teaching that you have followed.',
                    7 => 'But have nothing to do with pointless and silly myths. Rather, train yourself in godliness.',
                    8 => 'For the training of the body has limited benefit, but godliness is beneficial in every way, since it holds promise for the present life and also for the life to come.',
                    9 => 'This saying is trustworthy and deserves full acceptance.',
                    10 => 'For this reason we labor and strive, because we have put our hope in the living God, who is the Savior of all people, especially of those who believe.',
                    11 => 'Command and teach these things.',
                    12 => 'Don\'t let anyone despise your youth, but set an example for the believers in speech, in conduct, in love, in faith, and in purity.',
                    13 => 'Until I come, give your attention to public reading, exhortation, and teaching.',
                    14 => 'Don\'t neglect the gift that is in you; it was given to you through prophecy, with the laying on of hands by the council of elders.',
                    15 => 'Practice these things; be committed to them, so that your progress may be evident to all.',
                    16 => 'Pay close attention to your life and your teaching; persevere in these things, for in doing this you will save both yourself and your hearers.',
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
                    14 => 3,
                    15 => 3,
                    16 => 3,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'The Support of Widows',
                    2 => 'Honoring the Elders',
                ],
                'verses' => [
                    1 => 'Don\'t rebuke an older man, but exhort him as a father, younger men as brothers,',
                    2 => 'older women as mothers, and the younger women as sisters with all purity.',
                    3 => 'Support widows who are genuinely in need.',
                    4 => 'But if any widow has children or grandchildren, let them learn to practice godliness toward their own family first and to repay their parents, for this pleases God.',
                    5 => 'The widow who is truly in need and left all alone has put her hope in God and continues night and day in her petitions and prayers;',
                    6 => 'however, she who is self-indulgent is dead even while she lives.',
                    7 => 'Command this also, so that they will be above reproach.',
                    8 => 'But if anyone does not provide for his own family, especially for his own household, he has denied the faith and is worse than an unbeliever.',
                    9 => 'No widow is to be enrolled on the list for support unless she is at least sixty years old, has been the wife of one husband,',
                    10 => 'and is well known for good works — that is, if she has brought up children, shown hospitality, washed the saints\' feet, helped the afflicted, and devoted herself to every good work.',
                    11 => 'But refuse to enroll younger widows, for when they are drawn away from Christ by desire, they want to marry',
                    12 => 'and will therefore receive condemnation because they have renounced their original pledge.',
                    13 => 'At the same time, they also learn to be idle, going from house to house; they are not only idle, but are also gossips and busybodies, saying things they shouldn\'t say.',
                    14 => 'Therefore, I want younger women to marry, have children, manage their households, and give the adversary no opportunity to accuse us.',
                    15 => 'For some have already turned away to follow Satan.',
                    16 => 'If any believing woman has widows in her family, let her help them. Let the church not be burdened, so that it can help widows in genuine need.',
                    17 => 'The elders who are good leaders are to be considered worthy of double honor, especially those who work hard at preaching and teaching.',
                    18 => 'For the Scripture says: and,"The worker is worthy of his wages."',
                    19 => 'Don\'t accept an accusation against an elder unless it is supported by two or three witnesses.',
                    20 => 'Publicly rebuke those who sin, so that the rest will be afraid.',
                    21 => 'I solemnly charge you before God and Christ Jesus and the elect angels to observe these things without prejudice, doing nothing out of favoritism.',
                    22 => 'Don\'t be too quick to appoint anyone as an elder, and don\'t share in the sins of others. Keep yourself pure.',
                    23 => 'Don\'t continue drinking only water, but use a little wine because of your stomach and your frequent illnesses.',
                    24 => 'Some people\'s sins are obvious, preceding them to judgment, but the sins of others surface later.',
                    25 => 'Likewise, good works are obvious, and those that are not obvious cannot remain hidden.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
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
                    13 => 1,
                    14 => 1,
                    15 => 1,
                    16 => 1,
                    17 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                    23 => 2,
                    24 => 2,
                    25 => 2,
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'Honoring Masters',
                    2 => 'False Doctrine and Human Greed',
                    3 => 'Fight the Good Fight',
                    4 => 'Instructions to the Rich',
                    5 => 'Guard the Heritage',
                ],
                'verses' => [
                    1 => 'All who are under the yoke as slaves should regard their own masters as worthy of all respect, so that God\'s name and his teaching will not be blasphemed.',
                    2 => 'Teach and encourage these things.',
                    3 => 'If anyone teaches false doctrine and does not agree with the sound teaching of our Lord Jesus Christ and with the teaching that promotes godliness,',
                    4 => 'he is conceited and understands nothing, but has an unhealthy interest in disputes and arguments over words. From these come envy, quarreling, slander, evil suspicions,',
                    5 => 'and constant disagreement among people whose minds are depraved and deprived of the truth, who imagine that godliness is a way to material gain.',
                    6 => 'But godliness with contentment is great gain.',
                    7 => 'For we brought nothing into the world, and we can take nothing out.',
                    8 => 'If we have food and clothing, we will be content with these.',
                    9 => 'But those who want to be rich fall into temptation, a trap, and many foolish and harmful desires, which plunge people into ruin and destruction.',
                    10 => 'For the love of money is a root of all kinds of evil, and by craving it, some have wandered away from the faith and pierced themselves with many griefs.',
                    11 => 'But you, man of God, flee from these things, and pursue righteousness, godliness, faith, love, endurance, and gentleness.',
                    12 => 'Fight the good fight of the faith. Take hold of eternal life to which you were called and about which you have made a good confession in the presence of many witnesses.',
                    13 => 'In the presence of God, who gives life to all, and of Christ Jesus, who gave a good confession before Pontius Pilate, I charge you',
                    14 => 'to keep this command without fault or failure until the appearing of our Lord Jesus Christ.',
                    15 => 'God will bring this about in his own time. He is the blessed and only Sovereign, the King of kings, and the Lord of lords,',
                    16 => 'who alone is immortal and who lives in unapproachable light, whom no one has seen or can see, to him be honor and eternal power. Amen.',
                    17 => 'Instruct those who are rich in the present age not to be arrogant or to set their hope on the uncertainty of wealth, but on God, who richly provides us with all things to enjoy.',
                    18 => 'Instruct them to do what is good, to be rich in good works, to be generous and willing to share,',
                    19 => 'storing up treasure for themselves as a good foundation for the coming age, so that they may take hold of what is truly life.',
                    20 => 'Timothy, guard what has been entrusted to you, avoiding irreverent and empty speech and contradictions from what is falsely called knowledge.',
                    21 => 'By professing it, some people have departed from the faith. Grace be with you all.',
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
                    11 => 3,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 4,
                    18 => 4,
                    19 => 4,
                    20 => 5,
                    21 => 5,
                ],
            ],
        ];
    }
} 