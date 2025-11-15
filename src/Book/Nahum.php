<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Nahum extends Book
{
    public const ABBREVIATION = 'Nah';
    public const ID = 34;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Nahum';
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
                    1 => 'God\'s Vengeance',
                    2 => 'Destruction of Nineveh',
                    3 => 'Promise of Judah\'s Deliverance',
                    4 => 'The Assyrian King\'s Demise',
                ],
                'verses' => [
                    1 => 'The pronouncement concerning Nineveh. The book of the vision of Nahum the Elkoshite.',
                    2 => 'The <span class="smallcaps">Lord</span> is a jealous and avenging God; the <span class="smallcaps">Lord</span> takes vengeance and is fierce in wrath. The <span class="smallcaps">Lord</span> takes vengeance against his foes; he is furious with his enemies.',
                    3 => 'The <span class="smallcaps">Lord</span> is slow to anger but great in power; the <span class="smallcaps">Lord</span> will never leave the guilty unpunished. His path is in the whirlwind and storm, and clouds are the dust beneath his feet.',
                    4 => 'He rebukes the sea and dries it up, and he makes all the rivers run dry. Bashan and Carmel wither; even the flower of Lebanon withers.',
                    5 => 'The mountains quake before him, and the hills melt; the earth trembles at his presence — the world and all who live in it.',
                    6 => 'Who can withstand his indignation? Who can endure his burning anger? His wrath is poured out like fire; even rocks are shattered before him.',
                    7 => 'The <span class="smallcaps">Lord</span> is good, a stronghold in a day of distress; he cares for those who take refuge in him.',
                    8 => 'But he will completely destroy Nineveh with an overwhelming flood, and he will chase his enemies into darkness.',
                    9 => 'Whatever you plot against the <span class="smallcaps">Lord</span>, he will bring it to complete destruction; oppression will not rise up a second time.',
                    10 => 'For they will be consumed like entangled thorns, like the drink of a drunkard and like straw that is fully dry.',
                    11 => 'One has gone out from you, who plots evil against the <span class="smallcaps">Lord</span>, and is a wicked counselor.',
                    12 => 'This is what the <span class="smallcaps">Lord</span> says: Though they are strong and numerous, they will still be mowed down, and he will pass away. Though I have punished you, I will punish you no longer.',
                    13 => 'For I will now break off his yoke from you and tear off your shackles.',
                    14 => 'The <span class="smallcaps">Lord</span> has issued an order concerning you: There will be no offspring to carry on your name. I will eliminate the carved idol and cast image from the house of your gods; I will prepare your grave, for you are contemptible.',
                    15 => 'Look to the mountains — the feet of the herald, who proclaims peace. Celebrate your festivals, Judah; fulfill your vows. For the wicked one will never again march through you; he will be entirely wiped out.',
                ],
                'versesToSections' => [
                    1 => -1,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
                    6 => 0,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 1,
                    11 => 1,
                    12 => 2,
                    13 => 2,
                    14 => 3,
                    15 => 3,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Attack against Nineveh',
                ],
                'verses' => [
                    1 => 'One who scatters is coming up against you. Man the fortifications! Watch the road! Brace yourself! Summon all your strength!',
                    2 => 'For the <span class="smallcaps">Lord</span> will restore the majesty of Jacob, yes, the majesty of Israel, though ravagers have ravaged them and ruined their vine branches.',
                    3 => 'The shields of his warriors are dyed red; the valiant men are dressed in scarlet. The fittings of the chariot flash like fire on the day of its battle preparations, and the spears are brandished.',
                    4 => 'The chariots dash madly through the streets; they rush around in the plazas. They look like torches; they dart back and forth like lightning.',
                    5 => 'He gives orders to his officers; they stumble as they advance. They race to its wall; the protective shield is set in place.',
                    6 => 'The river gates are opened, and the palace erodes away.',
                    7 => 'Beauty is stripped; she is carried away; her ladies-in-waiting moan like the sound of doves and beat their breasts.',
                    8 => 'Nineveh has been like a pool of water from her first days, but they are fleeing. "Stop! Stop! " they cry, but no one turns back.',
                    9 => '"Plunder the silver! Plunder the gold! " There is no end to the treasure, an abundance of every precious thing.',
                    10 => 'Desolation, decimation, devastation! Hearts melt, knees tremble, insides churn, every face grows pale!',
                    11 => 'Where is the lions\' lair, or the feeding ground of the young lions, where the lion and lioness prowled, and the lion\'s cub, with nothing to frighten them away?',
                    12 => 'The lion mauled whatever its cubs needed and strangled prey for its lionesses. It filled up its dens with the kill, and its lairs with mauled prey.',
                    13 => 'Beware, I am against you. This is the declaration of the <span class="smallcaps">Lord</span> of Armies. I will make your chariots go up in smoke, and the sword will devour your young lions. I will cut off your prey from the earth, and the sound of your messengers will never be heard again.',
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
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Nineveh\'s Downfall',
                ],
                'verses' => [
                    1 => 'Woe to the city of blood, totally deceitful, full of plunder, never without prey.',
                    2 => 'The crack of the whip and rumble of the wheel, galloping horse and jolting chariot!',
                    3 => 'Charging horseman, flashing sword, shining spear; heaps of slain, mounds of corpses, dead bodies without end — they stumble over their dead.',
                    4 => 'Because of the continual prostitution of the prostitute, the attractive mistress of sorcery, who treats nations and clans like merchandise by her prostitution and sorcery,',
                    5 => 'I am against you. This is the declaration of the <span class="smallcaps">Lord</span> of Armies. I will lift your skirts over your face and display your nakedness to nations, your shame to kingdoms.',
                    6 => 'I will throw filth on you and treat you with contempt; I will make a spectacle of you.',
                    7 => 'Then all who see you will recoil from you, saying, "Nineveh is devastated; who will show sympathy to her? " Where can I find anyone to comfort you?',
                    8 => 'Are you better than Thebes that sat along the Nile with water surrounding her, whose rampart was the sea, the river her wall?',
                    9 => 'Cush and Egypt were her endless source of strength; Put and Libya were among her allies.',
                    10 => 'Yet she became an exile; she went into captivity. Her children were also dashed to pieces at the head of every street. They cast lots for her dignitaries, and all her nobles were bound in chains.',
                    11 => 'You also will become drunk; you will hide. You also will seek refuge from the enemy.',
                    12 => 'All your fortresses are fig trees with figs that ripened first; when shaken, they fall — right into the mouth of the eater!',
                    13 => 'Look, your troops are like women among you; your land\'s city gates are wide open to your enemies. Fire will devour the bars of your gates.',
                    14 => 'Draw water for the siege; strengthen your fortresses. Step into the clay and tread the mortar; take hold of the brick-mold!',
                    15 => 'The fire will devour you there; the sword will cut you down. It will devour you like the young locust. Multiply yourselves like the young locust; multiply like the swarming locust!',
                    16 => 'You have made your merchants more numerous than the stars of the sky. The young locust strips the land and flies away.',
                    17 => 'Your court officials are like the swarming locust, and your scribes like clouds of locusts, which settle on the walls on a cold day; when the sun rises, they take off, and no one knows where they are.',
                    18 => 'King of Assyria, your shepherds slumber; your officers sleep. Your people are scattered across the mountains with no one to gather them together.',
                    19 => 'There is no remedy for your injury; your wound is severe. All who hear the news about you will clap their hands because of you, for who has not experienced your constant cruelty?',
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
                    17 => 0,
                    18 => 0,
                    19 => 0,
                ],
            ],
        ];
    }
} 