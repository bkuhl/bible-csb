<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class FirstPeter extends Book
{
    public const ABBREVIATION = '1 Pet';
    public const ID = 60;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '1 Peter';
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
                    2 => 'A Living Hope',
                    3 => 'A Call to Holy Living',
                ],
                'verses' => [
                    1 => 'To those chosen, living as exiles dispersed abroad in Pontus, Galatia, Cappadocia, Asia, and Bithynia, chosen',
                    2 => 'according to the foreknowledge of God the Father, through the sanctifying work of the Spirit, to be obedient and to be sprinkled with the blood of Jesus Christ. May grace and peace be multiplied to you.',
                    3 => 'Blessed be the God and Father of our Lord Jesus Christ. Because of his great mercy he has given us new birth into a living hope through the resurrection of Jesus Christ from the dead',
                    4 => 'and into an inheritance that is imperishable, undefiled, and unfading, kept in heaven for you.',
                    5 => 'You are being guarded by God\'s power through faith for a salvation that is ready to be revealed in the last time.',
                    6 => 'You rejoice in this, even though now for a short time, if necessary, you suffer grief in various trials',
                    7 => 'so that the proven character of your faith — more valuable than gold which, though perishable, is refined by fire — may result in praise, glory, and honor at the revelation of Jesus Christ.',
                    8 => 'Though you have not seen him, you love him; though not seeing him now, you believe in him, and you rejoice with inexpressible and glorious joy,',
                    9 => 'because you are receiving the goal of your faith, the salvation of your souls.',
                    10 => 'Concerning this salvation, the prophets, who prophesied about the grace that would come to you, searched and carefully investigated.',
                    11 => 'They inquired into what time or what circumstances the Spirit of Christ within them was indicating when he testified in advance to the sufferings of Christ and the glories that would follow.',
                    12 => 'It was revealed to them that they were not serving themselves but you. These things have now been announced to you through those who preached the gospel to you by the Holy Spirit sent from heaven — angels long to catch a glimpse of these things.',
                    13 => 'Therefore, with your minds ready for action, be sober-minded and set your hope completely on the grace to be brought to you at the revelation of Jesus Christ.',
                    14 => 'As obedient children, do not be conformed to the desires of your former ignorance.',
                    15 => 'But as the one who called you is holy, you also are to be holy in all your conduct;',
                    16 => 'for it is written,',
                    17 => 'If you appeal to the Father who judges impartially according to each one\'s work, you are to conduct yourselves in reverence during your time living as strangers.',
                    18 => 'For you know that you were redeemed from your empty way of life inherited from your ancestors, not with perishable things like silver or gold,',
                    19 => 'but with the precious blood of Christ, like that of an unblemished and spotless lamb.',
                    20 => 'He was foreknown before the foundation of the world but was revealed in these last times for you.',
                    21 => 'Through him you believe in God, who raised him from the dead and gave him glory, so that your faith and hope are in God.',
                    22 => 'Since you have purified yourselves by your obedience to the truth, so that you show sincere brotherly love for each other, from a pure heart love one another constantly,',
                    23 => 'because you have been born again — not of perishable seed but of imperishable — through the living and enduring word of God.',
                    24 => 'For',
                    25 => 'And this word is the gospel that was proclaimed to you.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    3 => 2,
                    4 => 2,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    10 => 2,
                    11 => 2,
                    12 => 2,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                    23 => 3,
                    24 => 3,
                    25 => 3,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The Living Stone and a Holy People',
                    2 => 'A Call to Good Works',
                    3 => 'Submission of Slaves to Masters',
                ],
                'verses' => [
                    1 => 'Therefore, rid yourselves of all malice, all deceit, hypocrisy, envy, and all slander.',
                    2 => 'Like newborn infants, desire the pure milk of the word, so that by it you may grow up into your salvation,',
                    3 => 'if',
                    4 => 'As you come to him, a living stone — rejected by people but chosen and honored by God —',
                    5 => 'you yourselves, as living stones, a spiritual house, are being built to be a holy priesthood to offer spiritual sacrifices acceptable to God through Jesus Christ.',
                    6 => 'For it stands in Scripture:',
                    7 => 'So honor will come to you who believe; but for the unbelieving, ',
                    8 => 'and They stumble because they disobey the word; they were destined for this.',
                    9 => 'But you are of the one who called you out of darkness into his marvelous light.',
                    10 => 'Once you were not a people, but now you are God\'s people; you had not received mercy, but now you have received mercy.',
                    11 => 'Dear friends, I urge you as strangers and exiles to abstain from sinful desires that wage war against the soul.',
                    12 => 'Conduct yourselves honorably among the Gentiles, so that when they slander you as evildoers, they will observe your good works and will glorify God on the day he visits.',
                    13 => 'Submit to every human authority because of the Lord, whether to the emperor as the supreme authority',
                    14 => 'or to governors as those sent out by him to punish those who do what is evil and to praise those who do what is good.',
                    15 => 'For it is God\'s will that you silence the ignorance of foolish people by doing good.',
                    16 => 'Submit as free people, not using your freedom as a cover-up for evil, but as God\'s slaves.',
                    17 => 'Honor everyone. Love the brothers and sisters. Fear God. Honor the emperor.',
                    18 => 'Household slaves, submit to your masters with all reverence not only to the good and gentle ones but also to the cruel.',
                    19 => 'For it brings favor if, because of a consciousness of God, someone endures grief from suffering unjustly.',
                    20 => 'For what credit is there if when you do wrong and are beaten, you endure it? But when you do what is good and suffer, if you endure it, this brings favor with God.',
                    21 => 'For you were called to this, because Christ also suffered for you, leaving you an example, that you should follow in his steps.',
                    22 => 'He did not commit sin,',
                    23 => 'when he was insulted, he did not insult in return; when he suffered, he did not threaten but entrusted himself to the one who judges justly.',
                    24 => 'He himself bore our sins in his body on the tree; so that, having died to sins, we might live for righteousness.',
                    25 => 'For you but you have now returned to the Shepherd and Overseer of your souls.',
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
                    14 => 2,
                    15 => 2,
                    16 => 2,
                    17 => 2,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                    23 => 3,
                    24 => 3,
                    25 => 3,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Wives and Husbands',
                    2 => 'Do No Evil',
                    3 => 'Undeserved Suffering',
                ],
                'verses' => [
                    1 => 'In the same way, wives, submit yourselves to your own husbands so that, even if some disobey the word, they may be won over without a word by the way their wives live',
                    2 => 'when they observe your pure, reverent lives.',
                    3 => 'Don\'t let your beauty consist of outward things like elaborate hairstyles and wearing gold jewelry or fine clothes,',
                    4 => 'but rather what is inside the heart — the imperishable quality of a gentle and quiet spirit, which is of great worth in God\'s sight.',
                    5 => 'For in the past, the holy women who put their hope in God also adorned themselves in this way, submitting to their own husbands,',
                    6 => 'just as Sarah obeyed Abraham, calling him lord. You have become her children when you do what is good and do not fear any intimidation.',
                    7 => 'Husbands, in the same way, live with your wives in an understanding way, as with a weaker partner, showing them honor as coheirs of the grace of life, so that your prayers will not be hindered.',
                    8 => 'Finally, all of you be like-minded and sympathetic, love one another, and be compassionate and humble,',
                    9 => 'not paying back evil for evil or insult for insult but, on the contrary, giving a blessing, since you were called for this, so that you may inherit a blessing.',
                    13 => 'Who then will harm you if you are devoted to what is good?',
                    14 => 'But even if you should suffer for righteousness, you are blessed.',
                    15 => 'but in your hearts regard Christ the Lord as holy, ready at any time to give a defense to anyone who asks you for a reason for the hope that is in you.',
                    16 => 'Yet do this with gentleness and reverence, keeping a clear conscience, so that when you are accused, those who disparage your good conduct in Christ will be put to shame.',
                    17 => 'For it is better to suffer for doing good, if that should be God\'s will, than for doing evil.',
                    18 => 'For Christ also suffered for sins once for all, the righteous for the unrighteous, that he might bring you to God. He was put to death in the flesh but made alive by the Spirit,',
                    19 => 'in which he also went and made proclamation to the spirits in prison',
                    20 => 'who in the past were disobedient, when God patiently waited in the days of Noah while the ark was being prepared. In it a few — that is, eight people — were saved through water.',
                    21 => 'Baptism, which corresponds to this, now saves you (not as the removal of dirt from the body, but the pledge of a good conscience toward God) through the resurrection of Jesus Christ,',
                    22 => 'who has gone into heaven and is at the right hand of God with angels, authorities, and powers subject to him.',
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
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Following Christ',
                    2 => 'End-Time Ethics',
                    3 => 'Christian Suffering',
                ],
                'verses' => [
                    1 => 'Therefore, since Christ suffered in the flesh, arm yourselves also with the same understanding — because the one who suffers in the flesh is finished with sin —',
                    2 => 'in order to live the remaining time in the flesh no longer for human desires, but for God\'s will.',
                    3 => 'For there has already been enough time spent in doing what the Gentiles choose to do: carrying on in unrestrained behavior, evil desires, drunkenness, orgies, carousing, and lawless idolatry.',
                    4 => 'They are surprised that you don\'t join them in the same flood of wild living — and they slander you.',
                    5 => 'They will give an account to the one who stands ready to judge the living and the dead.',
                    6 => 'For this reason the gospel was also preached to those who are now dead, so that, although they might be judged in the flesh according to human standards, they might live in the spirit according to God\'s standards.',
                    7 => 'The end of all things is near; therefore, be alert and sober-minded for prayer.',
                    8 => 'Above all, maintain constant love for one another, since',
                    9 => 'Be hospitable to one another without complaining.',
                    10 => 'Just as each one has received a gift, use it to serve others, as good stewards of the varied grace of God.',
                    11 => 'If anyone speaks, let it be as one who speaks God\'s words; if anyone serves, let it be from the strength God provides, so that God may be glorified through Jesus Christ in everything. To him be the glory and the power forever and ever. Amen.',
                    12 => 'Dear friends, don\'t be surprised when the fiery ordeal comes among you to test you, as if something unusual were happening to you.',
                    13 => 'Instead, rejoice as you share in the sufferings of Christ, so that you may also rejoice with great joy when his glory is revealed.',
                    14 => 'If you are ridiculed for the name of Christ, you are blessed, because the Spirit of glory and of God rests on you.',
                    15 => 'Let none of you suffer as a murderer, a thief, an evildoer, or a meddler.',
                    16 => 'But if anyone suffers as a Christian, let him not be ashamed but let him glorify God in having that name.',
                    17 => 'For the time has come for judgment to begin with God\'s household, and if it begins with us, what will the outcome be for those who disobey the gospel of God?',
                    19 => 'So then, let those who suffer according to God\'s will entrust themselves to a faithful Creator while doing what is good.',
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
                    12 => 3,
                    13 => 3,
                    14 => 3,
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    19 => 3,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'About the Elders',
                    2 => 'Conclusion',
                ],
                'verses' => [
                    1 => 'I exhort the elders among you as a fellow elder and witness to the sufferings of Christ, as well as one who shares in the glory about to be revealed:',
                    2 => 'Shepherd God\'s flock among you, not overseeing out of compulsion but willingly, as God would have you; not out of greed for money but eagerly;',
                    3 => 'not lording it over those entrusted to you, but being examples to the flock.',
                    4 => 'And when the chief Shepherd appears, you will receive the unfading crown of glory.',
                    5 => 'In the same way, you who are younger, be subject to the elders. All of you clothe yourselves with humility toward one another, because ',
                    6 => 'Humble yourselves, therefore, under the mighty hand of God, so that he may exalt you at the proper time,',
                    7 => 'casting all your cares on him, because he cares about you.',
                    8 => 'Be sober-minded, be alert. Your adversary the devil is prowling around like a roaring lion, looking for anyone he can devour.',
                    9 => 'Resist him, firm in the faith, knowing that the same kind of sufferings are being experienced by your fellow believers throughout the world.',
                    10 => 'The God of all grace, who called you to his eternal glory in Christ, will himself restore, establish, strengthen, and support you after you have suffered a little while.',
                    11 => 'To him be dominion forever. Amen.',
                    12 => 'Through Silvanus, a faithful brother (as I consider him), I have written to you briefly in order to encourage you and to testify that this is the true grace of God. Stand firm in it!',
                    13 => 'She who is in Babylon, chosen together with you, sends you greetings, as does Mark, my son.',
                    14 => 'Greet one another with a kiss of love. Peace to all of you who are in Christ.',
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
        ];
    }
} 