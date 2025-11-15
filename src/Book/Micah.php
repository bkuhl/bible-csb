<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Micah extends Book
{
    public const ABBREVIATION = 'Mic';
    public const ID = 33;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Micah';
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
                    1 => 'Coming Judgment on Israel',
                    2 => 'Micah\'s Lament',
                ],
                'verses' => [
                    1 => 'The word of the <span class="smallcaps">Lord</span> that came to Micah the Moreshite — what he saw regarding Samaria and Jerusalem in the days of Jotham, Ahaz, and Hezekiah, kings of Judah.',
                    2 => 'Listen, all you peoples; pay attention, earth and everyone in it! The Lord <span class="smallcaps">God</span> will be a witness against you, the Lord, from his holy temple.',
                    3 => 'Look, the <span class="smallcaps">Lord</span> is leaving his place and coming down to trample the heights of the earth.',
                    4 => 'The mountains will melt beneath him, and the valleys will split apart, like wax near a fire, like water cascading down a mountainside.',
                    5 => 'All this will happen because of Jacob\'s rebellion and the sins of the house of Israel. What is the rebellion of Jacob? Isn\'t it Samaria? And what is the high place of Judah? Isn\'t it Jerusalem?',
                    6 => 'Therefore, I will make Samaria a heap of ruins in the countryside, a planting area for a vineyard. I will roll her stones into the valley and expose her foundations.',
                    7 => 'All her carved images will be smashed to pieces; all her wages will be burned in the fire, and I will destroy all her idols. Since she collected the wages of a prostitute, they will be used again for a prostitute.',
                    8 => 'Because of this I will lament and wail; I will walk barefoot and naked. I will howl like the jackals and mourn like ostriches.',
                    9 => 'For her wound is incurable and has reached even Judah; it has approached my people\'s city gate, as far as Jerusalem.',
                    10 => 'Don\'t announce it in Gath, don\'t weep at all. Roll in the dust in Beth-leaphrah.',
                    11 => 'Depart in shameful nakedness, you residents of Shaphir; the residents of Zaanan will not come out. Beth-ezel is lamenting; its support is taken from you.',
                    12 => 'Though the residents of Maroth anxiously wait for something good, disaster has come from the <span class="smallcaps">Lord</span> to the gate of Jerusalem.',
                    13 => 'Harness the horses to the chariot, you residents of Lachish. This was the beginning of sin for Daughter Zion because Israel\'s acts of rebellion can be traced to you.',
                    14 => 'Therefore, send farewell gifts to Moresheth-gath; the houses of Achzib are a deception to the kings of Israel.',
                    15 => 'I will again bring a conqueror against you who live in Mareshah. The nobility of Israel will come to Adullam.',
                    16 => 'Shave yourselves bald and cut off your hair in sorrow for your precious children; make yourselves as bald as an eagle, for they have been taken from you into exile.',
                ],
                'versesToSections' => [
                    1 => 0,
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
                    14 => 2,
                    15 => 2,
                    16 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Oppressors Judged',
                    2 => 'God\'s Word Rejected',
                    3 => 'The Remnant Regathered',
                ],
                'verses' => [
                    1 => 'Woe to those who dream up wickedness and prepare evil plans on their beds! At morning light they accomplish it because the power is in their hands.',
                    2 => 'They covet fields and seize them; they also take houses. They deprive a man of his home, a person of his inheritance.',
                    3 => 'Therefore, the <span class="smallcaps">Lord</span> says: I am now planning a disaster against this nation; you cannot free your necks from it. Then you will not walk so proudly because it will be an evil time.',
                    4 => 'In that day one will take up a taunt against you and lament mournfully, saying, "We are totally ruined! He measures out the allotted land of my people. How he removes it from me! He allots our fields to traitors."',
                    5 => 'Therefore, there will be no one in the assembly of the <span class="smallcaps">Lord</span> to divide the land by casting lots.',
                    6 => '"Quit your preaching," they preach. "They should not preach these things; shame will not overtake us."',
                    7 => 'House of Jacob, should it be asked, "Is the Spirit of the <span class="smallcaps">Lord</span> impatient? Are these the things he does? " Don\'t my words bring good to the one who walks uprightly?',
                    8 => 'But recently my people have risen up like an enemy: You strip off the splendid robe from those who are passing through confidently, like those returning from war.',
                    9 => 'You force the women of my people out of their comfortable homes, and you take my blessing from their children forever.',
                    10 => 'Get up and leave, for this is not your place of rest because defilement brings destruction — a grievous destruction!',
                    11 => 'If a man comes and utters empty lies — "I will preach to you about wine and beer" — he would be just the preacher for this people!',
                    12 => 'I will indeed gather all of you, Jacob; I will collect the remnant of Israel. I will bring them together like sheep in a pen, like a flock in the middle of its pasture. It will be noisy with people.',
                    13 => 'One who breaks open the way will advance before them; they will break out, pass through the city gate, and leave by it. Their King will pass through before them, the <span class="smallcaps">Lord</span> as their leader.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 1,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 3,
                    13 => 3,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Unjust Leaders Judged',
                    2 => 'False Prophets Judged',
                    3 => 'Zion\'s Destruction',
                ],
                'verses' => [
                    1 => 'Then I said, "Now listen, leaders of Jacob, you rulers of the house of Israel. Aren\'t you supposed to know what is just?',
                    2 => 'You hate good and love evil. You tear off people\'s skin and strip their flesh from their bones.',
                    3 => 'You eat the flesh of my people after you strip their skin from them and break their bones. You chop them up like flesh for the cooking pot, like meat in a cauldron."',
                    4 => 'Then they will cry out to the <span class="smallcaps">Lord</span>, but he will not answer them. He will hide his face from them at that time because of the crimes they have committed.',
                    5 => 'This is what the <span class="smallcaps">Lord</span> says concerning the prophets who lead my people astray, who proclaim peace when they have food to sink their teeth into but declare war against the one who puts nothing in their mouths.',
                    6 => 'Therefore, it will be night for you — without visions; it will grow dark for you — without divination. The sun will set on these prophets, and the daylight will turn black over them.',
                    7 => 'Then the seers will be ashamed and the diviners disappointed. They will all cover their mouths because there will be no answer from God.',
                    8 => 'As for me, however, I am filled with power by the Spirit of the <span class="smallcaps">Lord</span>, with justice and courage, to proclaim to Jacob his rebellion and to Israel his sin.',
                    9 => 'Listen to this, leaders of the house of Jacob, you rulers of the house of Israel, who abhor justice and pervert everything that is right,',
                    10 => 'who build Zion with bloodshed and Jerusalem with injustice.',
                    11 => 'Her leaders issue rulings for a bribe, her priests teach for payment, and her prophets practice divination for silver. Yet they lean on the <span class="smallcaps">Lord</span>, saying, "Isn\'t the <span class="smallcaps">Lord</span> among us? No disaster will overtake us."',
                    12 => 'Therefore, because of you, Zion will be plowed like a field, Jerusalem will become ruins, and the temple\'s mountain will be a high thicket.',
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
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'The \'s Rule from Restored Zion',
                    2 => 'From Exile to Victory',
                ],
                'verses' => [
                    1 => 'In the last days the mountain of the <span class="smallcaps">Lord</span>\'s house will be established at the top of the mountains and will be raised above the hills. Peoples will stream to it,',
                    2 => 'and many nations will come and say, "Come, let\'s go up to the mountain of the <span class="smallcaps">Lord</span>, to the house of the God of Jacob. He will teach us about his ways so we may walk in his paths." For instruction will go out of Zion and the word of the <span class="smallcaps">Lord</span> from Jerusalem.',
                    3 => 'He will settle disputes among many peoples and provide arbitration for strong nations that are far away. They will beat their swords into plows and their spears into pruning knives. Nation will not take up the sword against nation, and they will never again train for war.',
                    4 => 'But each person will sit under his grapevine and under his fig tree with no one to frighten him. For the mouth of the <span class="smallcaps">Lord</span> of Armies has spoken.',
                    5 => 'Though all the peoples walk in the name of their own gods, we will walk in the name of the <span class="smallcaps">Lord</span> our God forever and ever.',
                    6 => 'On that day — this is the <span class="smallcaps">Lord</span>\'s declaration — I will assemble the lame and gather the scattered, those I have injured.',
                    7 => 'I will make the lame into a remnant, those far removed into a strong nation. Then the <span class="smallcaps">Lord</span> will reign over them in Mount Zion from this time on and forever.',
                    8 => 'And you, watchtower for the flock, fortified hill of Daughter Zion, the former rule will come to you; sovereignty will come to Daughter Jerusalem.',
                    9 => 'Now, why are you shouting loudly? Is there no king with you? Has your counselor perished so that anguish grips you like a woman in labor?',
                    10 => 'Writhe and cry out, Daughter Zion, like a woman in labor, for now you will leave the city and camp in the open fields. You will go to Babylon; there you will be rescued; there the <span class="smallcaps">Lord</span> will redeem you from the grasp of your enemies!',
                    11 => 'Many nations have now assembled against you; they say, "Let her be defiled, and let us feast our eyes on Zion."',
                    12 => 'But they do not know the <span class="smallcaps">Lord</span>\'s intentions or understand his plan, that he has gathered them like sheaves to the threshing floor.',
                    13 => 'Rise and thresh, Daughter Zion, for I will make your horns iron and your hooves bronze so you can crush many peoples. Then you will set apart their plunder for the <span class="smallcaps">Lord</span>, their wealth for the Lord of the whole earth.',
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
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'From Defeated Ruler to Conquering King',
                    2 => 'The Glorious and Purified Remnant',
                ],
                'verses' => [
                    1 => 'Now, daughter who is under attack, you slash yourself in grief; a siege is set against us! They are striking the judge of Israel on the cheek with a rod.',
                    2 => 'Bethlehem Ephrathah, you are small among the clans of Judah; one will come from you to be ruler over Israel for me. His origin is from antiquity, from ancient times.',
                    3 => 'Therefore, Israel will be abandoned until the time when she who is in labor has given birth; then the rest of the ruler\'s brothers will return to the people of Israel.',
                    4 => 'He will stand and shepherd them in the strength of the <span class="smallcaps">Lord</span>, in the majestic name of the <span class="smallcaps">Lord</span> his God. They will live securely, for then his greatness will extend to the ends of the earth.',
                    5 => 'He will be their peace. When Assyria invades our land, when it marches against our fortresses, we will raise against it seven shepherds, even eight leaders of men.',
                    6 => 'They will shepherd the land of Assyria with the sword, the land of Nimrod with a drawn blade. So he will rescue us from Assyria when it invades our land, when it marches against our territory.',
                    7 => 'Then the remnant of Jacob will be among many peoples like dew from the <span class="smallcaps">Lord</span>, like showers on the grass, which do not wait for anyone or linger for mankind.',
                    8 => 'Then the remnant of Jacob will be among the nations, among many peoples, like a lion among animals of the forest, like a young lion among flocks of sheep, which tramples and tears as it passes through, and there is no one to rescue them.',
                    9 => 'Your hand will be lifted up against your adversaries, and all your enemies will be destroyed.',
                    10 => 'In that day — this is the <span class="smallcaps">Lord</span>\'s declaration — I will remove your horses from you and wreck your chariots.',
                    11 => 'I will remove the cities of your land and tear down all your fortresses.',
                    12 => 'I will remove sorceries from your hands, and you will not have any more fortune-tellers.',
                    13 => 'I will remove your carved images and sacred pillars from you so that you will no longer worship the work of your hands.',
                    14 => 'I will pull up the Asherah poles from among you and demolish your cities.',
                    15 => 'I will take vengeance in anger and wrath against the nations that have not obeyed me.',
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
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'God\'s Lawsuit against Judah',
                    2 => 'Verdict of Judgment',
                ],
                'verses' => [
                    1 => 'Now listen to what the <span class="smallcaps">Lord</span> is saying: Rise, plead your case before the mountains, and let the hills hear your complaint.',
                    2 => 'Listen to the <span class="smallcaps">Lord</span>\'s lawsuit, you mountains and enduring foundations of the earth, because the <span class="smallcaps">Lord</span> has a case against his people, and he will argue it against Israel.',
                    3 => 'My people, what have I done to you, or how have I wearied you? Testify against me!',
                    4 => 'Indeed, I brought you up from the land of Egypt and redeemed you from that place of slavery. I sent Moses, Aaron, and Miriam ahead of you.',
                    5 => 'My people, remember what King Balak of Moab proposed, what Balaam son of Beor answered him, and what happened from the Acacia Grove to Gilgal so that you may acknowledge the <span class="smallcaps">Lord</span>\'s righteous acts.',
                    6 => 'What should I bring before the <span class="smallcaps">Lord</span> when I come to bow before God on high? Should I come before him with burnt offerings, with year-old calves?',
                    7 => 'Would the <span class="smallcaps">Lord</span> be pleased with thousands of rams or with ten thousand streams of oil? Should I give my firstborn for my transgression, the offspring of my body for my own sin?',
                    8 => 'Mankind, he has told each of you what is good and what it is the <span class="smallcaps">Lord</span> requires of you: to act justly, to love faithfulness, and to walk humbly with your God.',
                    9 => 'The voice of the <span class="smallcaps">Lord</span> calls out to the city (and it is wise to fear your name): "Pay attention to the rod and the one who ordained it.',
                    10 => 'Are there still the treasures of wickedness and the accursed short measure in the house of the wicked?',
                    11 => 'Can I excuse wicked scales or bags of deceptive weights?',
                    12 => 'For the wealthy of the city are full of violence, and its residents speak lies; the tongues in their mouths are deceitful.',
                    13 => '"As a result, I have begun to strike you severely, bringing desolation because of your sins.',
                    14 => 'You will eat but not be satisfied, for there will be hunger within you. What you acquire, you cannot save, and what you do save, I will give to the sword.',
                    15 => 'You will sow but not reap; you will press olives but not anoint yourself with oil; and you will tread grapes but not drink the wine.',
                    16 => 'The statutes of Omri and all the practices of Ahab\'s house have been observed; you have followed their policies. Therefore, I will make you a desolate place and the city\'s residents an object of contempt; you will bear the scorn of my people."',
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
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'Israel\'s Moral Decline',
                    2 => 'Zion\'s Vindication',
                    3 => 'Micah\'s Prayer Answered',
                ],
                'verses' => [
                    1 => 'How sad for me! For I am like one who — when the summer fruit has been gathered after the gleaning of the grape harvest — finds no grape cluster to eat, no early fig, which I crave.',
                    2 => 'Faithful people have vanished from the land; there is no one upright among the people. All of them wait in ambush to shed blood; they hunt each other with a net.',
                    3 => 'Both hands are good at accomplishing evil: the official and the judge demand a bribe; when the powerful man communicates his evil desire, they plot it together.',
                    4 => 'The best of them is like a brier; the most upright is worse than a hedge of thorns. The day of your watchmen, the day of your punishment, is coming; at this time their panic is here.',
                    5 => 'Do not rely on a friend; don\'t trust in a close companion. Seal your mouth from the woman who lies in your arms.',
                    6 => 'Surely a son considers his father a fool, a daughter opposes her mother, and a daughter-in-law is against her mother-in-law; a man\'s enemies are the men of his own household.',
                    7 => 'But I will look to the <span class="smallcaps">Lord</span>; I will wait for the God of my salvation. My God will hear me.',
                    8 => 'Do not rejoice over me, my enemy! Though I have fallen, I will stand up; though I sit in darkness, the <span class="smallcaps">Lord</span> will be my light.',
                    9 => 'Because I have sinned against him, I must endure the <span class="smallcaps">Lord</span>\'s fury until he champions my cause and establishes justice for me. He will bring me into the light; I will see his salvation.',
                    10 => 'Then my enemy will see, and she will be covered with shame, the one who said to me, "Where is the <span class="smallcaps">Lord</span> your God? " My eyes will look at her in triumph; at that time she will be trampled like mud in the streets.',
                    11 => 'A day will come for rebuilding your walls; on that day your boundary will be extended.',
                    12 => 'On that day people will come to you from Assyria and the cities of Egypt, even from Egypt to the Euphrates River and from sea to sea and mountain to mountain.',
                    13 => 'Then the earth will become a wasteland because of its inhabitants and as a result of their actions.',
                    14 => 'Shepherd your people with your staff, the flock that is your possession. They live alone in a woodland surrounded by pastures. Let them graze in Bashan and Gilead as in ancient times.',
                    15 => 'I will perform miracles for them as in the days of your exodus from the land of Egypt.',
                    16 => 'Nations will see and be ashamed of all their power. They will put their hands over their mouths, and their ears will become deaf.',
                    17 => 'They will lick the dust like a snake; they will come trembling out of their hiding places like reptiles slithering on the ground. They will tremble in the presence of the <span class="smallcaps">Lord</span> our God; they will stand in awe of you.',
                    18 => 'Who is a God like you, forgiving iniquity and passing over rebellion for the remnant of his inheritance? He does not hold on to his anger forever because he delights in faithful love.',
                    19 => 'He will again have compassion on us; he will vanquish our iniquities. You will cast all our sins into the depths of the sea.',
                    20 => 'You will show loyalty to Jacob and faithful love to Abraham, as you swore to our ancestors from days long ago.',
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
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                ],
            ],
        ];
    }
} 