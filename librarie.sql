-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2013 at 03:37 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarie`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE IF NOT EXISTS `autori` (
  `id_autor` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nume_autor` text NOT NULL,
  PRIMARY KEY (`id_autor`),
  KEY `id_autor` (`id_autor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`id_autor`, `nume_autor`) VALUES
(1, 'Monica Ponta'),
(2, 'Adela Draucean'),
(3, 'Pr. Lect. Dr. Lucian Farcasiu'),
(4, 'Pr. Dr. Stefan Negreanu'),
(5, 'Otilia Hutiu, Monica Ponta'),
(6, 'Dumitru Marcus'),
(7, 'Teodor Baba'),
(8, 'Anton Ilica'),
(9, 'Gabriela Kelemen'),
(10, 'Camelia-Nadia Bran'),
(11, 'Olga Domnica Moldovan'),
(12, 'Luminita Ioana Mazuru, Aureliana Man  '),
(13, 'Boghicevici Claudia'),
(14, 'Luminita Mazuru, Bogdan Gomoi, Aureliana Man'),
(15, 'Radu S. Cureteanu '),
(16, 'Adriana M. Motica'),
(17, 'Eugen-Dumitru Busa'),
(18, 'Iuliu Deac, Simona Magdalena Fogorasi, Anamaria Albac'),
(19, 'Anca Mihaela Dicu, Simona Perta-Crisan'),
(20, 'Claudiu Ursachi, Claudia Muresan'),
(21, 'Michaela Dina Stanescu, Sergiu Erich Palcu, Simona Gavrilas'),
(22, 'Ioan Csosz, Oana Brizan, Sabin Chis, Cristian Edmund Csosz, Ramona Ciolac, Sabin Chis Jr. '),
(23, 'Podrumar Teodor, Zdremtan Monica'),
(24, 'Gheorghe Cheta'),
(25, 'Ioan Dzitac'),
(26, 'Carmen Fifor');

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

CREATE TABLE IF NOT EXISTS `carti` (
  `id_carte` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_autor` smallint(6) NOT NULL,
  `id_domeniu` smallint(6) NOT NULL,
  `nume_autor` text NOT NULL,
  `titlu` text NOT NULL,
  `an_aparitie` smallint(6) NOT NULL,
  `isbn` text NOT NULL,
  `descriere` text NOT NULL,
  `pret` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id_carte`),
  KEY `id_carte` (`id_carte`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`id_carte`, `id_autor`, `id_domeniu`, `nume_autor`, `titlu`, `an_aparitie`, `isbn`, `descriere`, `pret`) VALUES
(1, 1, 1, 'Monica Ponta', 'A Colection of texts about Great Britain History. Part I', 2011, '978-973-752-560-4', 'It is a collection of texts, arranged in a chronological order, debating topics connected with the history of Great Britain since stone age up to the present day. The book is used for giving historical, political and social information, for creating the background of the literarz phenomena and for offering material to be used during teaching classes.', 25),
(2, 1, 1, 'Monica Ponta', 'A collection of texts about Great Britain History. Part II', 2011, '978-973-752-561-1', 'It is a collection of texts, arranged in a chronological order, debating topics connected with the history of Great Britain since stone age up to the present day. The book is used for giving historical, political and social information, for creating the background of the literarz phenomena and for offering material to be used during teaching classes.', 25),
(3, 2, 1, 'Adela Draucean', 'Clasicii junimisti si folclorul', 2011, '978-973-752-590-1', 'Clasicii junimisti si folclorul propune abordarea  operei lui Eminescu, Creanga, Caragiale, Slavici, in care exista un filon al literaturii populare. Scopul cercetarii a fost acela de a evidentia modul si gradul de apropierea scriitorilor de productiile poporului si in acelasi timp prin ce se distinge creatia culta a clasicilor junimisti, marcata, fara indoiala, de contactul fecund cu folclorul.', 25),
(4, 3, 2, 'Pr. Lect. Dr. Lucian Farcasiu', 'Teologia Imnografiei Praznicelor Imparatesti ale Manturitorului Iisus Hristos. Studiu Liturgic Istoric', 2012, '978-973-752-635-9', 'Referirile la expresiile poetice ale textului imnografic, profunzimea si claritatea teologica a acestor expresii, identificarea esentelor, asezarea lor intr-o sinteza teologica sistematica, intr-o viziune unitara privind iconomia mantuirii lumii si unirea dintre Dumnezeu si Om in Iisus Hristos, dau acestei lucrari sansa de a contribui fundamental la constructia unei dimensiuni innoitoare a Liturgicii in teologia romaneasca. Hermeneutica autorului pune in valoare suficiente indicii de depasire a marilor sciziuni si reductionisme ale scolasticii medievale.', 20),
(5, 4, 2, 'Pr. Dr. Stefan Negreanu', 'Imparatul Leon al VI-lea Inteleptul si epoca sa - Intre Biserica si Imperiu   ', 2012, '978-973-752-633-5', 'Desi numarul lucrarilor care au in vedere domnia imparatului Leon al Vl-lea a crescut considerabil in ultimele decenii, nu putem spune ca s-a reusit a se face lumina decat in parte asupra acestui om si epocii in care a trait. O buna perioada de timp Leon a fost vazut ori ca fiul mult mai celebrului sau tata, Vasile I, cel victorios in atatea lupte si intemeietor de dinastie, ori ca tatal basileului enciclopedist Constantin al VII-lea Porfirogenetul, cel care a facut din curtea imperiala o adevarata Alma Mater Studiorum. ', 20),
(6, 5, 1, 'Otilia Hutiu, Monica Ponta', 'Tehnici de animare a clasei - Class animation techniques', 2009, '978-973-752-262-7', 'The volume contains a series of lectures delivered within the framework of a summer school between 7 and 11 July, 2008 by a group of academics from Aurel Vlaicu University and some English teachers from various schools in Arad. The lectures were interactively conducted and their main purpose was to help young teachers of English improve their teaching skills.', 30),
(7, 6, 1, 'Dumitru Marcus', 'Estetica si arta literaturii', 2009, '978-973-752-372-3', 'Se pune in vedere relatia dintre doua notiuni. Estetica nascuta din generalizarea teoretica a unui tip particular de experienta umana, cea artistica si arta literaturii, rezultatul functiei artistice a artei verbale rostita sau scrisa. Se urmareste o cuprindere istorica si raspunsuri la intrebarile privind continutul, reprezentarea, nivelurile si tipul de experiente artistice care pot fi validate in campul de valori ce definesc cultura romaneasca si cea europeana.', 25),
(8, 4, 2, 'Pr. Dr. Stefan Negreanu', 'Biserica Rasaritului si Apusului in secolul al IX-lea Interferente, conlucrare si controverse ', 2012, '978-973-752-634-2', 'In aceasta lucrare care constituie teza sa de doctorat in teologie, parintele Stefan Negreanu urmareste sa evidentieze, sa comenteze si sa elucideze, pe cat posibil, modul in care s-au desfasurat relatiile dintre Biserica Rasaritului si Apusului in secolul al IX-lea, axandu-se pe cele trei coordonate definitorii ale lor: interferente, conlucrare si controverse.', 20),
(9, 7, 2, 'Teodor Baba', 'Teologia biblica vechitestamentara', 2012, '978-973-752-337-2', 'Momentele esentiale vechitestamentare, reliefate in cartile istorice, didactice si profetice pot fi explicitate din mai multe unghiuri de vedere, dupa cauzele si conditiile care le-au generat, personalitati biblice, actiuni, fapte si stari sufletesti. Toate acestea pot fi analizate din punct de vedere istoric, dar aprofundarea lor nu poate fi facuta decat prin cercetarea lor teologica si exegetica biblica atenta. Acesta este si sensul si scopul teologiei biblice, de a evidentia unele aspecte principale ale adevarurilor religios-morale biblice, vechi si noutestamentare. ', 20),
(10, 8, 4, 'Anton Ilica ', 'Pedagogia generala si o istorie a sa', 2013, '978-973-752-648-9 ', 'Necesitatea adaptarii la situatii imprevizibile, la procese inedite si probleme profesionale noi solicita actului pedagogic sa dezvolte flexibilitatea gandirii, sa creioneze capacitatea individului de a folosi cu randament maxim achizitiile de comportament si de a dobandi altele noi, in conformitate cu progresul rapid al vietii sociale. Invatamantul formativ vizeaza formarea si dezvoltarea unor deprinderi de munca intelectuala cum sunt: capacitatea de selectie si sistematizare, capacitatea de a stabili noi legaturi, posibilitatea de generalizare.', 23),
(11, 9, 4, 'Gabriela Kelemen', 'Metodica educarii limbajului', 2012, '978-973-752-615-1', 'Lucrarea descrie abordarea integrata a activitatilor instructiv-educative, ale domeniilor cunoasterii, valorificarea aspectelor practice de tip experiential, sau tendinta de promovare a tehnicilor specifice invatarii interactive pe baza unor proceduri specifice gandirii critice. Se analizeaza atat aspectele de ansamblu, structurale si organizatorice, ale activitatii prescolare, vizand intelegerea corecta a spiriuilui curriculumului de educatie timpurie, cat si didactica fiecarui subdomeniu experiential, care implica educarea limbajului.  ', 27),
(12, 10, 4, 'Camelia-Nadia Bran ', 'Repere pentru o invatare eficienta', 2012, '978-973-752-644-1', 'In societatea contemporana, caracterizata prin schimbare si nesiguranta, explozia informationala avand ca efect descalificarea, analfabetismul functional, pentru a ne putea manifesta ca subiecti autonomi si responsabili in invatare, trebuie sa dispunem de strategii eficiente de invatare, dar si de mecanisme dezvoltate de analiza a propriului proces de cunoastere, de reflectie si introspectie, de urmarire a progresului realizat in invatare si de apreciere a rezultatelor. Toate acestea se subsemneaza conceptului de competente metacognitive, care asigura cadrul realizarii invatarii eficiente si in profunzime, o persoana cu inalte competente metacognitive va aborda invatarea cu incredere in fortele proprii.', 27),
(13, 8, 4, 'Anton Ilica', 'Psihologia comunicarii si dinamica grupurilor organizate', 2012, '978-973-752-643-4', 'Volumul Psihologia comunicarii si dinamica grupurilor organizate s-a configurat progresiv, incepand cu anul 2007, pentru a analiza doua domenii de actualitate, marcate de titlu: comunicarea din perspectiva psihologica si dinamica grupurilor, ambele integrate ideii de comportament organizational. Sintagma „dinamica grupurilor” este folosita pentru intaia oara de psihologul Kurt Lewin (1944) si se refera la „totalitatea schimbarilor adaptative care se produc in structura de ansamblu a unui grup ca urmare a unor schimbari survenite intr-o parte oarecare a acestui grup”. ', 26),
(14, 11, 4, 'Olga Domnica Moldovan', 'Istoria psihologiei', 2011, '978-973-752-563-5', 'Psihologia ca stiinta, este considerata ca aparand in 1879, cand Wilhelm Wundt a infiintat primul laborator de psihologie experimentala. Dar, considerand ca obiectul de studiu al psihologiei este psihicul uman, in limbaj cotidian sufletul omenesc, idei despre suflet, despre gandire si rationamente, despre sentimente, au fost prezente in conceptiile si teoriile tuturor ganditorilor si filosofilor.', 26),
(15, 12, 5, 'Luminita Ioana Mazuru, Aureliana Man  ', 'Finante si fiscalitate, moneda si credit', 2012, '978-973-752-622-9', 'Lucrarea prezinta finantele care au aparut pe scena vietii social economice pe fondul dezvoltarii factorilor de productie si a relatiilor banesti, odata cu aparitia statului si instituirea fortei sale publice, adica la incidenta comunei primitive cu societatea sclavagista. Problemele referitoare la geneza, continutul economic functiile, rolul si evolutia relatiilor financiare in cursul dezvoltarii societatii omenesti formeaza obiectul de studiu al finantelor.', 33),
(16, 13, 5, 'Boghicevici Claudia', 'Asigurari Sociale', 2011, '978-973-752-580-2', 'Cuprinde un sistem de ocrotire, de protectie si de ajutorare a cetatenilor activi, a pensionarilor si membrilor lor de familie, care consta in acordarea de catre stat sau anumite organizatii de indemnizatii, ajutoare, pensii, trimiteri la odihna, la tratament balnear si alte gratuitati, in perioada in care se gasesc, temporar sau definitive, in incapacitatea de munca sau in alte cazuri cand ajutorarea este necesara.', 33),
(17, 14, 5, 'Luminita Ioana Mazuru, Bogdan Gomoi, Aureliana Man', 'Finante publice, Finante private (sinteze, aplicatii, teste grila)', 2011, '978-973-752-592-5', '', 32),
(18, 13, 5, 'Boghicevici Claudia', 'Asigurari. Asigurari comerciale', 2011, '978-973-752-545-1', 'In afara fortelor oarbe ale naturii, vietile oamenilor, integritatea lor corporala, agoniseala lor, inclusiv bunurile apartinand colectivitatii, sunt primejduite si de felurite alte fenomene neprevazute, denumite generic accidente. Un loc important intre acestea il ocupa accidentele de munca, cat si cele rutiere sau de circulatie, acestea din urma netrebuind sa creasca odata cu extinderea parcului de autovehicule.', 34),
(19, 15, 5, 'Radu S. Cureteanu ', 'Relatii Publice', 2010, '978-973-752-534-5', 'Activitatea moderna cu un caracter complex, impune o viziune noua incepand cu analiza necesitatilor si terminand cu reutilizarea eficienta a rezultatelor. Prin strategiile si programele de comunicare pe care le dezvolta, acestea contribuie la crearea unor legaturi de incredere intre diversele organizatii si publicul care le inconjoara, facilitand realizarea unor relatii interactive intre diferitele niveluri ale societatii.', 31),
(20, 16, 6, 'Adriana M. Motica', 'Rezistenta materialelor. Partea II', 2013, '', 'It is a collection of texts, arranged in a chronological order, debating topics connected with the history of Great Britain since stone age up to the present day. The book is used for giving historical, political and social information, for creating the background of the literarz phenomena and for offering material to be used during teaching classes.', 18),
(21, 16, 6, 'Adriana M. Motica', 'Rezistenta materialelor. Partea I', 2012, '', 'It is a collection of texts, arranged in a chronological order, debating topics connected with the history of Great Britain since stone age up to the present day. The book is used for giving historical, political and social information, for creating the background of the literarz phenomena and for offering material to be used during teaching classes.', 18),
(22, 17, 6, 'Eugen-Dumitru Busa', 'Transportul marfurilor periculoase, Editia a III-a revizuita', 2012, '978-973-752-617-5', 'Lucrarea prezinta informatii despre reglementarea transportului de marfuri pericoloase, ambalajele folosite pentru transportul substantelor periculoase, prescriptii privind vehiculul si echipamentul ADR, documentatie, prescriptii speciale privitoare la transportul substantelor, prevenirea si masurile de urgenta in caz de accidente sau incidente, securitate generala, curs de specialitate pentru transportul substantelor periculoase in cisterna, pregatirea profesionala a conducatorilor auto si a consilierilor de siguranta, curs de specializare pentru transportul substantelor din clasa 1, definitii si unitati de masura.', 15),
(23, 18, 6, 'Iuliu Deac, Simona Magdalena Fogorasi, Anamaria Albac ', 'Masini de finisare chimica-textila ', 2012, '978-973-752-626-7', 'Lucrarea de fata prezinta utilaje de piuare, de carbonizare, crabare, de vopsire, uscare, de aburire-periere, umezire, scamosare, ratinare, tundere, parlire, decatare, de calcare, contractie a tesuturilor, in sectiile de finisare chimica textila, a fabricilor textile precum si cele mai recente realizari pe plan mondial in domeniu.', 19),
(24, 17, 6, 'Eugen-Dumitru Busa', 'Legislatia A.E.T.R si utilizarea aparatelor tahograf pe intelesul tuturor, editia a III-a', 2012, '978-973-752-618-2', 'Cartea cuprinde regulamentul cu privire la legislatia A.E.T.R', 17),
(25, 19, 7, 'Anca Mihaela Dicu, Simona Perta-Crisan', 'Calitatea si analiza senzoriala a alimentelor    ', 2012, '978-973-752-612-0', 'Aceasta lucrare, prin informatiile pe care le aduce intr-un domeniu atat de vast, va fi de un real folos pentru specialistii din industria alimentara si nu numai. Comportamentul alimentar al omului este influentat de forma atragatoare a alimentelor sub aspect senzorial, acesta selectand alimentele dupa cat sunt de atragatoare, uitand deseori de calitatile nutritive pe care le poseda. In consecinta, proprietatile senzoriale detin, un rol primordial in selectarea si decizia de cumparare a consumatorului. ', 30),
(26, 20, 7, 'Claudiu Ursachi, Claudia Muresan', 'Tehnologii generale in industria carnii. Aplicatii practice.', 2012, '978-973-752-613-7', 'Lucrarea Tehnologii generale in industria carnii. Aplicatii practice are ca obiectiv transmiterea cunostintelor absolut necesare tuturor celor interesati de inginerie alimentara, in special despre aprecierea calitatii carnii, a preparatelor din carne si a grasimilor animale, precum si a caracteristicilor senzoriale si fizico-chimice ale acestora.', 25),
(27, 21, 7, 'Michaela Dina Stanescu, Sergiu Erich Palcu, Simona Gavrilas', 'Biochimie analitica - Aplicatii si probleme', 2012, '978-973-752-638-0', 'Cartea ilustreaza ideea ca nu se poate intelege fascinanta lume BIO fara a sti CHIMIE. Reunind cunostintele fundamentale si aplicative, cartea incearca sa duca la intelegerea BIOCHIMIEI si sa dezvolte competentele in acest domeniu, atat din punct de vedere teoretic, cat si in ceea ce priveste indemanarile necesare pentru realizarea unor experimente de laborator. Un capitol este dedicat metodelor generale de separare si analiza, fara de care nu se poate face cercetare in orice domeniu.', 25),
(28, 22, 7, 'Ioan Csosz, Oana Brizan, Sabin Chis, Cristian Edmund Csosz, Ramona Ciolac, Sabin Chis Jr. ', 'Agroturism si Turism Rural', 2012, '978-973-752-621-2', 'Turismul prin multiplele sale functii reprezinta o sursa de crestere a veniturilor locale datorita faptului ca pe langa serviciile de cazare solicitate, el recurge la servicii de alimentatie, achizitioneaza amintiri, articole cu specific local, diferite bunuri si nu in ultimul rand contribuie la odihna si recrearea oamenilor. Agroturismul este o forma particulara de turism, mai complexa, cuprinzand atat activitatea turistica propriu-zisa, cat si activitatea economica, de regula, agricola, practicata de gazdele turistilor. ', 25),
(29, 23, 7, 'Podrumar Teodor, Zdremtan Monica', 'Rolul ingrasamintelor asupra calitatii si cantitatii la soiurile de struguri pentru vinurile rosii si albe in Centrul Viticol Minis ', 2012, '978-973-752-639-7', 'Cultura vitei de vie are o traditie straveche pe meleagurile tarii noastre. De-a lungul veacurilor, in dezvoltarea civilizatiei, vita de vie si vinul si-au adus contributia directa sau indirecta la progresul omenirii. Calitatea vinurilor este categoric determinata de productia viticola, care este influentata de modul in care mediul inconjurator – clima si sol – asigura necesarul de energie luminoasa, calorica si substante nutritive pentru desfasurarea metabolismului specific particularitatii biologice a vitei de vie.', 27),
(30, 24, 8, 'Gheorghe Cheta', 'Metodica activitatilor matematice in gradinita si clasele I-IV', 2011, '978-973-752-567-3', 'Matematica poate fi considerata o disciplina de invatamant si deopotriva un instrument de analiza logica a unor situatii experientiale. Matematica este o stiinta, care te invata sa gandesti corect si care simbolizeaza relatiile dintre parti in armonizarea unui corpus integrat. Matematica generalizeaza fenomenele care alcatuiesc particularul si particularizeaza relatiile care configureaza generalul. Matematica este relatie, principiu, exceptie, reprezentand sangele albastru al lumii materiale si spirituale, al tuturor celor ce se vad si nu se vad.', 30),
(31, 25, 8, 'Ioan Dzitac', 'Inteligenta artificiala', 2008, '978-973-752-292-4', 'Sugereaza o abordare exhaustiva a Inteligentei artificiale, prezentarea unei incursiuni superficiale si inegale, fara a intra in amanunte tehnice ale tuturor domeniilor si subdomeniilor. Se insista pe aspectele ce implica logica fuzzy, deoarece rationamentul bazat pe acest nou tip de logica a deschis noi perspective in solutionarea problemelor pentru care nu dispunem de modele matematice exacte.', 30),
(32, 26, 8, 'Carmen Fifor', 'Programare orientata obiect – Introducere in Java', 2010, '978-973-513-0', 'Programarea orientata obiect este unul din cei mai importanti pasi facuti in evolutia limbajelor de programare spre o mai puternica abstractizare in implementarea programelor. Ea a aparut din necesitatea exprimarii problemei intr-un mod mai natural fiintei umane. Astfel, unitatile care alcatuiesc un program se apropie mai mult de modul nostru de a gandi decat modul de lucru al calculatorului.', 30);

-- --------------------------------------------------------

--
-- Table structure for table `comentarii`
--

CREATE TABLE IF NOT EXISTS `comentarii` (
  `id_comentariu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_carte` int(10) unsigned NOT NULL,
  `nume_utilizator` text NOT NULL,
  `adresa_email` text NOT NULL,
  `comentariu` text NOT NULL,
  PRIMARY KEY (`id_comentariu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comentarii`
--


-- --------------------------------------------------------

--
-- Table structure for table `domenii`
--

CREATE TABLE IF NOT EXISTS `domenii` (
  `id_domeniu` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nume_domeniu` text NOT NULL,
  PRIMARY KEY (`id_domeniu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `domenii`
--

INSERT INTO `domenii` (`id_domeniu`, `nume_domeniu`) VALUES
(1, 'Filologie'),
(2, 'Teologie'),
(3, 'Design'),
(4, 'Stiintele Educatiei'),
(5, 'Stiinte Economice'),
(6, 'Inginerie'),
(7, 'Inginerie Alimentara'),
(8, 'Stiinte Exacte'),
(9, 'Stiinte Socio-Umane'),
(10, 'Educatie Fizica si Sport'),
(11, 'Reviste'),
(12, 'Volume Universitare'),
(13, 'Volume Simpozioane');

-- --------------------------------------------------------

--
-- Table structure for table `tranzactii`
--

CREATE TABLE IF NOT EXISTS `tranzactii` (
  `id_tranzactie` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_tranzactiei` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nume` text NOT NULL,
  `prenume` text NOT NULL,
  `cnp` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `telefon` text NOT NULL,
  `judet` text NOT NULL,
  `localitate` text NOT NULL,
  `strada` text NOT NULL,
  `numar` text NOT NULL,
  `bloc` text NOT NULL,
  `scara` text NOT NULL,
  `etaj` text NOT NULL,
  `apart` text NOT NULL,
  `cod_postal` int(11) NOT NULL,
  PRIMARY KEY (`id_tranzactie`),
  UNIQUE KEY `id_tranzactie` (`id_tranzactie`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tranzactii`
--

INSERT INTO `tranzactii` (`id_tranzactie`, `data_tranzactiei`, `nume`, `prenume`, `cnp`, `email`, `telefon`, `judet`, `localitate`, `strada`, `numar`, `bloc`, `scara`, `etaj`, `apart`, `cod_postal`) VALUES
(2, '2013-06-06 23:50:27', 'Lucian', 'Iernye', 1880725020150, 'lucian.iernye@gmail.com', '742499035', 'Arad', 'Arad', 'Andrei Saguna', '', '', '', '', '', 335544),
(5, '2013-06-08 17:04:05', 'test', 'test', 0, 'test', '0000', 'judet', 'Arad', 'test', '000', 'testt', 'test', 'test', 'test', 555555);

-- --------------------------------------------------------

--
-- Table structure for table `vanzari`
--

CREATE TABLE IF NOT EXISTS `vanzari` (
  `id_tranzactie` int(10) unsigned NOT NULL,
  `id_carte` int(10) unsigned NOT NULL,
  `nr_buc` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vanzari`
--

INSERT INTO `vanzari` (`id_tranzactie`, `id_carte`, `nr_buc`) VALUES
(1, 2, 1),
(1, 3, 3),
(5, 10, 1);
