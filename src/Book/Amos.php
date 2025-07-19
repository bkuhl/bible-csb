<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Amos extends Book
{
    public const ABBREVIATION = 'Amos';
    public const ID = 30;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Amos';
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
                    1 => 'Judgment on Israel\'s Neighbors',
                ],
                'verses' => [
                    1 => 'The words of Amos, who was one of the sheep breeders from Tekoa — what he saw regarding Israel in the days of King Uzziah of Judah and Jeroboam son of Jehoash, king of Israel, two years before the earthquake.',
                    2 => 'He said:',
                    3 => 'The says:',
                    6 => 'The says:',
                    9 => 'The says:',
                    11 => 'The says:',
                    13 => 'The says:',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 1,
                    6 => 1,
                    9 => 1,
                    11 => 1,
                    13 => 1,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Judgment on Judah',
                    2 => 'Judgment on Israel',
                ],
                'verses' => [
                    1 => 'The says:',
                    4 => 'The says:',
                    6 => 'The says:',
                    11 => 'This is the Lord\'s declaration.',
                    16 => 'this is the Lord\'s declaration.',
                ],
                'versesToSections' => [
                    1 => 0,
                    4 => 1,
                    6 => 2,
                    11 => 2,
                    16 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'God\'s Reasons for Punishing Israel',
                ],
                'verses' => [
                    1 => 'Listen to this message that the Lord has spoken against you, Israelites, against the entire clan that I brought from the land of Egypt:',
                    11 => 'Therefore, the Lord God says:',
                    12 => 'The says:',
                    15 => 'This is the Lord\'s declaration.',
                ],
                'versesToSections' => [
                    1 => 1,
                    11 => 1,
                    12 => 1,
                    15 => 1,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Social and Spiritual Corruption',
                    2 => 'God\'s Discipline and Israel\'s Apostasy',
                ],
                'verses' => [
                    2 => 'The Lord God has sworn by his holiness:',
                    5 => 'This is the declaration of the Lord God.',
                ],
                'versesToSections' => [
                    2 => 1,
                    5 => 1,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'Lamentation for Israel',
                    2 => 'Seek God and Live',
                    3 => 'The Day of the',
                ],
                'verses' => [
                    1 => 'Listen to this message that I am singing for you, a lament, house of Israel:',
                    3 => 'For the Lord God says: The city that marches out a thousand strong will have only a hundred left, and the one that marches out a hundred strong will have only ten left in the house of Israel.',
                    4 => 'For the says to the house of Israel:',
                    16 => 'Therefore the Lord, the God of Armies, the Lord, says:',
                    25 => '"House of Israel, was it sacrifices and grain offerings that you presented to me during the forty years in the wilderness?',
                    26 => 'But you have taken up Sakkuth your king and Kaiwan your star god, images you have made for yourselves.',
                    27 => 'So I will send you into exile beyond Damascus." The Lord, the God of Armies, is his name. He has spoken.',
                ],
                'versesToSections' => [
                    1 => 1,
                    3 => 1,
                    4 => 2,
                    16 => 2,
                    25 => 3,
                    26 => 3,
                    27 => 3,
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'Woe to the Complacent',
                    2 => 'Israel\'s Pride Judged',
                ],
                'verses' => [
                    8 => 'The Lord God has sworn by himself — this is the declaration of the , the God of Armies: I loathe Jacob\'s pride and hate his citadels, so I will hand over the city and everything in it.',
                    9 => 'And if there are ten men left in one house, they will die.',
                    10 => 'A close relative and burner will remove his corpse from the house. He will call to someone in the inner recesses of the house, "Any more with you? " That person will reply, "None." Then he will say, "Silence, because the Lord\'s name must not be invoked."',
                    11 => 'For the commands: The large house will be smashed to pieces, and the small house to rubble.',
                ],
                'versesToSections' => [
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'First Vision: Locusts',
                    2 => 'Second Vision: Fire',
                    3 => 'Third Vision: A Plumb Line',
                    4 => 'Amaziah\'s Opposition',
                ],
                'verses' => [
                    1 => 'The Lord God showed me this: He was forming a swarm of locusts at the time the spring crop first began to sprout — after the cutting of the king\'s hay.',
                    2 => 'When the locusts finished eating the vegetation of the land, I said, "Lord God, please forgive! How will Jacob survive since he is so small? "',
                    3 => 'The relented concerning this. "It will not happen," he said.',
                    4 => 'The Lord God showed me this: The Lord God was calling for a judgment by fire. It consumed the great deep and devoured the land.',
                    5 => 'Then I said, "Lord God, please stop! How will Jacob survive since he is so small? "',
                    6 => 'The relented concerning this. "This will not happen either," said the Lord God. I replied, "A plumb line." Then the Lord said, "I am setting a plumb line among my people Israel; I will no longer spare them:',
                    7 => 'He showed me this: The Lord was standing there by a vertical wall with a plumb line in his hand.',
                    8 => 'The asked me, "What do you see, Amos? "',
                    10 => 'Amaziah the priest of Bethel sent word to King Jeroboam of Israel, saying, "Amos has conspired against you right here in the house of Israel. The land cannot endure all his words,',
                    11 => 'for Amos has said this: \'Jeroboam will die by the sword, and Israel will certainly go into exile from its homeland.\' "',
                    12 => 'Then Amaziah said to Amos, "Go away, you seer! Flee to the land of Judah. Earn your living and give your prophecies there,',
                    13 => 'but don\'t ever prophesy at Bethel again, for it is the king\'s sanctuary and a royal temple."',
                    14 => 'So Amos answered Amaziah, "I was not a prophet or the son of a prophet; rather, I was a herdsman, and I took care of sycamore figs.',
                    15 => 'But the took me from following the flock and said to me, \'Go, prophesy to my people Israel.\' "',
                    16 => 'Now hear the word of the Lord. You say: Do not prophesy against Israel; do not preach against the house of Isaac.',
                    17 => 'Therefore, this is what the Lord says: Your wife will be a prostitute in the city, your sons and daughters will fall by the sword, and your land will be divided up with a measuring line. You yourself will die on pagan soil, and Israel will certainly go into exile from its homeland.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 3,
                    8 => 3,
                    10 => 4,
                    11 => 4,
                    12 => 4,
                    13 => 4,
                    14 => 4,
                    15 => 4,
                    16 => 4,
                    17 => 4,
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'Fourth Vision: A Basket of Summer Fruit',
                ],
                'verses' => [
                    1 => 'The Lord God showed me this: a basket of summer fruit.',
                    2 => 'The Lord said to me, "The end has come for my people Israel; I will no longer spare them.',
                    3 => 'In that day the temple songs will become wailing" — this is the Lord God\'s declaration. "Many dead bodies, thrown everywhere! Silence! "',
                    7 => 'The has sworn by the Pride of Jacob:',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    7 => 1,
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Fifth Vision: The Lord beside the Altar',
                    2 => 'Announcement of Judgment',
                    3 => 'Announcement of Restoration',
                ],
                'verses' => [
                    1 => 'I saw the Lord standing beside the altar, and he said:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
        ];
    }
} 