<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Philippians extends Book
{
    public const ABBREVIATION = 'Phil';
    public const ID = 50;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'Philippians';
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
                    2 => 'Thanksgiving and Prayer',
                    3 => 'Advance of the Gospel',
                    4 => 'Living Is Christ',
                ],
                'verses' => [
                    1 => 'To all the saints in Christ Jesus who are in Philippi, including the overseers and deacons.',
                    2 => 'Grace to you and peace from God our Father and the Lord Jesus Christ.',
                    3 => 'I give thanks to my God for every remembrance of you,',
                    4 => 'always praying with joy for all of you in my every prayer,',
                    5 => 'because of your partnership in the gospel from the first day until now.',
                    6 => 'I am sure of this, that he who started a good work in you will carry it on to completion until the day of Christ Jesus.',
                    7 => 'Indeed, it is right for me to think this way about all of you, because I have you in my heart, and you are all partners with me in grace, both in my imprisonment and in the defense and confirmation of the gospel.',
                    8 => 'For God is my witness, how deeply I miss all of you with the affection of Christ Jesus.',
                    9 => 'And I pray this: that your love will keep on growing in knowledge and every kind of discernment,',
                    10 => 'so that you may approve the things that are superior and may be pure and blameless in the day of Christ,',
                    11 => 'filled with the fruit of righteousness that comes through Jesus Christ to the glory and praise of God.',
                    12 => 'Now I want you to know, brothers and sisters, that what has happened to me has actually advanced the gospel,',
                    13 => 'so that it has become known throughout the whole imperial guard, and to everyone else, that my imprisonment is because I am in Christ.',
                    14 => 'Most of the brothers have gained confidence in the Lord from my imprisonment and dare even more to speak the word fearlessly.',
                    15 => 'To be sure, some preach Christ out of envy and rivalry, but others out of good will.',
                    16 => 'These preach out of love, knowing that I am appointed for the defense of the gospel;',
                    17 => 'the others proclaim Christ out of selfish ambition, not sincerely, thinking that they will cause me trouble in my imprisonment.',
                    18 => 'What does it matter? Only that in every way, whether from false motives or true, Christ is proclaimed, and in this I rejoice. Yes, and I will continue to rejoice',
                    19 => 'because I know this will lead to my salvation through your prayers and help from the Spirit of Jesus Christ.',
                    20 => 'My eager expectation and hope is that I will not be ashamed about anything, but that now as always, with all courage, Christ will be highly honored in my body, whether by life or by death.',
                    21 => 'For me, to live is Christ and to die is gain.',
                    22 => 'Now if I live on in the flesh, this means fruitful work for me; and I don\'t know which one I should choose.',
                    23 => 'I am torn between the two. I long to depart and be with Christ — which is far better —',
                    24 => 'but to remain in the flesh is more necessary for your sake.',
                    25 => 'Since I am persuaded of this, I know that I will remain and continue with all of you for your progress and joy in the faith,',
                    26 => 'so that, because of my coming to you again, your boasting in Christ Jesus may abound.',
                    27 => 'Just one thing: As citizens of heaven, live your life worthy of the gospel of Christ. Then, whether I come and see you or am absent, I will hear about you that you are standing firm in one spirit, in one accord, contending together for the faith of the gospel,',
                    28 => 'not being frightened in any way by your opponents. This is a sign of destruction for them, but of your salvation — and this is from God.',
                    29 => 'For it has been granted to you on Christ\'s behalf not only to believe in him, but also to suffer for him,',
                    30 => 'since you are engaged in the same struggle that you saw I had and now hear that I have.',
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
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 4,
                    22 => 4,
                    23 => 4,
                    24 => 4,
                    25 => 4,
                    26 => 4,
                    27 => 4,
                    28 => 4,
                    29 => 4,
                    30 => 4,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Christian Humility',
                    2 => 'Christ\'s Humility and Exaltation',
                    3 => 'Lights in the World',
                    4 => 'Timothy and Epaphroditus',
                ],
                'verses' => [
                    1 => 'If, then, there is any encouragement in Christ, if any consolation of love, if any fellowship with the Spirit, if any affection and mercy,',
                    2 => 'make my joy complete by thinking the same way, having the same love, united in spirit, intent on one purpose.',
                    3 => 'Do nothing out of selfish ambition or conceit, but in humility consider others as more important than yourselves.',
                    4 => 'Everyone should look not to his own interests, but rather to the interests of others.',
                    5 => 'Adopt the same attitude as that of Christ Jesus,',
                    6 => 'who, existing in the form of God, did not consider equality with God as something to be exploited.',
                    7 => 'Instead he emptied himself by assuming the form of a servant, taking on the likeness of humanity. And when he had come as a man,',
                    8 => 'he humbled himself by becoming obedient to the point of death — even to death on a cross.',
                    9 => 'For this reason God highly exalted him and gave him the name that is above every name,',
                    10 => 'so that at the name of Jesus every knee will bow — in heaven and on earth and under the earth —',
                    11 => 'and every tongue will confess that Jesus Christ is Lord, to the glory of God the Father.',
                    12 => 'Therefore, my dear friends, just as you have always obeyed, so now, not only in my presence but even more in my absence, work out your own salvation with fear and trembling.',
                    13 => 'For it is God who is working in you both to will and to work according to his good purpose.',
                    14 => 'Do everything without grumbling and arguing,',
                    15 => 'so that you may be blameless and pure, children of God who are faultless in a crooked and perverted generation, among whom you shine like stars in the world,',
                    16 => 'by holding firm to the word of life. Then I can boast in the day of Christ that I didn\'t run or labor for nothing.',
                    17 => 'But even if I am poured out as a drink offering on the sacrificial service of your faith, I am glad and rejoice with all of you.',
                    18 => 'In the same way you should also be glad and rejoice with me.',
                    19 => 'Now I hope in the Lord Jesus to send Timothy to you soon so that I too may be encouraged by news about you.',
                    20 => 'For I have no one else like-minded who will genuinely care about your interests;',
                    21 => 'all seek their own interests, not those of Jesus Christ.',
                    22 => 'But you know his proven character, because he has served with me in the gospel ministry like a son with a father.',
                    23 => 'Therefore, I hope to send him as soon as I see how things go with me.',
                    24 => 'I am confident in the Lord that I myself will also come soon.',
                    25 => 'But I considered it necessary to send you Epaphroditus — my brother, coworker, and fellow soldier, as well as your messenger and minister to my need —',
                    26 => 'since he has been longing for all of you and was distressed because you heard that he was sick.',
                    27 => 'Indeed, he was so sick that he nearly died. However, God had mercy on him, and not only on him but also on me, so that I would not have sorrow upon sorrow.',
                    28 => 'For this reason, I am very eager to send him so that you may rejoice again when you see him and I may be less anxious.',
                    29 => 'Therefore, welcome him in the Lord with great joy and hold people like him in honor,',
                    30 => 'because he came close to death for the work of Christ, risking his life to make up what was lacking in your ministry to me.',
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
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 4,
                    20 => 4,
                    21 => 4,
                    22 => 4,
                    23 => 4,
                    24 => 4,
                    25 => 4,
                    26 => 4,
                    27 => 4,
                    28 => 4,
                    29 => 4,
                    30 => 4,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Knowing Christ',
                    2 => 'Reaching Forward to God\'s Goal',
                ],
                'verses' => [
                    1 => 'In addition, my brothers and sisters, rejoice in the Lord. To write to you again about this is no trouble for me and is a safeguard for you.',
                    2 => 'Watch out for the dogs, watch out for the evil workers, watch out for those who mutilate the flesh.',
                    3 => 'For we are the circumcision, the ones who worship by the Spirit of God, boast in Christ Jesus, and do not put confidence in the flesh —',
                    4 => 'although I have reasons for confidence in the flesh. If anyone else thinks he has grounds for confidence in the flesh, I have more:',
                    5 => 'circumcised the eighth day; of the nation of Israel, of the tribe of Benjamin, a Hebrew born of Hebrews; regarding the law, a Pharisee;',
                    6 => 'regarding zeal, persecuting the church; regarding the righteousness that is in the law, blameless.',
                    7 => 'But everything that was a gain to me, I have considered to be a loss because of Christ.',
                    8 => 'More than that, I also consider everything to be a loss in view of the surpassing value of knowing Christ Jesus my Lord. Because of him I have suffered the loss of all things and consider them as dung, so that I may gain Christ',
                    9 => 'and be found in him, not having a righteousness of my own from the law, but one that is through faith in Christ — the righteousness from God based on faith.',
                    10 => 'My goal is to know him and the power of his resurrection and the fellowship of his sufferings, being conformed to his death,',
                    11 => 'assuming that I will somehow reach the resurrection from among the dead.',
                    12 => 'Not that I have already reached the goal or am already perfect, but I make every effort to take hold of it because I also have been taken hold of by Christ Jesus.',
                    13 => 'Brothers and sisters, I do not consider myself to have taken hold of it. But one thing I do: Forgetting what is behind and reaching forward to what is ahead,',
                    14 => 'I pursue as my goal the prize promised by God\'s heavenly call in Christ Jesus.',
                    15 => 'Therefore, let all of us who are mature think this way. And if you think differently about anything, God will reveal this also to you.',
                    16 => 'In any case, we should live up to whatever truth we have attained.',
                    17 => 'Join in imitating me, brothers and sisters, and pay careful attention to those who live according to the example you have in us.',
                    18 => 'For I have often told you, and now say again with tears, that many live as enemies of the cross of Christ.',
                    19 => 'Their end is destruction; their god is their stomach; their glory is in their shame; and they are focused on earthly things.',
                    20 => 'Our citizenship is in heaven, and we eagerly wait for a Savior from there, the Lord Jesus Christ.',
                    21 => 'He will transform the body of our humble condition into the likeness of his glorious body, by the power that enables him to subject everything to himself.',
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
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Practical Counsel',
                    2 => 'Appreciation of Support',
                    3 => 'Final Greetings',
                ],
                'verses' => [
                    1 => 'So then, my dearly loved and longed for brothers and sisters, my joy and crown, in this manner stand firm in the Lord, dear friends.',
                    2 => 'I urge Euodia and I urge Syntyche to agree in the Lord.',
                    3 => 'Yes, I also ask you, true partner, to help these women who have contended for the gospel at my side, along with Clement and the rest of my coworkers whose names are in the book of life.',
                    4 => 'Rejoice in the Lord always. I will say it again: Rejoice!',
                    5 => 'Let your graciousness be known to everyone. The Lord is near.',
                    6 => 'Don\'t worry about anything, but in everything, through prayer and petition with thanksgiving, present your requests to God.',
                    7 => 'And the peace of God, which surpasses all understanding, will guard your hearts and minds in Christ Jesus.',
                    8 => 'Finally brothers and sisters, whatever is true, whatever is honorable, whatever is just, whatever is pure, whatever is lovely, whatever is commendable — if there is any moral excellence and if there is anything praiseworthy — dwell on these things.',
                    9 => 'Do what you have learned and received and heard from me, and seen in me, and the God of peace will be with you.',
                    10 => 'I rejoiced in the Lord greatly because once again you renewed your care for me. You were, in fact, concerned about me but lacked the opportunity to show it.',
                    11 => 'I don\'t say this out of need, for I have learned to be content in whatever circumstances I find myself.',
                    12 => 'I know how to make do with little, and I know how to make do with a lot. In any and all circumstances I have learned the secret of being content — whether well fed or hungry, whether in abundance or in need.',
                    13 => 'I am able to do all things through him who strengthens me.',
                    14 => 'Still, you did well by partnering with me in my hardship.',
                    15 => 'And you Philippians know that in the early days of the gospel, when I left Macedonia, no church shared with me in the matter of giving and receiving except you alone.',
                    16 => 'For even in Thessalonica you sent gifts for my need several times.',
                    17 => 'Not that I seek the gift, but I seek the profit that is increasing to your account.',
                    18 => 'But I have received everything in full, and I have an abundance. I am fully supplied, having received from Epaphroditus what you provided — a fragrant offering, an acceptable sacrifice, pleasing to God.',
                    19 => 'And my God will supply all your needs according to his riches in glory in Christ Jesus.',
                    20 => 'Now to our God and Father be glory forever and ever. Amen.',
                    21 => 'Greet every saint in Christ Jesus. The brothers who are with me send you greetings.',
                    22 => 'All the saints send you greetings, especially those who belong to Caesar\'s household.',
                    23 => 'The grace of the Lord Jesus Christ be with your spirit.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 3,
                    22 => 3,
                    23 => 3,
                ],
            ],
        ];
    }
} 