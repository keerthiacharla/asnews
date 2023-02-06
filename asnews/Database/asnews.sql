-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 04:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(6, 'Entertaiment', 2),
(12, 'Politics', 3),
(13, 'Sports', 2),
(14, 'Health', 0),
(15, 'teat ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(31, 'CHIRANJEEVI ', ' \r\n								 \r\n								Principal photography began in January 2020.[25][26] Important portions were shot with Chiranjeevi and others at Ramoji Film City.[20] The filming was going at a brisk pace until it was suspended in March 2020 due to COVID-19 pandemic.[27] The filming resumed in November 2020, and Kajal Aggarwal joined the sets of the film in Hyderabad in December 2020.[28][29] A temple town set spanning 20 acres in bulit up for the film.[1]\r\n\r\nCharan joined the production in January 2021, whose character is revealed as Siddha.[30] In March 2021, Hegde began filming her portions with a montage song taking place at a specially-constructed set in Maredumilli. A schedule is planned to take place at Singareni coal mines, Yellandu later that month														', '6', '02 Apr, 2021', 6, 'sri.com-1617452758 -images.jpg'),
(32, 'RAJINIKANTH', 'Rajinikanth is an Indian actor who has appeared in over 160 films, predominantly in Tamil cinema.[1] He began his film career by playing antagonistic and supporting roles before graduating to a lead actor.[2] After starring in numerous commercially successful films throughout the 1980s and 1990s, he has continued to hold a matinÃ©e idol status in the popular culture of Tamil Nadu.[3] Writing for Slate, Grady Hendrix called him the \"biggest movie star you\'ve probably never heard of.\"[4] Rajinikanth has also worked in other Indian film industries such as Bollywood, Telugu, Kannada, Malayalam and Bengali.[5]\r\n\r\nHe made his cinematic debut with K. Balachander\'s 1975 Tamil drama Apoorva Raagangal, in which he played a minor role of an abusive husband.[6][7] He had his first major role in Balachander\'s Telugu drama film Anthuleni Katha (1976), and got his breakthrough in Tamil with Moondru Mudichu (1976)â€”also directed by Balachander. His style and mannerisms in the latter earned recognition from the audience.[8] In 1977, he acted in 15 films, playing negative characters in most of them, including Avargal, 16 Vayathinile, Aadu Puli Attam and Gaayathri.[2][6] He had positive roles in Kavikkuyil, the Kannada film Sahodarara Savaal,[9] and the Telugu film Chilakamma Cheppindi, in which he played the protagonist for the first time in his career.[10] His role as a failed lover in S. P. Muthuraman\'s Bhuvana Oru Kelvi Kuri (1977) won him critical acclaim.[11] In 1978, he was cast as the main lead in the Tamil film Bairavi.[2] The same year, he received critical acclaim for his roles in Mullum Malarum and Aval Appadithan; the former earned him a Tamil Nadu State Film Award Special Prize for Best Actor.[6] He made his Malayalam cinema debut with I. V. Sasi\'s fantasy Allauddinum Albhutha Vilakkum (1979), an adaptation of a story from One Thousand and One Nights.[12][13] By the end of the decade, he had worked in all South Indian languages and established a career in Tamil cinema.[6][14]\r\n\r\nHe played dual roles in the action thriller Billa (1980), which was a remake of the Bollywood film Don (1978). It was his biggest commercial success to that point and gave him the action hero image.[15][16] Balachander\'s Thillu Mullu (1981), the Tamil remake of the Bollywood film Gol Maal (1979), was Rajinikanth\'s first full-length comedy film.[17] He played triple roles in the 1982 Tamil film Moondru Mugam, which earned him a special prize at the Tamil Nadu State Film Awards ceremony. The following year, he made his Bollywood debut with Tatineni Rama Rao\'s Andhaa Kaanoon; it was among the top-grossing Bollywood films in 1983.[18] Muthuraman\'s Nallavanukku Nallavan (1984) won him that year\'s Filmfare Award for Best Tamil Actor.[5] In 1985, he portrayed the Hindu saint Raghavendra Swami in his 100th film Sri Raghavendrar,[19] a box-office failure.[20] In the latter half of the 1980s, he starred in several films in Tamil and Hindi, including Padikkadavan (1985), Mr. Bharath (1986), Bhagwaan Dada (1986), Velaikaran (1987), Guru Sishyan (1988) and Dharmathin Thalaivan (1988).[21] During this time, he made his debut in American cinema with a supporting role in the mystery adventure film Bloodstone (1988), a box-office failure', '6', '02 Apr, 2021', 6, 'download.jpg'),
(33, 'SACHIN TENDULAKER ', 'Sachin Tendulkar, Covid Positive, Says \"Hospitalised Under Medical Advice\"Sachin Tendulkar tweeted on Friday, saying that he had been hospitalised \"as a matter of abundant precaution under medical advice\".Santosh RaoUpdated: April 02, 2021 12:14 PM ISTRead Time: 2 min\r\n10\r\nSachin Tendulkar, Covid Positive, Says \"Hospitalised Under Medical Advice\"\r\nSachin Tendulkar has been hospitalised under medical advice.Â© AFP\r\nHighlights\r\nSachin Tendulkar tweeted on Friday that he had been hospitalisedSachin Tendulkar had tested positive for Covid last weekThe cricket great said that he hoped to be back home \"in a few days\"\r\nSachin Tendulkar, who last week revealed that he had tested positive for coronavirus, tweeted on Friday, saying that he had been hospitalised \"as a matter of abundant precaution under medical advice\". The cricketing great said he hoped to be back home \"in a few days\". \"Thank you for your wishes and prayers. As a matter of abundant precaution under medical advice, I have been hospitalised. I hope to be back home in a few days. Take care and stay safe everyone,\" Sachin Tendulkar wrote on Twitter. The legendary batsman also wished his teammates and \"all Indians\" on the 10th anniversary of India\'s 2011 World Cup triumph.', '13', '02 Apr, 2021', 5, 'download (1).jpg'),
(34, 'RAJEEV GANDHI ', 'Rajiv Ratna Gandhi (/ËˆrÉ‘ËdÊ’iËv ËˆÉ¡É‘ËndiË/ (About this soundlisten); 20 August 1944 â€“ 21 May 1991) was an Indian politician who served as the 6th Prime Minister of India from 1984 to 1989. He took office after the 1984 assassination of his mother, Prime Minister Indira Gandhi, to become the youngest Indian Prime Minister at the age of 40.\r\n\r\nGandhi was from the politically powerful Nehruâ€“Gandhi family, which had been associated with the Indian National Congress party. For much of his childhood, his maternal grandfather Jawaharlal Nehru was Prime Minister. Gandhi attended college in the United Kingdom. He returned to India in 1966 and became a professional pilot for the state-owned Indian Airlines. In 1968, he married Sonia Gandhi; the couple settled in Delhi to a domestic life with their children Rahul Gandhi and Priyanka Gandhi Vadra. For much of the 1970s, his mother Indira Gandhi was prime minister and his brother Sanjay Gandhi an MP; despite this, Rajiv Gandhi remained apolitical. After Sanjay\'s death in a plane crash in 1980, Gandhi reluctantly entered politics at the behest of Indira. The following year he won his brother\'s Parliamentary seat of Amethi and became a member of the Lok Sabhaâ€”the lower house of India\'s Parliament. As part of his political grooming, Rajiv was made general secretary of the Congress party and given significant responsibility in organising the 1982 Asian Games.\r\n\r\nOn the morning of 31 October 1984, his mother was assassinated by one of her bodyguards; later that day, Gandhi was appointed Prime Minister. His leadership was tested over the next few days as organised mobs of congress supporters rioted against the Sikh community, resulting in anti-Sikh massacres in Delhi with sources estimate the number of Sikh deaths at about 8,000â€“17,000.[1] That December, Congress party won the largest Lok Sabha majority to date, 411 seats out of 542. Rajiv Gandhi\'s period in office was mired in controversies; perhaps the greatest crises were the Bhopal disaster, Bofors scandal and Mohd. Ahmed Khan v. Shah Bano Begum. In 1988, he reversed the coup in Maldives, antagonising militant Tamil groups such as PLOTE, intervening and then sending peacekeeping troops to Sri Lanka in 1987, leading to open conflict with the Liberation Tigers of Tamil Eelam (LTTE). In mid-1987, the Bofors scandal damaged his corruption-free image and resulted in a major defeat for his party in the 1989 election.', '12', '02 Apr, 2021', 5, 'rajeev.jpg'),
(35, 'NARENDRA MODI ', 'Narendra Damodardas Modi (/ËŒnÉ™ËˆreÉªn.Ã°rÉ™ ËˆÃ°É‘ËËŒmoÊŠ.Ã°É™r.Ã°É‘Ës ËˆmoÊŠÃ°iË/ (About this soundlisten) nÉ™-RAIN-dhrÉ™ DHAH-moh-dhÉ™r-dhahss MO-dhee ; born 17 September 1950)[a] is an Indian politician serving as the 14th and current Prime Minister of India since 2014. He was the Chief Minister of Gujarat from 2001 to 2014 and is the Member of Parliament for Varanasi. Modi is a member of the Bharatiya Janata Party (BJP) and of the Rashtriya Swayamsevak Sangh (RSS), a Hindu nationalist volunteer organisation. He is the first prime minister born after India\'s independence, the second non-Congress one to win two consecutive terms after Atal Bihari Vajpayee and the first from outside the Congress to win both terms with a majority in the Lok Sabha.[3]\r\n\r\nBorn and raised in Vadnagar, a small town in northeastern Gujarat, Modi completed his secondary education there, and helped his father sell tea at the local railway station. He was introduced to the RSS at age eight.[4] Modi left home after finishing high-school in part due to child marriage to Jashodaben Chimanlal Modi, which he abandoned and publicly acknowledged only many decades later. Modi travelled around India for two years and visited a number of religious centres before returning to Gujarat. In 1971 he became a full-time worker for the RSS. During the state of emergency imposed across the country in 1975, Modi was forced to go into hiding. The RSS assigned him to the BJP in 1985 and he held several positions within the party hierarchy until 2001, rising to the rank of general secretary.[b]\r\n\r\nModi was appointed Chief Minister of Gujarat in 2001 due to Keshubhai Patel\'s failing health and poor public image following the earthquake in Bhuj. Modi was elected to the legislative assembly soon after. His administration has been considered complicit in the 2002 Gujarat riots,[c] or otherwise criticised for its handling of it. A Supreme Court-appointed Special Investigation Team found no evidence to initiate prosecution proceedings against Modi personally.[d] His policies as chief minister, credited with encouraging economic growth, have received praise.[15] His administration has been criticised for failing to significantly improve health, poverty and education indices in the state.[e]\r\n\r\nModi led the BJP in the 2014 general election which gave the party a majority in the Indian lower house of parliament, the Lok Sabha, the first time for any single party since 1984. Modi\'s administration has tried to raise foreign direct investment in the Indian economy and reduced spending on healthcare and social welfare programmes. Modi has attempted to improve efficiency in the bureaucracy; he has centralised power by abolishing the Planning Commission. He began a high-profile sanitation campaign, initiated a controversial demonetisation of high-denomination banknotes and weakened or abolished environmental and labour laws', '12', '02 Apr, 2021', 5, 'naredra.jpg'),
(36, 'COVID', '\"We fully support the Director Generalâ€™s expectation that future collaborative studies will include more timely and comprehensive data sharing. In this connection, we also welcome his readiness to deploy additional missions,\" said MEA spokesperson Arindam Bagchi.\r\nThe government though also welcomed the report saying it represented an important first step in establishing the origins of the Covid-19 pandemic.\r\n\"It has listed four pathways concerning the emergence of the disease but has stressed the need for next-phase studies across the region. The report also stresses the need for further data and studies to reach robust conclusions,\" said the spokesperson.\r\nThe government also joined other stakeholders in voicing their expectations \"that follow up to the WHO report or further studies, including on an understanding of the earliest human cases and clusters by the WHO on this critical issue, will receive the fullest cooperation of all concerned.â€\r\nThe Chinese foreign ministry had said at a press briefing Wednesday that members of the group that conducted the study \"unanimously agreed\" that the lab leak allegation was \"extremely unlikely\" and that this was an important scientific conclusion made clear in the joint study report released on Tuesday', '13', '02 Apr, 2021', 3, 'corona_telangana_70.jpg'),
(37, 'Narendra Modi 2023', 'HYDERABAD: Prime Minister Narendra Modi laid out a mission for 25 years as the nation prepares to celebrate 100 years of Independence in 2047. On Saturday he interacted with the IPS probationers of 2019 batch, who have completed their training at the Sardar Vallabhai Patel National Police Academy (SVP NPA), Hyderabad. During the virtual interaction, the Prime Minister stressed on various aspects of policing.\r\n\r\n“Remember you are on a 25-year mission. Before 1947, it was a fight for ‘Swarajya’ and young people like you had played a great role in making it a reality. Now the responsibility on this young generation of officers is to achieve ‘Surajya’,. Every decision you make, every initiative you take up in service will have a great impact in achieving this,” he told the probationers', '12', '27 Jan, 2023', 6, 'sri.com-1674833441 -PM_at_First_Meeting_of_Central_Asia_Summit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `logo` varchar(50) NOT NULL,
  `footer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`logo`, `footer`) VALUES
('1617690664 -logo.jpg', '																																																																								Copyright@www.asnews.com				 							 							 							 							 							 							 							 							 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(3, 'ANIL', '& sons ', 'anil', '21232f297a57a5a743894a0e4a801fc3', 1),
(5, 'A', 'SRINIVAS', 'keerthi', '21232f297a57a5a743894a0e4a801fc3', 0),
(6, 'SRI CHAKRA', 'Pvt Ltd', 'sri.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'MR ', 'Robot', 'robot', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
