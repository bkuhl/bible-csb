<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Hosea extends Book
{
    public const ABBREVIATION = 'Hos';
    public const ID = 28;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Hosea';
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
                    1 => 'Hosea\'s Marriage and Children',
                ],
                'verses' => [
                    1 => 'The word of the that came to Hosea son of Beeri during the reigns of Uzziah, Jotham, Ahaz, and Hezekiah, kings of Judah, and of Jeroboam son of Jehoash, king of Israel.',
                    2 => 'When the first spoke to Hosea, he said this to him:',
                    3 => 'So he went and married Gomer daughter of Diblaim, and she conceived and bore him a son.',
                    4 => 'Then the said to him:',
                    6 => 'She conceived again and gave birth to a daughter, and the Lord said to him:',
                    8 => 'After Gomer had weaned Lo-ruhamah, she conceived and gave birth to a son.',
                    9 => 'Then the said:',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    6 => 1,
                    8 => 1,
                    9 => 1,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Israel\'s Adultery Rebuked',
                    2 => 'Israel\'s Adultery Forgiven',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Waiting for Restoration',
                ],
                'verses' => [
                    1 => 'Then the said to me, "Go again; show love to a woman who is loved by another man and is an adulteress, just as the Lord loves the Israelites though they turn to other gods and love raisin cakes."',
                    2 => 'So I bought her for fifteen shekels of silver and nine bushels of barley.',
                    3 => 'I said to her, "You are to live with me many days. You must not be promiscuous or belong to any man, and I will act the same way toward you."',
                    4 => 'For the Israelites must live many days without king or prince, without sacrifice or sacred pillar, and without ephod or household idols.',
                    5 => 'Afterward, the people of Israel will return and seek the Lord their God and David their king. They will come with awe to the Lord and to his goodness in the last days.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'God\'s Case against Israel',
                    2 => 'Warnings for Israel and Judah',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'A Call to Repentance',
                    2 => 'The \'s First Lament',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'Israel\'s Corruption',
                    2 => 'The \'s Second Lament',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'Israel\'s False Hopes',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'The Coming Exile',
                    2 => 'Ephraim Bereaved of Offspring',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            10 => [
                'sections' => [
                    1 => 'The Vine and the Calf',
                    2 => 'Israel\'s Defeat because of Sin',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            11 => [
                'sections' => [
                    1 => 'The \'s Love for Israel',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            12 => [
                'sections' => [
                    1 => 'God\'s Case against Jacob\'s Heirs',
                    2 => 'Judgment on Apostate Israel',
                    3 => 'Further Indictment of Jacob\'s Heirs',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            13 => [
                'sections' => [
                    1 => 'Death and Resurrection',
                    2 => 'The Coming Judgment',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            14 => [
                'sections' => [
                    1 => 'A Plea to Repent',
                    2 => 'A Promise of Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 