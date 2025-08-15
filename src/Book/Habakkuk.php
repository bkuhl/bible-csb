<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Habakkuk extends Book
{
    public const ABBREVIATION = 'Hab';
    public const ID = 35;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Habakkuk';
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
                    1 => 'Habakkuk\'s First Prayer',
                    2 => 'God\'s First Answer',
                    3 => 'Habakkuk\'s Second Prayer',
                ],
                'verses' => [
                    1 => 'The pronouncement that the prophet Habakkuk saw.',
                    2 => 'How long, <span class="smallcaps">Lord</span>, must I call for help and you do not listen or cry out to you about violence and you do not save?',
                    3 => 'Why do you force me to look at injustice? Why do you tolerate wrongdoing? Oppression and violence are right in front of me. Strife is ongoing, and conflict escalates.',
                    4 => 'This is why the law is ineffective and justice never emerges. For the wicked restrict the righteous; therefore, justice comes out perverted.',
                    5 => 'Look at the nations and observe — be utterly astounded! For I am doing something in your days that you will not believe when you hear about it.',
                    6 => 'Look! I am raising up the Chaldeans, that bitter, impetuous nation that marches across the earth\'s open spaces to seize territories not its own.',
                    7 => 'They are fierce and terrifying; their views of justice and sovereignty stem from themselves.',
                    8 => 'Their horses are swifter than leopards and more fierce than wolves of the night. Their horsemen charge ahead; their horsemen come from distant lands. They fly like eagles, swooping to devour.',
                    9 => 'All of them come to do violence; their faces are set in determination. They gather prisoners like sand.',
                    10 => 'They mock kings, and rulers are a joke to them. They laugh at every fortress and build siege ramps to capture it.',
                    11 => 'Then they sweep by like the wind and pass through. They are guilty; their strength is their god.',
                    12 => 'Are you not from eternity, <span class="smallcaps">Lord</span> my God? My Holy One, you will not die. <span class="smallcaps">Lord</span>, you appointed them to execute judgment; my Rock, you destined them to punish us.',
                    13 => 'Your eyes are too pure to look on evil, and you cannot tolerate wrongdoing. So why do you tolerate those who are treacherous? Why are you silent while one who is wicked swallows up one who is more righteous than himself?',
                    14 => 'You have made mankind like the fish of the sea, like marine creatures that have no ruler.',
                    15 => 'The Chaldeans pull them all up with a hook, catch them in their dragnet, and gather them in their fishing net; that is why they are glad and rejoice.',
                    16 => 'That is why they sacrifice to their dragnet and burn incense to their fishing net, for by these things their portion is rich and their food plentiful.',
                    17 => 'Will they therefore empty their net and continually slaughter nations without mercy?',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 1,
                    3 => 1,
                    4 => 1,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Habakkuk Waits for God\'s Response',
                    2 => 'God\'s Second Answer',
                    3 => 'The Five Woe Oracles',
                ],
                'verses' => [
                    1 => 'I will stand at my guard post and station myself on the lookout tower. I will watch to see what he will say to me and what I should reply about my complaint.',
                    2 => 'The <span class="smallcaps">Lord</span> answered me: Write down this vision; clearly inscribe it on tablets so one may easily read it.',
                    3 => 'For the vision is yet for the appointed time; it testifies about the end and will not lie. Though it delays, wait for it, since it will certainly come and not be late.',
                    4 => 'Look, his ego is inflated; he is without integrity. But the righteous one will live by his faith.',
                    5 => 'Moreover, wine betrays; an arrogant man is never at rest. He enlarges his appetite like Sheol, and like Death he is never satisfied. He gathers all the nations to himself; he collects all the peoples for himself.',
                    6 => 'Won\'t all of these take up a taunt against him, with mockery and riddles about him? They will say: "Woe to him who amasses what is not his — how much longer? — and loads himself with goods taken in pledge."',
                    7 => 'Won\'t your creditors suddenly arise, and those who disturb you wake up? Then you will become spoil for them.',
                    8 => 'Since you have plundered many nations, all the peoples who remain will plunder you — because of human bloodshed and violence against lands, cities, and all who live in them.',
                    9 => 'Woe to him who dishonestly makes wealth for his house to place his nest on high, to escape the grasp of disaster!',
                    10 => 'You have planned shame for your house by wiping out many peoples and sinning against your own self.',
                    11 => 'For the stones will cry out from the wall, and the rafters will answer them from the woodwork.',
                    12 => 'Woe to him who builds a city with bloodshed and founds a town with injustice!',
                    13 => 'Is it not from the <span class="smallcaps">Lord</span> of Armies that the peoples labor only to fuel the fire and countries exhaust themselves for nothing?',
                    14 => 'For the earth will be filled with the knowledge of the <span class="smallcaps">Lord</span>\'s glory, as the water covers the sea.',
                    15 => 'Woe to him who gives his neighbors drink, pouring out your wrath and even making them drunk, in order to look at their nakedness!',
                    16 => 'You will be filled with disgrace instead of glory. You also — drink, and expose your uncircumcision! The cup in the <span class="smallcaps">Lord</span>\'s right hand will come around to you, and utter disgrace will cover your glory.',
                    17 => 'For your violence against Lebanon will overwhelm you; the destruction of animals will terrify you because of your human bloodshed and violence against lands, cities, and all who live in them.',
                    18 => 'What use is a carved idol after its craftsman carves it? It is only a cast image, a teacher of lies. For the one who crafts its shape trusts in it and makes worthless idols that cannot speak.',
                    19 => 'Woe to him who says to wood: Wake up! or to mute stone: Come alive! Can it teach? Look! It may be plated with gold and silver, yet there is no breath in it at all.',
                    20 => 'But the <span class="smallcaps">Lord</span> is in his holy temple; let the whole earth be silent in his presence.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 2,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 3,
                    7 => 3,
                    8 => 3,
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Habakkuk\'s Third Prayer',
                    2 => 'Habakkuk\'s Confidence in God Expressed',
                ],
                'verses' => [
                    1 => 'A prayer of the prophet Habakkuk. According to \'Shigionoth\'.',
                    2 => '<span class="smallcaps">Lord</span>, I have heard the report about you; <span class="smallcaps">Lord</span>, I stand in awe of your deeds. Revive your work in these years; make it known in these years. In your wrath remember mercy!',
                    3 => 'God comes from Teman, the Holy One from Mount Paran. \'Selah\' His splendor covers the heavens, and the earth is full of his praise.',
                    4 => 'His brilliance is like light; rays are flashing from his hand. This is where his power is hidden.',
                    5 => 'Plague goes before him, and pestilence follows in his steps.',
                    6 => 'He stands and shakes the earth; he looks and startles the nations. The age-old mountains break apart; the ancient hills sink down. His pathways are ancient.',
                    7 => 'I see the tents of Cushan in distress; the tent curtains of the land of Midian tremble.',
                    8 => 'Are you angry at the rivers, <span class="smallcaps">Lord</span>? Is your wrath against the rivers? Or is your fury against the sea when you ride on your horses, your victorious chariot?',
                    9 => 'You took the sheath from your bow; the arrows are ready to be used with an oath. \'Selah\' You split the earth with rivers.',
                    10 => 'The mountains see you and shudder; a downpour of water sweeps by. The deep roars with its voice and lifts its waves high.',
                    11 => 'Sun and moon stand still in their lofty residence, at the flash of your flying arrows, at the brightness of your shining spear.',
                    12 => 'You march across the earth with indignation; you trample down the nations in wrath.',
                    13 => 'You come out to save your people, to save your anointed. You crush the leader of the house of the wicked and strip him from foot to neck. \'Selah\'',
                    14 => 'You pierce his head with his own spears; his warriors storm out to scatter us, gloating as if ready to secretly devour the weak.',
                    15 => 'You tread the sea with your horses, stirring up the vast water.',
                    16 => 'I heard, and I trembled within; my lips quivered at the sound. Rottenness entered my bones; I trembled where I stood. Now I must quietly wait for the day of distress to come against the people invading us.',
                    17 => 'Though the fig tree does not bud and there is no fruit on the vines, though the olive crop fails and the fields produce no food, though the flocks disappear from the pen and there are no herds in the stalls,',
                    18 => 'yet I will celebrate in the <span class="smallcaps">Lord</span>; I will rejoice in the God of my salvation!',
                    19 => 'The <span class="smallcaps">Lord</span> my Lord is my strength; he makes my feet like those of a deer and enables me to walk on mountain heights!',
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
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 2,
                ],
            ],
        ];
    }
} 