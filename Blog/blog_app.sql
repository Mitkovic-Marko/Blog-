-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 02:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image_path`, `created_at`) VALUES
(26, 'Čima Moneke daleko od Partizana', 'Košarkaš Baskonije Čima Moneke protekle sezone pobrao je velike simpatije navijača Partizana izjavama i stavovima o klubu iz Humske. \r\nPristalice crno-belih više puta „bombardovale“ su nigerijskog krilnog centra porukama da dođe u Partizan i malo je potrebno da se „potpali“ vatra među navijačima. Nigerijac je u Evroligi u sezoni 2023-24 prosečno postizao 13.6 poena uz 6.6 skokova, 1.4 asistenciju i 1.1 ukradenu loptu.\r\nMoneke je profesionalnu karijeru počeo u Ruenu, a igrao je još za Orleans, Manresu, Sakramento Kingse i Monako. Sportski sektor Partizana uveliko pravi planove za sledeću sezonu, mnogim igračima je istekao ugovor, a od novajlija saradnja je, zasad, dogovorena sa Vanjom Marinkovićem i Arijanom Lakićem.', 'uploads/666bfd664ec281.84719770.jpeg', '2024-06-14 08:20:54'),
(28, 'Ne može bez Srbije', 'Kada je reprezentacija Srbije (ili kako god da se u datom trenutku država zvala) prethodno nastupala na Evropskom prvenstvu. autor ovog teksta je imao samo jednu godinu. Kad je konačno dočekao da se njegova selekcija opet kvalifikuje, rođena majka ga je prethodno već u par navrata pitala ima li nameru da se ženi skorije... Kao pasionirani ljubitelj fudbala od malih nogu, ispratio sam ne samo svaki EURO otkad znam za sebe, već i bezbroj drugih tamkičenja. Vrlo je nezahvalno izdvojiti jednog igrača kao uzročnika za stvaranje „zaraze“ koja teško da će ikad prestati, ali oči jednog dečaka naročito su zasijale kada god bi holandski mađioničar Denis Bergkamp kročio na teren.', 'uploads/666bfdff1080a7.24034263.jpg', '2024-06-14 08:23:27'),
(29, 'Velika UFC razočaranja', 'MMA fanovi i te kako su se radovali povratku dvojice velikih zvezda u UFC oktagon. Dugo nismo u kavezu videli šta mogu Konor Mekgregor i Hamzat Čimajev, a njihove dugo očekivane borbe bile su zakazane za kraj juna. Međutim, okolnosti su dovele do toga da se do daljeg odlaže nastup irskog i čečenskog asa. \r\nPosle brojnih peripetija i često oprečnih informacija u javnosti, poznato je da Mekgregor (22-6, 19 KO, 1 sabmišn) neće moći da nastupi na dugo najavljivanoj priredbi UFC 303, koja se u noći između 29. i 30. juna po srpskom vremenu održava u Las Vegasu.\r\n\r\nNavijači su platili vrlo skupe karte da bi na delu videli najpopularnijeg MMA borca svih vremena u duelu sa Majklom Čendlerom (23-8, 11 KO, 7 sabmišna), ali ovog puta to neće biti moguće. UFC je na sve načine pokušao „izbavi“ priredbu i sada imamo novu naslovnu i sunaslovnu borbu.', 'uploads/666bfe651204f6.20431092.jpg', '2024-06-14 08:25:09'),
(30, 'Zvezda (ne) pravi istu grešku', 'Crvena zvezda je prethodnu sezonu počela sa velikim evropskim ambicijama, ali je ipak relativno brzo ispala iz trke za top osam Evrolige. \r\nOd samoga starta bilo je jasno da je angažovanje pojedinih (ključnih) igrača bio promašaj, kao što su, na primer, Šabaz Nejpir, Majk Tobi, pa posle toga i pojačanja u vidu Džavontea Smarta, Fredija Gilespija, pa čak i Treja Tompkinsa koji je zaigrao tek nekoliko meseci nakon što je doveden. Ovoga leta, deluje da je situacija drastično drugačija, a pravac znatno jasniji. Naime, Zvezdina rekonstrukcija rostera – makar za sada – obećava.\r\n\r\nProšla Evroligaška godina je sada već uveliko iza nas, a Zvezda je furiozno krenula u obnovu i revitalizaciju tima. Za sada su zvanični potezi crveno-belih produžetak saradnje sa Rokasom Gedraitisom i Brankom Lazićem, kao i potpis Uroša Plavšića. Istovremeno, Nikola Kalinić je ugovorio saradnju sa klubom sa Malog Kalemegdana na tri godine, dok su takođe, prema raznoraznim izvorima crveno-beli (navodno) u završnim fazama sklapanja dogovora sa Kodijem Milerom-Mekentajerom, Ajzeom Kenanom, kao i krilnim centrom Majkom Daumom.', 'uploads/666bff045789d2.20996697.jpg', '2024-06-14 08:27:48'),
(31, 'Leverkuzen doveo pojačanje', 'Bajer nije saopštio detalje ugovora, a mediji su preneli da je navodno reč o sumi od 18 miliona evra plus dva miliona potencijalnih bonusa. Garsija je za Đironu nastupao prethodne tri sezone, za koju je upisao 98 nastupa u svim takmičenjima. Pre Đirone igrao je za Viljareal, Mančester siti, Muskron, Dinamo Bukurešt i Eibar. Garsija je za Đironu nastupao prethodne tri sezone, za koju je upisao 98 nastupa u svim takmičenjima. Pre Đirone igrao je za Viljareal, Mančester siti, Muskron, Dinamo Bukurešt i Eibar.Garsija je za Đironu nastupao prethodne tri sezone, za koju je upisao 98 nastupa u svim takmičenjima. Pre Đirone igrao je za Viljareal, Mančester siti, Muskron, Dinamo Bukurešt i Eibar.Garsija je za Đironu nastupao prethodne tri sezone, za koju je upisao 98 nastupa u svim takmičenjima. Pre Đirone igrao je za Viljareal, Mančester siti, Muskron, Dinamo Bukurešt i Eibar.', 'uploads/666bff81594b90.73803351.jpg', '2024-06-14 08:29:53'),
(32, 'Fantazi tim', 'Naš komentator je u svoj tim uvrstio, između ostalih, i Aleksandra Mitrovića.\r\n\r\nPoslednji je trenutak da i Vi napravite Fantazi tim i da učestvujete u ovoj popularnoj igrici. Oprobajte se u ulozi selektora, okupite svoje društvo i takmičite se, a možete da igrate i javne lige. Najbolje očekuju i vredne nagrade.\r\n\r\nSvoj tim napravio je i jedan od najboljih poznavalaca fudbalske igre na Sport klubu Gojko Andrijašević. U idealnih 11 bilo je mesta i za najboljeg strelca u istoriji srpske reprezentacije Aleksandra Mitrovića, uz napomenu da je za selektora Gojko odabrao Dragana Stojkovića Piksija.\r\n\r\nFantazi tim Gojka Andrijaševića: Nojer, Kimih, Grimaldo, Gvardiol, Ridiger, Rodri, Gundogan, Virc, Saka, Mitrovic, Mbape. Rezerve: Donaruma, Laport, Grizman, Kejn. Selektor: Dragan Stojković Piksi.', 'uploads/666bffe00dfdb7.74602991.jpg', '2024-06-14 08:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','editor','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_type`) VALUES
(3, 'admin@gmail.com', '$2y$10$Fm4L8TbfYqe39gV9NediS.gvuLanrcuu0y84CttLVwL7pBB0tHj.u', 'admin'),
(4, 'korisnik1@gmail.com', '$2y$10$bmKJhl0C5..xyqWnqkWRW.Ze4lXi5K/Ws.jeJ3Df7//9WPKphE6NK', 'user'),
(5, 'korisnik2@gmail.com', '$2y$10$dhRSNe4AnYHCeheox4L.p.OjkxqSauZJOrNqVf9iEj46Cujmjbu8y', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`user_id`, `post_id`) VALUES
(5, 26),
(5, 28),
(5, 29),
(4, 30),
(4, 31),
(4, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD CONSTRAINT `user_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_posts_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
