-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 10:03 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penang`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_comments` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_comments`) VALUES
(11, 'tom', 'tom@gmail.com ', 'hii admin...Can you tell to me what kind of room offered in hotel equotorial'),
(14, 'john', 'john@gmail.com ', 'hi admin, can i know what is the best price hotel in penang'),
(15, 'tommy', 'tommy@gmail.com ', 'can i book the hotels from here');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `hotel_id` int(100) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_image` text NOT NULL,
  `hotel_desc` text NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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
(19, 'Bayview Beach Resort Penang', 'bayview-georgetown.jpg', 'IT is a very luxurious hotel'),
(20, 'Hard Rock Hotel Penang Penang', 'shopping13.jpg', 'It is a good and luxury hotel');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int(100) NOT NULL AUTO_INCREMENT,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_image` text NOT NULL,
  `restaurant_desc` text NOT NULL,
  PRIMARY KEY (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(13, 'Restoran Sup Hameed', 'restaurant8.jpg', 'If you are looking for a place that serves nasi kandar that straddles the fine line between fiery spiciness and rich taste, we recommend Restoran Sup Hameed Nasi Kandar. The restaurant serves the usual nasi kandar dishes like sotong sambal (squid in spicy gravy), mutton and fish curry, and beef and chicken gravy but it is their huge selection of vegetables that has us impressed. We love the French beans sautÃ©ed in a light soy sauce, fried egg, onions and garlic, steamed lady fingers and the curried mixed vegetables. But these are generally pretty spicy dishes; for those who canâ€™t handle peppery food we highly recommend a plate of their steamed rice drizzled with the rich, coconut-based green-grey kurma gravy, with honey chicken and crunchy cabbage and carrots on the side');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `shopping_id` int(100) NOT NULL AUTO_INCREMENT,
  `shopping_name` varchar(255) NOT NULL,
  `shopping_image` text NOT NULL,
  `shopping_desc` text NOT NULL,
  PRIMARY KEY (`shopping_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
