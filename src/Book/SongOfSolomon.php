<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class SongOfSolomon extends Book
{
    public const ABBREVIATION = 'Song';
    public const ID = 22;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Song of Solomon';
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
                ],
                'verses' => [
                    1 => 'The Song of Songs, which is Solomon\'s.',
                    2 => 'Oh, that he would kiss me with the kisses of his mouth! For your caresses are more delightful than wine.',
                    3 => 'The fragrance of your perfume is intoxicating; your name is perfume poured out. No wonder young women adore you.',
                    4 => 'Take me with you — let\'s hurry. Oh, that the king would bring me to his chambers. We will rejoice and be glad in you; we will celebrate your caresses more than wine. It is only right that they adore you.',
                    5 => 'Daughters of Jerusalem, I am dark like the tents of Kedar, yet lovely like the curtains of Solomon.',
                    6 => 'Do not stare at me because I am dark, for the sun has gazed on me. My mother\'s sons were angry with me; they made me take care of the vineyards. I have not taken care of my own vineyard.',
                    7 => 'Tell me, you whom I love: Where do you pasture your sheep? Where do you let them rest at noon? Why should I be like one who veils herself beside the flocks of your companions?',
                    8 => 'If you do not know, most beautiful of women, follow the tracks of the flock, and pasture your young goats near the shepherds\' tents.',
                    9 => 'I compare you, my darling, to a mare among Pharaoh\'s chariots.',
                    10 => 'Your cheeks are beautiful with jewelry, your neck with its necklace.',
                    11 => 'We will make gold jewelry for you, accented with silver.',
                    12 => 'While the king is on his couch, my perfume releases its fragrance.',
                    13 => 'The one I love is a sachet of myrrh to me, spending the night between my breasts.',
                    14 => 'The one I love is a cluster of henna blossoms to me, in the vineyards of En-gedi.',
                    15 => 'How beautiful you are, my darling. How very beautiful! Your eyes are doves.',
                    16 => 'How handsome you are, my love. How delightful! Our bed is verdant;',
                    17 => 'the beams of our house are cedars, and our rafters are cypresses.',
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
                ],
                'verses' => [
                    1 => 'I am a wildflower of Sharon, a lily of the valleys.',
                    2 => 'Like a lily among thorns, so is my darling among the young women.',
                    3 => 'Like an apricot tree among the trees of the forest, so is my love among the young men. I delight to sit in his shade, and his fruit is sweet to my taste.',
                    4 => 'He brought me to the banquet hall, and he looked on me with love.',
                    5 => 'Sustain me with raisins; refresh me with apricots, for I am lovesick.',
                    6 => 'May his left hand be under my head, and his right arm embrace me.',
                    7 => 'Young women of Jerusalem, I charge you by the gazelles and the wild does of the field, do not stir up or awaken love until the appropriate time.',
                    8 => 'Listen! My love is approaching. Look! Here he comes, leaping over the mountains, bounding over the hills.',
                    9 => 'My love is like a gazelle or a young stag. See, he is standing behind our wall, gazing through the windows, peering through the lattice.',
                    10 => 'My love calls to me: Arise, my darling. Come away, my beautiful one.',
                    11 => 'For now the winter is past; the rain has ended and gone away.',
                    12 => 'The blossoms appear in the countryside. The time of singing has come, and the turtledove\'s cooing is heard in our land.',
                    13 => 'The fig tree ripens its figs; the blossoming vines give off their fragrance. Arise, my darling. Come away, my beautiful one.',
                    14 => 'My dove, in the clefts of the rock, in the crevices of the cliff, let me see your face, let me hear your voice; for your voice is sweet, and your face is lovely.',
                    15 => 'Catch the foxes for us — the little foxes that ruin the vineyards — for our vineyards are in bloom.',
                    16 => 'My love is mine and I am his; he feeds among the lilies.',
                    17 => 'Until the day breaks and the shadows flee, turn around, my love, and be like a gazelle or a young stag on the divided mountains.',
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
            3 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'In my bed at night I sought the one I love; I sought him, but did not find him.',
                    2 => 'I will arise now and go about the city, through the streets and the plazas. I will seek the one I love. I sought him, but did not find him.',
                    3 => 'The guards who go about the city found me. I asked them, "Have you seen the one I love? "',
                    4 => 'I had just passed them when I found the one I love. I held on to him and would not let him go until I brought him to my mother\'s house — to the chamber of the one who conceived me.',
                    5 => 'Young women of Jerusalem, I charge you by the gazelles and the wild does of the field, do not stir up or awaken love until the appropriate time.',
                    6 => 'Who is this coming up from the wilderness like columns of smoke, scented with myrrh and frankincense from every fragrant powder of the merchant?',
                    7 => 'Look! Solomon\'s bed surrounded by sixty warriors from the mighty men of Israel.',
                    8 => 'All of them are skilled with swords and trained in warfare. Each has his sword at his side to guard against the terror of the night.',
                    9 => 'King Solomon made a carriage for himself with wood from Lebanon.',
                    10 => 'He made its posts of silver, its back of gold, and its seat of purple. Its interior is inlaid with love by the young women of Jerusalem.',
                    11 => 'Go out, young women of Zion, and gaze at King Solomon, wearing the crown his mother placed on him on the day of his wedding — the day of his heart\'s rejoicing.',
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
            4 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'How beautiful you are, my darling. How very beautiful! Behind your veil, your eyes are doves. Your hair is like a flock of goats streaming down Mount Gilead.',
                    2 => 'Your teeth are like a flock of newly shorn sheep coming up from washing, each one bearing twins, and none has lost its young.',
                    3 => 'Your lips are like a scarlet cord, and your mouth is lovely. Behind your veil, your brow is like a slice of pomegranate.',
                    4 => 'Your neck is like the tower of David, constructed in layers. A thousand shields are hung on it — all of them shields of warriors.',
                    5 => 'Your breasts are like two fawns, twins of a gazelle, that feed among the lilies.',
                    6 => 'Until the day breaks and the shadows flee, I will make my way to the mountain of myrrh and the hill of frankincense.',
                    7 => 'You are absolutely beautiful, my darling; there is no imperfection in you.',
                    8 => 'Come with me from Lebanon, my bride; come with me from Lebanon! Descend from the peak of Amana, from the summit of Senir and Hermon, from the dens of the lions, from the mountains of the leopards.',
                    9 => 'You have captured my heart, my sister, my bride. You have captured my heart with one glance of your eyes, with one jewel of your necklace.',
                    10 => 'How delightful your caresses are, my sister, my bride. Your caresses are much better than wine, and the fragrance of your perfume than any balsam.',
                    11 => 'Your lips drip sweetness like the honeycomb, my bride. Honey and milk are under your tongue. The fragrance of your garments is like the fragrance of Lebanon.',
                    12 => 'My sister, my bride, you are a locked garden — a locked garden and a sealed spring.',
                    13 => 'Your branches are a paradise of pomegranates with choicest fruits; henna with nard,',
                    14 => 'nard and saffron, calamus and cinnamon, with all the trees of frankincense, myrrh and aloes, with all the best spices.',
                    15 => 'You are a garden spring, a well of flowing water streaming from Lebanon.',
                    16 => 'Awaken, north wind; come, south wind. Blow on my garden, and spread the fragrance of its spices. Let my love come to his garden and eat its choicest fruits.',
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
                ],
            ],
            5 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'I have come to my garden — my sister, my bride. I gather my myrrh with my spices. I eat my honeycomb with my honey. I drink my wine with my milk. Eat, friends! Drink, be intoxicated with caresses!',
                    2 => 'I was sleeping, but my heart was awake. A sound! My love was knocking! Open to me, my sister, my darling, my dove, my perfect one. For my head is drenched with dew, my hair with droplets of the night.',
                    3 => 'I have taken off my clothing. How can I put it back on? I have washed my feet. How can I get them dirty?',
                    4 => 'My love thrust his hand through the opening, and my feelings were stirred for him.',
                    5 => 'I rose to open for my love. My hands dripped with myrrh, my fingers with flowing myrrh on the handles of the bolt.',
                    6 => 'I opened to my love, but my love had turned and gone away. My heart sank because he had left. I sought him, but did not find him. I called him, but he did not answer.',
                    7 => 'The guards who go about the city found me. They beat and wounded me; they took my cloak from me — the guardians of the walls.',
                    8 => 'Young women of Jerusalem, I charge you, if you find my love, tell him that I am lovesick.',
                    9 => 'What makes the one you love better than another, most beautiful of women? What makes him better than another, that you would give us this charge?',
                    10 => 'My love is fit and strong, notable among ten thousand.',
                    11 => 'His head is purest gold. His hair is wavy and black as a raven.',
                    12 => 'His eyes are like doves beside flowing streams, washed in milk and set like jewels.',
                    13 => 'His cheeks are like beds of spice, mounds of perfume. His lips are lilies, dripping with flowing myrrh.',
                    14 => 'His arms are rods of gold set with beryl. His body is an ivory panel covered with lapis lazuli.',
                    15 => 'His legs are alabaster pillars set on pedestals of pure gold. His presence is like Lebanon, as majestic as the cedars.',
                    16 => 'His mouth is sweetness. He is absolutely desirable. This is my love, and this is my friend, young women of Jerusalem.',
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
                ],
            ],
            6 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'Where has your love gone, most beautiful of women? Which way has he turned? We will seek him with you.',
                    2 => 'My love has gone down to his garden, to beds of spice, to feed in the gardens and gather lilies.',
                    3 => 'I am my love\'s and my love is mine; he feeds among the lilies.',
                    4 => 'You are as beautiful as Tirzah, my darling, lovely as Jerusalem, awe-inspiring as an army with banners.',
                    5 => 'Turn your eyes away from me, for they captivate me. Your hair is like a flock of goats streaming down from Gilead.',
                    6 => 'Your teeth are like a flock of ewes coming up from washing, each one having a twin, and not one missing.',
                    7 => 'Behind your veil, your brow is like a slice of pomegranate.',
                    8 => 'There are sixty queens and eighty concubines and young women without number.',
                    9 => 'But my dove, my virtuous one, is unique; she is the favorite of her mother, perfect to the one who gave her birth. Women see her and declare her fortunate; queens and concubines also, and they sing her praises:',
                    10 => 'Who is this who shines like the dawn, as beautiful as the moon, bright as the sun, awe-inspiring as an army with banners?',
                    11 => 'I came down to the walnut grove to see the blossoms of the valley, to see if the vines were budding and the pomegranates blooming.',
                    12 => 'I didn\'t know what was happening to me. I felt like I was in a chariot with a nobleman.',
                    13 => 'Come back, come back, Shulammite! Come back, come back, that we may look at you! How you gaze at the Shulammite, as you look at the dance of the two camps!',
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
            7 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'How beautiful are your sandaled feet, princess! The curves of your thighs are like jewelry, the handiwork of a master.',
                    2 => 'Your navel is a rounded bowl; it never lacks mixed wine. Your belly is a mound of wheat surrounded by lilies.',
                    3 => 'Your breasts are like two fawns, twins of a gazelle.',
                    4 => 'Your neck is like a tower of ivory, your eyes like pools in Heshbon by Bath-rabbim\'s gate. Your nose is like the tower of Lebanon looking toward Damascus.',
                    5 => 'Your head crowns you like Mount Carmel, the hair of your head like purple cloth — a king could be held captive in your tresses.',
                    6 => 'How beautiful you are and how pleasant, my love, with such delights!',
                    7 => 'Your stature is like a palm tree; your breasts are clusters of fruit.',
                    8 => 'I said, "I will climb the palm tree and take hold of its fruit." May your breasts be like clusters of grapes, and the fragrance of your breath like apricots.',
                    9 => 'Your mouth is like fine wine — flowing smoothly for my love, gliding past my lips and teeth!',
                    10 => 'I am my love\'s, and his desire is for me.',
                    11 => 'Come, my love, let\'s go to the field; let\'s spend the night among the henna blossoms.',
                    12 => 'Let\'s go early to the vineyards; let\'s see if the vine has budded, if the blossom has opened, if the pomegranates are in bloom. There I will give you my caresses.',
                    13 => 'The mandrakes give off a fragrance, and at our doors is every delicacy, both new and old. I have treasured them up for you, my love.',
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
            8 => [
                'sections' => [
                ],
                'verses' => [
                    1 => 'If only I could treat you like my brother, one who nursed at my mother\'s breasts, I would find you in public and kiss you, and no one would scorn me.',
                    2 => 'I would lead you, I would take you, to the house of my mother who taught me. I would give you spiced wine to drink from the juice of my pomegranate.',
                    3 => 'May his left hand be under my head, and his right arm embrace me.',
                    4 => 'Young women of Jerusalem, I charge you, do not stir up or awaken love until the appropriate time.',
                    5 => 'Who is this coming up from the wilderness, leaning on the one she loves? I awakened you under the apricot tree. There your mother conceived you; there she conceived and gave you birth.',
                    6 => 'Set me as a seal on your heart, as a seal on your arm. For love is as strong as death; jealousy is as unrelenting as Sheol. Love\'s flames are fiery flames — an almighty flame!',
                    7 => 'A huge torrent cannot extinguish love; rivers cannot sweep it away. If a man were to give all his wealth for love, it would be utterly scorned.',
                    8 => 'Our sister is young; she has no breasts. What will we do for our sister on the day she is spoken for?',
                    9 => 'If she is a wall, we will build a silver barricade on her. If she is a door, we will enclose her with cedar planks.',
                    10 => 'I am a wall and my breasts like towers. So to him I have become like one who finds peace.',
                    11 => 'Solomon owned a vineyard in Baal-hamon. He leased the vineyard to tenants. Each was to bring for his fruit one thousand pieces of silver.',
                    12 => 'I have my own vineyard. The one thousand are for you, Solomon, but two hundred for those who take care of its fruits.',
                    13 => 'You who dwell in the gardens, companions are listening for your voice; let me hear you!',
                    14 => 'Run away with me, my love, and be like a gazelle or a young stag on the mountains of spices.',
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
                ],
            ],
        ];
    }
} 