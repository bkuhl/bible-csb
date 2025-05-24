<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Titus extends Book
{
    private const ABBREVIATION = 'Titus';
    public const ID = 56;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return 'Titus';
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
                    2 => 'Titus\'s Ministry in Crete',
                ],
                'verses' => [
                    1 => 'Paul, a servant of God and an apostle of Jesus Christ, for the faith of God\'s elect and their knowledge of the truth that leads to godliness,',
                    2 => 'in the hope of eternal life that God, who cannot lie, promised before time began.',
                    3 => 'In his own time he has revealed his word in the preaching with which I was entrusted by the command of God our Savior:',
                    4 => 'To Titus, my true son in our common faith.',
                    5 => 'The reason I left you in Crete was to set right what was left undone and, as I directed you, to appoint elders in every town.',
                    6 => 'An elder must be blameless, the husband of one wife, with faithful children who are not accused of wildness or rebellion.',
                    7 => 'As an overseer of God\'s household, he must be blameless, not arrogant, not hot-tempered, not an excessive drinker, not a bully, not greedy for money,',
                    8 => 'but hospitable, loving what is good, sensible, righteous, holy, self-controlled,',
                    9 => 'holding to the faithful message as taught, so that he will be able both to encourage with sound teaching and to refute those who contradict it.',
                    10 => 'For there are many rebellious people, full of empty talk and deception, especially those from the circumcision party.',
                    11 => 'It is necessary to silence them; they are ruining entire households by teaching what they shouldn\'t in order to get money dishonestly.',
                    12 => 'One of their very own prophets said, "Cretans are always liars, evil beasts, lazy gluttons."',
                    13 => 'This testimony is true. For this reason, rebuke them sharply, so that they may be sound in the faith',
                    14 => 'and may not pay attention to Jewish myths and the commands of people who reject the truth.',
                    15 => 'To the pure, everything is pure, but to those who are defiled and unbelieving nothing is pure; in fact, both their mind and conscience are defiled.',
                    16 => 'They claim to know God, but they deny him by their works. They are detestable, disobedient, and unfit for any good work.',
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
                    1 => 'Sound Teaching and Christian Living',
                ],
                'verses' => [
                    1 => 'But you are to proclaim things consistent with sound teaching.',
                    2 => 'Older men are to be self-controlled, worthy of respect, sensible, and sound in faith, love, and endurance.',
                    3 => 'In the same way, older women are to be reverent in behavior, not slanderers, not slaves to excessive drinking. They are to teach what is good,',
                    4 => 'so that they may encourage the young women to love their husbands and to love their children,',
                    5 => 'to be self-controlled, pure, workers at home, kind, and in submission to their husbands, so that God\'s word will not be slandered.',
                    6 => 'In the same way, encourage the young men to be self-controlled',
                    7 => 'in everything. Make yourself an example of good works with integrity and dignity in your teaching.',
                    8 => 'Your message is to be sound beyond reproach, so that any opponent will be ashamed, because he doesn\'t have anything bad to say about us.',
                    9 => 'Slaves are to submit to their masters in everything, and to be well-pleasing, not talking back',
                    10 => 'or stealing, but demonstrating utter faithfulness, so that they may adorn the teaching of God our Savior in everything.',
                    11 => 'For the grace of God has appeared, bringing salvation for all people,',
                    12 => 'instructing us to deny godlessness and worldly lusts and to live in a sensible, righteous, and godly way in the present age,',
                    13 => 'while we wait for the blessed hope, the appearing of the glory of our great God and Savior, Jesus Christ.',
                    14 => 'He gave himself for us to redeem us from all lawlessness and to cleanse for himself a people for his own possession, eager to do good works.',
                    15 => 'Proclaim these things; encourage and rebuke with all authority. Let no one disregard you.',
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
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Christian Living among Outsiders',
                    2 => 'Final Instructions and Closing',
                ],
                'verses' => [
                    1 => 'Remind them to submit to rulers and authorities, to obey, to be ready for every good work,',
                    2 => 'to slander no one, to avoid fighting, and to be kind, always showing gentleness to all people.',
                    3 => 'For we too were once foolish, disobedient, deceived, enslaved by various passions and pleasures, living in malice and envy, hateful, detesting one another.',
                    4 => 'But when the kindness of God our Savior and his love for mankind appeared,',
                    5 => 'he saved us —not by works of righteousness that we had done, but according to his mercy — through the washing of regeneration and renewal by the Holy Spirit.',
                    6 => 'He poured out his Spirit on us abundantly through Jesus Christ our Savior',
                    7 => 'so that, having been justified by his grace, we may become heirs with the hope of eternal life.',
                    8 => 'This saying is trustworthy. I want you to insist on these things, so that those who have believed God might be careful to devote themselves to good works. These are good and profitable for everyone.',
                    9 => 'But avoid foolish debates, genealogies, quarrels, and disputes about the law, because they are unprofitable and worthless.',
                    10 => 'Reject a divisive person after a first and second warning.',
                    11 => 'For you know that such a person has gone astray and is sinning; he is self-condemned.',
                    12 => 'When I send Artemas or Tychicus to you, make every effort to come to me in Nicopolis, because I have decided to spend the winter there.',
                    13 => 'Diligently help Zenas the lawyer and Apollos on their journey, so that they will lack nothing.',
                    14 => 'Let our people learn to devote themselves to good works for pressing needs, so that they will not be unfruitful.',
                    15 => 'All those who are with me send you greetings. Greet those who love us in the faith. Grace be with all of you.',
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
                    12 => 2,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                ],
            ],
        ];
    }
} 