-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 12:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzeum`
--
CREATE DATABASE IF NOT EXISTS `muzeum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `muzeum`;

-- --------------------------------------------------------

--
-- Table structure for table `kiallitasok`
--

DROP TABLE IF EXISTS `kiallitasok`;
CREATE TABLE IF NOT EXISTS `kiallitasok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(100) NOT NULL,
  `leiras` text NOT NULL,
  `kezdete` date NOT NULL,
  `vege` date NOT NULL,
  `tarlatvezeto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kiallitasok`
--

INSERT INTO `kiallitasok` (`id`, `nev`, `leiras`, `kezdete`, `vege`, `tarlatvezeto`) VALUES
(1, 'Közös Időnk 1989/1990', 'Magyarország ezeregyszáz éves történelmének egyik legjelentősebb éve 1989. A Kádár-rendszer diktatúrájának évek óta tartó felpuhulása (a hazai, valamint a környező szocialista országokban bekövetkező ellenzéki mozgalmaknak, illetve a Szovjetunióban zajló gorbacsovi reformoknak köszönhetően) ebben az esztendőben érte el tetőpontját, rendkívüli politikai, társadalmi és életmódbeli változásokat idézve elő.', '2019-05-16', '2019-09-16', 'Ács Miklós'),
(2, 'Kötődések', 'A betűk, a nyomhagyás különféle tárgyi emlékei után 2019-ben a kötődéseket keressük az újkőkortól a 18. századig. Most nyíló útvonalunkon arra hívjuk látogatóinkat, gondoljuk végig együtt: hogyan szerveződtek az egyének különböző csoportokká az évezredek során. Milyen hasonlóságok kötötték össze a kisebb-nagyobb közösségek tagjait? Milyen különbségek választották el őket egymástól? Mit mutatnak a tárgyak az emberi kapcsolatok sokféleségéről a történelemben, és mai szemmel nézve vajon hogyan, hányféleképpen köthetők össze egymással?', '2019-05-17', '2019-09-17', 'Vad Virág'),
(3, 'A Rákócziak', 'A Rákócziak tárgyi örökségét számos magyarországi és határon túli múzeum, levéltár, könyvtár, egyházi gyűjtemény és gyülekezet őrzi. Féltett kincseiktől ritkán és csak rövid időre válnak meg, így csak kivételes alkalmakkor, évfordulókkor van lehetőség arra, hogy ezeket a tárgyakat egy helyen láthassák az érdeklődők', '2020-01-18', '2020-05-18', 'Mikes Kelemen'),
(4, 'Mátyás kora', 'I. Mátyás, születési nevén Hunyadi Mátyás (Kolozsvár, 1443. február 23. – Bécs, 1490. április 6.) Magyarország és Horvátország királya 1458-tól, cseh király 1469-től, Ausztria uralkodó főhercege 1486-tól haláláig. Közkeletűen Corvin Mátyás vagy Igazságos Mátyás néven is ismert.', '2019-12-12', '2020-06-18', 'Rónai Jólia'),
(5, 'Clara', 'Rotschild Klára egyszerre volt a Horthy-kor arisztokratáinak és a Kádár-korszak nagyasszonyainak a divattervezője. Szalonjában rendszeres vendég volt Kádárné, Tito marsall felesége, a szovjet külügyminiszter és a perzsa sah neje, a magyar művészvilág csillagai. Vajon miként volt lehetséges, hogy a második világháború előtt és után is ilyen kimagasló sikereket ért el? A CLARA - Rotschild Klára – divatkirálynő a vasfüggöny mögött című kiállítás egyszerre mutatja be egy sikeres nő életútját, egy korszak elitjének öltözködési kultúráját, valamint a szocialista Magyarország kétarcú, ellentmondásokkal terhelt időszakát.', '2019-05-20', '2019-09-20', 'Kukorica János'),
(6, 'Magyar Világ', 'Nyolcvan évvel ezelőtt, 1938–1940-ben Magyarország változóban volt. A békés területi revíziókkal letörni látszódtak Trianon bilincsei, ugyanakkor a Harmadik Birodalom közvetlen szomszédsága és egyre növekvő európai befolyása, majd a kirobbanó második világháború egyre jobban veszélyeztette a magyar önállóságot.', '2019-03-21', '2019-07-21', 'Németh Jolán'),
(7, 'Az ókori Kína', 'Hogyan ismerhető meg egy több évezredes múltra visszatekintő ázsiai kultúra művészete? Milyen birodalmi központokból működött egykor Kína, s ma milyen tárgyait ismerjük e múltnak? Milyen összefüggések rajzolhatók fel a régészeti leletekből? Hogyan jellemezhető Kína udvari kultúrája az egyes korokban?', '2020-01-02', '2020-09-22', 'Tank Aranka'),
(8, 'Ősemberek', 'Magyar szakemberek közreműködésével nyílik decemberben Franciaországban egy nemzetközi barlangművészeti központ, amely a lascaux-i barlangrajzokat és az őskori ember életét mutatja be.', '2020-01-03', '2020-09-23', 'Vámos Orsolya'),
(9, 'Acél és szív', 'A csaknem félezer, részben soha be nem mutatott tárgyat felvonultató ACÉL és SZÍV kiállítás a honfoglalástól a 19. századig vonultatja fel a fegyverek történelmet alakító szerepét, a különböző korok társadalmának vadászati eszközeit. Mindezt - külön teremben - az Európa sorsát hosszan meghatározó oszmán birodalom harci relikviái egészítik ki, de hangsúlyos szerepet kapnak olyan képző-és iparművészeti alkotások is, amelyek a hadtörténethez és a vadászathoz kapcsolódnak.', '2020-01-04', '2020-09-24', 'Gábor Gábor'),
(10, 'A koronázási palást', 'A palást eredetileg harang alakú, zárt miseruha volt, amelyet később alakítottak át palásttá. A ráhímzett felirat szerint Szent István király (997–1038) és Gizella királyné készíttette és ajándékozta 1031-ben a székesfehérvári Szűz Mária-egyháznak: ANNo INcARNACIONIS XPI : MXXXI : INDICCIONE : XIIII A STEPHANO REGE ET GISLA REGINA CASULA HEC OPERATA ET DATA ECCLESIAE SANCTA MARIAE SITAE IN CIVITATE ALBA. ', '2020-01-05', '2020-11-02', 'Takács István'),
(11, 'Kelet és Nyugat határán', 'Régészeti kiállításunk az őskőkortól a honfoglalásig tárja látogatóink elé a magyar föld népeinek történetét. A használati tárgyak, ékszerek, fegyverek, hangszerek és sok egyéb lelet a Kr. e. 400 000 – Kr. u. 804-ig tartó korszakból származik, amelyeket izgalmas ásatások során, vagy épp szerencsének köszönhetően találtak meg az elmúlt évszázadokban. Tíz teremre osztva az egyes korok emlékeivel találkozhat a látogató.', '2020-01-06', '2020-11-03', 'Berényi Miklós'),
(12, 'Hunok és Magyarok', '', '2020-01-07', '2020-11-04', 'Árpád Előd'),
(13, 'Magyar őshaza', 'A magyarság ősei a legelterjedtebb nézet szerint részben Ázsiából származó időszakos legelőváltó állattenyésztő törzsek voltak. Vándorlásaik során sok más néppel kapcsolatba kerültek. Ennek során kultúrájuk gazdagodott olyan elemekkel, amelyeket korábban nem ismertek, miközben maguk is átadták saját kultúrájukat. A kiterjedt kereskedelem ez időben valószínűleg egy közlekedőnyelvet alakított ki.', '2020-01-08', '2020-11-05', 'Bogár Mihály'),
(14, 'Lapidárium', 'A kiállítás a múzeum nemzetközileg is számon tartott gazdag gyűjteményéből a legjellemzőbb kőemlék típusokat mutatja be: urnatartó kőedényt, sírköveket, szarkofágokat, kis, templom formájú síremlékek (aediculák) elemeit, isteneknek szentelt fogadalmi oltárokat és építkezéseket megörökítő feliratokat.', '2020-01-09', '2020-11-06', 'Áts Gyula'),
(15, 'A Seuso-kincs', 'A Seuso-kincs. Pannonia fénye című kiállításon három elegáns térben csodálhatja meg a közönség a késő római császárkor egyik legértékesebb leletegyüttesét. A Magyar Nemzeti Múzeumban átadott új kiállítóterek a legkorszerűbb kiállítástechnikai és műtárgyvédelmi eszközökkel büszkélkedhetnek, miközben az átalakítás során a műemlékvédelmi szempontok is messzemenően érvényesültek.  A megújult impozáns terek kiemelik a Seuso-kincs egyedi művészi értékét, a megújult kurátori koncepció pedig abban segíti a 21. század látogatóit, hogy dekódolják a kincs ezüstedényeinek üzenetét.', '2020-01-10', '2020-11-07', 'Hosszú Patrik'),
(16, 'Hódító Spanyolok', 'A konkvisztádorok vagy konkisztádorok (a spanyol conquistador ’hódító’ szóból, a conquistar ’hódítani’ igéből) a 16–17. században Közép- és Dél-Amerikát gyarmatosító spanyol és portugál felfedezők és hódítók gyűjtőneve. Többségük elszegényedett spanyol nemes, ún. hidalgo, kalandor vállalkozó volt, akiket az amerikai bennszülöttek arany- és ezüstkincsei motiváltak. ', '2020-01-11', '2020-11-08', 'Cintula Viktor'),
(17, 'Angol gyarmatok', 'A Brit Birodalom Anglia, majd az Egyesült Királyság fennhatósága alá tartozó területek összessége volt. Ebbe beletartoztak az ország gyarmatai, domíniumai, protektorátusai, bábállamai és egyéb területei. Ez volt a Földön valaha létezett legnagyobb kiterjedésű, lakosságú és gazdasági erejű gyarmattartó birodalom. Kialakulása a nagy földrajzi felfedezések korában, a 16. században kezdődött, amikor Spanyolország és Portugália mellett Anglia is kivette részét az újonnan felfedezett területek gyarmatosításából és a tengerek uralmáért folyó versenyfutásból.', '2020-01-12', '2020-11-09', 'Kis Katalin'),
(18, 'Impresszionista festmények', '', '2020-01-13', '2020-11-10', 'Hámori József'),
(19, 'Ady Endre öröksége', 'Ady Endre utolsó budapesti lakása, tárgyai, bútorai. Látogatás az Ady Endre Emlékmúzeumban. A Petőfi Irodalmi Múzeum filiáléja. A budapesti Ady Endre Emlékmúzeum Ady Endre születésének századik évfordulójára, 1977-ben, a költő emlékére létrehozott kiállítóhely. Ady Endre első és egyetlen, Csinszkával közös lakása a pesti belváros forgalmas régi utcájában található. A Petőfi Irodalmi Múzeum alakította ki a költő utolsó lakhelyén, a budapesti V. kerületi Veres Pálné utca 4-6. szám alatt a kiállítótermet. Ady felesége Bocza Berta apja halála után örökölte. A házaspár 1917 őszétől a költő haláláig lakott itt. A három szoba az eredeti személyes tárgyakat mutatja be, a dokumentumok pedig Ady háborús éveiről szólnak.', '2020-01-14', '2020-11-11', 'Vigh Nóra'),
(20, 'A Titanic rejtélye', 'Már több mint százezren látták a világhírű Titanic kiállítást! Ne maradjon le Ön sem! Jöjjön el és érezze át a múlt század elejének, valamint a Titanic történetének varázslatos hangulatát! Szívesen sétálna a Titanic első osztályának híres, fehér folyosóján?', '2020-01-15', '2020-11-12', 'Gáspár Ramóna'),
(21, 'Sarkvidéki élet', '', '2020-01-16', '2020-11-13', 'Gáspár Dénes'),
(22, 'A gasztronómia fejlődése', 'Ma a történészek úgy vélik, sok szerencsés véletlen összejátszása folytán tanult meg az ember főzni. A kutatások azt sejtetik, hogy a Földön először a pekingi ember használta a tüzet, ám még nem főzött vele. Valamikor a Neander-völgyi ember kialakulása körül fedezhették fel a főzést, kb. 75 000 évvel ezelőtt. Az ősember levelekbe is burkolhatta, illetve agyaggal kenhette be ételét, melyet aztán a forró parázsba helyezett, de akár nyárson is megsüthette. Az első fazék a leletek szerint csupán egy kő volt, amelybe mélyedést csiszoltak.', '2020-01-17', '2020-11-14', 'Rácz Éva'),
(23, 'Ókori gondolkodók', 'A filozófus olyan ember, aki – akár hivatásszerűen, akár másképp – foglalkozik a filozófiával.', '2020-01-18', '2020-11-15', 'Orsós Gergely'),
(24, 'Török szultánok', '', '2020-01-19', '2020-11-16', 'Erdős Mária'),
(25, 'Széchenyi munkássága', 'Az emeleti kiállítás Széchenyi életművét mutatja be.  Elsőként az egyik legjelentősebb alkotásával a  Lánchíd történetével ismerkedhetünk meg.', '2020-01-20', '2020-11-17', 'Szalontai Győző');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
