<?php

declare(strict_types=1);

namespace BKuhl\BibleCSB\Book;

use BKuhl\BibleCSB\Book;
use BKuhl\BibleCSB\Testament;

class Ezra extends Book
{
    public const ABBREVIATION = 'Ezra';
    public const ID = 15;

    public function testament(): Testament
    {
        return Testament::OLD;
    }

    public function name(): string
    {
        return 'Ezra';
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
                    1 => 'The Decree of Cyrus',
                    2 => 'Return from Exile',
                ],
                'verses' => [
                    1 => 'In the first year of King Cyrus of Persia, in order to fulfill the word of the spoken through Jeremiah, the Lord roused the spirit of King Cyrus to issue a proclamation throughout his entire kingdom and to put it in writing:',
                    5 => 'So the family heads of Judah and Benjamin, along with the priests and Levites — everyone whose spirit God had roused — prepared to go up and rebuild the \'s house in Jerusalem.',
                    6 => 'All their neighbors supported them with silver articles, gold, goods, livestock, and valuables, in addition to all that was given as a freewill offering.',
                    7 => 'King Cyrus also brought out the articles of the Lord\'s house that Nebuchadnezzar had taken from Jerusalem and had placed in the house of his gods.',
                    8 => 'King Cyrus of Persia had them brought out under the supervision of Mithredath the treasurer, who counted them out to Sheshbazzar the prince of Judah.',
                    9 => 'This was the inventory:',
                    11 => 'The gold and silver articles totaled 5,400. Sheshbazzar brought all of them when the exiles went up from Babylon to Jerusalem.',
                ],
                'versesToSections' => [
                    1 => 1,
                    5 => 2,
                    6 => 2,
                    7 => 2,
                    8 => 2,
                    9 => 2,
                    11 => 2,
                ],
            ],
            2 => [
                'sections' => [
                    1 => 'The Exiles Who Returned',
                    2 => 'Gifts for the Work',
                ],
                'verses' => [
                    1 => 'These now are the people of the province who came from those captive exiles King Nebuchadnezzar of Babylon had deported to Babylon. They returned to Jerusalem and Judah, each to his own town.',
                    2 => 'They came with Zerubbabel, Jeshua, Nehemiah, Seraiah, Reelaiah, Mordecai, Bilshan, Mispar, Bigvai, Rehum, and Baanah.',
                    36 => 'The priests included',
                    40 => 'The Levites included',
                    41 => 'The singers included',
                    42 => 'The gatekeepers\' descendants included',
                    43 => 'The temple servants included',
                    55 => 'The descendants of Solomon\'s servants included',
                    59 => 'The following are those who came from Tel-melah, Tel-harsha, Cherub, Addan, and Immer but were unable to prove that their ancestral families and their lineage were Israelite:',
                    61 => 'and from the descendants of the priests: the descendants of Hobaiah, the descendants of Hakkoz, the descendants of Barzillai — who had taken a wife from the daughters of Barzillai the Gileadite and who bore their name.',
                    62 => 'These searched for their entries in the genealogical records, but they could not be found, so they were disqualified from the priesthood.',
                    63 => 'The governor ordered them not to eat the most holy things until there was a priest who could consult the Urim and Thummim.',
                    68 => 'After they arrived at the Lord\'s house in Jerusalem, some of the family heads gave freewill offerings for the house of God in order to have it rebuilt on its original site.',
                    69 => 'Based on what they could give, they gave 61,000 gold coins, 6,250 pounds of silver, and 100 priestly garments to the treasury for the project.',
                    70 => 'The priests, Levites, singers, gatekeepers, temple servants, and some of the people settled in their towns, and the rest of Israel settled in their towns.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    36 => 1,
                    40 => 1,
                    41 => 1,
                    42 => 1,
                    43 => 1,
                    55 => 1,
                    59 => 1,
                    61 => 1,
                    62 => 1,
                    63 => 1,
                    68 => 2,
                    69 => 2,
                    70 => 2,
                ],
            ],
            3 => [
                'sections' => [
                    1 => 'Sacrifice Restored',
                    2 => 'Rebuilding the Temple',
                    3 => 'Temple Foundation Completed',
                ],
                'verses' => [
                    1 => 'When the seventh month arrived, and the Israelites were in their towns, the people gathered as one in Jerusalem.',
                    2 => 'Jeshua son of Jozadak and his brothers the priests along with Zerubbabel son of Shealtiel and his brothers began to build the altar of Israel\'s God in order to offer burnt offerings on it, as it is written in the law of Moses, the man of God.',
                    3 => 'They set up the altar on its foundation and offered burnt offerings for the morning and evening on it to the even though they feared the surrounding peoples.',
                    4 => 'They celebrated the Festival of Shelters as prescribed, and offered burnt offerings each day, based on the number specified by ordinance for each festival day.',
                    5 => 'After that, they offered the regular burnt offering and the offerings for the beginning of each month and for all the Lord\'s appointed holy occasions, as well as the freewill offerings brought to the Lord.',
                    6 => 'On the first day of the seventh month they began to offer burnt offerings to the Lord, even though the foundation of the Lord\'s temple had not yet been laid.',
                    7 => 'They gave money to the stonecutters and artisans, and gave food, drink, and oil to the people of Sidon and Tyre, so they would bring cedar wood from Lebanon to Joppa by sea, according to the authorization given them by King Cyrus of Persia.',
                    8 => 'In the second month of the second year after they arrived at God\'s house in Jerusalem, Zerubbabel son of Shealtiel, Jeshua son of Jozadak, and the rest of their brothers, including the priests, the Levites, and all who had returned to Jerusalem from the captivity, began to build. They appointed the Levites who were twenty years old or more to supervise the work on the Lord\'s house.',
                    9 => 'Jeshua with his sons and brothers, Kadmiel with his sons, and the sons of Judah and of Henadad, with their sons and brothers, the Levites, joined together to supervise those working on the house of God.',
                    10 => 'When the builders had laid the foundation of the Lord\'s temple, the priests, dressed in their robes and holding trumpets, and the Levites descended from Asaph, holding cymbals, took their positions to praise the Lord, as King David of Israel had instructed.',
                    11 => 'They sang with praise and thanksgiving to the Lord: "For he is good; his faithful love to Israel endures forever." Then all the people gave a great shout of praise to the Lord because the foundation of the Lord\'s house had been laid.',
                    12 => 'But many of the older priests, Levites, and family heads, who had seen the first temple, wept loudly when they saw the foundation of this temple, but many others shouted joyfully.',
                    13 => 'The people could not distinguish the sound of the joyful shouting from that of the weeping, because the people were shouting so loudly. And the sound was heard far away.',
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
                    10 => 3,
                    11 => 3,
                    12 => 3,
                    13 => 3,
                ],
            ],
            4 => [
                'sections' => [
                    1 => 'Opposition to Rebuilding the Temple',
                    2 => 'Opposition to Rebuilding the City',
                    3 => 'Artaxerxes\'s Reply',
                    4 => 'Rebuilding of the Temple Resumed',
                ],
                'verses' => [
                    1 => 'When the enemies of Judah and Benjamin heard that the returned exiles were building a temple for the Lord, the God of Israel,',
                    2 => 'they approached Zerubbabel and the family heads and said to them, "Let us build with you, for we also worship your God and have been sacrificing to him since the time King Esar-haddon of Assyria brought us here."',
                    3 => 'But Zerubbabel, Jeshua, and the other heads of Israel\'s families answered them, "You may have no part with us in building a house for our God, since we alone will build it for the Lord, the God of Israel, as King Cyrus, the king of Persia has commanded us."',
                    4 => 'Then the people who were already in the land discouraged the people of Judah and made them afraid to build.',
                    5 => 'They also bribed officials to act against them to frustrate their plans throughout the reign of King Cyrus of Persia and until the reign of King Darius of Persia.',
                    6 => 'At the beginning of the reign of Ahasuerus, the people who were already in the land wrote an accusation against the residents of Judah and Jerusalem.',
                    7 => 'During the time of King Artaxerxes of Persia, Bishlam, Mithredath, Tabeel and the rest of his colleagues wrote to King Artaxerxes. The letter was written in Aramaic and translated.',
                    8 => 'Rehum the chief deputy and Shimshai the scribe wrote a letter to King Artaxerxes concerning Jerusalem as follows:',
                    11 => 'This is the text of the letter they sent to him:',
                    17 => 'The king sent a reply to his chief deputy Rehum, Shimshai the scribe, and the rest of their colleagues living in Samaria and elsewhere in the region west of the Euphrates River:',
                    23 => 'As soon as the text of King Artaxerxes\'s letter was read to Rehum, Shimshai the scribe, and their colleagues, they immediately went to the Jews in Jerusalem and forcibly stopped them.',
                    24 => 'Now the construction of God\'s house in Jerusalem had stopped and remained at a standstill until the second year of the reign of King Darius of Persia.',
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
                    11 => 2,
                    17 => 3,
                    23 => 3,
                    24 => 4,
                ],
            ],
            5 => [
                'sections' => [
                    1 => 'The Letter to Darius',
                ],
                'verses' => [
                    1 => 'But when the prophets Haggai and Zechariah son of Iddo prophesied to the Jews who were in Judah and Jerusalem, in the name of the God of Israel who was over them,',
                    2 => 'Zerubbabel son of Shealtiel and Jeshua son of Jozadak began to rebuild God\'s house in Jerusalem. The prophets of God were with them, helping them.',
                    3 => 'At that time Tattenai the governor of the region west of the Euphrates River, Shethar-bozenai, and their colleagues came to the Jews and asked, "Who gave you the order to rebuild this temple and finish this structure? "',
                    4 => 'They also asked them, "What are the names of the workers who are constructing this building? "',
                    5 => 'But God was watching over the Jewish elders. These men wouldn\'t stop them until a report was sent to Darius, so that they could receive written instructions about this matter.',
                    6 => 'This is the text of the letter that Tattenai the governor of the region west of the Euphrates River, Shethar-bozenai, and their colleagues, the officials in the region, sent to King Darius.',
                    7 => 'They sent him a report, written as follows:',
                ],
                'versesToSections' => [
                    1 => 0,
                    2 => 0,
                    3 => 0,
                    4 => 0,
                    5 => 0,
                    6 => 1,
                    7 => 1,
                ],
            ],
            6 => [
                'sections' => [
                    1 => 'Darius\'s Search',
                    2 => 'Darius\'s Decree',
                    3 => 'Temple Dedication and the Passover',
                ],
                'verses' => [
                    1 => 'King Darius gave the order, and they searched in the library of Babylon in the archives.',
                    2 => 'But it was in the fortress of Ecbatana in the province of Media that a scroll was found with this record written on it:',
                    13 => 'Then Tattenai governor of the region west of the Euphrates River, Shethar-bozenai, and their colleagues diligently carried out what King Darius had decreed.',
                    14 => 'So the Jewish elders continued successfully with the building under the prophesying of Haggai the prophet and Zechariah son of Iddo. They finished the building according to the command of the God of Israel and the decrees of Cyrus, Darius, and King Artaxerxes of Persia.',
                    15 => 'This house was completed on the third day of the month of Adar in the sixth year of the reign of King Darius.',
                    16 => 'Then the Israelites, including the priests, the Levites, and the rest of the exiles, celebrated the dedication of the house of God with joy.',
                    17 => 'For the dedication of God\'s house they offered one hundred bulls, two hundred rams, and four hundred lambs, as well as twelve male goats as a sin offering for all Israel — one for each Israelite tribe.',
                    18 => 'They also appointed the priests by their divisions and the Levites by their groups to the service of God in Jerusalem, according to what is written in the book of Moses.',
                    19 => 'The exiles observed the Passover on the fourteenth day of the first month.',
                    20 => 'All of the priests and Levites were ceremonially clean, because they had purified themselves. They killed the Passover lamb for themselves, their priestly brothers, and all the exiles.',
                    21 => 'The Israelites who had returned from exile ate it, together with all who had separated themselves from the uncleanness of the Gentiles of the land in order to worship the Lord, the God of Israel.',
                    22 => 'They observed the Festival of Unleavened Bread for seven days with joy, because the Lord had made them joyful, having changed the Assyrian king\'s attitude toward them, so that he supported them in the work on the house of the God of Israel.',
                ],
                'versesToSections' => [
                    1 => 1,
                    2 => 1,
                    13 => 2,
                    14 => 2,
                    15 => 2,
                    16 => 3,
                    17 => 3,
                    18 => 3,
                    19 => 3,
                    20 => 3,
                    21 => 3,
                    22 => 3,
                ],
            ],
            7 => [
                'sections' => [
                    1 => 'Ezra\'s Arrival',
                    2 => 'Letter from Artaxerxes',
                ],
                'verses' => [
                    1 => 'After these events, during the reign of King Artaxerxes of Persia, Ezra —',
                    6 => '— came up from Babylon. He was a scribe skilled in the law of Moses, which the Lord, the God of Israel, had given. The king had granted him everything he requested because the hand of the Lord his God was on him.',
                    7 => 'Some of the Israelites, priests, Levites, singers, gatekeepers, and temple servants accompanied him to Jerusalem in the seventh year of King Artaxerxes.',
                    8 => 'Ezra came to Jerusalem in the fifth month, during the seventh year of the king.',
                    9 => 'He began the journey from Babylon on the first day of the first month and arrived in Jerusalem on the first day of the fifth month since the gracious hand of his God was on him.',
                    10 => 'Now Ezra had determined in his heart to study the law of the Lord, obey it, and teach its statutes and ordinances in Israel.',
                    11 => 'This is the text of the letter King Artaxerxes gave to Ezra the priest and scribe, an expert in matters of the Lord\'s commands and statutes for Israel:',
                    27 => 'Blessed be the Lord, the God of our ancestors, who has put it into the king\'s mind to glorify the house of the Lord in Jerusalem,',
                    28 => 'and who has shown favor to me before the king, his counselors, and all his powerful officers. So I took courage because I was strengthened by the hand of the my God, and I gathered Israelite leaders to return with me.',
                ],
                'versesToSections' => [
                    1 => 1,
                    6 => 1,
                    7 => 1,
                    8 => 1,
                    9 => 1,
                    10 => 1,
                    11 => 2,
                    27 => 2,
                    28 => 2,
                ],
            ],
            8 => [
                'sections' => [
                    1 => 'Those Returning with Ezra',
                    2 => 'Preparing to Return',
                    3 => 'Arrival in Jerusalem',
                ],
                'verses' => [
                    1 => 'These are the family heads and the genealogical records of those who returned with me from Babylon during the reign of King Artaxerxes:',
                    15 => 'I gathered them at the river that flows to Ahava, and we camped there for three days. I searched among the people and priests, but found no Levites there.',
                    16 => 'Then I summoned the leaders: Eliezer, Ariel, Shemaiah, Elnathan, Jarib, Elnathan, Nathan, Zechariah, and Meshullam, as well as the teachers Joiarib and Elnathan.',
                    17 => 'I sent them to Iddo, the leader at Casiphia, with a message for him and his brothers, the temple servants at Casiphia, that they should bring us ministers for the house of our God.',
                    18 => 'Since the gracious hand of our God was on us, they brought us Sherebiah — a man of insight from the descendants of Mahli, a descendant of Levi son of Israel — along with his sons and brothers, 18 men,',
                    19 => 'plus Hashabiah, along with Jeshaiah, from the descendants of Merari, and his brothers and their sons, 20 men.',
                    20 => 'There were also 220 of the temple servants, who had been appointed by David and the leaders for the work of the Levites. All were identified by name.',
                    21 => 'I proclaimed a fast by the Ahava River, so that we might humble ourselves before our God and ask him for a safe journey for us, our dependents, and all our possessions.',
                    22 => 'I did this because I was ashamed to ask the king for infantry and cavalry to protect us from enemies during the journey, since we had told him, "The hand of our God is gracious to all who seek him, but his fierce anger is against all who abandon him."',
                    23 => 'So we fasted and pleaded with our God about this, and he was receptive to our prayer.',
                    24 => 'I selected twelve of the leading priests, along with Sherebiah, Hashabiah, and ten of their brothers.',
                    25 => 'I weighed out to them the silver, the gold, and the articles — the contribution for the house of our God that the king, his counselors, his leaders, and all the Israelites who were present had offered.',
                    26 => 'I weighed out to them 24 tons of silver, silver articles weighing 7,500 pounds, 7,500 pounds of gold,',
                    27 => 'twenty gold bowls worth a thousand gold coins, and two articles of fine gleaming bronze, as valuable as gold.',
                    28 => 'Then I said to them, "You are holy to the Lord, and the articles are holy. The silver and gold are a freewill offering to the Lord God of your ancestors.',
                    29 => 'Guard them carefully until you weigh them out in the chambers of the Lord\'s house before the leading priests, Levites, and heads of the Israelite families in Jerusalem."',
                    30 => 'So the priests and Levites took charge of the silver, the gold, and the articles that had been weighed out, to bring them to the house of our God in Jerusalem.',
                    31 => 'We set out from the Ahava River on the twelfth day of the first month to go to Jerusalem. We were strengthened by our God, and he kept us from the grasp of the enemy and from ambush along the way.',
                    32 => 'So we arrived at Jerusalem and rested there for three days.',
                    33 => 'On the fourth day the silver, the gold, and the articles were weighed out in the house of our God into the care of the priest Meremoth son of Uriah. Eleazar son of Phinehas was with him. The Levites Jozabad son of Jeshua and Noadiah son of Binnui were also with them.',
                    34 => 'Everything was verified by number and weight, and the total weight was recorded at that time.',
                    35 => 'The exiles who had returned from the captivity offered burnt offerings to the God of Israel: twelve bulls for all Israel, ninety-six rams, and seventy-seven lambs, along with twelve male goats as a sin offering. All this was a burnt offering for the Lord.',
                    36 => 'They also delivered the king\'s edicts to the royal satraps and governors of the region west of the Euphrates, so that they would support the people and the house of God.',
                ],
                'versesToSections' => [
                    1 => 1,
                    15 => 1,
                    16 => 1,
                    17 => 1,
                    18 => 1,
                    19 => 1,
                    20 => 1,
                    21 => 2,
                    22 => 2,
                    23 => 2,
                    24 => 2,
                    25 => 2,
                    26 => 2,
                    27 => 2,
                    28 => 2,
                    29 => 2,
                    30 => 2,
                    31 => 3,
                    32 => 3,
                    33 => 3,
                    34 => 3,
                    35 => 3,
                    36 => 3,
                ],
            ],
            9 => [
                'sections' => [
                    1 => 'Israel\'s Intermarriage',
                    2 => 'Ezra\'s Confession',
                ],
                'verses' => [
                    1 => 'After these things had been done, the leaders approached me and said, "The people of Israel, the priests, and the Levites have not separated themselves from the surrounding peoples whose detestable practices are like those of the Canaanites, Hethites, Perizzites, Jebusites, Ammonites, Moabites, Egyptians, and Amorites.',
                    2 => 'Indeed, the Israelite men have taken some of their daughters as wives for themselves and their sons, so that the holy seed has become mixed with the surrounding peoples. The leaders and officials have taken the lead in this unfaithfulness! "',
                    3 => 'When I heard this report, I tore my tunic and robe, pulled out some of the hair from my head and beard, and sat down devastated.',
                    4 => 'Everyone who trembled at the words of the God of Israel gathered around me, because of the unfaithfulness of the exiles, while I sat devastated until the evening offering.',
                    5 => 'At the evening offering, I got up from my time of humiliation, with my tunic and robe torn. Then I fell on my knees and spread out my hands to the Lord my God.',
                    6 => 'And I said:',
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
            10 => [
                'sections' => [
                    1 => 'Sending Away Foreign Wives',
                    2 => 'Those Married to Foreign Wives',
                ],
                'verses' => [
                    1 => 'While Ezra prayed and confessed, weeping and falling facedown before the house of God, an extremely large assembly of Israelite men, women, and children gathered around him. The people also wept bitterly.',
                    2 => 'Then Shecaniah son of Jehiel, an Elamite, responded to Ezra, "We have been unfaithful to our God by marrying foreign women from the surrounding peoples, but there is still hope for Israel in spite of this.',
                    3 => 'Therefore, let\'s make a covenant before our God to send away all the foreign wives and their children, according to the counsel of my lord and of those who tremble at the command of our God. Let it be done according to the law.',
                    4 => 'Get up, for this matter is your responsibility, and we support you. Be strong and take action! "',
                    5 => 'Then Ezra got up and made the leading priests, Levites, and all Israel take an oath to do what had been said; so they took the oath.',
                    6 => 'Ezra then went from the house of God and walked to the chamber of Jehohanan son of Eliashib, where he spent the night. He did not eat food or drink water, because he was mourning over the unfaithfulness of the exiles.',
                    7 => 'They circulated a proclamation throughout Judah and Jerusalem that all the exiles should gather at Jerusalem.',
                    8 => 'Whoever did not come within three days would forfeit all his possessions, according to the decision of the leaders and elders, and would be excluded from the assembly of the exiles.',
                    9 => 'So all the men of Judah and Benjamin gathered in Jerusalem within the three days. On the twentieth day of the ninth month, all the people sat in the square at the house of God, trembling because of this matter and because of the heavy rain.',
                    10 => 'Then the priest Ezra stood up and said to them, "You have been unfaithful by marrying foreign women, adding to Israel\'s guilt.',
                    11 => 'Therefore, make a confession to the Lord, the God of your ancestors, and do his will. Separate yourselves from the surrounding peoples and your foreign wives."',
                    12 => 'Then all the assembly responded loudly, "Yes, we will do as you say!',
                    13 => 'But there are many people, and it is the rainy season. We don\'t have the stamina to stay out in the open. This isn\'t something that can be done in a day or two, for we have rebelled terribly in this matter.',
                    14 => 'Let our leaders represent the entire assembly. Then let all those in our towns who have married foreign women come at appointed times, together with the elders and judges of each town, in order to avert the fierce anger of our God concerning this matter."',
                    15 => 'Only Jonathan son of Asahel and Jahzeiah son of Tikvah opposed this, with Meshullam and Shabbethai the Levite supporting them.',
                    16 => 'The exiles did what had been proposed. The priest Ezra selected men who were family heads, all identified by name, to represent their ancestral families. They convened on the first day of the tenth month to investigate the matter,',
                    17 => 'and by the first day of the first month they had dealt with all the men who had married foreign women.',
                    18 => 'The following were found to have married foreign women from the descendants of the priests:',
                    23 => 'The Levites:',
                    24 => 'The singers:',
                    25 => 'The Israelites:',
                    44 => 'All of these had married foreign women, and some of the wives had given birth to children.',
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
                    23 => 2,
                    24 => 2,
                    25 => 2,
                    44 => 2,
                ],
            ],
        ];
    }
} 