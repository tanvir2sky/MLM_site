
CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminemail`, `adminpassword`) VALUES
(2, 'Tanvir Hossain', 'a@gmail.com', 'hossain');

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(50) NOT NULL,
  `pageurl` varchar(200) NOT NULL,
  `name` varchar(32) NOT NULL,
  `moneypaid` double NOT NULL,
  `moneynormal` double NOT NULL,
  `likelimit` int(20) NOT NULL,
  `present` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `pageurl`, `name`, `moneypaid`, `moneynormal`, `likelimit`, `present`) VALUES
(4, 'https://www.facebook.com/Online-Unique-Shop-119388845074057/', 'Demo', 0.001, 0.0001, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facebooklikes`
--

CREATE TABLE `facebooklikes` (
  `id` int(20) NOT NULL,
  `pageid` int(20) NOT NULL,
  `useremail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facebooklikes`
--

INSERT INTO `facebooklikes` (`id`, `pageid`, `useremail`) VALUES
(6, 3, 'topu@gmail.com'),
(7, 3, 'tanvir@gmail.com'),
(8, 4, 'tanvir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manualpayment`
--

CREATE TABLE `manualpayment` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isconfirmed` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manualpayment`
--

INSERT INTO `manualpayment` (`id`, `email`, `isconfirmed`) VALUES
(2, 'samsu@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `posttopic` varchar(50) NOT NULL,
  `minimumwords` int(10) NOT NULL,
  `maximumwords` varchar(10) NOT NULL,
  `likelimit` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `money` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posttopic`, `minimumwords`, `maximumwords`, `likelimit`, `present`, `money`) VALUES
(2, 'Demo Topic', 300, '600', 30, 0, 0.001);

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `id` int(20) NOT NULL,
  `postid` int(20) NOT NULL,
  `text` varchar(20000) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `isApproved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`id`, `postid`, `text`, `useremail`, `isApproved`) VALUES
(1, 2, '<p><b>Hey This a demo text.&nbsp;</b>\n\nontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\n\n</p>', 'tanvir@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `referralamount`
--

CREATE TABLE `referralamount` (
  `id` int(10) NOT NULL,
  `level1` double NOT NULL,
  `level2` double NOT NULL,
  `level3` double NOT NULL,
  `level4` double NOT NULL,
  `level5` double NOT NULL,
  `level6` double NOT NULL,
  `level7` double NOT NULL,
  `level8` double NOT NULL,
  `level9` double NOT NULL,
  `level10` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `referralamount`
--

INSERT INTO `referralamount` (`id`, `level1`, `level2`, `level3`, `level4`, `level5`, `level6`, `level7`, `level8`, `level9`, `level10`) VALUES
(1, 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 0.001),
(2, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01);

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `id` int(50) NOT NULL,
  `pageurl` varchar(200) NOT NULL,
  `name` varchar(32) NOT NULL,
  `moneypaid` double NOT NULL,
  `moneynormal` double NOT NULL,
  `likelimit` int(20) NOT NULL,
  `present` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `twitterlikes`
--

CREATE TABLE `twitterlikes` (
  `id` int(20) NOT NULL,
  `pageid` int(20) NOT NULL,
  `useremail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twitterlikes`
--

INSERT INTO `twitterlikes` (`id`, `pageid`, `useremail`) VALUES
(0, 0, 'tanvir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `referralemail` varchar(50) NOT NULL,
  `isPaid` tinyint(1) NOT NULL DEFAULT '0',
  `isActivated` tinyint(1) NOT NULL DEFAULT '1',
  `userbalance` double NOT NULL DEFAULT '0',
  `emailVerified` tinyint(1) NOT NULL DEFAULT '0',
  `verificationUrl` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `useremail`, `userpassword`, `referralemail`, `isPaid`, `isActivated`, `userbalance`, `emailVerified`, `verificationUrl`) VALUES
(1, 'Tanvir Hossain', 'tanvir@gmail.com', 'hossain', '', 1, 1, 7.0216, 1, 12325442),
(6, 'Mohammad Jim', 'jim@gmail.com', 'jimmy', 'tanvir@gmail.com', 1, 1, 2.002, 1, 123),
(7, 'Fuad Hussain', 'fuad@gmail.com', 'fuad', 'jim@gmail.com', 0, 1, 14.001, 0, 254),
(17, 'Tofayel Hossain', 'topu@gmail.com', 'topu', 'fuad@gmail.com', 0, 1, 0.0001, 1, 268),
(18, 'saikat', 'saikat@gmailcom', 'saikat', 'topu@gmailcom', 0, 1, 0, 0, 293),
(19, 'Saikat ', 'saikat@gmail.com', 'saikat', 'fuad@gmail.com', 0, 1, 0, 0, 285),
(20, 'samsu', 'samsu@gmail.com', 'samsu', 'tanvir@gmail.com', 1, 1, 0, 1, 1457288610);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(30) NOT NULL,
  `pageurl` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `moneypaid` double NOT NULL,
  `moneynormal` double NOT NULL,
  `likelimit` int(10) NOT NULL,
  `present` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `pageurl`, `name`, `moneypaid`, `moneynormal`, `likelimit`, `present`) VALUES
(2, 'https://www.youtube.com/watch?v=0t2VPBF6Kp4', 'Something', 0.001, 0.0001, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtubelikes`
--

CREATE TABLE `youtubelikes` (
  `id` int(20) NOT NULL,
  `pageid` int(20) NOT NULL,
  `useremail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `youtubelikes`
--

INSERT INTO `youtubelikes` (`id`, `pageid`, `useremail`) VALUES
(0, 2, 'tanvir@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `adminemail` (`adminemail`);

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facebooklikes`
--
ALTER TABLE `facebooklikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualpayment`
--
ALTER TABLE `manualpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `referralamount`
--
ALTER TABLE `referralamount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `twitterlikes`
--
ALTER TABLE `twitterlikes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `facebooklikes`
--
ALTER TABLE `facebooklikes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `manualpayment`
--
ALTER TABLE `manualpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `postlikes`
--
ALTER TABLE `postlikes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
