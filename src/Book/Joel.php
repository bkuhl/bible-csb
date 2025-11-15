<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Joel extends Book
{
    public const ABBREVIATION = 'Joel';
    public const ID = 29;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Joel';
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
                    1 => 'A Plague of Locusts',
                    2 => 'The Day of the',
                ],
                'verses' => [
                    1 => 'The word of the <span class="smallcaps">Lord</span> that came to Joel son of Pethuel:',
                    2 => 'Hear this, you elders; listen, all you inhabitants of the land. Has anything like this ever happened in your days or in the days of your ancestors?',
                    3 => 'Tell your children about it, and let your children tell their children, and their children the next generation.',
                    4 => 'What the devouring locust has left, the swarming locust has eaten; what the swarming locust has left, the young locust has eaten; and what the young locust has left, the destroying locust has eaten.',
                    5 => 'Wake up, you drunkards, and weep; wail, all you wine drinkers, because of the sweet wine, for it has been taken from your mouth.',
                    6 => 'For a nation has invaded my land, powerful and without number; its teeth are the teeth of a lion, and it has the fangs of a lioness.',
                    7 => 'It has devastated my grapevine and splintered my fig tree. It has stripped off its bark and thrown it away; its branches have turned white.',
                    8 => 'Grieve like a young woman dressed in sackcloth, mourning for the husband of her youth.',
                    9 => 'Grain and drink offerings have been cut off from the house of the <span class="smallcaps">Lord</span>; the priests, who are ministers of the <span class="smallcaps">Lord</span>, mourn.',
                    10 => 'The fields are destroyed; the land grieves; indeed, the grain is destroyed; the new wine is dried up; and the fresh oil fails.',
                    11 => 'Be ashamed, you farmers, wail, you vinedressers, over the wheat and the barley, because the harvest of the field has perished.',
                    12 => 'The grapevine is dried up, and the fig tree is withered; the pomegranate, the date palm, and the apple — all the trees of the orchard — have withered. Indeed, human joy has dried up.',
                    13 => 'Dress in sackcloth and lament, you priests; wail, you ministers of the altar. Come and spend the night in sackcloth, you ministers of my God, because grain and drink offerings are withheld from the house of your God.',
                    14 => 'Announce a sacred fast; proclaim a solemn assembly! Gather the elders and all the residents of the land at the house of the <span class="smallcaps">Lord</span> your God, and cry out to the <span class="smallcaps">Lord</span>.',
                    15 => 'Woe because of that day! For the day of the <span class="smallcaps">Lord</span> is near and will come as devastation from the Almighty.',
                    16 => 'Hasn\'t the food been cut off before our eyes, joy and gladness from the house of our God?',
                    17 => 'The seeds lie shriveled in their casings. The storehouses are in ruin, and the granaries are broken down, because the grain has withered away.',
                    18 => 'How the animals groan! The herds of cattle wander in confusion since they have no pasture. Even the flocks of sheep and goats suffer punishment.',
                    19 => 'I call to you, <span class="smallcaps">Lord</span>, for fire has consumed the pastures of the wilderness, and flames have devoured all the trees of the orchard.',
                    20 => 'Even the wild animals cry out to you, for the river beds are dried up, and fire has consumed the pastures of the wilderness.',
                ],
                'versesToSections' => [
                    1 => -1,
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
                    12 => 0,
                    13 => 0,
                    14 => 0,
                    15 => 1,
                    16 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'God\'s Call for Repentance',
                    2 => 'God\'s Response to His People',
                    3 => 'God\'s Promise of His Spirit',
                ],
                'verses' => [
                    1 => 'Blow the ram\'s horn in Zion; sound the alarm on my holy mountain! Let all the residents of the land tremble, for the day of the <span class="smallcaps">Lord</span> is coming; in fact, it is near —',
                    2 => 'a day of darkness and gloom, a day of clouds and total darkness, like the dawn spreading over the mountains; a great and strong people appears, such as never existed in ages past and never will again in all the generations to come.',
                    3 => 'A fire devours in front of them, and behind them a flame blazes. The land in front of them is like the garden of Eden, but behind them, it is like a desert wasteland; there is no escape from them.',
                    4 => 'Their appearance is like that of horses, and they gallop like war horses.',
                    5 => 'They bound on the tops of the mountains. Their sound is like the sound of chariots, like the sound of fiery flames consuming stubble, like a mighty army deployed for war.',
                    6 => 'Nations writhe in horror before them; all faces turn pale.',
                    7 => 'They attack as warriors attack; they scale walls as men of war do. Each goes on his own path, and they do not change their course.',
                    8 => 'They do not push each other; each proceeds on his own path. They dodge the arrows, never stopping.',
                    9 => 'They storm the city; they run on the wall; they climb into the houses; they enter through the windows like thieves.',
                    10 => 'The earth quakes before them; the sky shakes. The sun and moon grow dark, and the stars cease their shining.',
                    11 => 'The <span class="smallcaps">Lord</span> makes his voice heard in the presence of his army. His camp is very large; those who carry out his command are powerful. Indeed, the day of the <span class="smallcaps">Lord</span> is terrible and dreadful — who can endure it?',
                    12 => 'Even now — this is the <span class="smallcaps">Lord</span>\'s declaration — turn to me with all your heart, with fasting, weeping, and mourning.',
                    13 => 'Tear your hearts, not just your clothes, and return to the <span class="smallcaps">Lord</span> your God. For he is gracious and compassionate, slow to anger, abounding in faithful love, and he relents from sending disaster.',
                    14 => 'Who knows? He may turn and relent and leave a blessing behind him, so you can offer a grain offering and a drink offering to the <span class="smallcaps">Lord</span> your God.',
                    15 => 'Blow the ram\'s horn in Zion! Announce a sacred fast; proclaim a solemn assembly.',
                    16 => 'Gather the people; sanctify the congregation; assemble the aged; gather the infants, even babies nursing at the breast. Let the groom leave his bedroom, and the bride her honeymoon chamber.',
                    17 => 'Let the priests, the <span class="smallcaps">Lord</span>\'s ministers, weep between the portico and the altar. Let them say, "Have pity on your people, <span class="smallcaps">Lord</span>, and do not make your inheritance a disgrace, an object of scorn among the nations. Why should it be said among the peoples, \'Where is their God? \' "',
                    18 => 'Then the <span class="smallcaps">Lord</span> became jealous for his land and spared his people.',
                    19 => 'The <span class="smallcaps">Lord</span> answered his people: Look, I am about to send you grain, new wine, and fresh oil. You will be satiated with them, and I will no longer make you a disgrace among the nations.',
                    20 => 'I will drive the northerner far from you and banish him to a dry and desolate land, his front ranks into the Dead Sea, and his rear guard into the Mediterranean Sea. His stench will rise; yes, his rotten smell will rise, for he has done astonishing things.',
                    21 => 'Don\'t be afraid, land; rejoice and be glad, for the <span class="smallcaps">Lord</span> has done astonishing things.',
                    22 => 'Don\'t be afraid, wild animals, for the wilderness pastures have turned green, the trees bear their fruit, and the fig tree and grapevine yield their riches.',
                    23 => 'Children of Zion, rejoice and be glad in the <span class="smallcaps">Lord</span> your God, because he gives you the autumn rain for your vindication. He sends showers for you, both autumn and spring rain as before.',
                    24 => 'The threshing floors will be full of grain, and the vats will overflow with new wine and fresh oil.',
                    25 => 'I will repay you for the years that the swarming locust ate, the young locust, the destroying locust, and the devouring locust — my great army that I sent against you.',
                    26 => 'You will have plenty to eat and be satisfied. You will praise the name of the <span class="smallcaps">Lord</span> your God, who has dealt wondrously with you. My people will never again be put to shame.',
                    27 => 'You will know that I am present in Israel and that I am the <span class="smallcaps">Lord</span> your God, and there is no other. My people will never again be put to shame.',
                    28 => 'After this I will pour out my Spirit on all humanity; then your sons and your daughters will prophesy, your old men will have dreams, and your young men will see visions.',
                    29 => 'I will even pour out my Spirit on the male and female slaves in those days.',
                    30 => 'I will display wonders in the heavens and on the earth: blood, fire, and columns of smoke.',
                    31 => 'The sun will be turned to darkness and the moon to blood before the great and terrible day of the <span class="smallcaps">Lord</span> comes.',
                    32 => 'Then everyone who calls on the name of the <span class="smallcaps">Lord</span> will be saved, for there will be an escape for those on Mount Zion and in Jerusalem, as the <span class="smallcaps">Lord</span> promised, among the survivors the <span class="smallcaps">Lord</span> calls.',
                ],
                'versesToSections' => [
                    1 => -1,
                    2 => -1,
                    3 => -1,
                    4 => -1,
                    5 => -1,
                    6 => -1,
                    7 => -1,
                    8 => -1,
                    9 => -1,
                    10 => -1,
                    11 => -1,
                    12 => 0,
                    13 => 0,
                    14 => 0,
                    15 => 0,
                    16 => 0,
                    17 => 0,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                    22 => 1,
                    23 => 1,
                    24 => 1,
                    25 => 1,
                    26 => 1,
                    27 => 1,
                    28 => 2,
                    29 => 2,
                    30 => 2,
                    31 => 2,
                    32 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Judgment of the Nations',
                    2 => 'Israel Blessed',
                ],
                'verses' => [
                    1 => 'Yes, in those days and at that time, when I restore the fortunes of Judah and Jerusalem,',
                    2 => 'I will gather all the nations and take them to the Valley of Jehoshaphat. I will enter into judgment with them there because of my people, my inheritance Israel. The nations have scattered the Israelites in foreign countries and divided up my land.',
                    3 => 'They cast lots for my people; they bartered a boy for a prostitute and sold a girl for wine to drink.',
                    4 => 'And also: Tyre, Sidon, and all the territories of Philistia — what are you to me? Are you paying me back or trying to get even with me? I will quickly bring retribution on your heads.',
                    5 => 'For you took my silver and gold and carried my finest treasures to your temples.',
                    6 => 'You sold the people of Judah and Jerusalem to the Greeks to remove them far from their own territory.',
                    7 => 'Look, I am about to rouse them up from the place where you sold them; I will bring retribution on your heads.',
                    8 => 'I will sell your sons and daughters to the people of Judah, and they will sell them to the Sabeans, to a distant nation, for the <span class="smallcaps">Lord</span> has spoken.',
                    9 => 'Proclaim this among the nations: Prepare for holy war; rouse the warriors; let all the men of war advance and attack!',
                    10 => 'Beat your plows into swords and your pruning knives into spears. Let even the weakling say, "I am a warrior."',
                    11 => 'Come quickly, all you surrounding nations; gather yourselves. Bring down your warriors there, <span class="smallcaps">Lord</span>.',
                    12 => 'Let the nations be roused and come to the Valley of Jehoshaphat, for there I will sit down to judge all the surrounding nations.',
                    13 => 'Swing the sickle because the harvest is ripe. Come and trample the grapes because the winepress is full; the wine vats overflow because the wickedness of the nations is extreme.',
                    14 => 'Multitudes, multitudes in the valley of decision! For the day of the <span class="smallcaps">Lord</span> is near in the valley of decision.',
                    15 => 'The sun and moon will grow dark, and the stars will cease their shining.',
                    16 => 'The <span class="smallcaps">Lord</span> will roar from Zion and make his voice heard from Jerusalem; heaven and earth will shake. But the <span class="smallcaps">Lord</span> will be a refuge for his people, a stronghold for the Israelites.',
                    17 => 'Then you will know that I am the <span class="smallcaps">Lord</span> your God, who dwells in Zion, my holy mountain. Jerusalem will be holy, and foreigners will never overrun it again.',
                    18 => 'In that day the mountains will drip with sweet wine, and the hills will flow with milk. All the streams of Judah will flow with water, and a spring will issue from the <span class="smallcaps">Lord</span>\'s house, watering the Valley of Acacias.',
                    19 => 'Egypt will become desolate, and Edom a desert wasteland, because of the violence done to the people of Judah in whose land they shed innocent blood.',
                    20 => 'But Judah will be inhabited forever, and Jerusalem from generation to generation.',
                    21 => 'I will pardon their bloodguilt, which I have not pardoned, for the <span class="smallcaps">Lord</span> dwells in Zion.',
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
                    12 => 0,
                    13 => 0,
                    14 => 0,
                    15 => 0,
                    16 => 0,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                ],
            ],
        ];
    }
} 