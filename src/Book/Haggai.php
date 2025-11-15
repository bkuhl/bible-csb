<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Haggai extends Book
{
    public const ABBREVIATION = 'Hag';
    public const ID = 37;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Haggai';
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
                    1 => 'Command to Rebuild the Temple',
                    2 => 'The People\'s Response',
                ],
                'verses' => [
                    1 => 'In the second year of King Darius, on the first day of the sixth month, the word of the <span class="smallcaps">Lord</span> came through the prophet Haggai to Zerubbabel son of Shealtiel, the governor of Judah, and to Joshua son of Jehozadak, the high priest:',
                    2 => '"The <span class="smallcaps">Lord</span> of Armies says this: These people say: The time has not come for the house of the <span class="smallcaps">Lord</span> to be rebuilt."',
                    3 => 'The word of the <span class="smallcaps">Lord</span> came through the prophet Haggai:',
                    4 => '"Is it a time for you yourselves to live in your paneled houses, while this house lies in ruins? "',
                    5 => 'Now, the <span class="smallcaps">Lord</span> of Armies says this: "Think carefully about your ways:',
                    6 => 'You have planted much but harvested little. You eat but never have enough to be satisfied. You drink but never have enough to be happy. You put on clothes but never have enough to get warm. The wage earner puts his wages into a bag with a hole in it."',
                    7 => 'The <span class="smallcaps">Lord</span> of Armies says this: "Think carefully about your ways.',
                    8 => 'Go up into the hills, bring down lumber, and build the house; and I will be pleased with it and be glorified," says the <span class="smallcaps">Lord</span>.',
                    9 => '"You expected much, but then it amounted to little. When you brought the harvest to your house, I ruined it. Why? " This is the declaration of the <span class="smallcaps">Lord</span> of Armies. "Because my house still lies in ruins, while each of you is busy with his own house.',
                    10 => 'So on your account, the skies have withheld the dew and the land its crops.',
                    11 => 'I have summoned a drought on the fields and the hills, on the grain, new wine, fresh oil, and whatever the ground yields, on people and animals, and on all that your hands produce."',
                    12 => 'Then Zerubbabel son of Shealtiel, the high priest Joshua son of Jehozadak, and the entire remnant of the people obeyed the <span class="smallcaps">Lord</span> their God and the words of the prophet Haggai, because the <span class="smallcaps">Lord</span> their God had sent him. So the people feared the <span class="smallcaps">Lord</span>.',
                    13 => 'Then Haggai, the <span class="smallcaps">Lord</span>\'s messenger, delivered the <span class="smallcaps">Lord</span>\'s message to the people: "I am with you — this is the <span class="smallcaps">Lord</span>\'s declaration."',
                    14 => 'The <span class="smallcaps">Lord</span> roused the spirit of Zerubbabel son of Shealtiel, governor of Judah, the spirit of the high priest Joshua son of Jehozadak, and the spirit of all the remnant of the people. They began work on the house of the <span class="smallcaps">Lord</span> of Armies, their God,',
                    15 => 'on the twenty-fourth day of the sixth month, in the second year of King Darius.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
                    6 => 0,
                    7 => 0,
                    8 => 0,
                    9 => 0,
                    10 => 0,
                    11 => 0,
                    12 => 1,
                    13 => 1,
                    14 => 1,
                    15 => 1,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Encouragement and Promise',
                    2 => 'From Deprivation to Blessing',
                    3 => 'Promise to Zerubbabel',
                ],
                'verses' => [
                    1 => 'On the twenty-first day of the seventh month, the word of the <span class="smallcaps">Lord</span> came through the prophet Haggai:',
                    2 => '"Speak to Zerubbabel son of Shealtiel, governor of Judah, to the high priest Joshua son of Jehozadak, and to the remnant of the people:',
                    3 => '\'Who is left among you who saw this house in its former glory? How does it look to you now? Doesn\'t it seem to you like nothing by comparison?',
                    4 => 'Even so, be strong, Zerubbabel — this is the <span class="smallcaps">Lord</span>\'s declaration. Be strong, Joshua son of Jehozadak, high priest. Be strong, all you people of the land — this is the <span class="smallcaps">Lord</span>\'s declaration. Work! For I am with you — the declaration of the <span class="smallcaps">Lord</span> of Armies.',
                    5 => 'This is the promise I made to you when you came out of Egypt, and my Spirit is present among you; don\'t be afraid.\' "',
                    6 => 'For the <span class="smallcaps">Lord</span> of Armies says this: "Once more, in a little while, I am going to shake the heavens and the earth, the sea and the dry land.',
                    7 => 'I will shake all the nations so that the treasures of all the nations will come, and I will fill this house with glory," says the <span class="smallcaps">Lord</span> of Armies.',
                    8 => '"The silver and gold belong to me" — this is the declaration of the <span class="smallcaps">Lord</span> of Armies.',
                    9 => '"The final glory of this house will be greater than the first," says the <span class="smallcaps">Lord</span> of Armies. "I will provide peace in this place" — this is the declaration of the <span class="smallcaps">Lord</span> of Armies.',
                    10 => 'On the twenty-fourth day of the ninth month, in the second year of Darius, the word of the <span class="smallcaps">Lord</span> came to the prophet Haggai:',
                    11 => '"This is what the <span class="smallcaps">Lord</span> of Armies says: Ask the priests for a ruling.',
                    12 => 'If a man is carrying consecrated meat in the fold of his garment, and it touches bread, stew, wine, oil, or any other food, does it become holy? " The priests answered, "No."',
                    13 => 'Then Haggai asked, "If someone defiled by contact with a corpse touches any of these, does it become defiled? " The priests answered, "It becomes defiled."',
                    14 => 'Then Haggai replied, "So is this people, and so is this nation before me — this is the <span class="smallcaps">Lord</span>\'s declaration. And so is every work of their hands; even what they offer there is defiled.',
                    15 => '"Now from this day on, think carefully: Before one stone was placed on another in the <span class="smallcaps">Lord</span>\'s temple,',
                    16 => 'what state were you in? When someone came to a grain heap of twenty measures, it only amounted to ten; when one came to the winepress to dip fifty measures from the vat, it only amounted to twenty.',
                    17 => 'I struck you — all the work of your hands — with blight, mildew, and hail, but you didn\'t turn to me — this is the <span class="smallcaps">Lord</span>\'s declaration.',
                    18 => 'From this day on, think carefully; from the twenty-fourth day of the ninth month, from the day the foundation of the <span class="smallcaps">Lord</span>\'s temple was laid; think carefully.',
                    19 => 'Is there still seed left in the granary? The vine, the fig, the pomegranate, and the olive tree have not yet produced. But from this day on I will bless you."',
                    20 => 'The word of the <span class="smallcaps">Lord</span> came to Haggai a second time on the twenty-fourth day of the month:',
                    21 => '"Speak to Zerubbabel, governor of Judah: I am going to shake the heavens and the earth.',
                    22 => 'I will overturn royal thrones and destroy the power of the Gentile kingdoms. I will overturn chariots and their riders. Horses and their riders will fall, each by his brother\'s sword.',
                    23 => 'On that day" — this is the declaration of the <span class="smallcaps">Lord</span> of Armies — "I will take you, Zerubbabel son of Shealtiel, my servant" — this is the <span class="smallcaps">Lord</span>\'s declaration — "and make you like my signet ring, for I have chosen you." This is the declaration of the <span class="smallcaps">Lord</span> of Armies.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
                    6 => 0,
                    7 => 0,
                    8 => 0,
                    9 => 0,
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
                    20 => 2,
                    21 => 2,
                    22 => 2,
                    23 => 2,
                ],
            ],
        ];
    }
} 