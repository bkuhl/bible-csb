<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SecondTimothy extends Book
{
    public const ABBREVIATION = '2 Tim';
    public const ID = 55;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '2 Timothy';
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
                    1 => 'Greeting',
                    2 => 'Thanksgiving',
                    3 => 'Not Ashamed of the Gospel',
                    4 => 'Be Loyal to the Faith',
                ],
                'verses' => [
                    1 => 'Paul, an apostle of Christ Jesus by God\'s will, for the sake of the promise of life in Christ Jesus:',
                    2 => 'To Timothy, my dearly loved son. Grace, mercy, and peace from God the Father and Christ Jesus our Lord.',
                    3 => 'I thank God, whom I serve with a clear conscience as my ancestors did, when I constantly remember you in my prayers night and day.',
                    4 => 'Remembering your tears, I long to see you so that I may be filled with joy.',
                    5 => 'I recall your sincere faith that first lived in your grandmother Lois and in your mother Eunice and now, I am convinced, is in you also.',
                    6 => 'Therefore, I remind you to rekindle the gift of God that is in you through the laying on of my hands.',
                    7 => 'For God has not given us a spirit of fear, but one of power, love, and sound judgment.',
                    8 => 'So don\'t be ashamed of the testimony about our Lord, or of me his prisoner. Instead, share in suffering for the gospel, relying on the power of God.',
                    9 => 'He has saved us and called us with a holy calling, not according to our works, but according to his own purpose and grace, which was given to us in Christ Jesus before time began.',
                    10 => 'This has now been made evident through the appearing of our Savior Christ Jesus, who has abolished death and has brought life and immortality to light through the gospel.',
                    11 => 'For this gospel I was appointed a herald, apostle, and teacher,',
                    12 => 'and that is why I suffer these things. But I am not ashamed, because I know whom I have believed and am persuaded that he is able to guard what has been entrusted to me until that day.',
                    13 => 'Hold on to the pattern of sound teaching that you have heard from me, in the faith and love that are in Christ Jesus.',
                    14 => 'Guard the good deposit through the Holy Spirit who lives in us.',
                    15 => 'You know that all those in the province of Asia have deserted me, including Phygelus and Hermogenes.',
                    16 => 'May the Lord grant mercy to the household of Onesiphorus, because he often refreshed me and was not ashamed of my chains.',
                    17 => 'On the contrary, when he was in Rome, he diligently searched for me and found me.',
                    18 => 'May the Lord grant that he obtain mercy from him on that day. You know very well how much he ministered at Ephesus.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 3,
                    9 => 3,
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 4,
                    14 => 4,
                    15 => 4,
                    16 => 4,
                    17 => 4,
                    18 => 4,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'Be Strong in Grace',
                    2 => 'An Approved Worker',
                ],
                'verses' => [
                    1 => 'You, therefore, my son, be strong in the grace that is in Christ Jesus.',
                    2 => 'What you have heard from me in the presence of many witnesses, commit to faithful men who will be able to teach others also.',
                    3 => 'Share in suffering as a good soldier of Christ Jesus.',
                    4 => 'No one serving as a soldier gets entangled in the concerns of civilian life; he seeks to please the commanding officer.',
                    5 => 'Also, if anyone competes as an athlete, he is not crowned unless he competes according to the rules.',
                    6 => 'The hardworking farmer ought to be the first to get a share of the crops.',
                    7 => 'Consider what I say, for the Lord will give you understanding in everything.',
                    8 => 'Remember Jesus Christ, risen from the dead and descended from David, according to my gospel,',
                    9 => 'for which I suffer to the point of being bound like a criminal. But the word of God is not bound.',
                    10 => 'This is why I endure all things for the elect: so that they also may obtain salvation, which is in Christ Jesus, with eternal glory.',
                    11 => 'This saying is trustworthy: For if we died with him, we will also live with him;',
                    12 => 'if we endure, we will also reign with him; if we deny him, he will also deny us;',
                    13 => 'if we are faithless, he remains faithful, for he cannot deny himself.',
                    14 => 'Remind them of these things, and charge them before God not to fight about words. This is useless and leads to the ruin of those who listen.',
                    15 => 'Be diligent to present yourself to God as one approved, a worker who doesn\'t need to be ashamed, correctly teaching the word of truth.',
                    16 => 'Avoid irreverent and empty speech, since those who engage in it will produce even more godlessness,',
                    17 => 'and their teaching will spread like gangrene. Hymenaeus and Philetus are among them.',
                    18 => 'They have departed from the truth, saying that the resurrection has already taken place, and are ruining the faith of some.',
                    19 => 'Nevertheless, God\'s solid foundation stands firm, bearing this inscription: and let everyone who calls on the name of the Lord turn away from wickedness.',
                    20 => 'Now in a large house there are not only gold and silver vessels, but also those of wood and clay; some for honorable use and some for dishonorable.',
                    21 => 'So if anyone purifies himself from anything dishonorable, he will be a special instrument, set apart, useful to the Master, prepared for every good work.',
                    22 => 'Flee from youthful passions, and pursue righteousness, faith, love, and peace, along with those who call on the Lord from a pure heart.',
                    23 => 'But reject foolish and ignorant disputes, because you know that they breed quarrels.',
                    24 => 'The Lord\'s servant must not quarrel, but must be gentle to everyone, able to teach, and patient,',
                    25 => 'instructing his opponents with gentleness. Perhaps God will grant them repentance leading them to the knowledge of the truth.',
                    26 => 'Then they may come to their senses and escape the trap of the devil, who has taken them captive to do his will.',
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
                    14 => 2,
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
                    26 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Difficult Times Ahead',
                    2 => 'Struggles in the Christian Life',
                ],
                'verses' => [
                    1 => 'But know this: Hard times will come in the last days.',
                    2 => 'For people will be lovers of self, lovers of money, boastful, proud, demeaning, disobedient to parents, ungrateful, unholy,',
                    3 => 'unloving, irreconcilable, slanderers, without self-control, brutal, without love for what is good,',
                    4 => 'traitors, reckless, conceited, lovers of pleasure rather than lovers of God,',
                    5 => 'holding to the form of godliness but denying its power. Avoid these people.',
                    6 => 'For among them are those who worm their way into households and deceive gullible women overwhelmed by sins and led astray by a variety of passions,',
                    7 => 'always learning and never able to come to a knowledge of the truth.',
                    8 => 'Just as Jannes and Jambres resisted Moses, so these also resist the truth. They are men who are corrupt in mind and worthless in regard to the faith.',
                    9 => 'But they will not make further progress, for their foolishness will be clear to all, as was the foolishness of Jannes and Jambres.',
                    10 => 'But you have followed my teaching, conduct, purpose, faith, patience, love, and endurance,',
                    11 => 'along with the persecutions and sufferings that came to me in Antioch, Iconium, and Lystra. What persecutions I endured — and yet the Lord rescued me from them all.',
                    12 => 'In fact, all who want to live a godly life in Christ Jesus will be persecuted.',
                    13 => 'Evil people and impostors will become worse, deceiving and being deceived.',
                    14 => 'But as for you, continue in what you have learned and firmly believed. You know those who taught you,',
                    15 => 'and you know that from infancy you have known the sacred Scriptures, which are able to give you wisdom for salvation through faith in Christ Jesus.',
                    16 => 'All Scripture is inspired by God and is profitable for teaching, for rebuking, for correcting, for training in righteousness,',
                    17 => 'so that the man of God may be complete, equipped for every good work.',
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
                    17 => 2,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Fulfill Your Ministry',
                    2 => 'Final Instructions',
                    3 => 'Benediction',
                ],
                'verses' => [
                    1 => 'I solemnly charge you before God and Christ Jesus, who is going to judge the living and the dead, and because of his appearing and his kingdom:',
                    2 => 'Preach the word; be ready in season and out of season; correct, rebuke and encourage with great patience and teaching.',
                    3 => 'For the time will come when people will not tolerate sound doctrine, but according to their own desires, will multiply teachers for themselves because they have an itch to hear what they want to hear.',
                    4 => 'They will turn away from hearing the truth and will turn aside to myths.',
                    5 => 'But as for you, exercise self-control in everything, endure hardship, do the work of an evangelist, fulfill your ministry.',
                    6 => 'For I am already being poured out as a drink offering, and the time for my departure is close.',
                    7 => 'I have fought the good fight, I have finished the race, I have kept the faith.',
                    8 => 'There is reserved for me the crown of righteousness, which the Lord, the righteous Judge, will give me on that day, and not only to me, but to all those who have loved his appearing.',
                    9 => 'Make every effort to come to me soon,',
                    10 => 'because Demas has deserted me, since he loved this present world, and has gone to Thessalonica. Crescens has gone to Galatia, Titus to Dalmatia.',
                    11 => 'Only Luke is with me. Bring Mark with you, for he is useful to me in the ministry.',
                    12 => 'I have sent Tychicus to Ephesus.',
                    13 => 'When you come, bring the cloak I left in Troas with Carpus, as well as the scrolls, especially the parchments.',
                    14 => 'Alexander the coppersmith did great harm to me. The Lord will repay him according to his works.',
                    15 => 'Watch out for him yourself because he strongly opposed our words.',
                    16 => 'At my first defense, no one stood by me, but everyone deserted me. May it not be counted against them.',
                    17 => 'But the Lord stood with me and strengthened me, so that I might fully preach the word and all the Gentiles might hear it. So I was rescued from the lion\'s mouth.',
                    18 => 'The Lord will rescue me from every evil work and will bring me safely into his heavenly kingdom. To him be the glory forever and ever! Amen.',
                    19 => 'Greet Prisca and Aquila, and the household of Onesiphorus.',
                    20 => 'Erastus has remained at Corinth; I left Trophimus sick at Miletus.',
                    21 => 'Make every effort to come before winter. Eubulus greets you, as do Pudens, Linus, Claudia, and all the brothers and sisters.',
                    22 => 'The Lord be with your spirit. Grace be with you all.',
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
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                ],
            ],
        ];
    }
} 