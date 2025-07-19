<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Zephaniah extends Book
{
    public const ABBREVIATION = 'Zeph';
    public const ID = 36;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Zephaniah';
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
                    1 => 'The Great Day of the',
                ],
                'verses' => [
                    1 => 'The word of the Lord that came to Zephaniah son of Cushi, son of Gedaliah, son of Amariah, son of Hezekiah, in the days of Josiah son of Amon, king of Judah.',
                    2 => 'I will completely sweep away everything from the face of the earth — this is the Lord\'s declaration.',
                    3 => 'I will sweep away people and animals; I will sweep away the birds of the sky and the fish of the sea, and the ruins along with the wicked. I will cut off mankind from the face of the earth. This is the Lord\'s declaration.',
                    4 => 'I will stretch out my hand against Judah and against all the residents of Jerusalem. I will cut off every vestige of Baal from this place, the names of the pagan priests along with the priests;',
                    5 => 'those who bow in worship on the rooftops to the stars in the sky; those who bow and pledge loyalty to the Lord but also pledge loyalty to Milcom;',
                    6 => 'and those who turn back from following the Lord, who do not seek the Lord or inquire of him.',
                    7 => 'Be silent in the presence of the Lord God, for the day of the Lord is near. Indeed, the Lord has prepared a sacrifice; he has consecrated his guests.',
                    8 => 'On the day of the Lord\'s sacrifice I will punish the officials, the king\'s sons, and all who are dressed in foreign clothing.',
                    9 => 'On that day I will punish all who skip over the threshold, who fill their master\'s house with violence and deceit.',
                    10 => 'On that day — this is the Lord\'s declaration — there will be an outcry from the Fish Gate, a wailing from the Second District, and a loud crashing from the hills.',
                    11 => 'Wail, you residents of the Hollow, for all the merchants will be silenced; all those loaded with silver will be cut off.',
                    12 => 'And at that time I will search Jerusalem with lamps and punish those who settle down comfortably, who say to themselves: The Lord will do nothing—good or bad.',
                    13 => 'Their wealth will become plunder and their houses a ruin. They will build houses but never live in them, plant vineyards but never drink their wine.',
                    14 => 'The great day of the is near, near and rapidly approaching. Listen, the day of the Lord — then the warrior\'s cry is bitter.',
                    15 => 'That day is a day of wrath, a day of trouble and distress, a day of destruction and desolation, a day of darkness and gloom, a day of clouds and total darkness,',
                    16 => 'a day of ram\'s horn and battle cry against the fortified cities, and against the high corner towers.',
                    17 => 'I will bring distress on mankind, and they will walk like the blind because they have sinned against the Lord. Their blood will be poured out like dust and their flesh like dung.',
                    18 => 'Their silver and their gold will be unable to rescue them on the day of the Lord\'s wrath. The whole earth will be consumed by the fire of his jealousy, for he will make a complete, yes, a horrifying end of all the inhabitants of the earth.',
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
                    10 => 1,
                    11 => 1,
                    12 => 1,
                    13 => 1,
                    14 => 1,
                    15 => 1,
                    16 => 1,
                    17 => 1,
                    18 => 1,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'A Call to Repentance',
                    2 => 'Judgment against the Nations',
                ],
                'verses' => [
                    1 => 'Gather yourselves together; gather together, undesirable nation,',
                    2 => 'before the decree takes effect and the day passes like chaff, before the burning of the Lord\'s anger overtakes you, before the day of the Lord\'s anger overtakes you.',
                    3 => 'Seek the Lord, all you humble of the earth, who carry out what he commands. Seek righteousness, seek humility; perhaps you will be concealed on the day of the Lord\'s anger.',
                    4 => 'For Gaza will be abandoned, and Ashkelon will become a ruin. Ashdod will be driven out at noon, and Ekron will be uprooted.',
                    5 => 'Woe, inhabitants of the seacoast, nation of the Cherethites! The word of the Lord is against you, Canaan, land of the Philistines: I will destroy you until there is no one left.',
                    6 => 'The seacoast will become pasturelands with caves for shepherds and pens for sheep.',
                    7 => 'The coastland will belong to the remnant of the house of Judah; they will find pasture there. They will lie down in the evening among the houses of Ashkelon, for the Lord their God will return to them and restore their fortunes.',
                    8 => 'I have heard the taunting of Moab and the insults of the Ammonites, who have taunted my people and threatened their territory.',
                    9 => 'Therefore, as I live — this is the declaration of the Lord of Armies, the God of Israel — Moab will be like Sodom and the Ammonites like Gomorrah: a place overgrown with weeds, a salt pit, and a perpetual wasteland. The remnant of my people will plunder them; the remainder of my nation will dispossess them.',
                    10 => 'This is what they get for their pride, because they have taunted and acted arrogantly against the people of the Lord of Armies.',
                    11 => 'The Lord will be terrifying to them when he starves all the gods of the earth. Then all the distant coasts and islands of the nations will bow in worship to him, each in its own place.',
                    12 => 'You Cushites will also be slain by my sword.',
                    13 => 'He will also stretch out his hand against the north and destroy Assyria; he will make Nineveh a desolate ruin, dry as the desert.',
                    14 => 'Herds will lie down in the middle of it, every kind of wild animal. Both eagle owls and herons will roost in the capitals of its pillars. Their calls will sound from the window, but devastation will be on the threshold, for he will expose the cedar work.',
                    15 => 'This is the jubilant city that lives in security, that says to herself: I exist, and there is no one else. What a desolation she has become, a place for wild animals to lie down! Everyone who passes by her scoffs and shakes his fist.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
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
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Woe to Oppressive Jerusalem',
                    2 => 'Final Restoration Promised',
                ],
                'verses' => [
                    1 => 'Woe to the city that is rebellious and defiled, the oppressive city!',
                    2 => 'She has not obeyed; she has not accepted discipline. She has not trusted in the Lord; she has not drawn near to her God.',
                    3 => 'The princes within her are roaring lions; her judges are wolves of the night, which leave nothing for the morning.',
                    4 => 'Her prophets are reckless — treacherous men. Her priests profane the sanctuary; they do violence to instruction.',
                    5 => 'The righteous Lord is in her; he does no wrong. He applies his justice morning by morning; he does not fail at dawn, yet the one who does wrong knows no shame.',
                    6 => 'I have cut off nations; their corner towers are destroyed. I have laid waste their streets, with no one to pass through. Their cities lie devastated, without a person, without an inhabitant.',
                    7 => 'I said: You will certainly fear me and accept correction. Then her dwelling place would not be cut off based on all that I had allocated to her. However, they became more corrupt in all their actions.',
                    8 => 'Therefore, wait for me — this is the Lord\'s declaration — until the day I rise up for plunder. For my decision is to gather nations, to assemble kingdoms, in order to pour out my indignation on them, all my burning anger; for the whole earth will be consumed by the fire of my jealousy.',
                    9 => 'For I will then restore pure speech to the peoples so that all of them may call on the name of the Lord and serve him with a single purpose.',
                    10 => 'From beyond the rivers of Cush my supplicants, my dispersed people, will bring an offering to me.',
                    11 => 'On that day you will not be put to shame because of everything you have done in rebelling against me. For then I will remove from among you your jubilant, arrogant people, and you will never again be haughty on my holy mountain.',
                    12 => 'I will leave a meek and humble people among you, and they will take refuge in the name of the Lord.',
                    13 => 'The remnant of Israel will no longer do wrong or tell lies; a deceitful tongue will not be found in their mouths. They will pasture and lie down, with nothing to make them afraid.',
                    14 => 'Sing for joy, Daughter Zion; shout loudly, Israel! Be glad and celebrate with all your heart, Daughter Jerusalem!',
                    15 => 'The Lord has removed your punishment; he has turned back your enemy. The King of Israel, the Lord, is among you; you need no longer fear harm.',
                    16 => 'On that day it will be said to Jerusalem: "Do not fear; Zion, do not let your hands grow weak.',
                    17 => 'The Lord your God is among you, a warrior who saves. He will rejoice over you with gladness. He will be quiet in his love. He will delight in you with singing."',
                    18 => 'I will gather those who have been driven from the appointed festivals; they will be a tribute from you and a reproach on her.',
                    19 => 'Yes, at that time I will deal with all who oppress you. I will save the lame and gather the outcasts; I will make those who were disgraced throughout the earth receive praise and fame.',
                    20 => 'At that time I will bring you back, yes, at the time I will gather you. I will give you fame and praise among all the peoples of the earth, when I restore your fortunes before your eyes. The Lord has spoken.',
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
                    19 => 2,
                    20 => 2,
                ],
            ],
        ];
    }
} 