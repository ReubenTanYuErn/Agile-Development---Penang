-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:23 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penang`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `attraction_id` int(100) NOT NULL,
  `attraction_name` varchar(255) NOT NULL,
  `attraction_image` text NOT NULL,
  `attraction_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`attraction_id`, `attraction_name`, `attraction_image`, `attraction_desc`) VALUES
(3, 'Penang Hill', 'Penang_Hill_View.jpg', 'Penang Hill is a hill resort comprising a group of peaks on Penang Island, Malaysia. It is located within the Air Itam suburb, 6 km (3.7 mi) west of the city centre of George Town. Penang Hill is also known by the Malay name Bukit Bendera, which actually refers to Flagstaff Hill, the most developed peak.\r\n\r\nPenang Hill covers a number of hills, with the highest point at Western Hill which is 833 m (2,733 ft) above sea level. The hill stands out prominently from the lowlands as a hilly and forested area. It was used as a retreat during the British colonial period, and is now a popular tourist destination in Penang.'),
(4, 'Kek Lok Si Temple', '800px-Kek_Lok_Si_2016.jpg', 'The Kek Lok Si Temple is a Buddhist temple situated in Air Itam in Penang facing the sea and commanding an impressive view, and is one of the best known temples on the island. It is said to be the largest Buddhist temple in Malaysia.[1] It is also an important pilgrimage centre for Buddhists from Hong Kong, the Philippines, Singapore and other countries in Southeast Asia. This entire complex of temples was built over a period from 1890 to 1930, an inspirational initiative of Beow Lean, the Abbot. The main draw in the complex is the striking seven-storey Pagoda of Rama VI (Pagoda of Ten Thousand Buddhas) with 10,000 alabaster and bronze statues of Buddha, and the 36.57 metres (120.0 ft) tall bronze statue of Kuan Yin, the Goddess of Mercy.'),
(5, ' Cheong Fatt Tze Mansion', 'indigo-thebluemansion-penang_v1nrog.jpg', 'The transcendental quality and timelessness of the mansion has been perfectly poised for over a century on firm foundations of architectural, cultural and historical superlatives. Here, time comes to a halt as you meander along the mansion and revel in the harmonious medley of history and culture.\r\n\r\nHere, you will find all modern comfort set against a backdrop of genuine old world charm, including an exquisite dining experience at Indigo restaurant, a courtyard dining room and an idyllic terrace. There are daily guided mansion tours that give you the opportunity to immerse yourself in the history behind the mansion and itâ€™s architecture. The Blue Mansion is centrally located, at 4km from the Gurney Drive seafront promenade, 9km from Kek Lok Si Buddhist temple and just a 5-minute walk to China Town and other significant heritage spots in Penang.'),
(6, 'Escape Adventure', 'image.jpg', 'Escape Adventureplay Penang is a cool alternative to the beach and has quickly turned into a firm favourite with outdoor adventure seekers on the island. An outdoor, eco-conscious theme park specialising in zip-lining (a pulley suspended on a stainless steel cable, tied between two trees on an incline), the park also hosts other fun jungle activities for all ages. A creative and fun way to foster a love of the outdoors, especially among kids, the park started out in 2012 with standout attractions such as a free fall from a 20 metre-high jump platform, an inner tube slide and tree rope swing.\r\n\r\nRead more at: http://www.penang.ws/penang-attractions/sim-leisure-excape.htm?cid=ch:OTH:001'),
(7, 'Adventure Zone', 'RSR-Adventure-Zone(1).jpg', 'The Adventure Zone is a unique family entertainment centre for children and adults. The 10,300 sqf comprehensive indoor facility caters to family-style activities where children, teens and adults can interact together in a safe environment.\r\n\r\nHoused within this air-conditioned facility are three categories of exciting drop slides and multiple sections of modular play equipment. Other facilities include a multi-use reception area, retail and snack counter, toddler zone, kids club and child-friendly restrooms.'),
(8, 'Penang Interactive Museum', 'wwb_img13.jpg', 'Made In Penang Interactive Museum, this 3D gallery museum officially opened on November 1, is located near the Penang pier, called a very local characteristics and alternative museums. Inside the canvas and models are hundred percent creative artists from Penang. Here, you can not only glance early Penang Port, but also expanded with 30 pieces of 3D paintings full of interesting photo, with a total of music, is bound to give you the Penang Cultural impressed. Their collection of murals utilise shades and varying contours to add to their strength as well as props to create a real-life mind trickery - on photographs, of course - for adults and kids alike.'),
(9, 'Penang War Museum', 'war-03.jpg', 'Penang War Museum in Bukit Batu Maung was a fort built by the British in the 1930s. In 1941 it gained fame when it became the site where the battle for Penang against the invading Japanese army was lost. These days it is a museum open to the public and is billed as Southeast Asiaâ€™s largest war museum. Situated on the road to Teluk Kumbar on Penangâ€™s southern coast, the fort was initially supposed to be a preserved citadel constructed as part of a plan to protect the island from foreign invasion. It is also known as Muzium Perang Pulau Pinang.'),
(10, 'Fort Cornwallis', '250px-Fort_Cornwallis_Penang_Dec_2006_003.jpg', 'Fort Cornwallis is a star fort in George Town, Penang, Malaysia, built by the British East India Company in the late 18th century. Fort Cornwallis is the largest standing fort in Malaysia. The fort never engaged in combat during its operational history.\r\n\r\nIt is named after the then Governor-General of Bengal, Charles Cornwallis, 1st Marquess Cornwallis, who had also been involved in the American War of Independence.'),
(11, 'Penang Khoo Kongsi', 'image (1).jpg', 'Khoo Kongsi is one of Georgetownâ€™s most interesting attractions. Built some 650 years ago, it is part of the goh tai seh (five big clans) that formed the backbone of the Hokkien community in olden-days Penang. One of Penangâ€™s most lavishly decorated kongsis, it is located on Jalan Acheh, off Lebuh Pitt. A kongsi (clan house) is a building in which Chinese families of the same surname gather to worship their ancestors. Representing a familyâ€™s social and spiritual commitments between extended relations, ancestors and the outside community, the kongsi also acts as an important means of solidarity. These days the primary functions of kongsis are supportive roles: they help with the educations of membersâ€™ children, settle disputes and advance loans.'),
(12, 'Wat Chaiya Mangkalaram', 'image (2).jpg', 'Wat Chaiya Mangkalaram Temple is the largest Thai temple in Penang. Set just off Jalan Burma (on the way to Batu Ferringhi), the yellow-and-blue temple is also known as Wat Buppharam. Built in 1845, it is home to a 108ft-long reclining Buddha image, said to be the third largest in the world. Draped in a gold-leafed saffron robe, the sprawling statue was erected as a monument to signify Buddhaâ€™s final resting position at his death and symbolizes his detachment from worldly matters. Located opposite the less extravagant Dharmmikarama Temple (which lights up beautifully at night) Wat Chaiya Mangakalaram Temple is a beautiful sight with ornate, gold pagodas, and mural-painted walls.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_comments`) VALUES
(15, 'tommy', 'tommy@gmail.com ', 'can i book the hotels from here');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` text NOT NULL,
  `event_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_image`, `event_desc`) VALUES
(1, 'Bon Odori Festival ', 'bonodori.jpg', 'Organised by the Malaysian Japanese Society, the Bon Odori Festival is the Japanese version of the Chinese''s Hungry Ghost Festival, where Japanese expatriates both young and old take part in this carnival-like festival to pay homage to their descendants. A traditional and merry Japanese festival that is celebrated with dance and lively drum performances to welcome the homecoming of ancestral spirits. The carnival-like atmosphere is made even merrier with stalls selling a variety of local and Japanese food, fireworks display, Japanese souvenirs, lively performances and games.\r\n'),
(4, 'George Town Festival', 'georgetownfestival.jpg', 'George Town Festival. Held annually since 2010 to commemorate George Town’s listing on the UNESCO heritage listing in 2008, it is a month long festival celebrating art, music, theatre, dance, opera and film. It usually runs from June to July and has attracted a lot of attention around the globe as one of the leading arts festivals in the region. It has a unique blend of local as well as international cultural showcases.\r\n'),
(3, 'Penang Bridge International Marathon', 'pbim.jpg', 'The Penang Bridge International Marathon or Penang Bridge Marathon is an annual marathon event held in Penang Bridge, Penang, Malaysia. The event was established in 1985. Participants run over the longest bridge in Malaysia, Penang Bridge or Sultan Abdul Halim Muadzam Shah Bridge, and along a scenic coastal highway. This is the only time of the year when the bridge is closed for several hours. The biggest run in the country incorporates a full marathon, a half-marathon and a quarter-marathon.\r\n				'),
(2, 'Penang International Dragon Boat Festival ', 'dragonboat.jpg', 'The Penang Dragon Boat Festival is one on many dragon boat races in Malaysia, but it is easily the most impressive. The drums beat rhythmically as the long colourful boats glide across the surface led by enormous dragon heads. The Penang Dragon Boat Festival began in 1979, although dragon boats races in Malaysia have been happening since 1934. The boats are about 10 metres long and manned by a crew of about 20 rowers sitting in pairs. The winners are crowned as kings.'),
(5, 'Songkran Water Festival', 'songkran.jpg', 'The Annual Songkran Water Festival has been organized for more than 15 years by this temple. Chaiya Mangalaran Buddhist Temple is the oldest Thai Temple in Malaysia, the temple was built in 1845. It is a unique and beautiful tourist attraction in Penang, welcoming thousands of foreign visitors daily.');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(100) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_image` text NOT NULL,
  `hotel_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_image`, `hotel_desc`) VALUES
(9, 'Lone Pine Hotel', 'lonepine.jpg', 'Established since 1948, this delightful sanctuary was the first hotel on Batu Ferringhi beach, and today retains much of its old world charm, a wonderful hideaway to escape to from the hustle and bustle of the city. The Lone Pine is the only boutique hotel along the coastline, with most of its 90 guestrooms facing the sea and shaded by a veil of lofty casuarina trees. '),
(11, 'Holiday Inn Resort Penang ', 'holiday.jpg', 'The Holiday Inn Resort is situated on the charming island of Penang, which is rich with cultural heritage and offers the perfect place for a well-deserved holiday. Our resort features a large variety of elegant guest rooms that are tastefully decorated and offer modern amenities to make your stay truly memorable.'),
(12, 'Four Points by Sheraton Penang ', 'four-point-penang.jpg', 'Four Points by Sheraton Penang offer great facilities like an outdoor pool, a lobby lounge, an all-day dining restaurant, a gym, and a business centre. Cool down from the tropical heat after a day of exploration in the city with a local or international brew from our Best Brews program. '),
(13, 'Hotel Sentral Seaview, Penang', 'sentral-seaview.jpg', 'Hotel Sentral Seaview Penang, located at Tanjung Tokong Beach, offers guests a cosy accommodation with spectacular views of the sea. It is a 10minutes drive from Georgetown City and 19 km from Penang International Airport. The hotel offers easy access to the citys must see destinations such as Gurney Drive and Straits Quay. '),
(14, 'Rainbow Paradise Beach Resort Penang', 'rainbow-paradise.jpg', 'Rainbow Paradise Beach Resort, formerly flagged as Paradise Sandy Beach Resort, is a four-star property that allows guests to enjoy deluxe surroundings for much less than expected. If your idea of a fabulous beachside vacation includes manicured gardens, amazing oceanfront views, a comprehensive list of leisure facilities and an array of indulgent spa sessions, then Rainbow Paradise Beach Resort is for you. Located in Tanjung Bungah (between Georgetown and Batu Ferringhi), the resort is just 45 minutes away from the Penang International Airport and hosts 310 suites with private balconies offering views of the ocean.'),
(15, 'Hotel Equatorial Penang ', 'hotel-equatorial.jpg', 'Hotel Equatorial Penang, the islands only golf and convention resort, is a sprawling five-star property set on Bukit Jambul hill, just seven minutes away from the Penang International Airport. Adjacent to an 18-hole international golf course, driving range and putting green, it is the hotel of choice for golf enthusiasts visiting Penang. Besides that, there is a beautifully-landscaped outdoor swimming pool shaded by swaying palm trees, which comes complete with a waterfall and outdoor Jacuzzi.'),
(16, 'Bayview Hotel Georgetown Penang', 'bayview-georgetown.jpg', 'Bayview Hotel Georgetown Penang is a four-star property set along Farquhar Street, with some of the citys best attractions such as food courts, malls and historical and cultural landmarks within arms reach. Also nearby is Upper Penang Road, which makes this newly-refurbished four-star property a good option for those who are looking to stay close to the islands best nightlife action. Just 30 minutes away from the Penang International Airport, Bayview Hotel Georgetown pitches at both the traditional and trend-driven guest. '),
(17, 'Flamingo By The Beach Penang', 'flamingo-by-the-sea.jpg', 'Flamingo by the Beach Hotel Penang offers the best of both worlds to guests - set along Jalan Tanjung Bunggah, it is close to the soft white sand beaches of Batu Ferringhi as well as only a ten-minute drive away from Gurney Drive. An audacious mix of architectural patterns and bold colours best describes the hotels style - its 280 rooms and suites are sleek and modern, done up in a neutral colour palette of beige, brown and buttercup yellow. There are four room categories: the Deluxe Room Hill View, Deluxe Room Sea View, Two-Bedroom Suite and Three-Bedroom Suite, with all units offering a private balcony with views of either the hillside or sea. '),
(18, 'Hard Rock Hotel Penang', 'Seaview-Deluxe-with-Balcony-2016_website.jpg', 'Located in the Pearl of Orient, Hard Rock Hotel Penang is iconic, bringing the multicultural Penang to new heights with its authentic Hard Rock experience. This hip and trendy resort in Penang is suitable for families, couples and singles for their relaxing accommodation in Penang.'),
(19, 'Bayview Beach Resort', 'Play_Pool1a.jpg', 'A full service Beach Resort with 360 Rooms and Suites. All with attached bath, full amenities, in-room safe and LCD Tv. Family rooms and suites also available.');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(100) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_image` text NOT NULL,
  `restaurant_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_image`, `restaurant_desc`) VALUES
(6, 'Nasi Kandar Line Clear ', 'restaurant2.jpg', 'This 24-hour restaurant merits a spot on our list because the food here is, simply put, phenomenal. There is such an impressive array of daily specials, ranging from fish curry to beef gravy, all of which comes generously portioned. Add in the fact that at Nasi Kandar Line Clear you only pay RM6.50 (the cheapest in all of Penang) for a plate of rice, fried chicken, egg, vegetables and a mix of gravies, and the whole meal is that much more satisfying. Located in a narrow alleyway along Jalan Penang, '),
(7, 'New Lane Centre ', 'restaurant1.jpg', 'Penang is known throughout Malaysia as the food capital of the country with some of the best hawker centres available right in the heart of Georgetown. While Gurney Drive is the most tourist frequented area for hawker specialties, locals love New Lane Hawker Centre. Taking place along Lorong Baru, it all starts out at 16:00 when the street comes alive with hawkers setting up along the avenue. The road closes down to traffic, and colourful plastic tables and chairs are placed out in front of individual stalls. Almost everything is good here â€“ if you like spicy food we suggest char kway teow (stir-fried flat rice noodles), which come with lashings of cockles, fat and juicy prawns, and bean sprouts.'),
(8, 'Macalister Mansion ', 'restaurant3.jpg', 'Macalister Mansion â€“ a five-star boutique hotel, fine-dining restaurant, cafe, wine lounge, and cigar den combo â€“ is a subtle tribute to Penangâ€™s rich colonial past and its colourful present. Resembling the Great Gatsbyâ€™s mansion, the extensively-repurposed manor is the first Malaysian member of Design Hotel and was named after Colonel Norman Macalister, British Governor of Penang from 1808 to 1810. When it comes to food Macalister Mansion does not disappoint, whether you are looking for a full course meal or just light snacks. The kitchen at the Dining Room is headed by Chef Lance Uâ€™ren (trained in a Michelin-starred restaurant) and his menu of French haute cuisine (which changes every two months) is just so tasty.'),
(9, 'Feringgi Grill Restaurant ', 'restaurant5.jpg', 'Feringgi Grill at Shangri La Rasa Rayang Resort & Spa is a fine dining restaurant that proves Penang is not without sophisticated establishments. Providing more than just good food, its ultra luxe ambiance as well as friendly, unobtrusive service makes this a memorable experience to share with family or friends. Set in Shangri La Rasa Rayang Resort & Spa, this seasoned heavyweight puts out a menu of fusion cuisine that does not disappoint, with the kitchen headed by the talented Chef Matthias Tretbar, a well known name in the local culinary scene.'),
(10, 'Golden Thai Seafood Village ', 'restaurant6.jpg', 'Always packed to the brim with hoardes of tourists, Golden Thai Seafood Village is marked by sharp, pointed roofs reminiscent of traditional Malay houses over reddish-brown wooden exterior. Serving seafood of every imaginable variety straight from the tanks, from fish to crustaceans, the restaurant has an extensive a la carte menu with a variety of cooking styles. Thereâ€™s also a stage for cultural shows to accompany your dinner.'),
(11, 'Gurney Food Court', 'restaurant4.jpg', 'Vastly gaining popularity over the years, the New Gurney Drive Food Court has taken over the original Gurney Drive Food Court as the new premier place for hawker fare. Populated by stalls selling all sorts of hawker delights from giant cuttlefish to wan tan mee, the food court is divided into two sections â€“ a Halal section and a non-Halal section (the latter offering mainly Chinese cuisine). Open only in the evening from 6, this open-air food court is always teeming with people regardless of whether it is a weekday or a weekend.'),
(12, '1885 Restaurant ', 'restaurant7.jpg', 'Set in the Eastern & Oriental Hotel, the award-winning 1885 is a fine-dining restaurant with a kitchen serving classic yet contemporary western food in a timelessly-elegant English-like setting. Its decor of white linen cloth-covered tables, Victorian-era furniture, stately grand piano and soft lighting from crystal chandeliers makes for a pretty special dining experience.   This restaurant is something special from among Penangâ€™s array of food offerings, and the food is certainly creative. Dishes like crÃ¨me of mushroom soup, rich lobster bisque with spiced dhal emulsion and juicy baked wagyu fillet mignon are done well enough, but it is the pan-grilled cod fish that steals the show.'),
(13, 'Restoran Sup Hameed', 'restaurant8.jpg', 'If you are looking for a place that serves nasi kandar that straddles the fine line between fiery spiciness and rich taste, we recommend Restoran Sup Hameed Nasi Kandar. The restaurant serves the usual nasi kandar dishes like sotong sambal (squid in spicy gravy), mutton and fish curry, and beef and chicken gravy but it is their huge selection of vegetables that has us impressed. We love the French beans sautÃ©ed in a light soy sauce, fried egg, onions and garlic, steamed lady fingers and the curried mixed vegetables. But these are generally pretty spicy dishes; for those who canâ€™t handle peppery food we highly recommend a plate of their steamed rice drizzled with the rich, coconut-based green-grey kurma gravy, with honey chicken and crunchy cabbage and carrots on the side'),
(14, 'Kayu Nasi Kandar', '060920103066.jpg', 'Original Kayu Nasi Kandar started out with a stall at a coffee shop in SS2 Chow Yang here back in 1974 and grew to become one of the most popular â€œMamakâ€ restaurants in Klang Valley and Penang. Today, from the little stall around the corner, many such eateries have envolved into much bigger establishments with some owning chains of restaurants that carry same name. Original Kayu Nasi Kandar is one those that made it to the A-list.'),
(15, 'Batu Lanchang Food Court', 'IMG_2187_resize.jpg', 'Batu Lanchang Food Court is a great local favorite for lunch and teatime. There is a wide variety of hawker food available from the 50 stalls in this food court. We sampled a colorful bowl of Ice Kacang (Ais Batu Campur) with fine shaved ice, syrups, ice cream, red beans, sweet corn, cincau (grass jelly) served topped drizzled with milk. Another good choice is a glass of cooling sugar cane juice.');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `shopping_id` int(100) NOT NULL,
  `shopping_name` varchar(255) NOT NULL,
  `shopping_image` text NOT NULL,
  `shopping_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`shopping_id`, `shopping_name`, `shopping_image`, `shopping_desc`) VALUES
(4, 'Batu Ferringhi Night Market ', 'shopping2.jpg', 'Perfect for travellers looking for variety, the Batu Ferringhi Night Market is an extensive one, stretching up to one kilometre and providing shoppers with more than 100 stalls. Easily topping our list of 5 Great Penang Markets, they retail everything from clothes in batik prints or sporting in-style fads (like pyjamas with Frozen cartoon character stitches), to homeware items like decorative lacquer plates and embroidered pillow cases and even handcrafted, one-of-a-kind bejewelled accessories. Open from as early as 18:00 daily, our favourite stall here is operated by underground designers The Odd, who sell cool pop art of famous figures.'),
(5, 'Little Penang Street Market ', 'shopping5.jpg', 'The ultra cool Little Penang Street Market is a monthly bazaar that takes place along Upper Penang Road every last Sunday of the month from 10:00 â€“ 17:00. A non-profit community venture operated voluntarily by locals, under the aegis of the Penang Arts Council, this lively and diverse market can only be described as culturally hip. Largely frequented by the islandâ€™s young, urban crowd, the focus of this market is to support small, local businesses and artists, so most spaces are allocated for up-and-coming vendors. They sell personally-sourced antiques, homemade jewellery, homeware and food. The market also has designated spots for hourly book readings, and traditional music and dance performances.'),
(6, 'Prangin Mall ', 'shopping6.jpg', 'Adjacent to KOMTAR, Prangin Mall is Georgetownâ€™s largest shopping mall. Another bargain hunterâ€™s paradise, in similar vein to KOMTAR, it has quite a collection of local clothing boutiques. Prices for apparel rarely go beyond the RM50 mark â€“ we bought three pretty peplum dresses from one of its boutiques for only RM20 each. Whatâ€™s more, the five-storey complex also has as its anchor tenant, Singapore department store, Parkson, plus book store chain Popular. Food and drinks-wise, the mall does not disappoint with more than 25 restaurants, ranging from fast food chains like MacDonaldâ€™s to local cafes selling Malay favourites like nasi lemak and chee cheong fun.'),
(7, 'Penang Times Square ', 'shopping10.jpg', 'Penangâ€™s shopping scene has come a long way in recent years, and it is no longer passed off as just a â€˜big-food-and-beach-stateâ€™. It has particularly come into its own in the area of retail therapy, with more than four major malls within a one-km radius of each other. Seasoned budget fashionistas head for Penang Times Square when searching for one-of-a-kind selections to help them stand out: though there are not that many stores open here, the ones that are in operation offer some pretty good deals, particularly when it comes to apparel and shoes. In fact we found a structured peplum dress for only RM30 â€“ a real bargain.  '),
(8, 'Straits Quay Mall ', 'shoppin11.jpg', 'Sitting on reclaimed land, the newly opened Straits Quay is a behemoth complex that plays host to a host of shopping and entertainment venues. Developed by the same folks of the grandiose Eastern & Oriental Hotel, international retail names sit beside local brands here but itâ€™s the variety of F&B outlets that will tickle your fancy. For that perfect Guinness pint head to Weissbrau German Bar and Bistro or stop over at Finneganâ€™s Irish Pub & Restaurant â€“ winner of the 2010 Best Pub Grub at Time Out Kuala Lumpurâ€™s Food Awards.'),
(9, 'Auto-City', 'shoppin12.jpg', 'AUTO-CITY is billed as one of the islandâ€™s foremost modern tourist destinations. It is a one-stop complex for shopping venues, F&B outlets (including BED, one of Penangâ€™s most popular clubs) and houses more than 30 brands of automobiles. A favourite outdoor event venue for concerts, road shows, carnivals, exhibitions and more, besides the smorgasbord of F&B venues offering local and international fare and shopping opportunities, there are plenty of banks here, making it a commercial hub in Penang. At night its array of al fresco restaurants and bars ensures its popularity.'),
(10, '1st Avenue Mall ', 'shopping13.jpg', 'Set beside Prangin Mall and KOMTAR on Jalan Magazine, the seven-storey 1st Avenue Mall is one of the flashier additions to Penangâ€™s retail landscape. Opened in 2010, it is a bright and clean complex with a range of high-end international marques such as Coach and Victoriaâ€™s Secret, as well as affordable mid-range labels like H&M, Cotton On and Sketchers. Its shopping venues are not the only reason to visit â€“ there is also a bowling alley, movie theatre, karaoke lounge, snooker centre and internet cafe â€“ plus, food-wise, visitors have a choice of over 20 restaurants and cafes.'),
(11, 'Chowrasta Bazaar ', 'shopping14.jpg', 'Chowrasta Market is perhaps Penangâ€™s most well-known daily market. More than a century old, the dry market area downstairs (thereâ€™s also a wet market at the back selling fresh seafood) sells all sorts of popular local delicacies such as fresh nutmegs, preserved fruits and the classic Ghee Hiang biscuits. The foodstuff sold here are said to be cheaper than anywhere else in Penang. Located one level up on the first floor is a much-loved second-hand bookseller where you can purchase used copies of favourite reads at a fraction of the original price.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`attraction_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_name`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`shopping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `attraction_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `shopping_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
