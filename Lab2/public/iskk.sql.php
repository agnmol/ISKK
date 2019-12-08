-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Grd 08 d. 16:44
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskk`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `atsiliepimai`
--

CREATE TABLE `atsiliepimai` (
`id` int(11) NOT NULL,
`zvaigzdutes` int(11) NOT NULL,
`komentaras` text,
`data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
`knyga` int(11) NOT NULL,
`vardas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `atsiliepimai`
--

INSERT INTO `atsiliepimai` (`id`, `zvaigzdutes`, `komentaras`, `data`, `knyga`, `vardas`) VALUES
(1, 5, 'Nuostabi knyga. Skaitau su pasimėgavimu. Norėčiau kad ji niekada nesibaigtų.', '2019-05-01 00:00:00', 2, 'Vaida'),
(2, 5, '', '2019-02-24 00:00:00', 3, 'Virginija Ž.'),
(3, 5, 'Puiki knyga. Ilgai laukiau, kol surinkau visą seriją Sostų žaidimai. Dabar mėgaujuosi skaitymu.', '2019-07-20 00:00:00', 4, 'Ramona'),
(4, 5, '', '2019-04-04 00:00:00', 5, 'Rasita'),
(5, 5, '', '2018-12-20 00:00:00', 6, 'Inga');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `autoriai`
--

CREATE TABLE `autoriai` (
`id` int(11) NOT NULL,
`vardas_pavarde` varchar(50) NOT NULL,
`apie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `autoriai`
--

INSERT INTO `autoriai` (`id`, `vardas_pavarde`, `apie`) VALUES
(1, 'Mika Waltari', 'M. Valtari gimė 1908 m. rugsėjo 19 d. Helsinkyje. Rašytojo tėvas, liuteronų pastorius ir mokytojas, mirė, kai M. Valtari tebuvo penkerių. Motina liko su trimis vaikais, kuriuos padėjo užauginti giminaičiai. Ypač didelę įtaką M. Valtari augimui ir vertybių formavimuisi turėjo du jo dėdės – teologijos daktaras ir inžinierius. Jie buvo pirmaisiais M. Valtari mokytojais.\r\n\r\nŠeimos pageidavimu rašytojas studijavo teologiją Helsinkio universitete, bet po kiek laiko, nepaisydamas giminaičių protestų pakeitė studijas į filosofiją, estetiką ir literatūrą. Universitetą M. Valtari baigė 1929 m.\r\n\r\n1930–1940 metais rašytojas dirbo žurnalistu ir literatūros kritiku keliuose žurnaluose ir laikraščiuose. Daug keliavo, rašė kelionių apybraižas.\r\n\r\n1931 m. M. Valtari vedė Marjata Lukonen (Marjatta Luukkonen). Jiems gimė dukra Satu, kuri taip pat tapo rašytoja.\r\n\r\nIstorine tematika M. Valtari susidomėjo po karo. 1945 m. buvo išleistas pirmasis Sinuhės Egiptiečio leidimas. Šis ir kiti istoriniai romanai atnešė rašytojui pasaulinę šlovę.\r\n\r\nM. Valtari mirė 1979 m. rugpjūčio 26 d.'),
(2, 'Harper Lee', 'Harpera Lee (Harper Lee) - knygos „Nežudyk strazdo giesmininko“ (To Kill A Mockingbird) autorė.\r\n\r\n\r\nRašytoja gimė 1926 m. pietinėje Amerikos valstijoje Monrevilyje, Alabamoje.\r\n\r\nJos motina didelę savo gyvenimo dalį kentėjo nuo psichinės ligos. Tėvas buvo teisininkas, Harpera vėliau taip pat pasirinko teisės studijas Alabamos universitete.\r\n\r\nDar vaikystėje Harpera artimai\r\nsusidraugavo su būsimuoju rašytoju Trumanu Kapote, kuris gyveno Harper\r\nLee kaiminystėje. Spėjama, kad knygos personažas Dilas buvo įkvėptas\r\nTrumano. Jų draugystė tęsėsi visą gyvenimą.\r\n\r\n\r\n\r\nJau mokydamasi mokykloje susidomėjo anglų literatūra. 1944 m. baigusi mokyklą, įstojo į Huntingdono koledžą. Studijų metu ji pradėjo rašyti straipsnius humoristiniame Rammer Jammer žurnale, vėliau tapo jo redaktore. Vėliau dėl pasirinktų teisės studijų turėjo palikti šio leidinio redaktorės postą.\r\n\r\n\r\nHarpera buvo individualistė ir atsiskyrėlė. Po pirmų studijų metų Harpera netikėtai nusprendė, kad ne teisė, o rašymas yra jos vienintelis tikrasis pašaukimas, todėl metams išvyko į Oksfordo universitetą kaip mainų studentė, o vos grįžusi metė teisės studijas ir 23 metų persikėlė į Niujorką, siekdama tapti rašytoja. Kad pragyventų, kurį laiką dirbo bilietų pardavėja, vėliau susipažino su kompozitoriumi Maiklu Martinu Braunu ir jo žmona.\r\n\r\n1956 m. ši pora Harperai padovanojo įspūdingą Kalėdų dovaną – metus truksiantį jos išlaikymą tam, kad ji galėtų pilnai atsidėti rašymui. Harpera metė darbą ir 1959 m. baigė rašyti savo kultinį romaną \"Nežudyk strazdo giesmininko\".\r\nPraėjus vos metams po išleidimo, knyga laimėjo prestižinį Pulicerio apdovanojimą, neilgai trukus pagal ją buvo pastatytas ir filmas.'),
(3, 'George R. R. Martin', 'Džordžas R. R. Martinas gimė 1948 m. rugsėjo 20 d. Bajone, Naujajame Džersyje, uosto kroviko šeimoje, kuri gyveno neturtingiesiems skirtuose gyvenamuosiuose namuose, šalia Bajono dokų. Mokydamasis Maristo vidurinėje mokykloje, susidomėjo superherojaus žanru, itin „Marvel Comics“ leidžiamais komiksais.[1] Pamažu tapo apsėstas 1960-ųjų komiksų (Sidabrinis komiksų amžius) ir ėmė jos kolekcionuoti. 20-ame „Fantastiškojo ketverto“ leidime yra išspausdintas Martino laiškas, skirtas komikso redaktoriui, kurį jis parašė dar tebesimokydamasis Maristo vidurinėje. 1965 m., būdamas paaugliu, gavo Alley apdovanojimą už savo pirmąjį mėgėjišką superherojaus žanro kūrinį „Powerman vs. The Blue Barrier“.\r\n\r\n1970 m. Martinui buvo įteiktas žurnalistikos bakalauro diplomas su pagyrimu (summa cum laude) Šiaurės Vakarų universitete, Evanstone, Ilinojus. Vėliau, 1971 m., jis nusprendė siekti magistro laipsnio tame pačiame universitete. Maždaug tuo metu jis ėmė rašyti mokslinės fantastikos žanro apsakymus. Kūrinys „With Morning Comes Mistfall“, išleistas 1973 m. žurnalo „Analog“, buvo nominuotas Hugo bei Nebula premijoms.\r\n\r\nJis taip pat yra sukūręs bent vieną politinės-karinės literatūros kūrinį, kaip kad „Night of the Vampyres“, kuris įtrauktas į Harry Turtledove „Geriausių XX a. karinės mokslinės literatūros kūrinių“ antologiją.[2]\r\n\r\nXX a. 9-ajame dešimtmetyje ėmė rašyti scenarijus TV serialams bei dirbo įvairių knygų serijų redaktoriumi.\r\n\r\n1987 m. Martino romanas „Nightflyers“ buvo adaptuotas į to paties pavadinimo filmą.\r\n\r\nMartinas taip pat dėstė žurnalistiką koledže ir direktoriavo šachmatų turnyre. Laisvalaikiu jis kolekcionuoja viduramžių tematikos miniatiūras, skaito ir pildo mėgiamų žanrų knygų kolekciją, kurioje yra pirmieji „Žmogaus-voro“ ir „Fantastiškojo ketverto“ numeriai.\r\n\r\nLedo ir ugnies giesmė\r\nPagrindinis straipsnis – Ledo ir ugnies giesmė.\r\n1991 m. Martinas trumpam grįžo prie romanų rašymo ir pradėjo savo epinės maginės fantastikos sagą „Ledo ir ugnies giesmė“. Įtaką šiai knygų serijai padarė taip vadinami Rožių karai, vykę 1455–1487 m. Anglijoje, bei Volterio Skoto istorinis romanas „Aivenhas“ (1819). Pirmasis tomas „Sostų žaidimas“ buvo išleistas 1996 m.'),
(4, 'Antoine de Saint-Exupery', 'Gimė gausioje penkių vaikų provincijos dvarininko šeimoje. Antuano tėvas mirė, kai būsimam rašytojui buvo vos ketveri. Mokėsi Liono mokykloje, vėliau Fribūro kolegijoje. Neišlaikęs stojamųjų egzaminų stojo į Prancūzijos karinę jūrų akademiją, tapo Dailės akademijos laisvuoju klausytoju. Studijavo architektūrą. Nuo 1921 m. pradėjo tarnybą Prancūzijos kariuomenės oro pajėgose Strasbūre. Dirbo remonto dirbtuvėse, netrukus išlaikė civilinės aviacijos lakūno egzaminus, vėliau, pervestas į Maroką, tapo karo lakūnu. 1922 m. baigė atsargos karininkų kursus ir buvo paskirtas tarnauti į aviacijos pulką netoli Paryžiaus. 1923 m. pateko į aviakatastrofą ir buvo atleistas iš kariuomenės. Dirbo įvairius darbus, kol 1926 m. įsidarbino lakūnu Prancūzijos pašto aviacijos kompanijoje „Aéropostale“, gabenusioje siuntas maršrutu Tulūza – Kasablanka. 1926 m. paskirtas Tarfaja stoties viršininku, joje dirbo pusantrų metu ir tuo pat metu parašė pirmą apsakymą „Pietų paštas“. 1929 m. įstojo į Bresto aukštuosius jūrų aviacijos kursus. Tais pat metais perkeltas į Argentiną, kur buvo paskirtas „Aeroposta Argentina“ aviakompanijos direktoriumi. 1931 m. parašė jį išgarsinusį romaną „Naktinis skridimas“. 1931 m. grįžo į Prancūziją, vėl dirbo lakūnu įvairiose avialinijose. 1935 m. gruodžio 30 d. liko gyvas, kai jo lėktuvas, bandant pasiekti greičio rekordą, nukrito Sacharos dykumoje. 1936 m. dirbo Prancūzijos laikraščio korespondentu Ispanijos pilietiniame kare. 1938 m. sausį persikėlė į Niujorką, iš kurio vasarį bandė skristi į Ugnies Žemę, tačiau jo lėktuvas patyrė katastrofą Gvatemaloje. Grįžo gydytis į Prancūziją. Prasidėjus Antrajam pasauliniam karui, pradėjo tarnauti Prancūzijos aviacijos žvalgybos dalinyje. Po to, kai 1941 m. Trečiasis Reichas nugalėjo Prancūziją, persikėlė į Niujorką, kur 1942 m. parašė garsiausią kūrinį „Mažasis princas“. 1943 m. vėl grįžo tarnauti į Prancūzijos oro pajėgų žvalgybinę aviaciją.'),
(5, 'Emilie St. John Mandel', 'Niujorke gyvenanti kanadiečių kilmės rašytoja, keturių romanų autorė.');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `grupes`
--

CREATE TABLE `grupes` (
`id` int(11) NOT NULL,
`pavadinimas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `grupes`
--

INSERT INTO `grupes` (`id`, `pavadinimas`) VALUES
(1, 'Grožinė literatūra'),
(2, 'Menas'),
(4, 'Akademinė literatūra'),
(5, 'Kulinarija');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `knygos`
--

CREATE TABLE `knygos` (
`id` int(11) NOT NULL,
`pavadinimas` varchar(50) NOT NULL,
`aprasymas` text NOT NULL,
`data` date NOT NULL,
`puslapiai` int(11) NOT NULL,
`autorius` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `knygos`
--

INSERT INTO `knygos` (`id`, `pavadinimas`, `aprasymas`, `data`, `puslapiai`, `autorius`) VALUES
(2, 'Sinuhė egiptietis', 'Paprasta, tačiau vaizdinga ir šiek tiek senoviška kalba Sinuhė, likimo valia nugyvenęs gyvenimą, kupiną nuotykių, meilės, intringų ir neapykantos, atskleidžia, ką galvojo, jautė ir ko siekė.\r\n\r\nGyvensiu verksme ir džiaugsme, liūdesy ir baimėje, gerume ir piktybėje, tiesoje ir skriaudoje, silpnume ir stiprybėje. Kaip žmogus gyvensiu žmoguje per amžius, todėl aukų mano kapui nereikia ir nemirtingumo mano vardui nereikia. Tai parašė Sinuhė egiptietis, Tas, kuris visą gyvenimą buvo vienišas.\r\n\r\nFaraono Echnatono valdymo laikotarpis, valdovo viltys reformuoti šalį, jo didingi užmojai, egiptiečių nusivylimas ir Egipto žlugimas praplaukia pro mūsų akis tarsi nepaprastai ryškus filmas, pasakojantis tiek apie didingą kraštą, tiek apie vieną žmogų įvykių verpete - karališkąjį faraono rūmų gydytoją Sinuhę.', '2017-01-01', 656, 1),
(3, 'Nežudyk strazdo giesmininko', 'Garbingo gyvenimo kukli pamoka – taip keliais žodžiais būtų galima apibūdinti šią knygą. Ir dar: nemanykite, kad tik vaikai turi mokytis iš suaugusiųjų – kai ko ir suaugę gali pasimokyti iš vaikų.\r\n\r\nRomanas pilnas šviesaus liūdesio ir tylaus džiaugsmo, kuriuos žmogui atneša sąžiningumas ir tolerancija, o atima žiaurumas ir prietarai. Nors vaizduojami įvykiai yra tarsi toli nuo mūsų, autorės išpažįstamos vertybės aktualios visiems žmonėms, kad ir kokiame pasaulio kampelyje jie gyventų.\r\n\r\nNežudyk strazdo giesmininko, išspausdintas 1960 m., jau po metų gavo prestižinę Pulicerio premiją ir paplito po daugelį pasaulio šalių.', '2014-01-01', 400, 2),
(4, 'SOSTŲ KARAI: Kardų audra. Ledo ir ugnies giesmė.', 'Trečiojoje „Ledo ir ugnies giesmės“ knygoje George’as R. R. Martinas nesiliauja skaitytojus stebinęs savo sukurtų personažų nuotykiais ir likimais. Ir toliau meistriškai pinama intriga, išaiškėja daugybė paslapčių, bet dar daugiau jų atsiranda.\r\n\r\nDėl Geležinio sosto ir valdžios prasideda pražūtingas Penkių Karalių karas, ir tik Stanis Barateonas susivokia, kad Vesterosą pirma reikia apginti nuo baisios grėsmės iš Šiaurės, – nes iš ten jau slenka Tamsa ir Šaltis, kraštui ir žmonėms nešdami pražūtį, – tik tada rūpintis sostu ir valdžia. Jis vienintelis atsiliepia į Nakties sargybos brolių pagalbos šauksmą, nes jie vieni nebepajėgia grumtis su visos Šiaurės magiškomis galiomis ir tyržmonių gentimis, kurios gelbėdamosi veržiasi šion pusėn Sienos.\r\n\r\nVesterosas nusiaubtas tarpusavio karų, suniokotas ir išgriautas Vinterfelas, upių kraštuose siaučia badas ir plėšikai, o didžiūnai be perstojo kariauja vieni su kitais, sudaromos netvarios išdavikiškos sąjungos, kiekvienas ieško naudos sau. Atrodo, jog doram žmogui Septyniose Karalystėse neliko vietos.\r\n\r\nAr ką bepakeis ir grįžusi Daneiris su savo drakonais? O ir šie užaugs dar negreit. Tuo tarpu į sostą pasodinamas mažylis Tomenas, o už jį valdo Taivinas Lanisteris, grėsmingoji karaliaus ranka. Tik ar ilgam?\r\n\r\n„Amerikietiškuoju Tolkienu“ pramintas George’as R. R. Martinas sukūrė didingą sakmę apie garbę, meilę, kerštą ir kovą. Jaudinanti, tikroviška ir kartu pranokstanti vaizduotę epopėja džiugina milijonus fantasy žanro gerbėjų, o ištikimiausi jos skaitytojai nekantriai laukia tolesnių kelionių po magišką fantastinį pasaulį.\r\n\r\nPagal šią ir ankstesnes „Ledo ir ugnies giesmės“ knygas sukurtas ne mažiau populiarus pasaulyje serialas.', '2014-01-01', 992, 3),
(5, 'Mažasis princas', 'Antoine de Saint-Exupéry, prancūzų rašytojas ir lakūnas, gimė 1900 m. Lione. Būdamas dvylikos metų, pirmą kartą pakilo į orą lėktuvu, ir šis įvykis nulėmė jo likimą: jis tapo profesionaliu lakūnu. Savo ir draugų skrydžius, dangaus ir žemės keliones jis aprašė knygose „Pietų paštas\" (1929), „Naktinis skrydis\" (1931), „Žemė\", „Žmonių planeta\"(1939), „Karo lakūnas\" (1942) ir kt. Šios knygos išverstos į pagrindines pasaulio kalbas, taip pat į lietuvių kalbą.\r\n\r\nAntrojo pasaulinio karo metais rašytojas tarnavo karo žvalgybos aviacijoje. 1943 m. parašė „Mažąjį princą\", atnešusį jam neblėstančią šlovę. Tai klasika tapusi alegorinė pasaka, iki šiol žavinti viso pasaulio vaikus ir suaugusius žmones. A. de S.-Exupéry moko mus išminties nemoralizuodamas ir nenusileisdamas iki sentimentalumo. Tai knyga apie berniuką iš kitos planetos, apie jo tarpplanetines keliones ir sykiu išmintingas pasakojimas apie žmogaus lemtį.\r\n\r\nRašytojas žuvo 1944 m. liepos 31 d. vykdydamas karinę užduotį.', '2009-01-01', 104, 4),
(6, 'Vienuolikta stotis', '„Vienuolikta stotis“ – istorija apie atmintį, praradimus, ilgesį ir trapų pasaulio grožį.\r\n\r\nKirsten niekada nepamirš to vakaro, kai Arturas Leanderis, garsus Holivudo aktorius, vaidindamas „Karalių Lyrą\" scenoje patyrė širdies smūgį... Nes kaip tik tuo metu ėmė sklisti žinios apie keistą gripą, kilusį Gruzijoje. O po kelių savaičių pasaulis neatpažįstamai pasikeitė...\r\n\r\nPraėjus dviem dešimtmečiams Kirsten su nedidele aktorių bei muzikantų grupe, vaidinančia Šekspyrą ir grojančia, keliauja po žlugusios civilizacijos griuvėsius. Jie vadina save Keliaujančia Simfonija, jų noras – išsaugoti meno ir žmoniškumo likučius. Kirsten mažai ką prisimena iš buvusio gyvenimo. Ant jos rankos ištatuiruota „Išgyventi – nėra svarbiausia\". O kas gi svarbiausia tada, kai, rodosi, nebelieka nieko, kuo gyveno žmogus?\r\n\r\nRomanas apdovanotas Arthuro C. Clarko ir Toronto knygų premijomis, pristatytas JAV nacionalinei knygų ir PEN/Faulknerio premijoms. Kūrinį metų knyga išrinko tokie leidiniai kaip The Washington Post, San Francisco Chronicle, Chicago Tribune, Entertainment Weekly, Time ir kt. Kūrinys išverstas į 28 kalbas.\r\n\r\nNuostabus romanas... jis kviečia mus ne baimintis dėl pasaulio pabaigos, o vertinti tą malonę, kurią mums duoda kasdienybė.\r\n\r\nSan Francisko Chronicle\r\n\r\nTrikdanti, išradinga ir jaudinanti „Vienuolikta stotis\" privertė mane ilgėtis pasaulio, kuriame vis dar gyvenu.\r\n\r\nJessie Burton\r\n\r\nEmily St. John Mandel – Niujorke gyvenanti kanadiečių kilmės rašytoja, keturių romanų autorė.', '2016-01-01', 424, 5);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `knygos_grupes`
--

CREATE TABLE `knygos_grupes` (
`grupe` int(11) NOT NULL,
`knyga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `knygos_grupes`
--

INSERT INTO `knygos_grupes` (`grupe`, `knyga`) VALUES
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
ADD PRIMARY KEY (`id`),
ADD KEY `paliekamas_apie` (`knyga`);

--
-- Indexes for table `autoriai`
--
ALTER TABLE `autoriai`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupes`
--
ALTER TABLE `grupes`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knygos`
--
ALTER TABLE `knygos`
ADD PRIMARY KEY (`id`),
ADD KEY `parase` (`autorius`);

--
-- Indexes for table `knygos_grupes`
--
ALTER TABLE `knygos_grupes`
ADD PRIMARY KEY (`grupe`,`knyga`),
ADD KEY `knyga` (`knyga`),
ADD KEY `grupe` (`grupe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `autoriai`
--
ALTER TABLE `autoriai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grupes`
--
ALTER TABLE `grupes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `knygos`
--
ALTER TABLE `knygos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `atsiliepimai`
--
ALTER TABLE `atsiliepimai`
ADD CONSTRAINT `paliekamas_apie` FOREIGN KEY (`knyga`) REFERENCES `knygos` (`id`);

--
-- Apribojimai lentelei `knygos`
--
ALTER TABLE `knygos`
ADD CONSTRAINT `parase` FOREIGN KEY (`autorius`) REFERENCES `autoriai` (`id`);

--
-- Apribojimai lentelei `knygos_grupes`
--
ALTER TABLE `knygos_grupes`
ADD CONSTRAINT `knygos_grupes_ibfk_1` FOREIGN KEY (`knyga`) REFERENCES `knygos` (`id`),
ADD CONSTRAINT `priklauso` FOREIGN KEY (`grupe`) REFERENCES `grupes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
