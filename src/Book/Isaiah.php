<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Isaiah extends Book
{
    private const ABBREVIATION = 'Isa';
    public const ID = 23;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Isaiah';
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
                    1 => 'Judah on Trial',
                    2 => 'Purification of Jerusalem',
                ],
                'verses' => [
                    1 => 'The vision concerning Judah and Jerusalem that Isaiah son of Amoz saw during the reigns of Kings Uzziah, Jotham, Ahaz, and Hezekiah of Judah.',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The City of Peace',
                    2 => 'The Day of the',
                ],
                'verses' => [
                    1 => 'The vision that Isaiah son of Amoz saw concerning Judah and Jerusalem:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Judah\'s Leaders Judged',
                    2 => 'Jerusalem\'s Women Judged',
                ],
                'verses' => [
                    16 => 'The also says:',
                    18 => 'On that day the Lord will strip their finery: ankle bracelets, headbands, crescents,',
                    19 => 'pendants, bracelets, veils,',
                    20 => 'headdresses, ankle jewelry, sashes, perfume bottles, amulets,',
                    21 => 'signet rings, nose rings,',
                    22 => 'festive robes, capes, cloaks, purses,',
                    23 => 'garments, linen clothes, turbans, and shawls.',
                ],
                'versesToSections' => [
                    16 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                    23 => 2,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Zion\'s Future Glory',
                ],
                'verses' => [
                    2 => 'On that day the Branch of the Lord will be beautiful and glorious, and the fruit of the land will be the pride and glory of Israel\'s survivors.',
                    3 => 'Whoever remains in Zion and whoever is left in Jerusalem will be called holy — all in Jerusalem written in the book of life —',
                    4 => 'when the Lord has washed away the filth of the daughters of Zion and cleansed the bloodguilt from the heart of Jerusalem by a spirit of judgment and a spirit of burning.',
                    5 => 'Then the will create a cloud of smoke by day and a glowing flame of fire by night over the entire site of Mount Zion and over its assemblies. For there will be a canopy over all the glory,',
                    6 => 'and there will be a shelter for shade from heat by day and a refuge and shelter from storm and rain.',
                ],
                'versesToSections' => [
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'Song of the Vineyard',
                    2 => 'Judah\'s Sins Denounced',
                ],
                'verses' => [
                    9 => 'I heard the of Armies say:',
                ],
                'versesToSections' => [
                    9 => 2,
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'Isaiah\'s Call and Mission',
                ],
                'verses' => [
                    1 => 'In the year that King Uzziah died, I saw the Lord seated on a high and lofty throne, and the hem of his robe filled the temple.',
                    2 => 'Seraphim were standing above him; they each had six wings: with two they covered their faces, with two they covered their feet, and with two they flew.',
                    3 => 'And one called to another:',
                    4 => 'The foundations of the doorways shook at the sound of their voices, and the temple was filled with smoke.',
                    5 => 'Then I said:',
                    6 => 'Then one of the seraphim flew to me, and in his hand was a glowing coal that he had taken from the altar with tongs.',
                    7 => 'He touched my mouth with it and said:',
                    8 => 'Then I heard the voice of the Lord asking:',
                    9 => 'And he replied:',
                    11 => 'Then I said, "Until when, Lord? " And he replied:',
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
                    11 => 1,
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'The Message to Ahaz',
                    2 => 'The Immanuel Prophecy',
                ],
                'verses' => [
                    1 => 'This took place during the reign of Ahaz, son of Jotham, son of Uzziah king of Judah: Aram\'s King Rezin and Israel\'s King Pekah son of Remaliah went to fight against Jerusalem, but they were not able to conquer it.',
                    2 => 'When it became known to the house of David that Aram had occupied Ephraim, the heart of Ahaz and the hearts of his people trembled like trees of a forest shaking in the wind.',
                    3 => 'The said to Isaiah, "Go out with your son Shear-jashub to meet Ahaz at the end of the conduit of the upper pool, by the road to the Launderer\'s Field.',
                    4 => 'Say to him: Calm down and be quiet. Don\'t be afraid or cowardly because of these two smoldering sticks, the fierce anger of Rezin and Aram, and the son of Remaliah.',
                    5 => 'For Aram, along with Ephraim and the son of Remaliah, has plotted harm against you. They say,',
                    6 => '\'Let\'s go up against Judah, terrorize it, and conquer it for ourselves. Then we can install Tabeel\'s son as king in it.\' "',
                    7 => 'This is what the Lord God says:',
                    10 => 'Then the spoke again to Ahaz:',
                    11 => '"Ask for a sign from the Lord your God — it can be as deep as Sheol or as high as heaven."',
                    12 => 'But Ahaz replied, "I will not ask. I will not test the Lord."',
                    13 => 'Isaiah said, "Listen, house of David! Is it not enough for you to try the patience of men? Will you also try the patience of my God?',
                    14 => 'Therefore, the Lord himself will give you a sign: See, the virgin will conceive, have a son, and name him Immanuel.',
                    15 => 'By the time he learns to reject what is bad and choose what is good, he will be eating curds and honey.',
                    16 => 'For before the boy knows to reject what is bad and choose what is good, the land of the two kings you dread will be abandoned.',
                    17 => 'The will bring on you, your people, and your father\'s house such a time as has never been since Ephraim separated from Judah: He will bring the king of Assyria."',
                    20 => 'On that day the Lord will use a razor hired from beyond the Euphrates River — the king of Assyria — to shave the hair on your heads, the hair on your legs, and even your beards.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                    7 => 1,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    20 => 2,
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'The Coming Assyrian Invasion',
                    2 => 'The of Armies, the Only Refuge',
                ],
                'verses' => [
                    1 => 'Then the said to me, "Take a large piece of parchment and write on it with an ordinary pen: Maher-shalal-hash-baz.',
                    2 => 'I have appointed trustworthy witnesses — the priest Uriah and Zechariah son of Jeberechiah."',
                    3 => 'I was then intimate with the prophetess, and she conceived and gave birth to a son. The Lord said to me, "Name him Maher-shalal-hash-baz,',
                    4 => 'for before the boy knows how to call \'Father,\' or \'Mother,\' the wealth of Damascus and the spoils of Samaria will be carried off to the king of Assyria."',
                    5 => 'The spoke to me again:',
                    11 => 'For this is what the Lord said to me with great power, to keep me from going the way of this people:',
                    18 => 'Here I am with the children the Lord has given me to be signs and wonders in Israel from the Lord of Armies who dwells on Mount Zion.',
                    19 => 'When they say to you, "Inquire of the mediums and the spiritists who chirp and mutter," shouldn\'t a people inquire of their God? Should they inquire of the dead on behalf of the living?',
                    20 => 'Go to God\'s instruction and testimony! If they do not speak according to this word, there will be no dawn for them.',
                    21 => 'They will wander through the land, dejected and hungry. When they are famished, they will become enraged, and, looking upward, will curse their king and their God.',
                    22 => 'They will look toward the earth and see only distress, darkness, and the gloom of affliction, and they will be driven into thick darkness.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    11 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Birth of the Prince of Peace',
                    2 => 'The Hand Raised against Israel',
                ],
                'verses' => [
                    1 => 'Nevertheless, the gloom of the distressed land will not be like that of the former times when he humbled the land of Zebulun and the land of Naphtali. But in the future he will bring honor to the way of the sea, to the land east of the Jordan, and to Galilee of the nations.',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            10 => [
                'sections' => [
                    1 => 'Assyria, the Instrument of Wrath',
                    2 => 'Judgment on Assyria',
                    3 => 'The Remnant Will Return',
                    4 => 'God Will Judge Assyria',
                ],
                'verses' => [
                    12 => 'But when the Lord finishes all his work against Mount Zion and Jerusalem, he will say, "I will punish the king of Assyria for his arrogant acts and the proud look in his eyes."',
                    13 => 'For he said:',
                    20 => 'On that day the remnant of Israel and the survivors of the house of Jacob will no longer depend on the one who struck them, but they will faithfully depend on the Lord, the Holy One of Israel.',
                    24 => 'Therefore, the Lord God of Armies says this: "My people who dwell in Zion, do not fear Assyria, though they strike you with a rod and raise their staff over you as the Egyptians did.',
                    25 => 'In just a little while my wrath will be spent and my anger will turn to their destruction."',
                    26 => 'And the of Armies will brandish a whip against him as he did when he struck Midian at the rock of Oreb; and he will raise his staff over the sea as he did in Egypt.',
                ],
                'versesToSections' => [
                    12 => 2,
                    13 => 2,
                    20 => 3,
                    24 => 3,
                    25 => 3,
                    26 => 3,
                ],
            ],
            11 => [
                'sections' => [
                    1 => 'Reign of the Davidic King',
                    2 => 'Israel Regathered',
                ],
                'verses' => [
                    11 => 'On that day the Lord will extend his hand a second time to recover the remnant of his people who survive — from Assyria, Egypt, Pathros, Cush, Elam, Shinar, Hamath, and the coasts and islands of the west.',
                ],
                'versesToSections' => [
                    11 => 2,
                ],
            ],
            12 => [
                'sections' => [
                    1 => 'A Song of Praise',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            13 => [
                'sections' => [
                    1 => 'A Pronouncement against Babylon',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning Babylon that Isaiah son of Amoz saw:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            14 => [
                'sections' => [
                    1 => 'Israel\'s Return',
                    2 => 'Downfall of the King of Babylon',
                    3 => 'Assyria Will Be Destroyed',
                    4 => 'A Pronouncement against Philistia',
                ],
                'verses' => [
                    1 => 'For the will have compassion on Jacob and will choose Israel again. He will settle them on their own land. The resident alien will join them and be united with the house of Jacob.',
                    2 => 'The nations will escort Israel and bring it to its homeland. Then the house of Israel will possess them as male and female slaves in the Lord\'s land. They will make captives of their captors and will rule over their oppressors.',
                    3 => 'When the gives you rest from your pain, torment, and the hard labor you were forced to do,',
                    4 => 'you will sing this song of contempt about the king of Babylon and say:',
                    22 => '"I will rise up against them" — this is the declaration of the of Armies — "and I will cut off from Babylon her reputation, remnant, offspring, and posterity" — this is the Lord\'s declaration.',
                    23 => '"I will make her a swampland and a region for herons, and I will sweep her away with the broom of destruction."',
                    24 => 'The of Armies has sworn:',
                    28 => 'In the year that King Ahaz died, this pronouncement came:',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    22 => 2,
                    23 => 2,
                    24 => 3,
                    28 => 4,
                ],
            ],
            15 => [
                'sections' => [
                    1 => 'A Pronouncement against Moab',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning Moab:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            16 => [
                'sections' => [
                ],
                'verses' => [
                    13 => 'This is the message that the Lord previously announced about Moab.',
                    14 => 'And now the says, "In three years, as a hired worker counts years, Moab\'s splendor will become an object of contempt, in spite of a very large population. And those who are left will be few and weak."',
                ],
                'versesToSections' => [
                    13 => 0,
                    14 => 0,
                ],
            ],
            17 => [
                'sections' => [
                    1 => 'A Pronouncement against Damascus',
                    2 => 'Judgment against Israel',
                    3 => 'Judgment against the Nations',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning Damascus:',
                    7 => 'On that day people will look to their Maker and will turn their eyes to the Holy One of Israel.',
                    8 => 'They will not look to the altars they made with their hands or to the Asherahs and shrines they made with their fingers.',
                ],
                'versesToSections' => [
                    1 => 1,
                    7 => 2,
                    8 => 2,
                ],
            ],
            18 => [
                'sections' => [
                    1 => 'The \'s Message to Cush',
                ],
                'verses' => [
                    4 => 'For the said to me:',
                    7 => 'At that time a gift will be brought to the Lord of Armies from a people tall and smooth-skinned, a people feared far and near, a powerful nation with a strange language, whose land is divided by rivers — to Mount Zion, the place of the name of the Lord of Armies.',
                ],
                'versesToSections' => [
                    4 => 1,
                    7 => 1,
                ],
            ],
            19 => [
                'sections' => [
                    1 => 'A Pronouncement against Egypt',
                    2 => 'Egypt Will Know the',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning Egypt:',
                    16 => 'On that day Egypt will be like women and will tremble with fear because of the threatening hand of the of Armies when he raises it against them.',
                    17 => 'The land of Judah will terrify Egypt; whenever Judah is mentioned, Egypt will tremble because of what the of Armies has planned against it.',
                    18 => 'On that day five cities in the land of Egypt will speak the language of Canaan and swear loyalty to the of Armies. One of the cities will be called the City of the Sun.',
                    19 => 'On that day there will be an altar to the Lord in the center of the land of Egypt and a pillar to the Lord near her border.',
                    20 => 'It will be a sign and witness to the Lord of Armies in the land of Egypt. When they cry out to the Lord because of their oppressors, he will send them a savior and leader, and he will rescue them.',
                    21 => 'The will make himself known to Egypt, and Egypt will know the Lord on that day. They will offer sacrifices and offerings; they will make vows to the Lord and fulfill them.',
                    22 => 'The will strike Egypt, striking and healing. Then they will turn to the and he will be receptive to their prayers and heal them.',
                    23 => 'On that day there will be a highway from Egypt to Assyria. Assyria will go to Egypt, Egypt to Assyria, and Egypt will worship with Assyria.',
                    24 => 'On that day Israel will form a triple alliance with Egypt and Assyria — a blessing within the land.',
                    25 => 'The of Armies will bless them, saying, "Egypt my people, Assyria my handiwork, and Israel my inheritance are blessed."',
                ],
                'versesToSections' => [
                    1 => 1,
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
                ],
            ],
            20 => [
                'sections' => [
                    1 => 'No Help from Cush or Egypt',
                ],
                'verses' => [
                    1 => 'In the year that the chief commander, sent by King Sargon of Assyria, came to Ashdod and attacked and captured it —',
                    2 => 'during that time the Lord had spoken through Isaiah son of Amoz, saying, "Go, take off your sackcloth from your waist and remove the sandals from your feet," and he did that, going stripped and barefoot —',
                    3 => 'the said, "As my servant Isaiah has gone stripped and barefoot three years as a sign and omen against Egypt and Cush,',
                    4 => 'so the king of Assyria will lead the captives of Egypt and the exiles of Cush, young and old alike, stripped and barefoot, with bared buttocks — to Egypt\'s shame.',
                    5 => 'Those who made Cush their hope and Egypt their boast will be dismayed and ashamed.',
                    6 => 'And the inhabitants of this coastland will say on that day, \'Look, this is what has happened to those we relied on and fled to for help to rescue us from the king of Assyria! Now, how will we escape? \' "',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 1,
                ],
            ],
            21 => [
                'sections' => [
                    1 => 'A Judgment on Babylon',
                    2 => 'A Pronouncement against Dumah',
                    3 => 'A Pronouncement against Arabia',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning the desert by the sea:',
                    11 => 'A pronouncement concerning Dumah:',
                    13 => 'A pronouncement concerning Arabia:',
                    16 => 'For the Lord said this to me: "Within one year, as a hired worker counts years, all the glory of Kedar will be gone.',
                    17 => 'The remaining Kedarite archers will be few in number." For the Lord, the God of Israel, has spoken.',
                ],
                'versesToSections' => [
                    1 => 1,
                    11 => 2,
                    13 => 3,
                    16 => 3,
                    17 => 3,
                ],
            ],
            22 => [
                'sections' => [
                    1 => 'A Pronouncement against Jerusalem',
                    2 => 'A Pronouncement against Shebna',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning the Valley of Vision:',
                    8 => 'On that day you looked to the weapons in the House of the Forest.',
                    9 => 'You saw that there were many breaches in the walls of the city of David. You collected water from the lower pool.',
                    10 => 'You counted the houses of Jerusalem so that you could tear them down to fortify the wall.',
                    11 => 'You made a reservoir between the walls for the water of the ancient pool, but you did not look to the one who made it, or consider the one who created it long ago.',
                    15 => 'The Lord God of Armies said, "Go to Shebna, that steward who is in charge of the palace, and say to him:',
                    16 => 'What are you doing here? Who authorized you to carve out a tomb for yourself here, carving your tomb on the height and cutting a resting place for yourself out of rock?',
                    17 => 'Look, you strong man! The Lord is about to shake you violently. He will take hold of you,',
                    18 => 'wind you up into a ball, and sling you into a wide land. There you will die, and there your glorious chariots will be — a disgrace to the house of your lord.',
                    19 => 'I will remove you from your office; you will be ousted from your position.',
                    20 => '"On that day I will call for my servant, Eliakim son of Hilkiah.',
                    21 => 'I will clothe him with your robe and tie your sash around him. I will hand your authority over to him, and he will be like a father to the inhabitants of Jerusalem and to the house of Judah.',
                    22 => 'I will place the key of the house of David on his shoulder; what he opens, no one can close; what he closes, no one can open.',
                    23 => 'I will drive him, like a peg, into a firm place. He will be a throne of honor for his father\'s family.',
                    24 => 'They will hang on him all the glory of his father\'s family: the descendants and the offshoots — all the small vessels, from bowls to every kind of jar.',
                    25 => 'On that day" — the declaration of the Lord of Armies — "the peg that was driven into a firm place will give way, be cut off, and fall, and the load on it will be destroyed." Indeed, the Lord has spoken.',
                ],
                'versesToSections' => [
                    1 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 1,
                    11 => 1,
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
                ],
            ],
            23 => [
                'sections' => [
                    1 => 'A Pronouncement against Tyre',
                ],
                'verses' => [
                    1 => 'A pronouncement concerning Tyre:',
                    15 => 'On that day Tyre will be forgotten for seventy years — the life span of one king. At the end of seventy years, what the song says about the prostitute will happen to Tyre:',
                    17 => 'And at the end of the seventy years, the Lord will restore Tyre and she will go back into business, prostituting herself with all the kingdoms of the world throughout the earth.',
                    18 => 'But her profits and wages will be dedicated to the Lord. They will not be stored or saved, for her profit will go to those who live in the Lord\'s presence, to provide them with ample food and sacred clothing.',
                ],
                'versesToSections' => [
                    1 => 1,
                    15 => 1,
                    17 => 1,
                    18 => 1,
                ],
            ],
            24 => [
                'sections' => [
                    1 => 'The Earth Judged',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            25 => [
                'sections' => [
                    1 => 'Salvation and Judgment on That Day',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            26 => [
                'sections' => [
                    1 => 'The Song of Judah',
                    2 => 'God\'s People Vindicated',
                ],
                'verses' => [
                    1 => 'On that day this song will be sung in the land of Judah:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            27 => [
                'sections' => [
                    1 => 'Leviathan Slain',
                    2 => 'The \'s Vineyard',
                ],
                'verses' => [
                    1 => 'On that day the with his relentless, large, strong sword will bring judgment on Leviathan, the fleeing serpent — Leviathan, the twisting serpent. He will slay the monster that is in the sea.',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            28 => [
                'sections' => [
                    1 => 'Woe to Samaria',
                    2 => 'A Deal with Death',
                    3 => 'God\'s Wonderful Advice',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            29 => [
                'sections' => [
                    1 => 'Woe to Jerusalem',
                ],
                'verses' => [
                    11 => 'For you the entire vision will be like the words of a sealed document. If it is given to one who can read and he is asked to read it, he will say, "I can\'t read it, because it is sealed."',
                    12 => 'And if the document is given to one who cannot read and he is asked to read it, he will say, "I can\'t read."',
                    13 => 'The Lord said:',
                    22 => 'Therefore, the who redeemed Abraham says this about the house of Jacob:',
                ],
                'versesToSections' => [
                    11 => 1,
                    12 => 1,
                    13 => 1,
                    22 => 1,
                ],
            ],
            30 => [
                'sections' => [
                    1 => 'Condemnation of the Egyptian Alliance',
                    2 => 'The \'s Mercy to Israel',
                    3 => 'Annihilation of the Assyrians',
                ],
                'verses' => [
                    6 => 'A pronouncement concerning the animals of the Negev:',
                    19 => 'For people will live on Zion in Jerusalem. You will never weep again; he will show favor to you at the sound of your outcry; as soon as he hears, he will answer you.',
                    20 => 'The Lord will give you meager bread and water during oppression, but your Teacher will not hide any longer. Your eyes will see your Teacher,',
                    21 => 'and whenever you turn to the right or to the left, your ears will hear this command behind you: "This is the way. Walk in it."',
                    22 => 'Then you will defile your silver-plated idols and your gold-plated images. You will throw them away like menstrual cloths, and call them filth.',
                    23 => 'Then he will send rain for your seed that you have sown in the ground, and the food, the produce of the ground, will be rich and plentiful. On that day your cattle will graze in open pastures.',
                    24 => 'The oxen and donkeys that work the ground will eat salted fodder scattered with winnowing shovel and fork.',
                    25 => 'Streams flowing with water will be on every high mountain and every raised hill on the day of great slaughter when the towers fall.',
                    26 => 'The moonlight will be as bright as the sunlight, and the sunlight will be seven times brighter — like the light of seven days — on the day that the Lord bandages his people\'s injuries and heals the wounds he inflicted.',
                ],
                'versesToSections' => [
                    6 => 1,
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
            31 => [
                'sections' => [
                    1 => 'The , the Only Help',
                ],
                'verses' => [
                    4 => 'For this is what the Lord said to me:',
                    6 => 'Return to the one the Israelites have greatly rebelled against.',
                    7 => 'For on that day, every one of you will reject the worthless idols of silver and gold that your own hands have sinfully made.',
                ],
                'versesToSections' => [
                    4 => 1,
                    6 => 1,
                    7 => 1,
                ],
            ],
            32 => [
                'sections' => [
                    1 => 'The Righteous Kingdom Announced',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            33 => [
                'sections' => [
                    1 => 'The Rises Up',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            34 => [
                'sections' => [
                    1 => 'The Judgment of the Nations',
                    2 => 'The Judgment of Edom',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            35 => [
                'sections' => [
                    1 => 'The Ransomed Return to Zion',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            36 => [
                'sections' => [
                    1 => 'Sennacherib\'s Invasion',
                ],
                'verses' => [
                    1 => 'In the fourteenth year of King Hezekiah, King Sennacherib of Assyria attacked all the fortified cities of Judah and captured them.',
                    2 => 'Then the king of Assyria sent his royal spokesman, along with a massive army, from Lachish to King Hezekiah at Jerusalem. The Assyrian stood near the conduit of the upper pool, by the road to Launderer\'s Field.',
                    3 => 'Eliakim son of Hilkiah, who was in charge of the palace, Shebna the court secretary, and Joah son of Asaph, the court historian, came out to him.',
                    4 => 'The royal spokesman said to them, "Tell Hezekiah:',
                    11 => 'Then Eliakim, Shebna, and Joah said to the royal spokesman, "Please speak to your servants in Aramaic, since we understand it. Don\'t speak to us in Hebrew within earshot of the people who are on the wall."',
                    12 => 'But the royal spokesman replied, "Has my master sent me to speak these words to your master and to you, and not to the men who are sitting on the wall, who are destined with you to eat their own excrement and drink their own urine? "',
                    13 => 'Then the royal spokesman stood and called out loudly in Hebrew:',
                    21 => 'But they kept silent; they didn\'t say anything, for the king\'s command was, "Don\'t answer him."',
                    22 => 'Then Eliakim son of Hilkiah, who was in charge of the palace, Shebna the court secretary, and Joah son of Asaph, the court historian, came to Hezekiah with their clothes torn and reported to him the words of the royal spokesman.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    11 => 1,
                    12 => 1,
                    13 => 1,
                    21 => 1,
                    22 => 1,
                ],
            ],
            37 => [
                'sections' => [
                    1 => 'Hezekiah Seeks Isaiah\'s Counsel',
                    2 => 'Sennacherib\'s Letter',
                    3 => 'Hezekiah\'s Prayer',
                    4 => 'God\'s Answer through Isaiah',
                    5 => 'Defeat and Death of Sennacherib',
                ],
                'verses' => [
                    1 => 'When King Hezekiah heard their report, he tore his clothes, covered himself with sackcloth, and went to the Lord\'s temple.',
                    2 => 'He sent Eliakim, who was in charge of the palace, Shebna the court secretary, and the leading priests, who were covered with sackcloth, to the prophet Isaiah son of Amoz.',
                    3 => 'They said to him, "This is what Hezekiah says: \'Today is a day of distress, rebuke, and disgrace. It is as if children have come to the point of birth, and there is no strength to deliver them.',
                    4 => 'Perhaps the your God will hear all the words of the royal spokesman, whom his master the king of Assyria sent to mock the living God, and will rebuke him for the words that the Lord your God has heard. Therefore offer a prayer for the surviving remnant.\' "',
                    5 => 'So the servants of King Hezekiah went to Isaiah,',
                    6 => 'who said to them, "Tell your master, \'The Lord says this: Don\'t be afraid because of the words you have heard, with which the king of Assyria\'s attendants have blasphemed me.',
                    7 => 'I am about to put a spirit in him and he will hear a rumor and return to his own land, where I will cause him to fall by the sword.\' "',
                    8 => 'When the royal spokesman heard that the king of Assyria had pulled out of Lachish, he left and found him fighting against Libnah.',
                    9 => 'The king had heard concerning King Tirhakah of Cush, "He has set out to fight against you." So when he heard this, he sent messengers to Hezekiah, saying,',
                    10 => '"Say this to King Hezekiah of Judah: \'Don\'t let your God, on whom you rely, deceive you by promising that Jerusalem won\'t be handed over to the king of Assyria.',
                    11 => 'Look, you have heard what the kings of Assyria have done to all the countries: they completely destroyed them. Will you be rescued?',
                    12 => 'Did the gods of the nations that my predecessors destroyed rescue them — Gozan, Haran, Rezeph, and the Edenites in Telassar?',
                    13 => 'Where is the king of Hamath, the king of Arpad, the king of the city of Sepharvaim, Hena, or Ivvah? \' "',
                    14 => 'Hezekiah took the letter from the messengers\' hands, read it, then went up to the \'s temple and spread it out before the Lord.',
                    15 => 'Then Hezekiah prayed to the Lord:',
                    21 => 'Then Isaiah son of Amoz sent a message to Hezekiah: "The Lord, the God of Israel, says, \'Because you prayed to me about King Sennacherib of Assyria,',
                    22 => 'this is the word the Lord has spoken against him:',
                    30 => '" \'This will be the sign for you: This year you will eat what grows on its own, and in the second year what grows from that. But in the third year sow and reap, plant vineyards and eat their fruit.',
                    31 => 'The surviving remnant of the house of Judah will again take root downward and bear fruit upward.',
                    32 => 'For a remnant will go out from Jerusalem, and survivors from Mount Zion. The zeal of the of Armies will accomplish this.\'',
                    33 => '"Therefore, this is what the Lord says about the king of Assyria:',
                    36 => 'Then the angel of the Lord went out and struck down one hundred eighty-five thousand in the camp of the Assyrians. When the people got up the next morning, there were all the dead bodies!',
                    37 => 'So King Sennacherib of Assyria broke camp and left. He returned home and lived in Nineveh.',
                    38 => 'One day, while he was worshiping in the temple of his god Nisroch, his sons Adrammelech and Sharezer struck him down with the sword and escaped to the land of Ararat. Then his son Esar-haddon became king in his place.',
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
                    14 => 3,
                    15 => 3,
                    21 => 4,
                    22 => 4,
                    30 => 4,
                    31 => 4,
                    32 => 4,
                    33 => 4,
                    36 => 5,
                    37 => 5,
                    38 => 5,
                ],
            ],
            38 => [
                'sections' => [
                    1 => 'Hezekiah\'s Illness and Recovery',
                ],
                'verses' => [
                    1 => 'In those days Hezekiah became terminally ill. The prophet Isaiah son of Amoz came and said to him, "This is what the says: \'Set your house in order, for you are about to die; you will not recover.\' "',
                    2 => 'Then Hezekiah turned his face to the wall and prayed to the Lord.',
                    3 => 'He said, "Please, Lord, remember how I have walked before you faithfully and wholeheartedly, and have done what pleases you." And Hezekiah wept bitterly.',
                    4 => 'Then the word of the Lord came to Isaiah:',
                    5 => '"Go and tell Hezekiah, \'This is what the Lord God of your ancestor David says: I have heard your prayer; I have seen your tears. Look, I am going to add fifteen years to your life.',
                    6 => 'And I will rescue you and this city from the grasp of the king of Assyria; I will defend this city.',
                    7 => 'This is the sign to you from the Lord that he will do what he has promised:',
                    8 => 'I am going to make the sun\'s shadow that goes down on the stairway of Ahaz go back by ten steps.\' " So the sun\'s shadow went back the ten steps it had descended.',
                    9 => 'A poem by King Hezekiah of Judah after he had been sick and had recovered from his illness:',
                    21 => 'Now Isaiah had said, "Let them take a lump of pressed figs and apply it to his infected skin, so that he may recover."',
                    22 => 'And Hezekiah had asked, "What is the sign that I will go up to the Lord\'s temple? "',
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
                    21 => 1,
                    22 => 1,
                ],
            ],
            39 => [
                'sections' => [
                    1 => 'Hezekiah\'s Folly',
                ],
                'verses' => [
                    1 => 'At that time Merodach-baladan son of Baladan, king of Babylon, sent letters and a gift to Hezekiah since he heard that he had been sick and had recovered.',
                    2 => 'Hezekiah was pleased with the letters, and he showed the envoys his treasure house — the silver, the gold, the spices, and the precious oil — and all his armory, and everything that was found in his treasuries. There was nothing in his palace and in all his realm that Hezekiah did not show them.',
                    3 => 'Then the prophet Isaiah came to King Hezekiah and asked him, "What did these men say, and where did they come to you from? "',
                    4 => 'Isaiah asked, "What have they seen in your palace? "',
                    5 => 'Then Isaiah said to Hezekiah, "Hear the word of the Lord of Armies:',
                    6 => '\'Look, the days are coming when everything in your palace and all that your predecessors have stored up until today will be carried off to Babylon; nothing will be left,\' says the Lord.',
                    7 => '\'Some of your descendants — who come from you, whom you father — will be taken away, and they will become eunuchs in the palace of the king of Babylon.\' "',
                    8 => 'Then Hezekiah said to Isaiah, "The word of the Lord that you have spoken is good," for he thought: There will be peace and security during my lifetime.',
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
                ],
            ],
            40 => [
                'sections' => [
                    1 => 'God\'s People Comforted',
                ],
                'verses' => [
                    3 => 'A voice of one crying out:',
                ],
                'versesToSections' => [
                    3 => 1,
                ],
            ],
            41 => [
                'sections' => [
                    1 => 'The versus the Nations\' Gods',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            42 => [
                'sections' => [
                    1 => 'The Servant\'s Mission',
                    2 => 'A Song of Praise',
                    3 => 'Israel\'s Blindness and Deafness',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            43 => [
                'sections' => [
                    1 => 'Restoration of Israel',
                    2 => 'God\'s Deliverance of Rebellious Israel',
                ],
                'verses' => [
                    14 => 'This is what the Lord, your Redeemer, the Holy One of Israel says:',
                ],
                'versesToSections' => [
                    14 => 2,
                ],
            ],
            44 => [
                'sections' => [
                    1 => 'Spiritual Blessing',
                    2 => 'No God Other Than the',
                    3 => 'Restoration of Israel through Cyrus',
                ],
                'verses' => [
                    6 => 'This is what the Lord, the King of Israel and its Redeemer, the Lord of Armies, says:',
                    24 => 'This is what the Lord, your Redeemer who formed you from the womb, says:',
                ],
                'versesToSections' => [
                    6 => 2,
                    24 => 3,
                ],
            ],
            45 => [
                'sections' => [
                    1 => 'God Alone Is the Savior',
                ],
                'verses' => [
                    14 => 'This is what the Lord says:',
                ],
                'versesToSections' => [
                    14 => 1,
                ],
            ],
            46 => [
                'sections' => [
                    1 => 'There Is No One Like God',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            47 => [
                'sections' => [
                    1 => 'The Fall of Babylon',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            48 => [
                'sections' => [
                    1 => 'Israel Must Leave Babylon',
                ],
                'verses' => [
                    17 => 'This is what the Lord, your Redeemer, the Holy One of Israel says:',
                ],
                'versesToSections' => [
                    17 => 1,
                ],
            ],
            49 => [
                'sections' => [
                    1 => 'The Servant Brings Salvation',
                    2 => 'Zion Remembered',
                ],
                'verses' => [
                    8 => 'This is what the Lord says:',
                    22 => 'This is what the Lord God says:',
                ],
                'versesToSections' => [
                    8 => 1,
                    22 => 2,
                ],
            ],
            50 => [
                'sections' => [
                    1 => 'The Obedient Servant',
                ],
                'verses' => [
                    1 => 'This is what the says:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            51 => [
                'sections' => [
                    1 => 'Salvation for Zion',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            52 => [
                'sections' => [
                    1 => 'The Servant\'s Suffering and Exaltation',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            53 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            54 => [
                'sections' => [
                    1 => 'Future Glory for Israel',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            55 => [
                'sections' => [
                    1 => 'Come to the',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            56 => [
                'sections' => [
                    1 => 'A House of Prayer for All',
                    2 => 'Unrighteous Leaders Condemned',
                ],
                'verses' => [
                    1 => 'This is what the says:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            57 => [
                'sections' => [
                    1 => 'Pagan Religion Denounced',
                    2 => 'Healing and Peace',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            58 => [
                'sections' => [
                    1 => 'True Fasting',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            59 => [
                'sections' => [
                    1 => 'Sin and Redemption',
                ],
                'verses' => [
                    21 => '"As for me, this is my covenant with them," says the Lord: "My Spirit who is on you, and my words that I have put in your mouth, will not depart from your mouth, or from the mouths of your children, or from the mouths of your children\'s children, from now on and forever," says the Lord.',
                ],
                'versesToSections' => [
                    21 => 1,
                ],
            ],
            60 => [
                'sections' => [
                    1 => 'The \'s Glory in Zion',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            61 => [
                'sections' => [
                    1 => 'Messiah\'s Jubilee',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            62 => [
                'sections' => [
                    1 => 'Zion\'s Restoration',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            63 => [
                'sections' => [
                    1 => 'The \'s Day of Vengeance',
                    2 => 'Remembrance of Grace',
                    3 => 'Israel\'s Prayer',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            64 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            65 => [
                'sections' => [
                    1 => 'The \'s Response',
                    2 => 'A New Creation',
                ],
                'verses' => [
                    8 => 'The says this:',
                    13 => 'Therefore, this is what the Lord God says:',
                ],
                'versesToSections' => [
                    8 => 1,
                    13 => 1,
                ],
            ],
            66 => [
                'sections' => [
                    1 => 'Final Judgment and Joyous Restoration',
                ],
                'verses' => [
                    1 => 'This is what the says:',
                    12 => 'For this is what the Lord says:',
                    17 => '"Those who dedicate and purify themselves to enter the groves following their leader, eating meat from pigs, vermin, and rats, will perish together."',
                    18 => '"Knowing their works and their thoughts, I have come to gather all nations and languages; they will come and see my glory.',
                    19 => 'I will establish a sign among them, and I will send survivors from them to the nations — to Tarshish, Put, Lud (who are archers), Tubal, Javan, and the coasts and islands far away — who have not heard about me or seen my glory. And they will proclaim my glory among the nations.',
                    20 => 'They will bring all your brothers from all the nations as a gift to the Lord on horses and chariots, in litters, and on mules and camels, to my holy mountain Jerusalem," says the Lord, "just as the Israelites bring an offering in a clean vessel to the house of the Lord.',
                    21 => 'I will also take some of them as priests and Levites," says the Lord.',
                    24 => '"As they leave, they will see the dead bodies of those who have rebelled against me; for their worm will never die, their fire will never go out, and they will be a horror to all humanity."',
                ],
                'versesToSections' => [
                    1 => 1,
                    12 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                    24 => 1,
                ],
            ],
        ];
    }
} 