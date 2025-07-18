<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class FirstJohn extends Book
{
    public const ABBREVIATION = '1 John';
    public const ID = 62;

    public function testament(): Testament
    {
        return Testament::NEW;
    }

    public function name(): string
    {
        return '1 John';
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
                    1 => 'Prologue: Our Declaration',
                    2 => 'Fellowship with God',
                ],
                'verses' => [
                    1 => 'What was from the beginning, what we have heard, what we have seen with our eyes, what we have observed and have touched with our hands, concerning the word of life —',
                    2 => 'that life was revealed, and we have seen it and we testify and declare to you the eternal life that was with the Father and was revealed to us —',
                    3 => 'what we have seen and heard we also declare to you, so that you may also have fellowship with us; and indeed our fellowship is with the Father and with his Son, Jesus Christ.',
                    4 => 'We are writing these things so that our joy may be complete.',
                    5 => 'This is the message we have heard from him and declare to you: God is light, and there is absolutely no darkness in him.',
                    6 => 'If we say, "We have fellowship with him," and yet we walk in darkness, we are lying and are not practicing the truth.',
                    7 => 'If we walk in the light as he himself is in the light, we have fellowship with one another, and the blood of Jesus his Son cleanses us from all sin.',
                    8 => 'If we say, "We have no sin," we are deceiving ourselves, and the truth is not in us.',
                    9 => 'If we confess our sins, he is faithful and righteous to forgive us our sins and to cleanse us from all unrighteousness.',
                    10 => 'If we say, "We have not sinned," we make him a liar, and his word is not in us.',
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
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'God\'s Commands',
                    2 => 'Reasons for Writing',
                    3 => 'A Warning about the World',
                    4 => 'The Last Hour',
                    5 => 'Remaining with God',
                    6 => 'God\'s Children',
                ],
                'verses' => [
                    1 => 'My little children, I am writing you these things so that you may not sin. But if anyone does sin, we have an advocate with the Father — Jesus Christ the righteous one.',
                    2 => 'He himself is the atoning sacrifice for our sins, and not only for ours, but also for those of the whole world.',
                    3 => 'This is how we know that we know him: if we keep his commands.',
                    4 => 'The one who says, "I have come to know him," and yet doesn\'t keep his commands, is a liar, and the truth is not in him.',
                    5 => 'But whoever keeps his word, truly in him the love of God is made complete. This is how we know we are in him:',
                    6 => 'The one who says he remains in him should walk just as he walked.',
                    7 => 'Dear friends, I am not writing you a new command but an old command that you have had from the beginning. The old command is the word you have heard.',
                    8 => 'Yet I am writing you a new command, which is true in him and in you, because the darkness is passing away and the true light is already shining.',
                    9 => 'The one who says he is in the light but hates his brother or sister is in the darkness until now.',
                    10 => 'The one who loves his brother or sister remains in the light, and there is no cause for stumbling in him.',
                    11 => 'But the one who hates his brother or sister is in the darkness, walks in the darkness, and doesn\'t know where he\'s going, because the darkness has blinded his eyes.',
                    12 => 'I am writing to you, little children, since your sins have been forgiven on account of his name.',
                    13 => 'I am writing to you, fathers, because you have come to know the one who is from the beginning. I am writing to you, young men, because you have conquered the evil one.',
                    14 => 'I have written to you, children, because you have come to know the Father. I have written to you, fathers, because you have come to know the one who is from the beginning. I have written to you, young men, because you are strong, God\'s word remains in you, and you have conquered the evil one.',
                    15 => 'Do not love the world or the things in the world. If anyone loves the world, the love of the Father is not in him.',
                    16 => 'For everything in the world — the lust of the flesh, the lust of the eyes, and the pride in one\'s possessions — is not from the Father, but is from the world.',
                    17 => 'And the world with its lust is passing away, but the one who does the will of God remains forever.',
                    18 => 'Children, it is the last hour. And as you have heard that antichrist is coming, even now many antichrists have come. By this we know that it is the last hour.',
                    19 => 'They went out from us, but they did not belong to us; for if they had belonged to us, they would have remained with us. However, they went out so that it might be made clear that none of them belongs to us.',
                    20 => 'But you have an anointing from the Holy One, and all of you know the truth.',
                    21 => 'I have not written to you because you don\'t know the truth, but because you do know it, and because no lie comes from the truth.',
                    22 => 'Who is the liar, if not the one who denies that Jesus is the Christ? This one is the antichrist: the one who denies the Father and the Son.',
                    23 => 'No one who denies the Son has the Father; he who confesses the Son has the Father as well.',
                    24 => 'What you have heard from the beginning is to remain in you. If what you have heard from the beginning remains in you, then you will remain in the Son and in the Father.',
                    25 => 'And this is the promise that he himself made to us: eternal life.',
                    26 => 'I have written these things to you concerning those who are trying to deceive you.',
                    27 => 'As for you, the anointing you received from him remains in you, and you don\'t need anyone to teach you. Instead, his anointing teaches you about all things and is true and is not a lie; just as it has taught you, remain in him.',
                    28 => 'So now, little children, remain in him so that when he appears we may have confidence and not be ashamed before him at his coming.',
                    29 => 'If you know that he is righteous, you know this as well: Everyone who does what is right has been born of him.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
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
                    15 => 3,
                    16 => 3,
                    17 => 3,
                    18 => 4,
                    19 => 4,
                    20 => 4,
                    21 => 4,
                    22 => 4,
                    23 => 4,
                    24 => 5,
                    25 => 5,
                    26 => 5,
                    27 => 5,
                    28 => 6,
                    29 => 6,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Love in Action',
                ],
                'verses' => [
                    1 => 'See what great love the Father has given us that we should be called God\'s children — and we are! The reason the world does not know us is that it didn\'t know him.',
                    2 => 'Dear friends, we are God\'s children now, and what we will be has not yet been revealed. We know that when he appears, we will be like him because we will see him as he is.',
                    3 => 'And everyone who has this hope in him purifies himself just as he is pure.',
                    4 => 'Everyone who commits sin practices lawlessness; and sin is lawlessness.',
                    5 => 'You know that he was revealed so that he might take away sins, and there is no sin in him.',
                    6 => 'Everyone who remains in him does not sin; everyone who sins has not seen him or known him.',
                    7 => 'Little children, let no one deceive you. The one who does what is right is righteous, just as he is righteous.',
                    8 => 'The one who commits sin is of the devil, for the devil has sinned from the beginning. The Son of God was revealed for this purpose: to destroy the devil\'s works.',
                    9 => 'Everyone who has been born of God does not sin, because his seed remains in him; he is not able to sin, because he has been born of God.',
                    10 => 'This is how God\'s children and the devil\'s children become obvious. Whoever does not do what is right is not of God, especially the one who does not love his brother or sister.',
                    11 => 'For this is the message you have heard from the beginning: We should love one another,',
                    12 => 'unlike Cain, who was of the evil one and murdered his brother. And why did he murder him? Because his deeds were evil, and his brother\'s were righteous.',
                    13 => 'Do not be surprised, brothers and sisters, if the world hates you.',
                    14 => 'We know that we have passed from death to life because we love our brothers and sisters. The one who does not love remains in death.',
                    15 => 'Everyone who hates his brother or sister is a murderer, and you know that no murderer has eternal life residing in him.',
                    16 => 'This is how we have come to know love: He laid down his life for us. We should also lay down our lives for our brothers and sisters.',
                    17 => 'If anyone has this world\'s goods and sees a fellow believer in need but withholds compassion from him — how does God\'s love reside in him?',
                    18 => 'Little children, let us not love in word or speech, but in action and in truth.',
                    19 => 'This is how we will know that we belong to the truth and will reassure our hearts before him',
                    20 => 'whenever our hearts condemn us; for God is greater than our hearts, and he knows all things.',
                    21 => 'Dear friends, if our hearts don\'t condemn us, we have confidence before God',
                    22 => 'and receive whatever we ask from him because we keep his commands and do what is pleasing in his sight.',
                    23 => 'Now this is his command: that we believe in the name of his Son, Jesus Christ, and love one another as he commanded us.',
                    24 => 'The one who keeps his commands remains in him, and he in him. And the way we know that he remains in us is from the Spirit he has given us.',
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
                    24 => 1,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'The Spirit of Truth and the Spirit of Error',
                    2 => 'Knowing God through Love',
                ],
                'verses' => [
                    1 => 'Dear friends, do not believe every spirit, but test the spirits to see if they are from God, because many false prophets have gone out into the world.',
                    2 => 'This is how you know the Spirit of God: Every spirit that confesses that Jesus Christ has come in the flesh is from God,',
                    3 => 'but every spirit that does not confess Jesus is not from God. This is the spirit of the antichrist, which you have heard is coming; even now it is already in the world.',
                    4 => 'You are from God, little children, and you have conquered them, because the one who is in you is greater than the one who is in the world.',
                    5 => 'They are from the world. Therefore what they say is from the world, and the world listens to them.',
                    6 => 'We are from God. Anyone who knows God listens to us; anyone who is not from God does not listen to us. This is how we know the Spirit of truth and the spirit of deception.',
                    7 => 'Dear friends, let us love one another, because love is from God, and everyone who loves has been born of God and knows God.',
                    8 => 'The one who does not love does not know God, because God is love.',
                    9 => 'God\'s love was revealed among us in this way: God sent his one and only Son into the world so that we might live through him.',
                    10 => 'Love consists in this: not that we loved God, but that he loved us and sent his Son to be the atoning sacrifice for our sins.',
                    11 => 'Dear friends, if God loved us in this way, we also must love one another.',
                    12 => 'No one has ever seen God. If we love one another, God remains in us and his love is made complete in us.',
                    13 => 'This is how we know that we remain in him and he in us: He has given us of his Spirit.',
                    14 => 'And we have seen and we testify that the Father has sent his Son as the world\'s Savior.',
                    15 => 'Whoever confesses that Jesus is the Son of God — God remains in him and he in God.',
                    16 => 'God is love, and the one who remains in love remains in God, and God remains in him.',
                    17 => 'In this, love is made complete with us so that we may have confidence in the day of judgment, because as he is, so also are we in this world.',
                    18 => 'There is no fear in love; instead, perfect love drives out fear, because fear involves punishment. So the one who fears is not complete in love.',
                    19 => 'We love because he first loved us.',
                    20 => 'If anyone says, "I love God," and yet hates his brother or sister, he is a liar. For the person who does not love his brother or sister whom he has seen cannot love God whom he has not seen.',
                    21 => 'And we have this command from him: The one who loves God must also love his brother and sister.',
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
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'The Certainty of God\'s Testimony',
                    2 => 'Effective Prayer',
                    3 => 'Conclusion',
                ],
                'verses' => [
                    1 => 'Everyone who believes that Jesus is the Christ has been born of God, and everyone who loves the Father also loves the one born of him.',
                    2 => 'This is how we know that we love God\'s children: when we love God and obey his commands.',
                    3 => 'For this is what love for God is: to keep his commands. And his commands are not a burden,',
                    4 => 'because everyone who has been born of God conquers the world. This is the victory that has conquered the world: our faith.',
                    5 => 'Who is the one who conquers the world but the one who believes that Jesus is the Son of God?',
                    6 => 'Jesus Christ — he is the one who came by water and blood, not by water only, but by water and by blood. And the Spirit is the one who testifies, because the Spirit is the truth.',
                    7 => 'For there are three that testify:',
                    8 => 'the Spirit, the water, and the blood — and these three are in agreement.',
                    9 => 'If we accept human testimony, God\'s testimony is greater, because it is God\'s testimony that he has given about his Son.',
                    10 => 'The one who believes in the Son of God has this testimony within himself. The one who does not believe God has made him a liar, because he has not believed in the testimony God has given about his Son.',
                    11 => 'And this is the testimony: God has given us eternal life, and this life is in his Son.',
                    12 => 'The one who has the Son has life. The one who does not have the Son of God does not have life.',
                    13 => 'I have written these things to you who believe in the name of the Son of God so that you may know that you have eternal life.',
                    14 => 'This is the confidence we have before him: If we ask anything according to his will, he hears us.',
                    15 => 'And if we know that he hears whatever we ask, we know that we have what we have asked of him.',
                    16 => 'If anyone sees a fellow believer committing a sin that doesn\'t lead to death, he should ask, and God will give life to him — to those who commit sin that doesn\'t lead to death. There is sin that leads to death. I am not saying he should pray about that.',
                    17 => 'All unrighteousness is sin, and there is sin that doesn\'t lead to death.',
                    18 => 'We know that everyone who has been born of God does not sin, but the one who is born of God keeps him, and the evil one does not touch him.',
                    19 => 'We know that we are of God, and the whole world is under the sway of the evil one.',
                    20 => 'And we know that the Son of God has come and has given us understanding so that we may know the true one. We are in the true one — that is, in his Son, Jesus Christ. He is the true God and eternal life.',
                    21 => 'Little children, guard yourselves from idols.',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
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
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                ],
            ],
        ];
    }
} 