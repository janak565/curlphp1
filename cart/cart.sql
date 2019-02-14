--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(9) NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
  
  
--- INSERT Products

INSERT INTO `products` (`id`, `product`, `price`) VALUES
(1, 'Product 1', 1.5),
(2, 'Product 2', 5),
(3, 'Product 3', 7.5),
(4, 'Product 4', 4.43);