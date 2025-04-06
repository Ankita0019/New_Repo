-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 06:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`) VALUES
(1, 'eventlook09@gmail.com', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Cid` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Cid`, `Cname`) VALUES
(1, 'Surat'),
(2, 'Vapi'),
(4, 'Ankleshwar'),
(5, 'Valsad'),
(6, 'Navsari'),
(7, 'Bharuch'),
(8, 'Vadodara'),
(10, 'Ahemdabad'),
(11, 'Mumbai'),
(12, '464645');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Eid` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` decimal(12,0) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Eid`, `fname`, `emailid`, `contactno`, `msg`, `status`) VALUES
(1, 'jenisha', 'jenu@gmail.com', '9874563210', 'hey i wanna more details regarding food, please kindly contact as soon as possible.', 'complete'),
(2, 'Abhinav Sonia', 'abhi89@gmail.com', '9908765678', 'Wanna more information regarding music arrangement!', 'pending'),
(20, 'Heenal Bhandari', 'heenal09@gmal.com', '9878765434', 'hey there', 'pending'),
(21, 'Ankita Sonar', 'sonarankita9@gmail.com', '7069501993', 'hey there\r\n', 'complete'),
(22, 'Fenil Lad', 'fenillad087@gmail.com', '9876567898', 'I wanna details about your food caters', 'complete'),
(23, 'Niki Patel', 'niki.p1005@gmail.com', '9664900838', 'jshdjsa', 'complete'),
(24, 'Ankita Sonar', 'sonarankita9@gmail.com', '7069501993', 'Enquiry demo', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Eventid` int(4) NOT NULL,
  `Ename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Eventid`, `Ename`) VALUES
(1, 'Casual Party'),
(2, 'Birthday Party'),
(3, 'Anniversary party');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(4) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `exp`, `comment`, `date`, `fname`) VALUES
(1, 'bad', 'Awesome food, decoration is pretty', '2021-04-15', 'jenuu'),
(2, 'good', 'Enjoyed the music, food is very must tasty..keep going', '2021-05-04', 'Tisha Bhandari'),
(3, 'bad', 'food was tasty, decoration is pretty,music enjoyable', '2021-05-28', 'Ankita Sonar');

-- --------------------------------------------------------

--
-- Table structure for table `foodmaster`
--

CREATE TABLE `foodmaster` (
  `Fid` int(11) NOT NULL,
  `Tname` varchar(35) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(25) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `tab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodmaster`
--

INSERT INTO `foodmaster` (`Fid`, `Tname`, `price`, `img`, `description`, `tab`) VALUES
(1, 'Rajasthani Thali', 200, 'assets/img/f1.webp', 'Drenched in ghee (clarified butter), the traditional Rajasthani Thali is rich, colourful and regal just like its culture. A typical Rajasthani thali includes dal baati churma (round-shaped breads with variety of lentils), gatte ki sabzi (gram flour balls in curd gravy and spices), rotis of bajra, jowar, makka or missi roti (breads of pearl millet, corn or whole-wheat flatbread), panchmela dal (concoction of five different lentils), ker sangri (pickle), boondi chaas (flavoured buttermilk), pulao (steamed rice) and papad. For dessert, there is goond ka ladoo (edible gum sweet), moong dal halwa or Imarti (circular flower-shaped dessert). All in all, it is a gastronomic delight!', 1),
(2, 'Kannadiga Oota (Karnataka Thali', 300, 'assets/img/f2.webp', 'Kannadiga Oota is a blend of flavours from its neighbouring communities and regions. A traditional spread is served on a banana leaf, and includes kosambari (south Indian salad), pickle, palya (vegetable side dish), raita or gojju (vegetable cooked in tamarind juice), payasam (sweet dish made of rice and lentils), jolada roti (sorghum flatbread), mirchi bhajji (chilli fritters), akki roti (rice flatbread), thovve (cooked dal), huli (a thick broth of lentils and vegetables), ranjaka (chilli-garlic chutney), padavalkayi masala (snakegourd curry), chitranna (rice-based dish), plain rice and ghee.', 2),
(3, 'Kerala Thali', 400, 'assets/img/f3.webp', 'Traditional Kerala thali is flavoursome and filling, complete with generous use of coconut milk, coconut oil, curry leaves and rice. Served on a banana leaf, it comprises of avial (mixed vegetables), puliserry (spiced coconut and yogurt gravy), fish curry, thoran (coconut-based vegetable dish), sambar (lentil-based vegetable stew), papadum, pickle, pachadi (side dish curry of coconut, cucumber and yogurt), rasam (spicy soup) and olan (white gourd in coconut milk). For dessert, there’s ada pradhaman (steamed rice flakes and jaggery pudding) and sharkara varatti(banana chips with jaggery).', 3),
(4, 'Maharashrian Thali', 350, 'assets/img/f4.webp', 'Maharashtrian Thali is a scrumptious mix of veg and non-veg options. However, you can choose what comes with your thali. Rich in flavour and spices, a traditional Maharastrian thali consists of kothimbir vadi (coriander fritters), bhakri roti (millet flatbread), pitla (chickpea flour curry), bhajis, like vangyache bharit (eggplant-based dish), batatyachi bhaji (dry potato sabzi) or matkichi bhaji (sprouted moth beans curry); amti (tangy curry from yellow lentils), mutton kolhapuri(spicy mutton curry), andhra rassa (chicken in white gravy), kosimbir (salad), puran poli (sweet flatbread) and a refreshing glass of yogurt-based drink (mattha).', 4),
(5, 'Kathiawadi Thali', 300, 'assets/img/f5.webp', 'Kathiawadi thali is a vegetarian platter that comes from Kathiawar, a peninsula in Gujarat. It is typically spicy along with a tinge of sweetness. The thali includes sev tamatar nu shaak (sweet-spicy tomato gravy), tindora nu shaak (sweet-and-savoury ivy gourd), kathiawadi dhokali nu shaak (wheat flour dumplings in spicy gravy), bharela ringan(stuffed eggplant), rotli (flatbread), bakhri (bread of pearl millet), tikhari (spicy, tangy curry) and vaghareli khichdi (a mixture of rice, lentils and spices). Indispensable components of Kathiawadi thali are buttermilk and kesar shrikhand (saffron-flavoured sweet yogurt). During the mango season, the thali also contains aamras (mango pulp).', 5),
(6, 'Bengali Thali', 250, 'assets/img/f6.webp', 'Bengali thali is synonymous with fish and rice. Mutton and goat meat is also a popular choice. This thali usually feature non-veg delicacies that have subtle yet fiery flavours that will keep you hankering for more. The specialities include shukto (sweet-spicy soupy mixture of vegetables), patol bhaja (pointed gourd fry), shak (leafy vegetables), chholar dal (lentil curry), alu bhaate (potatoes mashed with rice), begun bhaja(pan-fried brinjal), machher jhol (traditional fish curry), maach bhaja (fish fry), mutton curry, chadachadi (char-flavoured vegetable dish), sweet-tangy chutneys (mango, papaya, tamarind, etc). The scrumptious meal is to be finished with mishti doi (sweet yogurt) and payesh (rice and milk pudding)', 6),
(7, 'Assamese Thali', 350, 'assets/img/f7.webp', 'Assamese cuisine is characterized by slow cooking, strong flavours and more sparing use of spices. Abundance of endemic plants, vegetables and animal products are used in their daily cooking. The thali will have khar (raw papaya, dried banana skins and lentils curry), masor tenga (light fish dish), narasingh masor jhol (authentic fish dish), poitabhat (rice-based dish), pitika (side dish of mashed vegetables), pickle and bor (fritters). For dessert, there’s pitha (rice cake) to complete the meal.', 7),
(8, 'Punjabi Thali', 250, 'assets/img/f8.webp', 'Punjabis are hardcore foodies, and the Punjabi thali is proof! Known as the ‘Bread Basket of India’, the food of Punjab is lively and bursting with flavours that will keep you hooked. The signature delicacies include pindi chole (spicy chickpea curry), Amritsari aloo kulcha (stuffed flatbread), dal makhani (mixture of black lentils and red kidney beans), pakoda kadhi (fritters in yogurt gravy), jeera rice (blend of rice and cumin seeds), pickles of cauliflower,carrot and turnip, and a sweet lassi (yogurt or buttermilk drink). Other signature dishes include Sarson ka saag (vegetable dish) and rajma chawal (red kidney beans in thick gravy). The non-veg platter includes butter chicken and succulent Amritsari fish. It is, indeed, a wholesome meal that will guarantee foodgasm!', 8),
(9, 'Kashmiri Thali', 400, 'assets/img/f9.jpg', 'Kashmir isn’t just a treat for the eyes and camera lens, but also a delicious treat for the palate. Meat and rice are the popular items savoured in the Kashmir Valley. A ceremonial feast is called Wazwan, which is essentially meat-based platter. But that’s not just it, there’s more to it! A typical Kashmiri thali includes Kashmiri dum aloo (potato-based dish), kebabs, rogan josh (lamb-based dish), yakhni (yogurt-based mutton gravy), Kashmiri pulao (spicy rice with assortment of nuts and dried fruits) and khatte baingan (saucy aubergine). The meal is accompanied with pickles, yogurt and salads. To round-up this delicious meal, there’s phirni (saffron and rose flavoured rice custard).', 9);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Rdt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `phone`, `email`, `password`, `Rdt`) VALUES
(1, 'Bhavik', '7069501993', 'bh65@gmail.com', 'Bhavik87', '2011-09-21'),
(2, 'Ankita Sonar', '9087898888', 'ankita34@gmail.com', 'Anki65', '2012-09-21'),
(3, 'Jenisha Patel', '8976567876', 'jenisha123@gmail.com', 'c3886bdf41', '2014-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(4) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `verify_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `fname`, `password`, `emailid`, `contactno`, `status`, `verify_token`) VALUES
(1, 'jenisha', '123456', 'jenu@gmail.com', '9874563210', 1, NULL),
(2, 'ankita', '123456', 'anu@yahoo.com', '8965321623', 1, NULL),
(3, 'Navya', 'navu@1234', 'nav654@gmail.co', '7898765434', 1, NULL),
(4, 'Abhinav', 'abhi98', 'abhi34@gmail.co', '8765432190', 1, NULL),
(5, 'Heenal', '111213', 'heenal09@gmail.com', '9426786543', 1, NULL),
(6, 'Nita', 'shah76', 'nita76@gmail.com', '9878675544', 1, NULL),
(7, 'Ankita Sonar', 'sonar1', 'sonar@345gmail.com', '7069501904', 0, NULL),
(8, 'Ankita Sonar', 'ajkdajd', 'sonar@345gmail.com', '9601329334', 0, NULL),
(9, 'Ankita Sonar', 'pakbaskda', 'jenu@gmail.com', '9601329334', 0, NULL),
(10, 'Ankita Sonar', 'adawda', 'jenu@gmail.com', '9601329334', 0, NULL),
(11, 'Ankita Sonar', 'adad', 'nita76@gmail.com', '9601329334', 1, NULL),
(12, 'Ankita Sonar', 'Ankita45', 'nita76@gmail.com', '7069501993', 0, NULL),
(13, 'Neha Mehra', 'neha12', 'neha@gmail.com', '8978767876', 0, NULL),
(14, 'Niki', 'niki9', 'niki_patel979@outlook.com', '8987678987', 1, NULL),
(15, 'Niki Shah', 'bh1234', 'bhvviik@gmail.com', '9876567890', 1, NULL),
(16, 'bhavik', '123456', 'bhvviik@gmail.com', '9876567890', 0, NULL),
(17, 'Ankita Sonar', 'anki123', 'bhvviik@gmail.com', '9876567890', 0, NULL),
(18, 'Ankita Sonar', '444444', 'bhvviik@gmail.com', '9601329334', 1, NULL),
(19, 'Ankita', '222222', 'bhvviik@gmail.com', '9878987679', 0, NULL),
(20, 'niki', '909090', 'niki.p1005@gmail.com', '7878878787', 0, NULL),
(21, 'Mishka Patel', 'msh123', 'mishkaptl0980@gmail.com', '8976567809', 0, NULL),
(22, 'Krishna Patel', 'bfd7c34026c2ec5a3d5f', 'krishnapatel110602@gmail.com', '8976564567', 1, NULL),
(23, 'Jay Thumar', '0dbb536fb0f47e8c0f81', 'jaythumar34@gmail.com', '7265965879', 0, NULL),
(24, 'Jay Thumar', 'e10adc3949ba59abbe56', 'jay56@gmail.com', '7678765467', 0, NULL),
(25, 'Dhruv Bhandari', 'dhruv12', 'dhruvbh34@gmail.com', '8897787656', 1, NULL),
(26, 'Archi Patel', '123456', 'archipatel1509@gmail.com', '8976567876', 1, NULL),
(30, 'Nimisha Patel', 'nimisha12', 'nimisha78@gmail.com', '7865678909', 1, NULL),
(31, 'Ankita Sonar', 'ankita19', 'sonarankita9@gmail.com', '7069501993', 1, NULL),
(32, 'vivek', 'hh', 'kb@g.com', '9999999999', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `venuebooking`
--

CREATE TABLE `venuebooking` (
  `VBid` int(11) NOT NULL,
  `Vid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `Eventid` int(4) NOT NULL,
  `Edate` date NOT NULL,
  `Estime` time NOT NULL,
  `Eetime` int(4) NOT NULL,
  `Totalguest` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `decorprice` tinyint(1) DEFAULT 0,
  `foodprice` float DEFAULT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venuebooking`
--

INSERT INTO `venuebooking` (`VBid`, `Vid`, `userid`, `Eventid`, `Edate`, `Estime`, `Eetime`, `Totalguest`, `status`, `decorprice`, `foodprice`, `total`) VALUES
(23, 1, 1, 3, '2021-10-22', '21:00:00', 8, 67, 0, NULL, NULL, 0),
(27, 1, 1, 2, '2021-10-30', '21:10:00', 2, 340, 1, NULL, NULL, 0),
(28, 1, 1, 2, '2021-10-29', '22:00:00', 4, 100, 1, NULL, NULL, 2000),
(29, 5, 1, 2, '2021-10-30', '22:00:00', 5, 100, 1, NULL, NULL, 3500),
(30, 5, 1, 1, '2021-10-29', '21:00:00', 2, 60, 1, NULL, 60, 1400),
(31, 5, 1, 0, '2021-10-29', '03:03:00', 6, 40, 1, NULL, 12000, 4200),
(32, 1, 4, 1, '2021-10-27', '05:05:00', 6, 100, 1, 0, 20000, 3000),
(33, 3, 4, 1, '2021-10-28', '09:09:00', 5, 40, 1, 0, 16000, 3250),
(34, 1, 1, 2, '2021-10-21', '21:00:00', 5, 100, 1, 0, 35000, 2500),
(35, 5, 1, 2, '2021-10-22', '21:00:00', 4, 120, 1, 0, 42000, 2800),
(36, 3, 1, 1, '2021-10-28', '06:06:00', 4, 10, 1, 1, 3500, 2600),
(37, 6, 1, 1, '2021-10-29', '02:22:00', 1, 10, 1, 1, 3000, 800),
(38, 1, 1, 2, '2021-10-30', '21:00:00', 2, 200, 1, 1, 60000, 1000),
(39, 3, 1, 1, '2021-10-27', '08:08:00', 7, 70, 1, 0, 14000, 4550),
(40, 1, 1, 1, '2021-12-31', '00:00:00', 5, 30, 1, 1, 9000, 2500),
(41, 1, 1, 1, '2021-10-30', '07:07:00', 5, 10, 1, 1, 0, 2500),
(42, 3, 1, 1, '2021-10-30', '06:06:00', 8, 1000, 1, 0, 300000, 5200),
(43, 3, 1, 1, '2021-10-28', '06:06:00', 6, 1000, 1, 0, 300000, 3900),
(44, 3, 1, 2, '2021-10-28', '00:00:00', 6, 60, 1, 0, 18000, 3900),
(45, 3, 1, 2, '2021-10-28', '05:05:00', 5, 10, 1, 0, 3000, 3250),
(46, 3, 1, 2, '2021-10-29', '21:00:00', 3, 300, 1, 1, 105000, 1950),
(47, 1, 1, 1, '2021-10-29', '21:00:00', 4, 100, 1, 1, 35000, 2000),
(48, 3, 4, 0, '2021-11-18', '21:00:00', 2, 100, 1, 1, 25000, 1300),
(49, 4, 7, 2, '2021-11-26', '21:00:00', 4, 100, 1, 1, 35000, 2000),
(50, 4, 7, 0, '2021-11-26', '21:00:00', 4, 100, 1, 1, 40000, 2000),
(51, 11, 7, 0, '2021-11-26', '21:00:00', 4, 400, 1, 1, 120000, 2800);

-- --------------------------------------------------------

--
-- Table structure for table `venuedetails`
--

CREATE TABLE `venuedetails` (
  `Vid` int(11) NOT NULL,
  `Vname` varchar(50) NOT NULL,
  `Vadd` varchar(100) NOT NULL,
  `Photo` varchar(28) NOT NULL,
  `Capacity` int(4) NOT NULL,
  `price_h` float NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venuedetails`
--

INSERT INTO `venuedetails` (`Vid`, `Vname`, `Vadd`, `Photo`, `Capacity`, `price_h`, `phone`, `CID`, `status`) VALUES
(1, 'Shivanjali Lawn', 'cityplus multiplex, Surat - Dumas Road, New Magdalla, Surat, Gujarat 395007', 'assets/img/surat1.jpg', 200, 500, '9376712852', 1, 1),
(2, 'B.R farm & party plot', 'B.R.Farm & Party Plot, Gandevi Road, opposite Swaminarayan Temple, Italva, Navsari, Gujarat 396445', 'assets/img/navsari1.jpg', 250, 600, '9527842940', 2, 0),
(3, 'Evergreen Party Plot', 'Vapi - Koparli Road Old C Type, Near, R K Desai College, GIDC, Vapi, Gujarat 396195', 'assets/img/vapi1.jpg', 300, 650, '9769454321', 2, 0),
(4, 'Avsar Party Plot', '06, Parekh Wadi, Vivekananda Society, Kaliawadi, Navsari, Gujarat 396445', 'assets/img/navsari2.jpg', 200, 500, '7981081385', 6, 0),
(5, 'Anavil Party Plot', 'Near Star Bazzar Mall, LP Savani Rd, Guru Ram Pavan Bhumi, Surat, Gujarat 395009', 'assets/img/surat2.jpg', 300, 700, '9683173805', 1, 0),
(6, 'Natraj and shivam hall', 'Gunjan Rd, Near Gunjan Cinema, Housing Sector, GIDC, Vapi, Gujarat 396195', 'assets/img/vapi2.jpg', 400, 800, '7698225800', 2, 0),
(7, 'Milan party plot', 'Swaminarayan mandir, Old Town, Bharuch, Gujarat 392001', 'assets/img/bharuch1.jpg', 200, 550, '9987562710', 7, 0),
(8, 'Islamic Cultural Hall', 'Mota Taiwad Rd, Mota Taiwad, Valsad, Gujarat 396001', 'assets/img/valsad2.jpg', 350, 750, '9981256730', 5, 0),
(10, 'Shree Party Plot', 'HWMP+P45, Vashier Valley, Valsad, Gujarat 396007', 'assets/img/valsad1.jpg', 750, 350, '9908334145', 5, 0),
(11, 'Omkar Exotica Party Plot', 'Omkar Exotica, Opp c.m school, Kondh, Ankleshwar - Valia Rd, road, Ankleshwar, Gujarat 393001', 'assets/img/ankleshwar1.jpg', 300, 700, '9978620174', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Eventid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `foodmaster`
--
ALTER TABLE `foodmaster`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `venuebooking`
--
ALTER TABLE `venuebooking`
  ADD PRIMARY KEY (`VBid`),
  ADD KEY `foreign key` (`Vid`,`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `venuedetails`
--
ALTER TABLE `venuedetails`
  ADD PRIMARY KEY (`Vid`),
  ADD KEY `CID` (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Eid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Eventid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foodmaster`
--
ALTER TABLE `foodmaster`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venuebooking`
--
ALTER TABLE `venuebooking`
  MODIFY `VBid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `venuedetails`
--
ALTER TABLE `venuedetails`
  MODIFY `Vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `venuebooking`
--
ALTER TABLE `venuebooking`
  ADD CONSTRAINT `venuebooking_ibfk_1` FOREIGN KEY (`Vid`) REFERENCES `venuedetails` (`Vid`),
  ADD CONSTRAINT `venuebooking_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `registration` (`userid`);

--
-- Constraints for table `venuedetails`
--
ALTER TABLE `venuedetails`
  ADD CONSTRAINT `venuedetails_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `city` (`Cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
