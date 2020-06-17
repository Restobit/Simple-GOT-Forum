-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Máj 26. 22:04
-- Kiszolgáló verziója: 10.3.16-MariaDB
-- PHP verzió: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gamesofthrones`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact`
--

CREATE TABLE `contact` (
  `id` int(2) NOT NULL,
  `name` varchar(16) COLLATE latin2_hungarian_ci NOT NULL,
  `email` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `comment` varchar(250) COLLATE latin2_hungarian_ci NOT NULL,
  `sendDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`, `sendDate`) VALUES
(1, 'János', 'jani@game.com', 'Nagyon szép!', '2020-05-26'),
(2, 'Bence', 'bence@valami.hu', 'Igazán remek oldal. Kinek kell írni, ha admin szeretnék lenni? ', '2020-05-26'),
(3, 'Zoltán', 'zoli@asd.hu', 'Szép az oldal!', '2020-05-26');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dashboardcontent`
--

CREATE TABLE `dashboardcontent` (
  `id` int(4) NOT NULL,
  `content` text COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `dashboardcontent`
--

INSERT INTO `dashboardcontent` (`id`, `content`) VALUES
(1, 'A Game of Thrones (magyarul: Trónok harca) egy amerikai fanstasy dráma sorozat amit David Benioff és D. B. Weiss alkotott meg. Az egész történet George R. R. Martin könyvsorozatának (A Song of Ice and Fire) adaptációja. A sorozat cselekményei kitalált helyszíneken, Westerosban és Essosban játszódnak. Az első narratív szál egy dinasztikus konfliktust követ nyomon, amely során rengeteg karakter kerül összetűzésbe, hiszen nagyon sok ember célja az, hogy uralkodó válhasson belőle.A Trónok harca rengeteg nézőt vonz hétről-hétre a televíziók elé (az HBO-n láthatjuk) és már nemzetközi sikerre is szert tett szinte a sorozat indulásával egyidejűleg. Rengeteg jó kritikát kapott már neves kritikusoktól is, általában a színészei játékért, a karakterek komplexitásáért, a történetszálért, habár nagyon sok meztelenséget és erőszakot tartalmaz egy-egy epizód.'),
(2, 'A sorozatot jól fogadták a nézők és a kritikusok, így a bemutató után két nappal megrendelték a Királyok csatája című kötet alapján készült második évadot is, melyet az Egyesült Államokban 2012. április 1-jén, míg Magyarországon egy nappal később, április 2-án kezdett sugározni (eleinte feliratos változatban, majd április 15-től szinkronosan is) az HBO. A premierre 3,858 millió néző volt kíváncsi, ezzel a kábeles nézettség első helyezettje volt aznap. A jó nézettségre való tekintettel az HBO megrendelte a sorozat harmadik évadát, amely a Kardok vihara című kötet első feléből készült, a bemutató 2013. március 31-én volt. A negyedik évadot 2014. április 6-án kezdték el vetíteni, melynek évadzáró epizódját több mint hétmillióan nézték meg az Egyesült Államokban, ami így túlszárnyalta az eddigi rekordert, a Maffiózók negyedik évadzáróját. Az epizód letöltési és egyben torrent megosztási rekordot is döntött. Ötödik évadát 2015. április 12-én, míg a hatodikat 2016. április 24-én mutatták be.'),
(3, 'A hatodik etap évadzáró epizódja újabb nézettségi rekordot hozott, miután az Egyesült Államokban 8,89 millió nézőt ültetett a képernyők elé. A hetedik évad epizódjainak nézőszáma hétről hétre emelkedett, ezzel újabb és újabb rekordokat felállítva; az évadzáró részt több mint 12 millió amerikai követte élőben. A nyolcadik évad utolsó 6 része negatív kritikákat kapott a rajongóktól, de nézettségben soha nem látott sikerben részesült. Az utolsó rész rekordnézettséget ért el, 13,61 millió nézőt ültetett a képernyők elé. A kábelcsatorna történetében a Trónok harca lett a legnézettebb sorozat, az előző rekordot a Maffiózók 4. évadának premierje tartotta, 13,4 millió nézővel. A produkció zárórésze, ha az összes platformot nézzük (HBO, HBO GO és az HBO NOW) szolgáltatásokon együttvéve 19,3 millióan követték.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `seriescharacters`
--

CREATE TABLE `seriescharacters` (
  `id` int(4) NOT NULL,
  `seriesName` varchar(30) COLLATE latin2_hungarian_ci NOT NULL,
  `actorName` varchar(30) COLLATE latin2_hungarian_ci NOT NULL,
  `voiceActorName` varchar(30) COLLATE latin2_hungarian_ci NOT NULL,
  `pictureName` varchar(20) COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `seriescharacters`
--

INSERT INTO `seriescharacters` (`id`, `seriesName`, `actorName`, `voiceActorName`, `pictureName`) VALUES
(1, 'Daenerys Targaryen', 'Emilia Clarke', 'Molnár Ilona', 'daenerys_targaryen'),
(2, 'Havas Jon', 'Kit Harington', 'Czető Roland', 'havas_jon'),
(3, 'Tyrion Lannister', 'Peter Dinklage', 'Láng Balázs', 'tyrion_lannister');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `userName` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `password` varchar(32) COLLATE latin2_hungarian_ci NOT NULL,
  `email` varchar(25) COLLATE latin2_hungarian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `email`, `admin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@got.hu', 1),
(2, 'akos', '7815696ecbf1c96e6894b779456d330e', 'akos@valami.hu', 0),
(3, 'teszt', '6c90aa3760658846a86a263a4e92630e', 'teszt@got.hu', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `dashboardcontent`
--
ALTER TABLE `dashboardcontent`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `seriescharacters`
--
ALTER TABLE `seriescharacters`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `dashboardcontent`
--
ALTER TABLE `dashboardcontent`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `seriescharacters`
--
ALTER TABLE `seriescharacters`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
