<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class James extends Book
{
    public const ABBREVIATION = 'James';
    public const ID = 59;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'James';
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
                    2 => 'Trials and Maturity',
                    3 => 'Hearing and Doing the Word',
                ],
                'verses' => [
                    1 => 'James, a servant of God and of the Lord Jesus Christ: To the twelve tribes dispersed abroad. Greetings.',
                    2 => 'Consider it a great joy, my brothers and sisters, whenever you experience various trials,',
                    3 => 'because you know that the testing of your faith produces endurance.',
                    4 => 'And let endurance have its full effect, so that you may be mature and complete, lacking nothing.',
                    5 => 'Now if any of you lacks wisdom, he should ask God — who gives to all generously and ungrudgingly — and it will be given to him.',
                    6 => 'But let him ask in faith without doubting. For the doubter is like the surging sea, driven and tossed by the wind.',
                    7 => 'That person should not expect to receive anything from the Lord,',
                    8 => 'being double-minded and unstable in all his ways.',
                    9 => 'Let the brother of humble circumstances boast in his exaltation,',
                    10 => 'but let the rich boast in his humiliation because he will pass away like a flower of the field.',
                    11 => 'For the sun rises and, together with the scorching wind, dries up the grass; its flower falls off, and its beautiful appearance perishes. In the same way, the rich person will wither away while pursuing his activities.',
                    12 => 'Blessed is the one who endures trials, because when he has stood the test he will receive the crown of life that God has promised to those who love him.',
                    13 => 'No one undergoing a trial should say, "I am being tempted by God," since God is not tempted by evil, and he himself doesn\'t tempt anyone.',
                    14 => 'But each person is tempted when he is drawn away and enticed by his own evil desire.',
                    15 => 'Then after desire has conceived, it gives birth to sin, and when sin is fully grown, it gives birth to death.',
                    16 => 'Don\'t be deceived, my dear brothers and sisters.',
                    17 => 'Every good and perfect gift is from above, coming down from the Father of lights, who does not change like shifting shadows.',
                    18 => 'By his own choice, he gave us birth by the word of truth so that we would be a kind of firstfruits of his creatures.',
                    19 => 'My dear brothers and sisters, understand this: Everyone should be quick to listen, slow to speak, and slow to anger,',
                    20 => 'for human anger does not accomplish God\'s righteousness.',
                    21 => 'Therefore, ridding yourselves of all moral filth and the evil that is so prevalent, humbly receive the implanted word, which is able to save your souls.',
                    22 => 'But be doers of the word and not hearers only, deceiving yourselves.',
                    23 => 'Because if anyone is a hearer of the word and not a doer, he is like someone looking at his own face in a mirror.',
                    24 => 'For he looks at himself, goes away, and immediately forgets what kind of person he was.',
                    25 => 'But the one who looks intently into the perfect law of freedom and perseveres in it, and is not a forgetful hearer but a doer who works — this person will be blessed in what he does.',
                    26 => 'If anyone thinks he is religious without controlling his tongue, his religion is useless and he deceives himself.',
                    27 => 'Pure and undefiled religion before God the Father is this: to look after orphans and widows in their distress and to keep oneself unstained from the world.',
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
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                    23 => 3,
                    24 => 3,
                    25 => 3,
                    26 => 3,
                    27 => 3,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The Sin of Favoritism',
                    2 => 'Faith and Works',
                ],
                'verses' => [
                    1 => 'My brothers and sisters, do not show favoritism as you hold on to the faith in our glorious Lord Jesus Christ.',
                    2 => 'For if someone comes into your meeting wearing a gold ring and dressed in fine clothes, and a poor person dressed in filthy clothes also comes in,',
                    3 => 'if you look with favor on the one wearing the fine clothes and say, "Sit here in a good place," and yet you say to the poor person, "Stand over there," or "Sit here on the floor by my footstool,"',
                    4 => 'haven\'t you made distinctions among yourselves and become judges with evil thoughts?',
                    5 => 'Listen, my dear brothers and sisters: Didn\'t God choose the poor in this world to be rich in faith and heirs of the kingdom that he has promised to those who love him?',
                    6 => 'Yet you have dishonored the poor. Don\'t the rich oppress you and drag you into court?',
                    7 => 'Don\'t they blaspheme the good name that was invoked over you?',
                    8 => 'Indeed, if you fulfill the royal law prescribed in the Scripture, , you are doing well.',
                    9 => 'If, however, you show favoritism, you commit sin and are convicted by the law as transgressors.',
                    10 => 'For whoever keeps the entire law, and yet stumbles at one point, is guilty of breaking it all.',
                    11 => 'For he who said, , also said, So if you do not commit adultery, but you murder, you are a lawbreaker.',
                    12 => 'Speak and act as those who are to be judged by the law of freedom.',
                    13 => 'For judgment is without mercy to the one who has not shown mercy. Mercy triumphs over judgment.',
                    14 => 'What good is it, my brothers and sisters, if someone claims to have faith but does not have works? Can such faith save him?',
                    15 => 'If a brother or sister is without clothes and lacks daily food',
                    16 => 'and one of you says to them, "Go in peace, stay warm, and be well fed," but you don\'t give them what the body needs, what good is it?',
                    17 => 'In the same way faith, if it does not have works, is dead by itself.',
                    18 => 'But someone will say, "You have faith, and I have works." Show me your faith without works, and I will show you faith by my works.',
                    19 => 'You believe that God is one. Good! Even the demons believe — and they shudder.',
                    20 => 'Senseless person! Are you willing to learn that faith without works is useless?',
                    21 => 'Wasn\'t Abraham our father justified by works in offering Isaac his son on the altar?',
                    22 => 'You see that faith was active together with his works, and by works, faith was made complete,',
                    23 => 'and the Scripture was fulfilled that says, , and he was called God\'s friend.',
                    24 => 'You see that a person is justified by works and not by faith alone.',
                    25 => 'In the same way, wasn\'t Rahab the prostitute also justified by works in receiving the messengers and sending them out by a different route?',
                    26 => 'For just as the body without the spirit is dead, so also faith without works is dead.',
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
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Controlling the Tongue',
                    2 => 'The Wisdom from Above',
                ],
                'verses' => [
                    1 => 'Not many should become teachers, my brothers, because you know that we will receive a stricter judgment.',
                    2 => 'For we all stumble in many ways. If anyone does not stumble in what he says, he is mature, able also to control the whole body.',
                    3 => 'Now if we put bits into the mouths of horses so that they obey us, we direct their whole bodies.',
                    4 => 'And consider ships: Though very large and driven by fierce winds, they are guided by a very small rudder wherever the will of the pilot directs.',
                    5 => 'So too, though the tongue is a small part of the body, it boasts great things. Consider how a small fire sets ablaze a large forest.',
                    6 => 'And the tongue is a fire. The tongue, a world of unrighteousness, is placed among our members. It stains the whole body, sets the course of life on fire, and is itself set on fire by hell.',
                    7 => 'Every kind of animal, bird, reptile, and fish is tamed and has been tamed by humankind,',
                    8 => 'but no one can tame the tongue. It is a restless evil, full of deadly poison.',
                    9 => 'With the tongue we bless our Lord and Father, and with it we curse people who are made in God\'s likeness.',
                    10 => 'Blessing and cursing come out of the same mouth. My brothers and sisters, these things should not be this way.',
                    11 => 'Does a spring pour out sweet and bitter water from the same opening?',
                    12 => 'Can a fig tree produce olives, my brothers and sisters, or a grapevine produce figs? Neither can a saltwater spring yield fresh water.',
                    13 => 'Who among you is wise and understanding? By his good conduct he should show that his works are done in the gentleness that comes from wisdom.',
                    14 => 'But if you have bitter envy and selfish ambition in your heart, don\'t boast and deny the truth.',
                    15 => 'Such wisdom does not come down from above but is earthly, unspiritual, demonic.',
                    16 => 'For where there is envy and selfish ambition, there is disorder and every evil practice.',
                    17 => 'But the wisdom from above is first pure, then peace-loving, gentle, compliant, full of mercy and good fruits, unwavering, without pretense.',
                    18 => 'And the fruit of righteousness is sown in peace by those who cultivate peace.',
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
                    18 => 2,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Proud or Humble',
                    2 => 'Our Will and God\'s Will',
                ],
                'verses' => [
                    1 => 'What is the source of wars and fights among you? Don\'t they come from your passions that wage war within you?',
                    2 => 'You desire and do not have. You murder and covet and cannot obtain. You fight and wage war. You do not have because you do not ask.',
                    3 => 'You ask and don\'t receive because you ask with wrong motives, so that you may spend it on your pleasures.',
                    4 => 'You adulterous people! Don\'t you know that friendship with the world is hostility toward God? So whoever wants to be the friend of the world becomes the enemy of God.',
                    5 => 'Or do you think it\'s without reason that the Scripture says: The spirit he made to dwell in us envies intensely?',
                    6 => 'But he gives greater grace. Therefore he says: ',
                    7 => 'Therefore, submit to God. Resist the devil, and he will flee from you.',
                    8 => 'Draw near to God, and he will draw near to you. Cleanse your hands, sinners, and purify your hearts, you double-minded.',
                    9 => 'Be miserable and mourn and weep. Let your laughter be turned to mourning and your joy to gloom.',
                    10 => 'Humble yourselves before the Lord, and he will exalt you.',
                    11 => 'Don\'t criticize one another, brothers and sisters. Anyone who defames or judges a fellow believer defames and judges the law. If you judge the law, you are not a doer of the law but a judge.',
                    12 => 'There is one lawgiver and judge who is able to save and to destroy. But who are you to judge your neighbor?',
                    13 => 'Come now, you who say, "Today or tomorrow we will travel to such and such a city and spend a year there and do business and make a profit."',
                    14 => 'Yet you do not know what tomorrow will bring — what your life will be! For you are like vapor that appears for a little while, then vanishes.',
                    15 => 'Instead, you should say, "If the Lord wills, we will live and do this or that."',
                    16 => 'But as it is, you boast in your arrogance. All such boasting is evil.',
                    17 => 'So it is sin to know the good and yet not do it.',
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
            5 => [
                'sections' => [
                    1 => 'Warning to the Rich',
                    2 => 'Waiting for the Lord',
                    3 => 'Truthful Speech',
                    4 => 'Effective Prayer',
                ],
                'verses' => [
                    1 => 'Come now, you rich people, weep and wail over the miseries that are coming on you.',
                    2 => 'Your wealth has rotted and your clothes are moth-eaten.',
                    3 => 'Your gold and silver are corroded, and their corrosion will be a witness against you and will eat your flesh like fire. You have stored up treasure in the last days.',
                    4 => 'Look! The pay that you withheld from the workers who mowed your fields cries out, and the outcry of the harvesters has reached the ears of the Lord of Armies.',
                    5 => 'You have lived luxuriously on the earth and have indulged yourselves. You have fattened your hearts in a day of slaughter.',
                    6 => 'You have condemned, you have murdered the righteous, who does not resist you.',
                    7 => 'Therefore, brothers and sisters, be patient until the Lord\'s coming. See how the farmer waits for the precious fruit of the earth and is patient with it until it receives the early and the late rains.',
                    8 => 'You also must be patient. Strengthen your hearts, because the Lord\'s coming is near.',
                    9 => 'Brothers and sisters, do not complain about one another, so that you will not be judged. Look, the judge stands at the door!',
                    10 => 'Brothers and sisters, take the prophets who spoke in the Lord\'s name as an example of suffering and patience.',
                    11 => 'See, we count as blessed those who have endured. You have heard of Job\'s endurance and have seen the outcome that the Lord brought about — the Lord is compassionate and merciful.',
                    12 => 'Above all, my brothers and sisters, do not swear, either by heaven or by earth or with any other oath. But let your "yes" mean "yes," and your "no" mean "no," so that you won\'t fall under judgment.',
                    13 => 'Is anyone among you suffering? He should pray. Is anyone cheerful? He should sing praises.',
                    14 => 'Is anyone among you sick? He should call for the elders of the church, and they are to pray over him, anointing him with oil in the name of the Lord.',
                    15 => 'The prayer of faith will save the sick person, and the Lord will raise him up; if he has committed sins, he will be forgiven.',
                    16 => 'Therefore, confess your sins to one another and pray for one another, so that you may be healed. The prayer of a righteous person is very powerful in its effect.',
                    17 => 'Elijah was a human being as we are, and he prayed earnestly that it would not rain, and for three years and six months it did not rain on the land.',
                    18 => 'Then he prayed again, and the sky gave rain and the land produced its fruit.',
                    19 => 'My brothers and sisters, if any among you strays from the truth, and someone turns him back,',
                    20 => 'let that person know that whoever turns a sinner from the error of his way will save his soul from death and cover a multitude of sins.',
                ],
                'versesToSections' => [
                    1 => 1,
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
                    12 => 3,
                    13 => 4,
                    14 => 4,
                    15 => 4,
                    16 => 4,
                    17 => 4,
                    18 => 4,
                    19 => 4,
                    20 => 4,
                ],
            ],
        ];
    }
} 