<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SecondPeter extends Book
{
    public const ABBREVIATION = '2 Pet';
    public const ID = 61;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '2 Peter';
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
                    2 => 'Growth in the Faith',
                    3 => 'The Trustworthy Prophetic Word',
                ],
                'verses' => [
                    1 => 'Simeon Peter, a servant and an apostle of Jesus Christ: To those who have received a faith equal to ours through the righteousness of our God and Savior Jesus Christ.',
                    2 => 'May grace and peace be multiplied to you through the knowledge of God and of Jesus our Lord.',
                    3 => 'His divine power has given us everything required for life and godliness through the knowledge of him who called us by his own glory and goodness.',
                    4 => 'By these he has given us very great and precious promises, so that through them you may share in the divine nature, escaping the corruption that is in the world because of evil desire.',
                    5 => 'For this very reason, make every effort to supplement your faith with goodness, goodness with knowledge,',
                    6 => 'knowledge with self-control, self-control with endurance, endurance with godliness,',
                    7 => 'godliness with brotherly affection, and brotherly affection with love.',
                    8 => 'For if you possess these qualities in increasing measure, they will keep you from being useless or unfruitful in the knowledge of our Lord Jesus Christ.',
                    9 => 'The person who lacks these things is blind and shortsighted and has forgotten the cleansing from his past sins.',
                    10 => 'Therefore, brothers and sisters, make every effort to confirm your calling and election, because if you do these things you will never stumble.',
                    11 => 'For in this way, entry into the eternal kingdom of our Lord and Savior Jesus Christ will be richly provided for you.',
                    12 => 'Therefore I will always remind you about these things, even though you know them and are established in the truth you now have.',
                    13 => 'I think it is right, as long as I am in this bodily tent, to wake you up with a reminder,',
                    14 => 'since I know that I will soon lay aside my tent, as our Lord Jesus Christ has indeed made clear to me.',
                    15 => 'And I will also make every effort so that you are able to recall these things at any time after my departure.',
                    16 => 'For we did not follow cleverly contrived myths when we made known to you the power and coming of our Lord Jesus Christ; instead, we were eyewitnesses of his majesty.',
                    17 => 'For he received honor and glory from God the Father when the voice came to him from the Majestic Glory, saying "This is my beloved Son, with whom I am well-pleased! "',
                    18 => 'We ourselves heard this voice when it came from heaven while we were with him on the holy mountain.',
                    19 => 'We also have the prophetic word strongly confirmed, and you will do well to pay attention to it, as to a lamp shining in a dark place, until the day dawns and the morning star rises in your hearts.',
                    20 => 'Above all, you know this: No prophecy of Scripture comes from the prophet\'s own interpretation,',
                    21 => 'because no prophecy ever came by the will of man; instead, men spoke from God as they were carried along by the Holy Spirit.',
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
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The Judgment of False Teachers',
                ],
                'verses' => [
                    1 => 'There were indeed false prophets among the people, just as there will be false teachers among you. They will bring in destructive heresies, even denying the Master who bought them, and will bring swift destruction on themselves.',
                    2 => 'Many will follow their depraved ways, and the way of truth will be maligned because of them.',
                    3 => 'They will exploit you in their greed with made-up stories. Their condemnation, pronounced long ago, is not idle, and their destruction does not sleep.',
                    4 => 'For if God didn\'t spare the angels who sinned but cast them into hell and delivered them in chains of utter darkness to be kept for judgment;',
                    5 => 'and if he didn\'t spare the ancient world, but protected Noah, a preacher of righteousness, and seven others, when he brought the flood on the world of the ungodly;',
                    6 => 'and if he reduced the cities of Sodom and Gomorrah to ashes and condemned them to extinction, making them an example of what is coming to the ungodly;',
                    7 => 'and if he rescued righteous Lot, distressed by the depraved behavior of the immoral',
                    8 => '(for as that righteous man lived among them day by day, his righteous soul was tormented by the lawless deeds he saw and heard ) —',
                    9 => 'then the Lord knows how to rescue the godly from trials and to keep the unrighteous under punishment for the day of judgment,',
                    10 => 'Bold, arrogant people! They are not afraid to slander the glorious ones;',
                    11 => 'however, angels, who are greater in might and power, do not bring a slanderous charge against them before the Lord.',
                    12 => 'But these people, like irrational animals — creatures of instinct born to be caught and destroyed — slander what they do not understand, and in their destruction they too will be destroyed.',
                    13 => 'They will be paid back with harm for the harm they have done. They consider it a pleasure to carouse in broad daylight. They are spots and blemishes, delighting in their deceptions while they feast with you.',
                    14 => 'They have eyes full of adultery that never stop looking for sin. They seduce unstable people and have hearts trained in greed. Children under a curse!',
                    15 => 'They have gone astray by abandoning the straight path and have followed the path of Balaam, the son of Bosor, who loved the wages of wickedness',
                    16 => 'but received a rebuke for his lawlessness: A speechless donkey spoke with a human voice and restrained the prophet\'s madness.',
                    17 => 'These people are springs without water, mists driven by a storm. The gloom of darkness has been reserved for them.',
                    18 => 'For by uttering boastful, empty words, they seduce, with fleshly desires and debauchery, people who have barely escaped from those who live in error.',
                    19 => 'They promise them freedom, but they themselves are slaves of corruption, since people are enslaved to whatever defeats them.',
                    20 => 'For if, having escaped the world\'s impurity through the knowledge of the Lord and Savior Jesus Christ, they are again entangled in these things and defeated, the last state is worse for them than the first.',
                    21 => 'For it would have been better for them not to have known the way of righteousness than, after knowing it, to turn back from the holy command delivered to them.',
                    22 => 'It has happened to them according to the true proverb: and, "A washed sow returns to wallowing in the mud."',
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
                    14 => 1,
                    15 => 1,
                    16 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                    22 => 1,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'The Day of the Lord',
                    2 => 'Conclusion',
                ],
                'verses' => [
                    1 => 'Dear friends, this is now the second letter I have written to you; in both letters, I want to stir up your sincere understanding by way of reminder,',
                    2 => 'so that you recall the words previously spoken by the holy prophets and the command of our Lord and Savior given through your apostles.',
                    3 => 'Above all, be aware of this: Scoffers will come in the last days scoffing and following their own evil desires,',
                    4 => 'saying, "Where is his \'coming\' that he promised? Ever since our ancestors fell asleep, all things continue as they have been since the beginning of creation."',
                    5 => 'They deliberately overlook this: By the word of God the heavens came into being long ago and the earth was brought about from water and through water.',
                    6 => 'Through these the world of that time perished when it was flooded.',
                    7 => 'By the same word, the present heavens and earth are stored up for fire, being kept for the day of judgment and destruction of the ungodly.',
                    8 => 'Dear friends, don\'t overlook this one fact: With the Lord one day is like a thousand years, and a thousand years like one day.',
                    9 => 'The Lord does not delay his promise, as some understand delay, but is patient with you, not wanting any to perish but all to come to repentance.',
                    10 => 'But the day of the Lord will come like a thief; on that day the heavens will pass away with a loud noise, the elements will burn and be dissolved, and the earth and the works on it will be disclosed.',
                    11 => 'Since all these things are to be dissolved in this way, it is clear what sort of people you should be in holy conduct and godliness',
                    12 => 'as you wait for the day of God and hasten its coming. Because of that day, the heavens will be dissolved with fire and the elements will melt with heat.',
                    13 => 'But based on his promise, we wait for new heavens and a new earth, where righteousness dwells.',
                    14 => 'Therefore, dear friends, while you wait for these things, make every effort to be found without spot or blemish in his sight, at peace.',
                    15 => 'Also, regard the patience of our Lord as salvation, just as our dear brother Paul has written to you according to the wisdom given to him.',
                    16 => 'He speaks about these things in all his letters. There are some things hard to understand in them. The untaught and unstable will twist them to their own destruction, as they also do with the rest of the Scriptures.',
                    17 => 'Therefore, dear friends, since you know this in advance, be on your guard, so that you are not led away by the error of lawless people and fall from your own stable position.',
                    18 => 'But grow in the grace and knowledge of our Lord and Savior Jesus Christ. To him be the glory both now and to the day of eternity.',
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
                ],
            ],
        ];
    }
} 