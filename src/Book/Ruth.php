<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Ruth extends Book
{
    private const ABBREVIATION = 'Ruth';
    public const ID = 8;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Ruth';
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
                    1 => 'Naomi\'s Family in Moab',
                    2 => 'Ruth\'s Loyalty to Naomi',
                ],
                'verses' => [
                    1 => 'During the time of the judges, there was a famine in the land. A man left Bethlehem in Judah with his wife and two sons to stay in the territory of Moab for a while.',
                    2 => 'The man\'s name was Elimelech, and his wife\'s name was Naomi. The names of his two sons were Mahlon and Chilion. They were Ephrathites from Bethlehem in Judah. They entered the fields of Moab and settled there.',
                    3 => 'Naomi\'s husband, Elimelech, died, and she was left with her two sons.',
                    4 => 'Her sons took Moabite women as their wives: one was named Orpah and the second was named Ruth. After they lived in Moab about ten years,',
                    5 => 'both Mahlon and Chilion also died, and the woman was left without her two children and without her husband.',
                    6 => 'She and her daughters-in-law set out to return from the territory of Moab, because she had heard in Moab that the had paid attention to his people\'s need by providing them food.',
                    7 => 'She left the place where she had been living, accompanied by her two daughters-in-law, and traveled along the road leading back to the land of Judah.',
                    8 => 'Naomi said to them, "Each of you go back to your mother\'s home. May the Lord show kindness to you as you have shown to the dead and to me.',
                    9 => 'May the grant each of you rest in the house of a new husband." She kissed them, and they wept loudly.',
                    10 => 'They said to her, "We insist on returning with you to your people."',
                    11 => 'But Naomi replied, "Return home, my daughters. Why do you want to go with me? Am I able to have any more sons who could become your husbands?',
                    12 => 'Return home, my daughters. Go on, for I am too old to have another husband. Even if I thought there was still hope for me to have a husband tonight and to bear sons,',
                    13 => 'would you be willing to wait for them to grow up? Would you restrain yourselves from remarrying? No, my daughters, my life is much too bitter for you to share, because the Lord\'s hand has turned against me."',
                    14 => 'Again they wept loudly, and Orpah kissed her mother-in-law, but Ruth clung to her.',
                    15 => 'Naomi said, "Look, your sister-in-law has gone back to her people and to her gods. Follow your sister-in-law."',
                    16 => 'But Ruth replied:',
                    18 => 'When Naomi saw that Ruth was determined to go with her, she stopped talking to her.',
                    19 => 'The two of them traveled until they came to Bethlehem. When they entered Bethlehem, the whole town was excited about their arrival and the local women exclaimed, "Can this be Naomi? "',
                    20 => '"Don\'t call me Naomi. Call me Mara," she answered, "for the Almighty has made me very bitter.',
                    21 => 'I went away full, but the Lord has brought me back empty. Why do you call me Naomi, since the Lord has opposed me, and the Almighty has afflicted me? "',
                    22 => 'So Naomi came back from the territory of Moab with her daughter-in-law Ruth the Moabitess. They arrived in Bethlehem at the beginning of the barley harvest.',
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
                    18 => 2,
                    19 => 2,
                    20 => 2,
                    21 => 2,
                    22 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Ruth and Boaz Meet',
                ],
                'verses' => [
                    1 => 'Now Naomi had a relative on her husband\'s side. He was a prominent man of noble character from Elimelech\'s family. His name was Boaz.',
                    2 => 'Naomi answered her, "Go ahead, my daughter."',
                    3 => 'So Ruth left and entered the field to gather grain behind the harvesters. She happened to be in the portion of the field belonging to Boaz, who was from Elimelech\'s family.',
                    4 => 'Later, when Boaz arrived from Bethlehem, he said to the harvesters, "The Lord be with you."',
                    5 => 'Boaz asked his servant who was in charge of the harvesters, "Whose young woman is this? "',
                    6 => 'The servant answered, "She is the young Moabite woman who returned with Naomi from the territory of Moab.',
                    7 => 'She asked, \'Will you let me gather fallen grain among the bundles behind the harvesters? \' She came and has been on her feet since early morning, except that she rested a little in the shelter."',
                    8 => 'Then Boaz said to Ruth, "Listen, my daughter. Don\'t go and gather grain in another field, and don\'t leave this one, but stay here close to my female servants.',
                    9 => 'See which field they are harvesting, and follow them. Haven\'t I ordered the young men not to touch you? When you are thirsty, go and drink from the jars the young men have filled."',
                    10 => 'She fell facedown, bowed to the ground, and said to him, "Why have I found favor with you, so that you notice me, although I am a foreigner? "',
                    11 => 'Boaz answered her, "Everything you have done for your mother-in-law since your husband\'s death has been fully reported to me: how you left your father and mother and your native land, and how you came to a people you didn\'t previously know.',
                    12 => 'May the reward you for what you have done, and may you receive a full reward from the Lord God of Israel, under whose wings you have come for refuge."',
                    13 => '"My lord," she said, "I have found favor with you, for you have comforted and encouraged your servant, although I am not like one of your female servants."',
                    14 => 'At mealtime Boaz told her, "Come over here and have some bread and dip it in the vinegar sauce." So she sat beside the harvesters, and he offered her roasted grain. She ate and was satisfied and had some left over.',
                    15 => 'When she got up to gather grain, Boaz ordered his young men, "Let her even gather grain among the bundles, and don\'t humiliate her.',
                    16 => 'Pull out some stalks from the bundles for her and leave them for her to gather. Don\'t rebuke her."',
                    17 => 'So Ruth gathered grain in the field until evening. She beat out what she had gathered, and it was about twenty-six quarts of barley.',
                    18 => 'She picked up the grain and went into the town, where her mother-in-law saw what she had gleaned. She brought out what she had left over from her meal and gave it to her.',
                    19 => 'Her mother-in-law said to her, "Where did you gather barley today, and where did you work? May the bless the man who noticed you."',
                    20 => 'Then Naomi said to her daughter-in-law, "May the Lord bless him because he has not abandoned his kindness to the living or the dead." Naomi continued, "The man is a close relative. He is one of our family redeemers."',
                    21 => 'Ruth the Moabitess said, "He also told me, \'Stay with my young men until they have finished all of my harvest.\' "',
                    22 => 'So Naomi said to her daughter-in-law Ruth, "My daughter, it is good for you to work with his female servants, so that nothing will happen to you in another field."',
                    23 => 'Ruth stayed close to Boaz\'s female servants and gathered grain until the barley and the wheat harvests were finished. And she lived with her mother-in-law.',
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
                    16 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 1,
                    22 => 1,
                    23 => 1,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Ruth\'s Appeal to Boaz',
                ],
                'verses' => [
                    1 => 'Ruth\'s mother-in-law Naomi said to her, "My daughter, shouldn\'t I find rest for you, so that you will be taken care of?',
                    2 => 'Now isn\'t Boaz our relative? Haven\'t you been working with his female servants? This evening he will be winnowing barley on the threshing floor.',
                    3 => 'Wash, put on perfumed oil, and wear your best clothes. Go down to the threshing floor, but don\'t let the man know you are there until he has finished eating and drinking.',
                    4 => 'When he lies down, notice the place where he\'s lying, go in and uncover his feet, and lie down. Then he will explain to you what you should do."',
                    5 => 'So Ruth said to her, "I will do everything you say."',
                    6 => 'She went down to the threshing floor and did everything her mother-in-law had charged her to do.',
                    7 => 'After Boaz ate, drank, and was in good spirits, he went to lie down at the end of the pile of barley, and she came secretly, uncovered his feet, and lay down.',
                    8 => 'At midnight, Boaz was startled, turned over, and there lying at his feet was a woman!',
                    9 => 'So he asked, "Who are you? "',
                    10 => 'Then he said, "May the Lord bless you, my daughter. You have shown more kindness now than before, because you have not pursued younger men, whether rich or poor.',
                    11 => 'Now don\'t be afraid, my daughter. I will do for you whatever you say, since all the people in my town know that you are a woman of noble character.',
                    12 => 'Yes, it is true that I am a family redeemer, but there is a redeemer closer than I am.',
                    13 => 'Stay here tonight, and in the morning, if he wants to redeem you, that\'s good. Let him redeem you. But if he doesn\'t want to redeem you, as the lives, I will. Now lie down until morning."',
                    14 => 'So she lay down at his feet until morning but got up while it was still dark. Then Boaz said, "Don\'t let it be known that a woman came to the threshing floor."',
                    15 => 'And he told Ruth, "Bring the shawl you\'re wearing and hold it out." When she held it out, he shoveled six measures of barley into her shawl, and she went into the town.',
                    16 => 'Then Ruth told her everything the man had done for her.',
                    17 => 'She said, "He gave me these six measures of barley, because he said, \'Don\'t go back to your mother-in-law empty-handed.\' "',
                    18 => 'Naomi said, "My daughter, wait until you find out how things go, for he won\'t rest unless he resolves this today."',
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
                    16 => 1,
                    17 => 1,
                    18 => 1,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Ruth and Boaz Marry',
                    2 => 'David\'s Genealogy from Judah\'s Son',
                ],
                'verses' => [
                    1 => 'Boaz went to the gate of the town and sat down there. Soon the family redeemer Boaz had spoken about came by. Boaz said, "Come over here and sit down." So he went over and sat down.',
                    2 => 'Then Boaz took ten men of the town\'s elders and said, "Sit here." And they sat down.',
                    3 => 'He said to the redeemer, "Naomi, who has returned from the territory of Moab, is selling the portion of the field that belonged to our brother Elimelech.',
                    4 => 'I thought I should inform you: Buy it back in the presence of those seated here and in the presence of the elders of my people. If you want to redeem it, do it. But if you do not want to redeem it, tell me so that I will know, because there isn\'t anyone other than you to redeem it, and I am next after you."',
                    5 => 'Then Boaz said, "On the day you buy the field from Naomi, you will acquire Ruth the Moabitess, the wife of the deceased man, to perpetuate the man\'s name on his property."',
                    6 => 'The redeemer replied, "I can\'t redeem it myself, or I will ruin my own inheritance. Take my right of redemption, because I can\'t redeem it."',
                    7 => 'At an earlier period in Israel, a man removed his sandal and gave it to the other party in order to make any matter legally binding concerning the right of redemption or the exchange of property. This was the method of legally binding a transaction in Israel.',
                    8 => 'So the redeemer removed his sandal and said to Boaz, "Buy back the property yourself."',
                    9 => 'Boaz said to the elders and all the people, "You are witnesses today that I am buying from Naomi everything that belonged to Elimelech, Chilion, and Mahlon.',
                    10 => 'I have also acquired Ruth the Moabitess, Mahlon\'s widow, as my wife, to perpetuate the deceased man\'s name on his property, so that his name will not disappear among his relatives or from the gate of his hometown. You are witnesses today."',
                    11 => 'All the people who were at the city gate, including the elders, said, "We are witnesses. May the make the woman who is entering your house like Rachel and Leah, who together built the house of Israel. May you be powerful in Ephrathah and your name well known in Bethlehem.',
                    12 => 'May your house become like the house of Perez, the son Tamar bore to Judah, because of the offspring the Lord will give you by this young woman."',
                    13 => 'Boaz took Ruth and she became his wife. He slept with her, and the Lord granted conception to her, and she gave birth to a son.',
                    14 => 'The women said to Naomi, "Blessed be the Lord, who has not left you without a family redeemer today. May his name become well known in Israel.',
                    15 => 'He will renew your life and sustain you in your old age. Indeed, your daughter-in-law, who loves you and is better to you than seven sons, has given birth to him."',
                    16 => 'Naomi took the child, placed him on her lap, and became a mother to him.',
                    17 => 'The neighbor women said, "A son has been born to Naomi," and they named him Obed. He was the father of Jesse, the father of David.',
                    18 => 'Now these are the family records of Perez:',
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
                    16 => 1,
                    17 => 1,
                    18 => 2,
                ],
            ],
        ];
    }
} 