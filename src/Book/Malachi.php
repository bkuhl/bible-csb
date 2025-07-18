<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Malachi extends Book
{
    public const ABBREVIATION = 'Mal';
    public const ID = 39;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Malachi';
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
                    1 => 'The \'s Love for Israel',
                    2 => 'Disobedience of the Priests',
                ],
                'verses' => [
                    1 => 'The word of the Lord to Israel through Malachi.',
                    2 => '"Wasn\'t Esau Jacob\'s brother? " This is the Lord\'s declaration. "Even so, I loved Jacob,',
                    3 => 'but I hated Esau. I turned his mountains into a wasteland, and gave his inheritance to the desert jackals."',
                    4 => 'Though Edom says, "We have been devastated, but we will rebuild the ruins," the Lord of Armies says this: "They may build, but I will demolish. They will be called a wicked country and the people the Lord has cursed forever.',
                    5 => 'Your own eyes will see this, and you yourselves will say, \'The Lord is great, even beyond the borders of Israel.\'',
                    6 => '"A son honors his father, and a servant his master. But if I am a father, where is my honor? And if I am a master, where is your fear of me? says the Lord of Armies to you priests, who despise my name." Yet you ask, "How have we despised your name? "',
                    7 => '"By presenting defiled food on my altar." "How have we defiled you? " you ask. When you say, "The Lord\'s table is contemptible."',
                    8 => '"When you present a blind animal for sacrifice, is it not wrong? And when you present a lame or sick animal, is it not wrong? Bring it to your governor! Would he be pleased with you or show you favor? " asks the of Armies.',
                    9 => '"And now plead for God\'s favor. Will he be gracious to us? Since this has come from your hands, will he show any of you favor? " asks the Lord of Armies.',
                    10 => '"I wish one of you would shut the temple doors, so that you would no longer kindle a useless fire on my altar! I am not pleased with you," says the Lord of Armies, "and I will accept no offering from your hands.',
                    11 => '"My name will be great among the nations, from the rising of the sun to its setting. Incense and pure offerings will be presented in my name in every place because my name will be great among the nations," says the Lord of Armies.',
                    12 => '"But you are profaning it when you say, \'The Lord\'s table is defiled, and its product, its food, is contemptible.\'',
                    13 => 'You also say, \'Look, what a nuisance! \' And you scorn it," says the Lord of Armies. "You bring stolen, lame, or sick animals. You bring this as an offering! Am I to accept that from your hands? " asks the Lord.',
                    14 => '"The deceiver is cursed who has an acceptable male in his flock and makes a vow but sacrifices a defective animal to the Lord. For I am a great King," says the Lord of Armies, "and my name will be feared among the nations.',
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
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Warning to the Priests',
                    2 => 'Judah\'s Marital Unfaithfulness',
                    3 => 'Judgment at the \'s Coming',
                ],
                'verses' => [
                    1 => '"Therefore, this decree is for you priests:',
                    2 => 'If you don\'t listen, and if you don\'t take it to heart to honor my name," says the Lord of Armies, "I will send a curse among you, and I will curse your blessings. In fact, I have already begun to curse them because you are not taking it to heart.',
                    3 => '"Look, I am going to rebuke your descendants, and I will spread animal waste over your faces, the waste from your festival sacrifices, and you will be taken away with it.',
                    4 => 'Then you will know that I sent you this decree, so that my covenant with Levi may continue," says the Lord of Armies.',
                    5 => '"My covenant with him was one of life and peace, and I gave these to him; it called for reverence, and he revered me and stood in awe of my name.',
                    6 => 'True instruction was in his mouth, and nothing wrong was found on his lips. He walked with me in peace and integrity and turned many from iniquity.',
                    7 => 'For the lips of a priest should guard knowledge, and people should desire instruction from his mouth, because he is the messenger of the Lord of Armies.',
                    8 => '"You, on the other hand, have turned from the way. You have caused many to stumble by your instruction. You have violated the covenant of Levi," says the Lord of Armies.',
                    9 => '"So I in turn have made you despised and humiliated before all the people because you are not keeping my ways but are showing partiality in your instruction."',
                    10 => 'Don\'t all of us have one Father? Didn\'t one God create us? Why then do we act treacherously against one another, profaning the covenant of our ancestors?',
                    11 => 'Judah has acted treacherously, and a detestable act has been done in Israel and in Jerusalem. For Judah has profaned the Lord\'s sanctuary, which he loves, and has married the daughter of a foreign god.',
                    12 => 'May the cut off from the tents of Jacob the man who does this, whoever he may be, even if he presents an offering to the Lord of Armies.',
                    13 => 'This is another thing you do. You are covering the Lord\'s altar with tears, with weeping and groaning, because he no longer respects your offerings or receives them gladly from your hands.',
                    14 => 'And you ask, "Why? " Because even though the Lord has been a witness between you and the wife of your youth, you have acted treacherously against her. She was your marriage partner and your wife by covenant.',
                    15 => 'Didn\'t God make them one and give them a portion of spirit? What is the one seeking? Godly offspring. So watch yourselves carefully, so that no one acts treacherously against the wife of his youth.',
                    16 => '"If he hates and divorces his wife," says the Lord God of Israel, "he covers his garment with injustice," says the Lord of Armies. Therefore, watch yourselves carefully, and do not act treacherously.',
                    17 => 'You have wearied the Lord with your words. Yet you ask, "How have we wearied him? " When you say, "Everyone who does what is evil is good in the Lord\'s sight, and he is delighted with them, or else where is the God of justice? "',
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
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 3,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Robbing God',
                    2 => 'The Righteous and the Wicked',
                ],
                'verses' => [
                    1 => '"See, I am going to send my messenger, and he will clear the way before me. Then the Lord you seek will suddenly come to his temple, the Messenger of the covenant you delight in — see, he is coming," says the Lord of Armies.',
                    2 => 'But who can endure the day of his coming? And who will be able to stand when he appears? For he will be like a refiner\'s fire and like launderer\'s bleach.',
                    3 => 'He will be like a refiner and purifier of silver; he will purify the sons of Levi and refine them like gold and silver. Then they will present offerings to the Lord in righteousness.',
                    4 => 'And the offerings of Judah and Jerusalem will please the Lord as in days of old and years gone by.',
                    5 => '"I will come to you in judgment, and I will be ready to witness against sorcerers and adulterers; against those who swear falsely; against those who oppress the hired worker, the widow, and the fatherless; and against those who deny justice to the resident alien. They do not fear me," says the Lord of Armies.',
                    6 => '"Because I, the Lord, have not changed, you descendants of Jacob have not been destroyed.',
                    7 => '"Since the days of your ancestors, you have turned from my statutes; you have not kept them. Return to me, and I will return to you," says the Lord of Armies. Yet you ask, "How can we return? "',
                    8 => '"By not making the payments of the tenth and the contributions.',
                    9 => 'You are suffering under a curse, yet you — the whole nation — are still robbing me.',
                    10 => 'Bring the full tenth into the storehouse so that there may be food in my house. Test me in this way," says the Lord of Armies. "See if I will not open the floodgates of heaven and pour out a blessing for you without measure.',
                    11 => 'I will rebuke the devourer for you, so that it will not ruin the produce of your land and your vine in your field will not fail to produce fruit," says the Lord of Armies.',
                    12 => '"Then all the nations will consider you fortunate, for you will be a delightful land," says the of Armies.',
                    13 => '"Your words against me are harsh," says the Lord. Yet you ask, "What have we spoken against you? "',
                    14 => 'You have said, "It is useless to serve God. What have we gained by keeping his requirements and walking mournfully before the Lord of Armies?',
                    15 => 'So now we consider the arrogant to be fortunate. Not only do those who commit wickedness prosper, they even test God and escape."',
                    16 => 'At that time those who feared the Lord spoke to one another. The Lord took notice and listened. So a book of remembrance was written before him for those who feared the Lord and had high regard for his name.',
                    17 => '"They will be mine," says the Lord of Armies, "my own possession on the day I am preparing. I will have compassion on them as a man has compassion on his son who serves him.',
                    18 => 'So you will again see the difference between the righteous and the wicked, between one who serves God and one who does not serve him.',
                ],
                'versesToSections' => [
                    1 => 0,
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
                    12 => 1,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 2,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'The Day of the',
                    2 => 'A Final Warning',
                ],
                'verses' => [
                    1 => '"For look, the day is coming, burning like a furnace, when all the arrogant and everyone who commits wickedness will become stubble. The coming day will consume them," says the Lord of Armies, "not leaving them root or branches.',
                    2 => 'But for you who fear my name, the sun of righteousness will rise with healing in its wings, and you will go out and playfully jump like calves from the stall.',
                    3 => 'You will trample the wicked, for they will be ashes under the soles of your feet on the day I am preparing," says the of Armies.',
                    4 => '"Remember the instruction of Moses my servant, the statutes and ordinances I commanded him at Horeb for all Israel.',
                    5 => 'Look, I am going to send you the prophet Elijah before the great and terrible day of the Lord comes.',
                    6 => 'And he will turn the hearts of fathers to their children and the hearts of children to their fathers. Otherwise, I will come and strike the land with a curse."',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                ],
            ],
        ];
    }
} 