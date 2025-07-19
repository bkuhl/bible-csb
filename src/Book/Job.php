<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Job extends Book
{
    public const ABBREVIATION = 'Job';
    public const ID = 18;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Job';
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
                    1 => 'Job and His Family',
                    2 => 'Satan\'s First Test of Job',
                ],
                'verses' => [
                    1 => 'There was a man in the country of Uz named Job. He was a man of complete integrity, who feared God and turned away from evil.',
                    2 => 'He had seven sons and three daughters.',
                    3 => 'His estate included seven thousand sheep and goats, three thousand camels, five hundred yoke of oxen, five hundred female donkeys, and a very large number of servants. Job was the greatest man among all the people of the east.',
                    4 => 'His sons used to take turns having banquets at their homes. They would send an invitation to their three sisters to eat and drink with them.',
                    5 => 'Whenever a round of banqueting was over, Job would send for his children and purify them, rising early in the morning to offer burnt offerings for all of them. For Job thought, "Perhaps my children have sinned, having cursed God in their hearts." This was Job\'s regular practice.',
                    6 => 'One day the sons of God came to present themselves before the Lord, and Satan also came with them.',
                    7 => 'The asked Satan, "Where have you come from? " "From roaming through the earth," Satan answered him, "and walking around on it."',
                    8 => 'Then the said to Satan, "Have you considered my servant Job? No one else on earth is like him, a man of perfect integrity, who fears God and turns away from evil."',
                    9 => 'Satan answered the Lord, "Does Job fear God for nothing?',
                    10 => 'Haven\'t you placed a hedge around him, his household, and everything he owns? You have blessed the work of his hands, and his possessions have increased in the land.',
                    11 => 'But stretch out your hand and strike everything he owns, and he will surely curse you to your face."',
                    12 => '"Very well," the Lord told Satan, "everything he owns is in your power. However, do not lay a hand on Job himself." So Satan left the \'s presence.',
                    13 => 'One day when Job\'s sons and daughters were eating and drinking wine in their oldest brother\'s house,',
                    14 => 'a messenger came to Job and reported, "While the oxen were plowing and the donkeys grazing nearby,',
                    15 => 'the Sabeans swooped down and took them away. They struck down the servants with the sword, and I alone have escaped to tell you! "',
                    16 => 'He was still speaking when another messenger came and reported, "God\'s fire fell from heaven. It burned the sheep and the servants and devoured them, and I alone have escaped to tell you! "',
                    17 => 'That messenger was still speaking when yet another came and reported, "The Chaldeans formed three bands, made a raid on the camels, and took them away. They struck down the servants with the sword, and I alone have escaped to tell you! "',
                    18 => 'He was still speaking when another messenger came and reported, "Your sons and daughters were eating and drinking wine in their oldest brother\'s house.',
                    19 => 'Suddenly a powerful wind swept in from the desert and struck the four corners of the house. It collapsed on the young people so that they died, and I alone have escaped to tell you! "',
                    20 => 'Then Job stood up, tore his robe, and shaved his head. He fell to the ground and worshiped,',
                    21 => 'saying:',
                    22 => 'Throughout all this Job did not sin or blame God for anything.',
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
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Satan\'s Second Test of Job',
                    2 => 'Job\'s Three Friends',
                ],
                'verses' => [
                    1 => 'One day the sons of God came again to present themselves before the Lord, and Satan also came with them to present himself before the Lord.',
                    2 => 'The asked Satan, "Where have you come from? " "From roaming through the earth," Satan answered him, "and walking around on it."',
                    3 => 'Then the said to Satan, "Have you considered my servant Job? No one else on earth is like him, a man of perfect integrity, who fears God and turns away from evil. He still retains his integrity, even though you incited me against him, to destroy him for no good reason."',
                    4 => '"Skin for skin! " Satan answered the Lord. "A man will give up everything he owns in exchange for his life.',
                    5 => 'But stretch out your hand and strike his flesh and bones, and he will surely curse you to your face."',
                    6 => '"Very well," the Lord told Satan, "he is in your power; only spare his life."',
                    7 => 'So Satan left the Lord\'s presence and infected Job with terrible boils from the soles of his feet to the top of his head.',
                    8 => 'Then Job took a piece of broken pottery to scrape himself while he sat among the ashes.',
                    9 => 'His wife said to him, "Are you still holding on to your integrity? Curse God and die! "',
                    10 => '"You speak as a foolish woman speaks," he told her. "Should we accept only good from God and not adversity? " Throughout all this Job did not sin in what he said.',
                    11 => 'Now when Job\'s three friends — Eliphaz the Temanite, Bildad the Shuhite, and Zophar the Naamathite — heard about all this adversity that had happened to him, each of them came from his home. They met together to go and sympathize with him and comfort him.',
                    12 => 'When they looked from a distance, they could barely recognize him. They wept aloud, and each man tore his robe and threw dust into the air and on his head.',
                    13 => 'Then they sat on the ground with him seven days and nights, but no one spoke a word to him because they saw that his suffering was very intense.',
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
                    11 => 2,
                    12 => 2,
                    13 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Job\'s Opening Speech',
                ],
                'verses' => [
                    1 => 'After this, Job began to speak and cursed the day he was born.',
                    2 => 'He said:',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Eliphaz Speaks',
                ],
                'verses' => [
                    1 => 'Then Eliphaz the Temanite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
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
                    1 => 'Job\'s Reply to Eliphaz',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            7 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'Bildad Speaks',
                ],
                'verses' => [
                    1 => 'Then Bildad the Shuhite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Job\'s Reply to Bildad',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            10 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            11 => [
                'sections' => [
                    1 => 'Zophar Speaks',
                ],
                'verses' => [
                    1 => 'Then Zophar the Naamathite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            12 => [
                'sections' => [
                    1 => 'Job\'s Reply to Zophar',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            13 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            14 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            15 => [
                'sections' => [
                    1 => 'Eliphaz Speaks',
                ],
                'verses' => [
                    1 => 'Then Eliphaz the Temanite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            16 => [
                'sections' => [
                    1 => 'Job\'s Reply to Eliphaz',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            17 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            18 => [
                'sections' => [
                    1 => 'Bildad Speaks',
                ],
                'verses' => [
                    1 => 'Then Bildad the Shuhite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            19 => [
                'sections' => [
                    1 => 'Job\'s Reply to Bildad',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            20 => [
                'sections' => [
                    1 => 'Zophar Speaks',
                ],
                'verses' => [
                    1 => 'Then Zophar the Naamathite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            21 => [
                'sections' => [
                    1 => 'Job\'s Reply to Zophar',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            22 => [
                'sections' => [
                    1 => 'Eliphaz Speaks',
                ],
                'verses' => [
                    1 => 'Then Eliphaz the Temanite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            23 => [
                'sections' => [
                    1 => 'Job\'s Reply to Eliphaz',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            24 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            25 => [
                'sections' => [
                    1 => 'Bildad Speaks',
                ],
                'verses' => [
                    1 => 'Then Bildad the Shuhite replied:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            26 => [
                'sections' => [
                    1 => 'Job\'s Reply to Bildad',
                ],
                'verses' => [
                    1 => 'Then Job answered:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            27 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Job continued his discourse, saying:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            28 => [
                'sections' => [
                    1 => 'A Hymn to Wisdom',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            29 => [
                'sections' => [
                    1 => 'Job\'s Final Claim of Innocence',
                ],
                'verses' => [
                    1 => 'Job continued his discourse, saying:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            30 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            31 => [
                'sections' => [
                ],
                'verses' => [
                    40 => 'The words of Job are concluded.',
                ],
                'versesToSections' => [
                    40 => 0,
                ],
            ],
            32 => [
                'sections' => [
                    1 => 'Elihu\'s Angry Response',
                ],
                'verses' => [
                    1 => 'So these three men quit answering Job, because he was righteous in his own eyes.',
                    2 => 'Then Elihu son of Barachel the Buzite from the family of Ram became angry. He was angry at Job because he had justified himself rather than God.',
                    3 => 'He was also angry at Job\'s three friends because they had failed to refute him and yet had condemned him.',
                    4 => 'Now Elihu had waited to speak to Job because they were all older than he.',
                    5 => 'But when he saw that the three men could not answer Job, he became angry.',
                    6 => 'So Elihu son of Barachel the Buzite replied:',
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
            33 => [
                'sections' => [
                    1 => 'Elihu Confronts Job',
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            34 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Then Elihu continued, saying:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            35 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Then Elihu continued, saying:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            36 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Then Elihu continued, saying:',
                ],
                'versesToSections' => [
                    1 => 0,
                ],
            ],
            37 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            38 => [
                'sections' => [
                    1 => 'The Speaks',
                ],
                'verses' => [
                    1 => 'Then the answered Job from the whirlwind. He said:',
                ],
                'versesToSections' => [
                    1 => 1,
                ],
            ],
            39 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            40 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'The answered Job:',
                    3 => 'Then Job answered the Lord:',
                    6 => 'Then the answered Job from the whirlwind:',
                ],
                'versesToSections' => [
                    1 => 0,
                    3 => 0,
                    6 => 0,
                ],
            ],
            41 => [
                'sections' => [
                ],
                'verses' => [
                ],
                'versesToSections' => [
                ],
            ],
            42 => [
                'sections' => [
                    1 => 'Job Replies to the',
                    2 => 'God Restores Job',
                ],
                'verses' => [
                    1 => 'Then Job replied to the Lord:',
                    7 => 'After the had finished speaking to Job, he said to Eliphaz the Temanite, "I am angry with you and your two friends, for you have not spoken the truth about me, as my servant Job has.',
                    8 => 'Now take seven bulls and seven rams, go to my servant Job, and offer a burnt offering for yourselves. Then my servant Job will pray for you. I will surely accept his prayer and not deal with you as your folly deserves. For you have not spoken the truth about me, as my servant Job has."',
                    9 => 'Then Eliphaz the Temanite, Bildad the Shuhite, and Zophar the Naamathite went and did as the had told them, and the Lord accepted Job\'s prayer.',
                    10 => 'After Job had prayed for his friends, the Lord restored his fortunes and doubled his previous possessions.',
                    11 => 'All his brothers, sisters, and former acquaintances came to him and dined with him in his house. They sympathized with him and comforted him concerning all the adversity the Lord had brought on him. Each one gave him a piece of silver and a gold earring.',
                    12 => 'So the blessed the last part of Job\'s life more than the first. He owned fourteen thousand sheep and goats, six thousand camels, one thousand yoke of oxen, and one thousand female donkeys.',
                    13 => 'He also had seven sons and three daughters.',
                    14 => 'He named his first daughter Jemimah, his second Keziah, and his third Keren-happuch.',
                    15 => 'No women as beautiful as Job\'s daughters could be found in all the land, and their father granted them an inheritance with their brothers.',
                    16 => 'Job lived 140 years after this and saw his children and their children to the fourth generation.',
                    17 => 'Then Job died, old and full of days.',
                ],
                'versesToSections' => [
                    1 => 1,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                ],
            ],
        ];
    }
} 