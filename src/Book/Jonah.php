<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Jonah extends Book
{
    public const ABBREVIATION = 'Jonah';
    public const ID = 32;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Jonah';
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
                    1 => 'Jonah\'s Flight',
                ],
                'verses' => [
                    1 => 'The word of the <span class="smallcaps">Lord</span> came to Jonah son of Amittai:',
                    2 => '"Get up! Go to the great city of Nineveh and preach against it because their evil has come up before me."',
                    3 => 'Jonah got up to flee to Tarshish from the <span class="smallcaps">Lord</span>\'s presence. He went down to Joppa and found a ship going to Tarshish. He paid the fare and went down into it to go with them to Tarshish from the <span class="smallcaps">Lord</span>\'s presence.',
                    4 => 'But the <span class="smallcaps">Lord</span> threw a great wind onto the sea, and such a great storm arose on the sea that the ship threatened to break apart.',
                    5 => 'The sailors were afraid, and each cried out to his god. They threw the ship\'s cargo into the sea to lighten the load. Meanwhile, Jonah had gone down to the lowest part of the vessel and had stretched out and fallen into a deep sleep.',
                    6 => 'The captain approached him and said, "What are you doing sound asleep? Get up! Call to your god. Maybe this god will consider us, and we won\'t perish."',
                    7 => '"Come on! " the sailors said to each other. "Let\'s cast lots. Then we\'ll know who is to blame for this trouble we\'re in." So they cast lots, and the lot singled out Jonah.',
                    8 => 'Then they said to him, "Tell us who is to blame for this trouble we\'re in. What is your business, and where are you from? What is your country, and what people are you from? "',
                    9 => 'He answered them, "I\'m a Hebrew. I worship the <span class="smallcaps">Lord</span>, the God of the heavens, who made the sea and the dry land."',
                    10 => 'Then the men were seized by a great fear and said to him, "What have you done? " The men knew he was fleeing from the <span class="smallcaps">Lord</span>\'s presence because he had told them.',
                    11 => 'So they said to him, "What should we do to you so that the sea will calm down for us? " For the sea was getting worse and worse.',
                    12 => 'He answered them, "Pick me up and throw me into the sea so that it will calm down for you, for I know that I\'m to blame for this great storm that is against you."',
                    13 => 'Nevertheless, the men rowed hard to get back to dry land, but they couldn\'t because the sea was raging against them more and more.',
                    14 => 'So they called out to the <span class="smallcaps">Lord</span>, "Please, <span class="smallcaps">Lord</span>, don\'t let us perish because of this man\'s life, and don\'t charge us with innocent blood! For you, <span class="smallcaps">Lord</span>, have done just as you pleased."',
                    15 => 'Then they picked up Jonah and threw him into the sea, and the sea stopped its raging.',
                    16 => 'The men were seized by great fear of the <span class="smallcaps">Lord</span>, and they offered a sacrifice to the <span class="smallcaps">Lord</span> and made vows.',
                    17 => 'The <span class="smallcaps">Lord</span> appointed a great fish to swallow Jonah, and Jonah was in the belly of the fish three days and three nights.',
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
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Jonah\'s Prayer',
                ],
                'verses' => [
                    1 => 'Jonah prayed to the <span class="smallcaps">Lord</span> his God from the belly of the fish:',
                    2 => 'I called to the <span class="smallcaps">Lord</span> in my distress, and he answered me. I cried out for help from deep inside Sheol; you heard my voice.',
                    3 => 'When you threw me into the depths, into the heart of the seas, the current overcame me. All your breakers and your billows swept over me.',
                    4 => 'And I said, "I have been banished from your sight, yet I will look once more toward your holy temple."',
                    5 => 'The water engulfed me up to the neck; the watery depths overcame me; seaweed was wrapped around my head.',
                    6 => 'I sank to the foundations of the mountains, the earth\'s gates shut behind me forever! Then you raised my life from the Pit, <span class="smallcaps">Lord</span> my God!',
                    7 => 'As my life was fading away, I remembered the <span class="smallcaps">Lord</span>, and my prayer came to you, to your holy temple.',
                    8 => 'Those who cherish worthless idols abandon their faithful love,',
                    9 => 'but as for me, I will sacrifice to you with a voice of thanksgiving. I will fulfill what I have vowed. Salvation belongs to the <span class="smallcaps">Lord</span>.',
                    10 => 'Then the <span class="smallcaps">Lord</span> commanded the fish, and it vomited Jonah onto dry land.',
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
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Jonah\'s Preaching',
                ],
                'verses' => [
                    1 => 'The word of the <span class="smallcaps">Lord</span> came to Jonah a second time:',
                    2 => '"Get up! Go to the great city of Nineveh and preach the message that I tell you."',
                    3 => 'Jonah got up and went to Nineveh according to the <span class="smallcaps">Lord</span>\'s command. Now Nineveh was an extremely great city, a three-day walk.',
                    4 => 'Jonah set out on the first day of his walk in the city and proclaimed, "In forty days Nineveh will be demolished! "',
                    5 => 'Then the people of Nineveh believed God. They proclaimed a fast and dressed in sackcloth — from the greatest of them to the least.',
                    6 => 'When word reached the king of Nineveh, he got up from his throne, took off his royal robe, covered himself with sackcloth, and sat in ashes.',
                    7 => 'Then he issued a decree in Nineveh:',
                    10 => 'God saw their actions — that they had turned from their evil ways — so God relented from the disaster he had threatened them with. And he did not do it.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
                    6 => 0,
                    7 => 0,
                    10 => 0,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Jonah\'s Anger',
                ],
                'verses' => [
                    1 => 'Jonah was greatly displeased and became furious.',
                    2 => 'He prayed to the <span class="smallcaps">Lord</span>, "Please, <span class="smallcaps">Lord</span>, isn\'t this what I said while I was still in my own country? That\'s why I fled toward Tarshish in the first place. I knew that you are a gracious and compassionate God, slow to anger, abounding in faithful love, and one who relents from sending disaster.',
                    3 => 'And now, <span class="smallcaps">Lord</span>, take my life from me, for it is better for me to die than to live."',
                    4 => 'The <span class="smallcaps">Lord</span> asked, "Is it right for you to be angry? "',
                    5 => 'Jonah left the city and found a place east of it. He made himself a shelter there and sat in its shade to see what would happen to the city.',
                    6 => 'Then the <span class="smallcaps">Lord</span> God appointed a plant, and it grew over Jonah to provide shade for his head to rescue him from his trouble. Jonah was greatly pleased with the plant.',
                    7 => 'When dawn came the next day, God appointed a worm that attacked the plant, and it withered.',
                    8 => 'As the sun was rising, God appointed a scorching east wind. The sun beat down on Jonah\'s head so much that he almost fainted, and he wanted to die. He said, "It\'s better for me to die than to live."',
                    9 => 'Then God asked Jonah, "Is it right for you to be angry about the plant? " "Yes, it\'s right! " he replied. "I\'m angry enough to die! "',
                    10 => 'And the <span class="smallcaps">Lord</span> said, "You cared about the plant, which you did not labor over and did not grow. It appeared in a night and perished in a night.',
                    11 => 'So may I not care about the great city of Nineveh, which has more than a hundred twenty thousand people who cannot distinguish between their right and their left, as well as many animals? "',
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
                ],
            ],
        ];
    }
} 