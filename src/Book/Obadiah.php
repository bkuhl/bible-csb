<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Obadiah extends Book
{
    public const ABBREVIATION = 'Obad';
    public const ID = 31;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Obadiah';
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
                    1 => 'Edom\'s Sins against Judah',
                    2 => 'Judgment of the Nations',
                    3 => 'Future Blessing for Israel',
                ],
                'verses' => [
                    1 => 'The vision of Obadiah. Edom\'s Certain Judgment This is what the Lord God has said about Edom: We have heard a message from the Lord; an envoy has been sent among the nations: "Rise up, and let\'s go to war against her."',
                    2 => 'Look, I will make you insignificant among the nations; you will be deeply despised.',
                    3 => 'Your arrogant heart has deceived you, you who live in clefts of the rock in your home on the heights, who say to yourself, "Who can bring me down to the ground? "',
                    4 => 'Though you seem to soar like an eagle and make your nest among the stars, even from there I will bring you down. This is the Lord\'s declaration.',
                    5 => 'If thieves came to you, if marauders by night — how ravaged you would be! — wouldn\'t they steal only what they wanted? If grape harvesters came to you, wouldn\'t they leave a few grapes?',
                    6 => 'How Esau will be pillaged, his hidden treasures searched out!',
                    7 => 'Everyone who has a treaty with you will drive you to the border; everyone at peace with you will deceive and conquer you. Those who eat your bread will set a trap for you. He will be unaware of it.',
                    8 => 'In that day — this is the Lord\'s declaration — will I not eliminate the wise ones of Edom and those who understand from the hill country of Esau?',
                    9 => 'Teman, your warriors will be terrified so that everyone from the hill country of Esau will be destroyed by slaughter.',
                    10 => 'You will be covered with shame and destroyed forever because of violence done to your brother Jacob.',
                    11 => 'On the day you stood aloof, on the day strangers captured his wealth, while foreigners entered his city gate and cast lots for Jerusalem, you were just like one of them.',
                    12 => 'Do not gloat over your brother in the day of his calamity; do not rejoice over the people of Judah in the day of their destruction; do not boastfully mock in the day of distress.',
                    13 => 'Do not enter my people\'s city gate in the day of their disaster. Yes, you — do not gloat over their misery in the day of their disaster, and do not appropriate their possessions in the day of their disaster.',
                    14 => 'Do not stand at the crossroads to cut off their fugitives, and do not hand over their survivors in the day of distress.',
                    15 => 'For the day of the is near, against all the nations. As you have done, it will be done to you; what you deserve will return on your own head.',
                    16 => 'As you have drunk on my holy mountain, so all the nations will drink continually. They will drink and gulp down and be as though they had never been.',
                    17 => 'But there will be a deliverance on Mount Zion, and it will be holy; the house of Jacob will dispossess those who dispossessed them.',
                    18 => 'Then the house of Jacob will be a blazing fire, and the house of Joseph, a burning flame, but the house of Esau will be stubble; Jacob will set them on fire and consume Edom. Therefore no survivor will remain of the house of Esau, for the Lord has spoken.',
                    19 => 'People from the Negev will possess the hill country of Esau; those from the Judean foothills will possess the land of the Philistines. They will possess the territories of Ephraim and Samaria, while Benjamin will possess Gilead.',
                    20 => 'The exiles of the Israelites who are in Halah and who are among the Canaanites as far as Zarephath as well as the exiles of Jerusalem who are in Sepharad will possess the cities of the Negev.',
                    21 => 'Saviors will ascend Mount Zion to rule over the hill country of Esau, and the kingdom will be the Lord\'s.',
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
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                ],
            ],
        ];
    }
} 