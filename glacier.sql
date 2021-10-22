-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 02:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glacier`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` varchar(12) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `genre` char(3) NOT NULL DEFAULT '',
  `developer` varchar(200) NOT NULL DEFAULT '',
  `publisher` varchar(50) NOT NULL DEFAULT '',
  `year` int(11) NOT NULL DEFAULT '0',
  `summary` longtext NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `discount` double NOT NULL DEFAULT '0', -- in percent
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `title`, `price`, `genre`, `developer`, `publisher`, `year`, `summary`, `rating`, `discount`) VALUES 
('GMS00001','Monster Hunter World','499999','Hunting','CAPCOM CO., Ltd.','CAPCOM CO., Ltd.','2001','Welcome to a new world! In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.','6.5','34'),
('GMS00002','PLAYERUNKNOWNS BATTLEGROUNDS','219999','G01','PUBG Corporation','PUBG Corporation','2001','PLAYERUNKNOWN’S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other in a struggle for survival. Gather supplies and outwit your opponents to become the last person standing. ','4.9','33'),
('GMS00003','RESIDENT EVIL 2 / BIOHAZARD RE:2','499999','G01','CAPCOM Co., Ltd.','CAPCOM Co., Ltd.','2001','A deadly virus engulfs the residents of Raccoon City in September of 1998, plunging the city into chaos as flesh eating zombies roam the streets for survivors. An unparalleled adrenaline rush, gripping storyline, and unimaginable horrors await you. Witness the return of Resident Evil 2. ','0','0'),
('GMS00004','Steep™','459000','G01','Ubisoft Annecy, Ubisoft Montpellier, Ubisoft Kiev','Ubisoft','2001','Ride a massive open world across the Alps, where the powder is always fresh and the run never ends. Defy and master the mountain alone or with friends on skis, wingsuits, snowboards and paragliders. Record and share your best stunts. ','7.4','60'),
('GMS00005','Grand Theft Auto V','290000','G01','Rockstar North','Rockstar Games','2001','Los Santos is a city of bright lights, long nights and dirty secrets, and they don’t come brighter, longer or dirtier than in GTA Online: After Hours. The party starts now. ','6.9','50'),
('GMS00006','Rocket League®','135999','G01','Psyonix, Inc.','Psyonix, Inc.','2001','Soccer meets driving once again in the long-awaited, physics-based multiplayer-focused sequel to Supersonic Acrobatic Rocket-Powered Battle-Cars! Choose a variety of high-flying vehicles equipped with huge rocket boosters to score amazing aerial goals and pull-off incredible game-changing saves! ','9.2','50'),
('GMS00007','Yakuza Kiwami','260000','G01','SEGA','SEGA','2001','SEGA’s critically-acclaimed entry that started a legend. Become Kazuma Kiryu, an up-and-coming yakuza who takes the fall for the murder of a crime boss, only to emerge from prison ten years later to a changed world. Remastered from the ground up, now in 4K and uncapped framerates on PC. ','0','10'),
('GMS00008','The Forest','108999','G01','Endnight Games Ltd','Endnight Games Ltd','2001','As the lone survivor of a passenger jet crash, you find yourself in a mysterious forest battling to stay alive against a society of cannibalistic mutants. Build, explore, survive in this terrifying first person survival horror simulator. ','9.2','0'),
('GMS00009','Tom Clancy’s Rainbow Six® Siege','170000','G01','Ubisoft Montreal	','Ubisoft','2001','Tom Clancy’s Rainbow Six Siege is the latest installment of the acclaimed first-person shooter franchise developed by the renowned Ubisoft Montreal studio. ','8.0','0'),
('GMS00010','NBA 2K19','620000','G01','Visual Concepts','2K','2001','NBA 2K celebrates 20 years of redefining what sports gaming can be. NBA 2K19 continues to push limits as it brings gaming one step closer to real-life basketball excitement and culture.','28','0'),
('GMS00011','Dead by Daylight','135999','G01','Behaviour Digital Inc.','Behaviour Digital Inc.','2001','Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught and killed. ','7.7','66'),
('GMS00012','Frostpunk','139999','G01','11 bit studios','11 bit studios','2001','Frostpunk is the first society survival game. As the ruler of the last city on Earth, it is your duty to manage both its citizens and its infrastructure. What decisions will you make to ensure your society’s survival? What will you do when pushed to breaking point? Who will you become in the process? ','8.7','0'),
('GMS00013','Metro Exodus','680000','G01','4A Games','Deep Silver','2001','Flee the shattered ruins of the Moscow Metro and embark on an epic, continent-spanning journey across the post-apocalyptic Russian wilderness. Explore vast, non-linear levels, lose yourself in an immersive, sandbox survival experience, and follow a thrilling story-line that spans an entire year in the ','0','0'),
('GMS00014','Rust','159999','G01','Facepunch Studios','Facepunch Studios','2001','The only aim in Rust is to survive. To do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players, and kill them for meat. Create alliances with other players and form a town. Do whatever it takes to survive. ','8.0','50'),
('GMS00015','DARK SOULS™ III','587000','G01','FromSoftware, Inc.','FromSoftware, Inc., BANDAI NAMCO Entertainment','2001','Dark Souls continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The Darkness! ','9.0','75'),
('GMS00016','DARK SOULS™: REMASTERED','420000','G01','QLOC','FromSoftware, Inc, BANDAI NAMCO En6.6','2001','Then, there was fire. Re-experience the critically acclaimed, genre-defining game that started it all. Beautifully remastered, return to Lordran in stunning high-definition detail running at 60fps. ','7.6','0'),
('GMS00017','DARK SOULS™ II: Scholar of the First Sin','340000','G01','FromSoftware, Inc','BANDAI NAMCO Entertainment, FromSoftware, Inc','2001','DARK SOULS™ II: Scholar of the First Sin brings the franchise’s renowned obscurity & gripping gameplay to a new level. Join the dark journey and experience overwhelming enemy encounters, diabolical hazards, and unrelenting challenge. ','86','75'),
('GMS00018','The Elder Scrolls V: Skyrim Special Edition','532000','G01','Bethesda Game Studios	','Bethesda Softworks	','2001','Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays, dynamic depth of field, screen-space','8.2','0'),
('GMS00019','The Elder Scrolls V: Skyrim VR','799000','G01','Bethesda Game Studios','Bethesda Softworks','2001','A true, full-length open-world game for VR has arrived from Bethesda Game Studios. Skyrim VR reimagines the complete epic fantasy masterpiece with an unparalleled sense of scale, depth, and immersion. Skyrim VR also includes all official add-ons. ','8.2','0'),
('GMS00020','The Elder Scrolls® Online','266000','G01','Zenimax Online Studios	','Bethesda Softworks','2001','Join over 10 million players in the award-winning online multiplayer RPG and experience limitless adventure in a persistent Elder Scrolls world. Battle, craft, steal, or explore, and combine different types of equipment and abilities to create your own style of play. No game subscription required. ','7.6','50'),
('GMS00021','Fallout 4','400000','G01','Bethesda Game Studios','Bethesda Softworks','2001','Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming. ','7.0','50'),
('GMS00022','Fallout 4 VR','799000','G01','Bethesda Game Studios','Bethesda Softworks','2001','Fallout 4, the legendary post-apocalyptic adventure from Bethesda Game Studios and winner of more than 200 ‘Best Of’ awards, including the DICE and BAFTA Game of the Year, comes in its entirety to VR. ','7.1','0'),
('GMS00023','Fallout 3: Game of the Year Edition','135999','G01','Bethesda Game Studios','Bethesda Softworks','2001','Prepare for the Future™ With Fallout 3: Game of the Year Edition, experience the most acclaimed game of 2008 like never before. Create a character of your choosing and descend into an awe-inspiring, post-apocalyptic world where every minute is a fight for survival. ','7.9','75'),
('GMS00024','Fallout: New Vega','89999','G01','Obsidian Entertainment','Bethesda Softworks','2001','Welcome to Vegas. New Vegas. Enjoy your stay!','9.5','50'),
('GMS00025','Far Cry® 5','689000','G01','Ubisoft Montreal, Red Storm, Ubisoft Shanghai, Ubisoft Toronto, Ubisoft Kiev','Ubisoft','2001','Welcome to Hope County, Montana, home to a fanatical doomsday cult known as Eden’s Gate. Stand up to cult leader Joseph Seed & his siblings, the Heralds, to spark the fires of resistance & liberate the besieged community. ','6.7','50'),
('GMS00026','Far Cry® Primal','575000','G01','Ubisoft','Ubisoft','2001','The award-winning Far Cry franchise returns with its innovative open world gameplay, bringing together massive beasts, breathtaking environments, and unpredictable savage encounters. Welcome to the Stone Age, a time of danger and adventure. ','7.6','0'),
('GMS00027','Far Cry® 4','345000','G01','Ubisoft Montreal, Red Storm, Shanghai, Toronto, Kiev','Ubisoft','2001','Hidden in the towering Himalayas lies Kyrat, a country steeped in tradition and violence. You are Ajay Ghale. Traveling to Kyrat to fulfill your mother’s dying wish, you find yourself caught up in a civil war to overthrow the oppressive regime of dictator Pagan Min. ','7.7','50'),
('GMS00028','Far Cry 3','229000','G01','Ubisoft Montreal','Ubisoft','2001','Discover the dark secrets of a lawless island ruled by violence and take the fight to the enemy as you try to escape. You’ll need more than luck to escape alive!','8.8','0'),
('GMS00029','Far Cry 3 - Blood Dragon','170000','Open World','Ubisoft Montreal, Massive Entertainment, and Ubisoft Shanghai','Ubisoft','2001','Far Cry® 3: Blood Dragon is THE Kick-Ass Cyber Shooter.Welcome to an 80’s vision of the future. The year is 2007 and you are Sargent Rex Colt, a Mark IV Cyber Commando. Your mission: get the girl, kill the baddies, and save the world. ','8.8','75'),
('GMS00030','Far Cry® 2: Fortune’s Edition','115000','G01','Ubisoft Montreal','Ubisoft','2001','You are a gun for hire, trapped in a war-torn African state, stricken with malaria and forced to make deals with corrupt warlords on both sides of the conflict in order to make this country your home. You must identify and exploit your enemies’ weaknesses, neutralizing their superior numbers and firepower with','7.4','80'),
('GMS00031','Cultist Simulator','108999','G01','Weather Factory','Humble Bundle','2001','Seize forbidden treasures. Summon alien gods. Feed on your disciples.Cultist Simulator is a game of apocalypse and yearning from Alexis Kennedy, creator of Fallen London and Sunless Sea. Play as a seeker after unholy mysteries, in a 1920s-themed setting of hidden gods and secret histories. ','7.7','25'),
('GMS00032','Thief Simulator','108999','G01','Noble Muffins','PlayWay S.A.','2001','Become the best thief. Gather intel, steal things and sell them to buy hi-tech equipment. Do everything that a real thief does. ','7.8','0'),
('GMS00033','Artifact','299999','G01','Valve','Valve','2001','A collaboration between legendary game designer Richard Garfield and Valve, Artifact offers the deepest gameplay and the highest-fidelity experience ever seen in a trading card game. ','5.2','0'),
('GMS00034','Thief','214999','G01','Eidos-Montréal, Feral Interactive (Mac)','Square Enix, Feral Interactive (Mac)','2001','Garrett, the Master Thief, steps out of the shadows into the City. In this treacherous place, where the Baron’s Watch spreads a rising tide of fear and oppression, his skills are the only things he can trust. Even the most cautious citizens and their best-guarded possessions are not safe from his reach.','7.0','50'),
('GMS00035','PC Building Simulator','108999','G01','Claudiu Kiss, The Irregular Corporation','The Irregular Corporation','2001','Build and grow your very own computer repair enterprise as you learn to diagnose, fix and build PCs. With real-world licensed components and comprehensive hardware and software simulation, you can plan and bring your ultimate PC to life. ','8.9','25'),
('GMS00036','Heroes of Might & Magic V','115000','G01','Nival','Ubisoft','2001','Witness the amazing evolution of the genre-defining strategy game as it becomes a next-generation phenomenon, melding classic deep fantasy with next-generation visuals and gameplay. In the renowned Might & Magic universe, demon swarms spread chaos over the land in a relentless assault. ','8.7','90'),
('GMS00037','Might and Magic: Heroes VII – Trial by Fire','345000','G01','Limbic Entertainment','Ubisoft','2001','Five years after the epic events of Might & Magic Heroes VII, lead the new Fortress faction to define the destiny of the Dwarves and shed light on some of the darkest chapters of their history. ','5.1','66'),
('GMS00038','Plant Tycoon','89999','G01','Last Day of Work','Last Day of Work','2001','Plant Tycoon is a gardening sim game where you nurture plants and experiment with increasingly rare and valuable species. The object is to breed and cross breed plants until you find the 6 Magic Plants of Isola and solve the genetic puzzle. You start with a couple of dollars, a handful of seeds, some soil and ','8.5','0'),
('GMS00039','Insaniquarium Deluxe','45999','G01','PopCap Games, Inc.','PopCap Games, Inc.','2001','','9.5','80'),
('GMS00040','Plants vs. Zombies GOTY Edition','45999','G01','PopCap Games, Inc.','PopCap Games, Inc.','2001','Zombies are invading your home, and the only defense is your arsenal of plants! Armed with an alien nursery-worth of zombie-zapping plants like peashooters and cherry bombs, you’ll need to think fast and plant faster to stop dozens of types of zombies dead in their tracks. ','9.7','80'),
('GMS00041','Watch_Dogs™','345000','G01','Ubisoft','Ubisoft','2001','In today’s hyper-connected world, Chicago operates under ctOS, the most advanced computer network in America. ','6.6','66'),
('GMS00042','Watch_Dogs® 2','689000','G01','Ubisoft','Ubisoft','2001','Welcome to San Francisco. Play as Marcus, a brilliant young hacker, and join the most notorious hacker group, DedSec. Your objective: execute the biggest hack of history. ','7.9','66'),
('GMS00043','The Crew™','345000','G01','Ivory Tower in collaboration with Ubisoft Reflections','Ubisoft','2001','The Crew is a revolutionary action-driving MMO, developed exclusively for next-gen consoles and high-end PCs that leverage new hardware capabilities to connect players online like never before. The Crew takes you and your friends on a wild ride across a massive, open-world recreation of the United States ','6.6','50'),
('GMS00044','The Crew™ 2','689000','G01','Ubisoft','Racing Open World Driving Multiplayer Action','2001','Take on the American motorsports scene as you explore and dominate the land, air, and sea across the entire USA. With a wide variety of cars, bikes, boats, and planes, compete in a wide range of driving disciplines. ','5.4','50'),
('GMS00045','Car Mechanic Simulator 2018','135999','G01','Red Dot Games','PlayWay S.A.','2001','Build and expand your repair service empire in this incredibly detailed and highly realistic simulation game, where attention to car detail is astonishing. Find classic, unique cars in the new Barn Find module and Junkyard module. You can even add your self-made car in the Car Editor. ','7.6','25'),
('GMS00046','Tom Clancy’s The Division™','575000','G01','Massive Entertainment','Ubisoft','2001','After a deadly pandemic sweeps through New York, it’s up to Agents to save what remains. Complete missions, explore the Dark Zone, and fight back enemy factions alone or with 3 friends. Experience a full endgame offering you new PvP and PvE modes. ','6.7','85'),
('GMS00047','Tom Clancy’s Ghost Recon® Wildlands','575000','G01','Ubisoft Paris, Ubisoft Annecy, Ubisoft Bucharest, Ubisoft Montpellier, Ubisoft Milan, Reflections, Ubisoft Belgrade','Ubisoft','2001','Create a team with up to 3 friends in Tom Clancy’s Ghost Recon® Wildlands and enjoy the ultimate military shooter experience set in a massive, dangerous, and responsive open world. ','7.4','50'),
('GMS00048','ARK: Survival Evolved','209999','G01','Studio Wildcard, Instinct Games, Efecto Studios, Virtual Basement LLC','Studio Wildcard','2001','Stranded on the shores of a mysterious island, you must learn to survive. Use your cunning to kill or tame the primeval creatures roaming the land, and encounter other players to survive, dominate... and escape! ','6.9','33'),
('GMS00049','ARK: Survival of the Fittest','209999','G01','Studio Wildcard, Instinct Games, Efecto Studios, Virtual Basement LLC','Studio Wildcard','2001','ARK: Survival of the Fittest is a Multiplayer Online Survival Arena (MOSA) game that pits as many as 72 combatants against one another in the struggle for survival in a harsh, changing environment packed with deadly creatures, “Evolution Events,” and other players. ','6.3','75'),
('GMS00050','Jurassic World Evolution','749999','G01','Frontier Developments','Frontier Developments','2001','Place yourself at the heart of the Jurassic franchise and build your own Jurassic World. Bioengineer dinosaurs that think, feel and react intelligently to the world around them and face threats posed by espionage, breakouts and devastating tropical storms in an uncertain world where life always finds a way. ','7.1','65'),
('GMS00051','Planet Coaster','582095','G01','Frontier Developments','Frontier Developments','2001','Planet Coaster® - the future of coaster park simulation games has arrived! Surprise, delight and thrill incredible crowds as you build your coaster park empire - let your imagination run wild, and share your success with the world. ','8.8','33'),
('GMS00052','South Park™: The Stick of Truth™','345000','G01','Obsidian Entertainment','Ubisoft','2001','From the perilous battlefields of the fourth-grade playground, a young hero will rise, destined to be South Park’s savior. From the creators of South Park, Trey Parker and Matt Stone, comes an epic quest to become… cool. Introducing South Park™: The Stick of Truth™.For a thousand years, the battle ','9.7','75'),
('GMS00053','South Park™: The Fractured But Whole™','689000','G01','Ubisoft San Francisco','Ubisoft','2001','From the creators of South Park, Trey Parker and Matt Stone, comes South Park: The Fractured But Whole, a sequel to 2014’s award-winning South Park: The Stick of Truth. ','7.0','66'),
('GMS00054','Mortal Kombat X','135999','G01','NetherRealm Studios, High Voltage Software','Warner Bros. Interactive Entertainment','2001','Experience the Next Generation of the #1 Fighting Franchise. Mortal Kombat X combines unparalleled, cinematic presentation with all new gameplay. ','7.6','75'),
('GMS00055','Mortal Kombat 11','689000','G01','NetherRealm Studios, QLOC, Shiver','Warner Bros Interactive Entertainment','2001','Mortal Kombat is back and better than ever in the next evolution of the iconic franchise. ','0','0'),
('GMS00056','TEKKEN 7','420000','G01','BANDAI NAMCO Studios Inc.','BANDAI NAMCO Entertainment','2001','Discover the epic conclusion of the long-time clan warfare between members of the Mishima family. Powered by Unreal Engine 4, the legendary fighting game franchise fights back with stunning story-driven cinematic battles and intense duels that can be enjoyed with friends and rivals.','8.2','0'),
('GMS00057','Street Fighter V','159999','G01','Capcom','Capcom','2001','Experience the intensity of head-to-head battles with Street Fighter® V! Choose from 16 iconic characters, then battle against friends online or offline with a robust variety of match options. ','5.3','50'),
('GMS00058','Injustice: Gods Among Us Ultimate Edition','135999','G01','NetherRealm Studios, High Voltage Software','Warner Bros. Interactive Entertainment','2001','Injustice: Gods Among Us Ultimate Edition enhances the bold new franchise to the fighting game genre from NetherRealm Studios. Featuring six new playable characters, over 30 new skins, and 60 new S.T.A.R. Labs missions, this edition packs a punch. ','8.5','66'),
('GMS00059','Injustice™ 2','209999','G01','NetherRealm Studios, QLOC','WB Games','2001','Build and power up the ultimate version of your favourite DC legends in INJUSTICE 2. This is your Legend. Your Journey. Your Injustice. ','7.9','50'),
('GMS00060','Marvel vs. Capcom: Infinite','319999','G01','Capcom','Capcom','2001','The epic clash between two storied universes returns with Marvel vs. Capcom: Infinite. Ultron Sigma has begun the eradication of all biological life. Against all odds, heroes stand together against the ultimate threat, their only hope laying with the all-powerful Infinity Stones. ','5.7','25'),
('GMS00061','Assassin’s Creed® Odyssey','689000','G01','Ubisoft Quebec, Ubisoft Montreal, Ubisoft Bucharest, Ubisoft Singapore, Ubisoft Montpellier, Ubisoft Kiev, Ubisoft Shanghai','Ubisoft','2001','Choose your fate in Assassin’s Creed® Odyssey. From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece. ','8.3','50'),
('GMS00062','Assassin’s Creed® Origins','689000','G01','Ubisoft Montreal','Ubisoft','2001','ASSASSIN’S CREED® ORIGINS IS A NEW BEGINNING *The Discovery Tour by Assassin’s Creed®: Ancient Egypt is available now as a free update!* Ancient Egypt, a land of majesty and intrigue, is disappearing in a ruthless fight for power.','8.3','50'),
('GMS00063','Assassin’s Creed® Chronicles: Russia','115000','G01','Climax Studios','Ubisoft Entertainment','2001','Join Nikolaï Orelov in his search for redemption as you journey through an iconic, propaganda art style Russia in 2.5D gameplay. • Survive the aftermath of October Revolution & travel accross Russia. • Experience the thrill of being a stealthy Assassin in an exclusive modern setting. ','6.2','85'),
('GMS00064','Assassin’s Creed® Chronicles: India','115000','G01','Climax Studios','Ubisoft Entertainment','2001','Embody Arbaaz in his quest for retribution through a colourful depiction of Colonial India in 2.5D stealth gameplay. • Travel across an amazing 19th Century India and its legendary landmarks. • Experience the thrill of a stealthy assassin with a unique set of skills and weapons such as the double kill moves and the ','6.5','85'),
('GMS00065','Assassin’s Creed® Syndicate','459000','G01','Ubisoft Quebec, in collaboration with Ubisoft Annecy, Bucharest, Kiev, Montreal, Montpellier, Shanghai, Singapore, Sofia, Toronto studios','Ubisoft','2001','London, 1868. In the heart of the Industrial Revolution, lead your underworld organization and grow your influence to fight those who exploit the less privileged in the name of... ','7.4','50'),
('GMS00066','Assassin’s Creed® Chronicles: China','115000','G01','Climax Studios','Ubisoft Entertainment','2001','The first entry in the Assassin’s Creed Chronicles saga takes place in China, 1526, as the Ming dynasty starts to crumble. You embody Shao Jun, the last remaining Assassin of the Chinese Brotherhood, returning to her homeland with a vendetta. ','7.3','85'),
('GMS00067','Assassin’s Creed® Rogue','229000','G01','Ubisoft','Open World Assassin Action Parkour Stealth','2001','Introducing Assassin’s Creed® Rogue, the darkest chapter in the Assassin’s Creed franchise yet. As Shay, you will experience the slow transformation from Assassin to Assassin Hunter. Follow your own creed and set off on an extraordinary journey through New York City, the wild river valley, and far away to ','8.0','50'),
('GMS00068','Assassin’s Creed® Unity','345000','G01','Ubisoft','Ubisoft','2001','Assassin’s Creed® Unity tells the story of Arno, a young man who embarks upon an extraordinary journey to expose the true powers behind the French Revolution. In the brand new co-op mode, you and your friends will also be thrown in the middle of a ruthless struggle for the fate of a nation.','5.9','50'),
('GMS00069','Assassin’s Creed Freedom Cry','170000','G01','Ubisoft Montreal','Ubisoft','2001','Play as Adewale, an ex-slave turned Assassin fighting for freedom with the help of his own Pirate crew. ','7.4','66'),
('GMS00070','Assassin’s Creed® Liberation HD','229000','G01','Ubisoft Sofia','Ubisoft','2001','Introducing Assassin’s Creed® Liberation HD, the striking chapter of the pre-American Revolution Assassin’s Creed saga which arrives for the first time on HD consoles and PC. With improved gameplay, a deeper story, and HD graphics, Liberation is an immersive and full Assassin’s Creed experience.The','5.6','50'),
('GMS00071','Mafia 3','400000','G01','Hangar 13, Aspyr (Mac)','2K, Aspyr (Mac)','2001','It’s 1968 and after years of combat in Vietnam, Lincoln Clay knows this truth: family isn’t who you’re born with, it’s who you die for.','4.8','50'),
('GMS00072','Arma 3','499999','G01','Bohemia Interactive','Bohemia Interactive','2001','Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. Authentic, diverse, open - Arma 3 sends you to war.','8.9','0'),
('GMS00073','The Witcher 3: Wild Hunt','359999','G01','CD PROJEKT RED','CD PROJEKT RED','2001','As war rages on throughout the Northern Realms, you take on the greatest contract of your life — tracking down the Child of Prophecy, a living weapon that can alter the shape of the world. ','9.7','75'),
('GMS00074','No Man’s Sky','249999','G01','Hello Games','Hello Games','2001','No Man’s Sky is a game about exploration and survival in an infinite procedurally generated universe.','5.0','50'),
('GMS00075','Depth','108999','G01','Digital Confectioners','Digital Confectioners','2001','Play as a shark or a diver in a dark aquatic world and overcome your enemies by employing cunning, teamwork, and stealth. Depth blends tension and visceral action as you team up against AI or be matched with other players in heart pounding combat.','8.8','75'),
('GMS00076','Subnautica','119999','G01','Unknown Worlds Entertainment','Unknown Worlds Entertainment','2001','Descend into the depths of an alien underwater world filled with wonder and peril. Craft equipment, pilot submarines and out-smart wildlife to explore lush coral reefs, volcanoes, cave systems, and more - all while trying to survive. ','9.4','50'),
('GMS00077','Don’t Starve Together','95999','G01','Klei Entertainment','Klei Entertainment','2001','Don’t Starve Together is the standalone multiplayer expansion of the uncompromising survival game Don’t Starve.','9.6','75'),
('GMS00078','NieR:Automata™','799000','G01','Square Enix','Square Enix','2001','NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines. ','8.4','50'),
('GMS00079','GOD EATER 3','675000','G01','Marvelous Inc.','BANDAI NAMCO Entertainment','2001','Set in a post-apocalyptic setting, it’s up to your special team of God Eaters to take down god-like monsters devastating the world. With an epic story, unique characters, and all new God Arcs and Aragami, the latest evolution in ACTION is here! ','0','0'),
('GMS00080','GOD EATER 2 Rage Burst','460000','G01','BANDAI NAMCO Studio, SHIFT, QLOC','BANDAI NAMCO Entertainment','2001','Swear your oath as a GOD EATER and drive back the supernatural harbingers of Earth’s destruction. Buy GOD EATER 2 Rage Burst and get GOD EATER Resurrection FOR...','80','75'),
('GMS00081','Dying Light','268800','G01','Techland','Techland Publishing','2001','Dying Light is a first-person, action survival game set in a vast open world. Roam a city devastated by a mysterious epidemic, scavenging for supplies and crafting weapons to help defeat the hordes of flesh-hungry enemies the plague has created. ','9.2','66'),
('GMS00082','FOR HONOR™','170000','G01','Ubisoft Montreal, Ubisoft Quebec, Ubisoft Toronto, Blue Byte','Ubisoft','2001','Carve a path of destruction through an intense, believable battlefield in For Honor. ','5.4','50'),
('GMS00083','Prison Architect','139999','G01','Introversion Software','Introversion Software','2001','Build and Manage A Maximum Security Prison. ','9.3','33'),
('GMS00084','Cities: Skylines','199999','G01','Colossal Order Ltd.','Paradox Interactive','2001','Cities: Skylines is a modern take on the classic city simulation. The game introduces new game play elements to realize the thrill and hardships of creating and maintaining a real city whilst expanding on some well-established tropes of the city building experience. ','9.1','75'),
('GMS00085','Firewatch','108999','G01','Campo Santo','Panic, Campo Santo','2001','Firewatch is a single-player first-person mystery set in the Wyoming wilderness, where your only emotional lifeline is the person on the other end of a handheld radio. ','8.5','75'),
('GMS00086','The Park','108999','G01','Funcom','Funcom','2001','Set in a creepy amusement park hiding a dark and sinister secret, The Park is a first-person psychological horror experience focused on exploration and storytelling','6.9','0'),
('GMS00087','Raft','135999','G01','Redbeet Interactive','Axolot Games','2001','Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks! ','7.8','50'),
('GMS00088','Garry’s Mod','89999','G01','Facepunch Studios','Valve','2001','Garry’s Mod is a physics sandbox. There aren’t any predefined aims or goals. We give you the tools and leave you to play. ','9.5','50'),
('GMS00089','Stardew Valley','115999','G01','ConcernedApe','ConcernedApe','2001','You’ve inherited your grandfather’s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home? ','9.6','25'),
('GMS00090','Overcooked! 2','119999','G01','Ghost Town Games Ltd., Team17 Digital Ltd','Team17 Digital Ltd','2001','Overcooked returns with a brand-new helping of chaotic cooking action! Journey back to the Onion Kingdom and assemble your team of chefs in classic couch co-op or online play for up to four players. Hold onto your aprons… it’s time to save the world again!','8.0','25'),
('GMS00091','Overcooked','139999','G01','Ghost Town Games Ltd.','Team17 Digital Ltd','2001','Overcooked is a chaotic couch co-op cooking game for one to four players. Working as a team, you and your fellow chefs must prepare, cook and serve up a variety of tasty orders before the baying customers storm out in a huff. ','9.1','33'),
('GMS00092','FINAL FANTASY XV WINDOWS EDITION','695000','G01','Square Enix','Square Enix','2001','Take the journey, now in ultimate quality. Boasting a wealth of bonus content and supporting ultra high-resolution graphical options and HDR 10, you can now enjoy the beautiful and carefully-crafted experience of FINAL FANTASY XV like never before. ','7.8','50'),
('GMS00093','DayZ','550000','G01','Bohemia Interactive','Bohemia Interactive','2001','The post-soviet country of Chernarus is struck by an unknown virus, turning the majority population into frenzied infected. Fighting over resources has bred a hostile mentality among survivors, driving what’s left of humanity to collapse. You are one of the few immune to the virus - how far will you go to survive? ','6.1','66'),
('GMS00094','Sid Meier’s Civilization® VI','600000','G01','Firaxis Games, Aspyr (Mac), Aspyr (Linux)','2K, Aspyr (Mac), Aspyr (Linux)','2001','Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history’s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England). ','6.8','75'),
('GMS00095','Sid Meier’s Civilization®: Beyond Earth™','413000','G01','Firaxis Games, Aspyr (Mac), Aspyr (Linux)','2K, Aspyr (Mac), Aspyr (Linux)','2001','Sid Meier’s Civilization: Beyond Earth is a new science-fiction-themed entry into the award winning Civilization series. As part of an expedition sent to find a home beyond Earth, lead your people into a new frontier, explore and colonize an alien planet and create a new civilization in space. ','5.3','75'),
('GMS00096','Sid Meier’s Civilization® V','199999','G01','Firaxis Games, Aspyr (Mac), Aspyr (Linux)','2K, Aspyr (Mac), Aspyr (Linux)','2001','Create, discover, and download new player-created maps, scenarios, interfaces, and more! ','9.5','75'),
('GMS00097','Sid Meier’s Civilization® IV','135999','G01','Firaxis Games','2K','2001','With over 6 million units sold and unprecedented critical acclaim from fans and press around the world, Sid Meier’s Civilization is recognized as one of the greatest PC game franchises of all-time. Now, Sid Meier and Firaxis Games will take this incredibly fun and addictive game to new heights by adding new ','9.1','90'),
('GMS00098','Just Cause 4','680000','G01','Avalanche Studios','Square Enix','2001','Rogue agent Rico Rodriguez journeys to Solis, a huge South American world home of conflict, oppression and extreme weather conditions. Strap into your wingsuit, equip your fully customizable grappling hook, and get ready to bring the thunder! ','3.4','34'),
('GMS00099','Just Cause™ 3','389999','G01','Avalanche Studios','Square Enix','2001','With over 1000 km² of complete freedom from sky to seabed, Rico Rodriguez returns to unleash chaos in the most creative and explosive ways imaginable.','7.3','85'),
('GMS00100','Just Cause 2','107299','G01','Avalanche Studios','Square Enix','2001','Dive into an adrenaline-fuelled free-roaming adventure with 400 square miles of rugged terrain and hundreds of weapons and vehicles. ','9.0','90');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `profile_number` bigint(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `level` int(11) NOT NULL,
  `wallet` int(8) NOT NULL,  
  PRIMARY KEY (`profile_number`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`profile_number`, `username`, `password`, `nama`, `email`, `phone`, `level`, `wallet`) VALUES
('70000000001','admin', 'admin', 'Administrator', 'jeremyksaputra@gmail.com','6281234567899', 0, 24000000),
('70000000002','jeremyjov', 'jerjov', 'Jeremy Jovianna Amien', 'kazokiokuren@gmail.com','6281234567899', 0, 15000000),
('70000000003','johannac', 'johanna', 'Johanna Christabella', 'johannachristabella@gmail.com','6281234567899', 0, 15000000),
('80000000001','glixonia', 'glixonia', 'Glixonia', 'glixonia@gmail.com','6281234567899', 1, 1500000),
('80000000002','johanna', 'johanna', 'Johanna', 'johanna@gmail.com','6281234567899', 1, 1500000),
('80000000003','jeremyk', 'jeremyk', 'Jeremy Kennedy', 'jeremyk@gmail.com','6281234567899', 1, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE IF NOT EXISTS `wallet` (
  `walletnumber` varchar(12) NOT NULL UNIQUE,
  `walletcode` varchar(20) NOT NULL,  
  `walletvalue` int (8) NOT NULL,
  `status` int(1) NOT NULL,
  `redeemeduser` varchar(20),
  PRIMARY KEY (`walletnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=80000000004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`walletnumber`, `walletcode`,`walletvalue`, `status`, `redeemeduser`) VALUES
('WLC000000001','DLKC-JCEC-OEWS-SFWD','12000', '0', ''),
('WLC000000002','PL7W-CY4X-SXKL-KL21','12000', '0', ''),
('WLC000000003','IRJX-KLHU-RVWX-KOWX','12000', '0', ''),
('WLC000000004','GK3H-BM2C-HGZL-XQWP','12000', '0', ''),
('WLC000000005','G7JR-9K3S-LEOS-CWOK','45000', '0', ''),
('WLC000000006','K38S-K4IC-LM8D-Q3UF','45000', '0', ''),
('WLC000000007','CVDG-TGIK-2DRA-9LP7','45000', '0', ''),
('WLC000000008','VKWT-JLIP-HKUO-SWTU','45000', '0', ''),
('WLC000000009','KJRE-M3KW-8GNM-BNEW','90000', '0', ''),
('WLC000000010','DAEQ-GDTE-HFYR-JGUT','90000', '0', ''),
('WLC000000011','FSRW-KHOU-PIKH-KHIY','90000', '0', ''),
('WLC000000012','FSTE-GDYR-HFUT-JGIY','90000', '0', ''),
('WLC000000013','YAPI-BCGD-NVHF-MBJG','225000', '0', ''),
('WLC000000014','CZDA-BJVH-MLNK-KHLJ','225000', '0', ''),
('WLC000000015','ZDSA-ZQXW-RVCE-BTVR','225000', '0', ''),
('WLC000000016','ZPOX-CIUV-BYNT-MRNE','225000', '0', ''),
('WLC000000017','FUJE-DIKE-SOKW-APLQ','450000', '0', ''),
('WLC000000018','QAWS-EDRF-YGTH-UKJI','450000', '0', ''),
('WLC000000019','KFYE-TBEJ-LOMJ-PKIL','450000', '0', ''),
('WLC000000020','CLOL-FRKX-GGUD-KWID','450000', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,  
  `transaction_date` date NOT NULL,
  `game` text NOT NULL,
  `total_price` int(11),
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
