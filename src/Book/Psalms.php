<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Psalms extends Book
{
    public const ABBREVIATION = 'Ps';
    public const ID = 19;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Psalms';
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
                    1 => 'The Two Ways',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Coronation of the Son',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Confidence in Troubled Times',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'A Night Prayer',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'The Refuge of the Righteous',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'A Prayer for Mercy',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'Prayer for Justice',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'God\'s Glory, Human Dignity',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Celebration of God\'s Justice',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            10 => [
                'sections' => [
                    1 => 'Need for God\'s Justice',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            11 => [
                'sections' => [
                    1 => 'Refuge in the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            12 => [
                'sections' => [
                    1 => 'Oppression by the Wicked',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            13 => [
                'sections' => [
                    1 => 'A Plea for Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            14 => [
                'sections' => [
                    1 => 'A Portrait of Sinners',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            15 => [
                'sections' => [
                    1 => 'A Description of the Godly',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            16 => [
                'sections' => [
                    1 => 'Confidence in the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            17 => [
                'sections' => [
                    1 => 'A Prayer for Protection',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            18 => [
                'sections' => [
                    1 => 'Praise for Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            19 => [
                'sections' => [
                    1 => 'The Witness of Creation and Scripture',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            20 => [
                'sections' => [
                    1 => 'Deliverance in Battle',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            21 => [
                'sections' => [
                    1 => 'The King\'s Victory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            22 => [
                'sections' => [
                    1 => 'From Suffering to Praise',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            23 => [
                'sections' => [
                    1 => 'The Good Shepherd',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            24 => [
                'sections' => [
                    1 => 'The King of Glory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            25 => [
                'sections' => [
                    1 => 'Dependence on the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            26 => [
                'sections' => [
                    1 => 'Prayer for Vindication',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            27 => [
                'sections' => [
                    1 => 'My Stronghold',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            28 => [
                'sections' => [
                    1 => 'My Strength',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            29 => [
                'sections' => [
                    1 => 'The Voice of the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            30 => [
                'sections' => [
                    1 => 'Joy in the Morning',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            31 => [
                'sections' => [
                    1 => 'A Plea for Protection',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            32 => [
                'sections' => [
                    1 => 'The Joy of Forgiveness',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            33 => [
                'sections' => [
                    1 => 'Praise to the Creator',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            34 => [
                'sections' => [
                    1 => 'The Delivers the Righteous',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            35 => [
                'sections' => [
                    1 => 'Prayer for Victory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            36 => [
                'sections' => [
                    1 => 'Human Wickedness and God\'s Love',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            37 => [
                'sections' => [
                    1 => 'Instruction in Wisdom',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            38 => [
                'sections' => [
                    1 => 'Prayer of a Suffering Sinner',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            39 => [
                'sections' => [
                    1 => 'The Fleeting Nature of Life',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            40 => [
                'sections' => [
                    1 => 'Thanksgiving and a Cry for Help',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            41 => [
                'sections' => [
                    1 => 'Victory in spite of Betrayal',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            42 => [
                'sections' => [
                    1 => 'Longing for God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            43 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            44 => [
                'sections' => [
                    1 => 'Israel\'s Complaint',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            45 => [
                'sections' => [
                    1 => 'A Royal Wedding Song',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            46 => [
                'sections' => [
                    1 => 'God Our Refuge',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            47 => [
                'sections' => [
                    1 => 'God Our King',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            48 => [
                'sections' => [
                    1 => 'Zion Exalted',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            49 => [
                'sections' => [
                    1 => 'Misplaced Trust in Wealth',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            50 => [
                'sections' => [
                    1 => 'God as Judge',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            51 => [
                'sections' => [
                    1 => 'A Prayer for Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            52 => [
                'sections' => [
                    1 => 'God Judges the Proud',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            53 => [
                'sections' => [
                    1 => 'A Portrait of Sinners',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            54 => [
                'sections' => [
                    1 => 'Prayer for Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            55 => [
                'sections' => [
                    1 => 'Betrayal by a Friend',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            56 => [
                'sections' => [
                    1 => 'A Call for God\'s Protection',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            57 => [
                'sections' => [
                    1 => 'Praise for God\'s Protection',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            58 => [
                'sections' => [
                    1 => 'A Cry against Injustice',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            59 => [
                'sections' => [
                    1 => 'God Our Stronghold',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            60 => [
                'sections' => [
                    1 => 'Prayer in Difficult Times',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            61 => [
                'sections' => [
                    1 => 'Security in God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            62 => [
                'sections' => [
                    1 => 'Trust in God Alone',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            63 => [
                'sections' => [
                    1 => 'Praise God Who Satisfies',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            64 => [
                'sections' => [
                    1 => 'Protection from Evildoers',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            65 => [
                'sections' => [
                    1 => 'God\'s Care for the Earth',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            66 => [
                'sections' => [
                    1 => 'Praise for God\'s Mighty Acts',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            67 => [
                'sections' => [
                    1 => 'All Will Praise God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            68 => [
                'sections' => [
                    1 => 'God\'s Majestic Power',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            69 => [
                'sections' => [
                    1 => 'A Plea for Rescue',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            70 => [
                'sections' => [
                    1 => 'A Call for Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            71 => [
                'sections' => [
                    1 => 'God\'s Help in Old Age',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            72 => [
                'sections' => [
                    1 => 'A Prayer for the King',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            73 => [
                'sections' => [
                    1 => 'God\'s Ways Vindicated',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            74 => [
                'sections' => [
                    1 => 'Prayer for Israel',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            75 => [
                'sections' => [
                    1 => 'God Judges the Wicked',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            76 => [
                'sections' => [
                    1 => 'God, the Powerful Judge',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            77 => [
                'sections' => [
                    1 => 'Confidence in a Time of Crisis',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            78 => [
                'sections' => [
                    1 => 'Lessons from Israel\'s Past',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            79 => [
                'sections' => [
                    1 => 'Faith amid Confusion',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            80 => [
                'sections' => [
                    1 => 'A Prayer for Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            81 => [
                'sections' => [
                    1 => 'A Call to Obedience',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            82 => [
                'sections' => [
                    1 => 'A Plea for Righteous Judgment',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            83 => [
                'sections' => [
                    1 => 'Prayer against Enemies',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            84 => [
                'sections' => [
                    1 => 'Longing for God\'s House',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            85 => [
                'sections' => [
                    1 => 'Restoration of Favor',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            86 => [
                'sections' => [
                    1 => 'Lament and Petition',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            87 => [
                'sections' => [
                    1 => 'Zion, the City of God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            88 => [
                'sections' => [
                    1 => 'A Cry of Desperation',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            89 => [
                'sections' => [
                    1 => 'Perplexity about God\'s Promises',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            90 => [
                'sections' => [
                    1 => 'Eternal God and Mortal Man',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            91 => [
                'sections' => [
                    1 => 'The Protection of the Most High',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            92 => [
                'sections' => [
                    1 => 'God\'s Love and Faithfulness',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            93 => [
                'sections' => [
                    1 => 'God\'s Eternal Reign',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            94 => [
                'sections' => [
                    1 => 'The Just Judge',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            95 => [
                'sections' => [
                    1 => 'Worship and Warning',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            96 => [
                'sections' => [
                    1 => 'King of the Earth',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            97 => [
                'sections' => [
                    1 => 'The Majestic King',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            98 => [
                'sections' => [
                    1 => 'Praise the King',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            99 => [
                'sections' => [
                    1 => 'The King Is Holy',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            100 => [
                'sections' => [
                    1 => 'Be Thankful',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            101 => [
                'sections' => [
                    1 => 'A Vow of Integrity',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            102 => [
                'sections' => [
                    1 => 'Affliction in light of Eternity',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            103 => [
                'sections' => [
                    1 => 'The Forgiving God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            104 => [
                'sections' => [
                    1 => 'God the Creator',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            105 => [
                'sections' => [
                    1 => 'God\'s Faithfulness to His People',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            106 => [
                'sections' => [
                    1 => 'Israel\'s Unfaithfulness to God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            107 => [
                'sections' => [
                    1 => 'Thanksgiving for God\'s Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            108 => [
                'sections' => [
                    1 => 'A Plea for Victory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            109 => [
                'sections' => [
                    1 => 'Prayer against an Enemy',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            110 => [
                'sections' => [
                    1 => 'The Priestly King',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            111 => [
                'sections' => [
                    1 => 'Praise for the \'s Works',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            112 => [
                'sections' => [
                    1 => 'The Traits of the Righteous',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            113 => [
                'sections' => [
                    1 => 'Praise to the Merciful God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            114 => [
                'sections' => [
                    1 => 'God\'s Deliverance of Israel',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            115 => [
                'sections' => [
                    1 => 'Glory to God Alone',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            116 => [
                'sections' => [
                    1 => 'Thanks to God for Deliverance',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            117 => [
                'sections' => [
                    1 => 'Universal Call to Praise',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            118 => [
                'sections' => [
                    1 => 'Thanksgiving for Victory',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            119 => [
                'sections' => [
                    1 => 'Delight in God\'s Word',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            120 => [
                'sections' => [
                    1 => 'A Cry for Truth and Peace',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            121 => [
                'sections' => [
                    1 => 'The Our Protector',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            122 => [
                'sections' => [
                    1 => 'A Prayer for Jerusalem',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            123 => [
                'sections' => [
                    1 => 'Looking for God\'s Favor',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            124 => [
                'sections' => [
                    1 => 'The Is on Our Side',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            125 => [
                'sections' => [
                    1 => 'Israel\'s Stability',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            126 => [
                'sections' => [
                    1 => 'Zion\'s Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            127 => [
                'sections' => [
                    1 => 'The Blessing of the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            128 => [
                'sections' => [
                    1 => 'Blessings for Those Who Fear God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            129 => [
                'sections' => [
                    1 => 'Protection of the Oppressed',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            130 => [
                'sections' => [
                    1 => 'Awaiting Redemption',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            131 => [
                'sections' => [
                    1 => 'A Childlike Spirit',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            132 => [
                'sections' => [
                    1 => 'David and Zion Chosen',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            133 => [
                'sections' => [
                    1 => 'Living in Harmony',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            134 => [
                'sections' => [
                    1 => 'Call to Evening Worship',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            135 => [
                'sections' => [
                    1 => 'The Is Great',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            136 => [
                'sections' => [
                    1 => 'God\'s Love Is Eternal',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            137 => [
                'sections' => [
                    1 => 'Lament of the Exiles',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            138 => [
                'sections' => [
                    1 => 'A Thankful Heart',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            139 => [
                'sections' => [
                    1 => 'The All-Knowing, Ever-Present God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            140 => [
                'sections' => [
                    1 => 'Prayer for Rescue',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            141 => [
                'sections' => [
                    1 => 'Protection from Sin and Sinners',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            142 => [
                'sections' => [
                    1 => 'A Cry of Distress',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            143 => [
                'sections' => [
                    1 => 'A Cry for Help',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            144 => [
                'sections' => [
                    1 => 'A King\'s Prayer',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            145 => [
                'sections' => [
                    1 => 'Praising God\'s Greatness',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            146 => [
                'sections' => [
                    1 => 'The God of Compassion',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            147 => [
                'sections' => [
                    1 => 'God Restores Jerusalem',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            148 => [
                'sections' => [
                    1 => 'Creation\'s Praise of the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            149 => [
                'sections' => [
                    1 => 'Praise for God\'s Triumph',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            150 => [
                'sections' => [
                    1 => 'Praise the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
        ];
    }
} 