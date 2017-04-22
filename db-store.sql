-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2017 at 04:09 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `movie_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Username` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Username`, `Name`) VALUES
('akshay', 'Avatar'),
('swaroop', 'Avatar'),
('akshay', 'Black Swan'),
('swaroop', 'Coraline'),
('swaroop', 'Eclipse');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Id` int(2) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Img_url` varchar(50) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Cost` int(10) NOT NULL DEFAULT '0',
  `Description` varchar(2000) NOT NULL DEFAULT 'movie_desc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Id`, `Name`, `Category`, `Img_url`, `Year`, `Cost`, `Description`) VALUES
(34, 'Adhe Kangal', 'tamil', 'Adhe_Kangal.jpg', '2017', 40, 'What begins as a love triangle morphs into a thriller, following an accident - and an abduction.'),
(6, 'Aftermath', 'english', 'Aftermath.jpg', '2017', 20, 'Two strangers\' lives become inextricably bound together after a devastating plane crash.'),
(42, 'Amélie', 'french', 'Amelie.jpg', '2001', 20, 'Amélie is an innocent and naive girl in Paris with her own sense of justice. She decides to help those around her and, along the way, discovers love.'),
(7, 'Arrival', 'english', 'Arrival.jpg', '2016', 30, 'When twelve mysterious spacecraft appear around the world, \r\nlinguistics professor Louise Banks is tasked with interpreting the language of the apparent alien visitors.'),
(1, 'Avatar', 'english', 'avatar_movie.jpg', '2015', 100, 'movie_desc'),
(28, 'Baahubali 2: The Conclusion', 'telugu', 'Baahubali_the_Conclusion.jpg', '2017', 100, 'Baahubali 2: The Conclusion is an upcoming Indian epic historical fiction film directed by S. S. Rajamouli.'),
(27, 'Baahubali: The Beginning', 'telugu', 'Baahubali_Begining.jpg', '2015', 50, 'Baahubali: The Beginning is a 2015 Indian epic fantasy film directed by S. S. Rajamouli. '),
(35, 'Bairavaa', 'tamil', 'Bairavaa.jpg', '2017', 60, 'A kind-hearted bank officer decides to step in when an unscrupulous businessman tries to stop a college student from revealing the truth about his immoral activities.'),
(8, 'Beauty and the Beast', 'english', 'Beauty-and-the-Beast.jpg', '2017', 40, 'An adaptation of the fairy tale about a monstrous-looking prince and a young woman who fall in love.'),
(2, 'Black Swan', 'english', 'black-swan.jpg', '2015', 312, 'movie_desc'),
(29, 'Cheliya', 'telugu', 'Cheliya.jpg', '2017', 30, 'A military pilot recalls a romance with a doctor while being held prisoner.'),
(3, 'Coraline', 'english', 'Coraline.jpg', '2015', 200, 'movie_desc'),
(20, 'Dangal', 'hindi', 'Dangal.jpg', '2016', 40, 'Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression.'),
(4, 'Eclipse', 'english', 'Eclipse.jpg', '2018', 100, 'movie_desc'),
(53, 'End Game', 'english', 'end-game.jpg', '2005', 620, 'movie_desc'),
(9, 'Get Out', 'english', 'Get-Out.jpg', '2017', 30, 'A young African-American man visits his Caucasian girlfriend\'s mysterious family estate.'),
(30, 'Guru', 'telugu', 'Guru.jpg', '2017', 70, 'A curmudgeonly boxing coach sees the potential in a young woman; his belief in her changes her life.'),
(10, 'Hacksaw Ridge', 'english', 'Hacksaw-Ridge.jpg', '2016', 20, 'WWII American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot.'),
(22, 'Half Girlfriend', 'hindi', 'Halfgirlfriend.jpg', '2017', 80, 'Once upon a time, there was a Bihari boy called Madhav. He fell in love with a girl from Delhi called Riya. Madhav didn\'t speak English well. Riya did. Madhav wanted a relationship. '),
(11, 'Hidden Figures', 'english', 'HiddenFigures.jpg', '2016', 40, 'The story of a team of African-American women mathematicians who served a vital role in NASA during the early years of the US space program.'),
(12, 'John Wick: Chapter 2', 'english', 'John-Wick-2.jpg', '2016', 20, 'After returning to the criminal underworld to repay a debt, John Wick discovers that a large bounty has been put on his life.'),
(23, 'Jolly LLB 2 ', 'hindi', 'Jolly-LLB.jpg', '2016', 40, 'Jolly is a clumsy lawyer who is faced with representing the most critical court case of his career.'),
(24, 'Kaabil', 'hindi', 'Kaabil.jpg', '2017', 30, 'This is the story of a man who lived, laughed and loved just like everyone in this world. Until one day, a terrible tragedy struck.'),
(31, 'Katamarayudu', 'telugu', 'Katamarayudu.jpg', '2017', 50, 'A man with a violent streak is trying to reform but gets pushed into a situation where he has to take action.'),
(36, 'Kidaari', 'tamil', 'Kidaari.jpg', '2016', 70, 'This is the action-packed story of a hot-headed protagonist looking to solve the murder of his godfather. There are multiple suspects, each of whom has strong motives for the deed.'),
(13, 'Kong: Skull Island', 'english', 'Kong-Skull-Island.jpg', '2017', 20, 'A team of scientists explore an uncharted island in the Pacific, venturing into the domain of the mighty Kong, and must fight to escape a primal Eden.'),
(41, 'La Vie en Rose', 'french', 'LaVieenRose.jpg', '2007', 30, 'Biopic of the iconic French singer Édith Piaf. Raised by her grandmother in a brothel, she was discovered while singing on a street corner at the age of 19. Despite her success, Piaf\'s life was filled with tragedy.'),
(14, 'Life', 'english', 'Life-New.jpg', '2017', 15, 'A team of scientists aboard the International Space Station discover a rapidly evolving life form, that caused extinction on Mars, and now threatens the crew and all life on Earth.'),
(43, 'Life Is Beautiful', 'french', 'LifeIsBeautiful.jpg', '1997', 30, 'When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of will, humor and imagination to protect his son from the dangers around their camp.'),
(15, 'Lion', 'english', 'Lion.jpg', '2016', 40, 'A five-year-old Indian boy gets lost on the streets of Calcutta, thousands of kilometers from home. He survives many challenges before being adopted by a couple in Australia. 25 years later, he sets out to find his lost family.'),
(16, 'Moana', 'english', 'Moana.jpg', '2016', 30, 'In Ancient Polynesia, when a terrible curse incurred by the Demigod Maui reaches an impetuous Chieftain\'s daughter\'s island, she answers the Ocean\'s call to seek out the Demigod to set things right.'),
(32, 'Nenu Local', 'telugu', 'Nenu_Local.jpg', '2017', 500, 'A happy-go-lucky man accidentally falls in love with a woman whose father despises him. To further complicate matters, his lover has another suitor, who is deemed more worthy of her.'),
(5, 'New Moon', 'english', 'New-Moon.jpg', '2015', 213, 'movie_desc'),
(37, 'Nila', 'tamil', 'Nila.jpg', '2016', 30, 'A young man meets his childhood love one rainy night in the city of dreams. \r\nWhen they both realise that the desire for more can ruin what is special between them do they listen to their head or their heart?'),
(17, 'Pirates of the Caribbean', 'english', 'Poc.jpg', '2017', 60, 'Captain Jack Sparrow searches for the trident of Poseidon.'),
(40, 'Polisse', 'french', 'Polisse_2011.jpg', '2011', 90, 'A journalist covering police assigned to a juvenile division enters an affair with one of her subjects.'),
(56, 'Priest 3D', 'french', 'Priest.jpg', '1994', 679, 'movie_desc'),
(25, 'Raees', 'hindi', 'Raees.jpg', '2016', 60, 'Criticizing the prohibition of alcohol and illegal drugs in Gujarat, this film unfolds the story of a cruel and clever bootlegger, whose business is challenged by a tough cop.'),
(26, 'Rangoon', 'hindi', 'Rangoon.jpg', '2017', 70, 'A love triangle forms against the backdrop of the Second World War.'),
(18, 'Rings', 'english', 'Rings-Poster.jpg', '2017', 30, 'A young woman finds herself on the receiving end of a terrifying curse that threatens to take her life in seven days.'),
(33, 'Sathamanam Bhavati', 'telugu', 'Shatamanam-Bhavati-2016.jpg', '2016', 40, 'Sathamanam Bhavathi is a 2017 Indian Telugu language drama film written and directed by Satish Vegesna.'),
(54, 'Sorority Wars', 'english', 'Sorority_Wars.jpg', '2003', 620, 'movie_desc'),
(19, 'Split', 'english', 'Split.jpg', '2017', 50, 'Three girls are kidnapped by a man with a diagnosed 23 distinct personalities, they must try to escape before the apparent emergence of a frightful new 24th.'),
(21, 'The Ghazi Attack', 'hindi', 'Ghazi.jpg', '2017', 60, 'A Pakistani submarine, Ghazi plans to secretly attack Vizag port. For doing so, it has to get past Indian submarine S21.'),
(39, 'The Intouchables', 'french', 'The_Intouchables.jpg', '2011', 80, 'After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.'),
(55, 'Unstoppable', 'english', 'Unstoppable.jpg', '2004', 600, 'movie_desc'),
(38, 'Yaman', 'tamil', 'Yaman.jpg', '2017', 80, 'The Machiavellian tactics of politicians in Tamil Nadu form the subject of this dark film.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Password`, `Email`) VALUES
('', 'akshay', '3517525329b170f7ce87e0e16b6d0778', 'aksh@gmail.com'),
('', 'akshay1', '3517525329b170f7ce87e0e16b6d0778', 'asd@gmail.com'),
('Akshay ', 'akshay1100', '3517525329b170f7ce87e0e16b6d0778', 'aks1@gmail.com'),
('', 'awdsdd', '39826cc6ee17ad9fa8566084a400871e', 'awda@gmail.com'),
('swaroop k', 'swaroop', 'password', 'getswaroopnow@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Username`,`Name`),
  ADD KEY `fk_movie` (`Name`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_movie` FOREIGN KEY (`Name`) REFERENCES `movies` (`Name`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`);
