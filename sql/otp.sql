--
-- Databas: `otp`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Admin', '{"admin": 1}');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `group` int(11) NOT NULL,
  `user_bio` text NOT NULL,
  `pref_roles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `salt`, `group`, `user_bio`, `pref_roles`) VALUES
(8, 'Roberth', 'bbb1254915810ac564cb481f248e3caf2f9d4196a3856e45731546794eef6934', 'roberth.evaldsson@hotmail.com', 'Ehø¹S–\nt¥‘»ã˜¹x6ÍÖndgV´\0˜8', 1, 'This is Roberths bio \r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'top, jungle'),
(11, 'smeef', '31d728a7df52c2925e71358edd29a699af868197896dfe1817725b6442f770dd', 'smeef@hotmail.com', '10èÙÁÒT¦àS%´Àå''ê*_‡úä¦''BØ%B', 1, '', ''),
(12, 'Alex', '41a3503afc2337d7b6eb0546248591b0ca48a91d8fef9d469d74b285be5207f1', 'alex@hotmail.com', '<U¸Mêùzöe‚¸­”°Ë5t`ßaö¥&±;ADù/£‚', 1, '', ''),
(13, 'Solis', '62bda41e930d13eac05202952a7d1fa30c135d1c1792898614cc0a361ad62ae5', 'solis@hotmail.com', 'áãF}0w-UqC–˜?R/Ÿ£è§ëû‹’êz|á§', 1, 'This is Solis user bio\r\n', 'Jungle');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
