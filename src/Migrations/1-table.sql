-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: nebula
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fact_sheets`
--

DROP TABLE IF EXISTS `fact_sheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fact_sheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab_title` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_description_title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_description_text` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_src` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_alt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation_title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explanation_text` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientific_fact_title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientific_fact_text` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fact_sheets`
--

LOCK TABLES `fact_sheets` WRITE;
/*!40000 ALTER TABLE `fact_sheets` DISABLE KEYS */;
INSERT INTO `fact_sheets` VALUES (4,'Le son dans Star Wars','erreurs','Son dans l\'espace','Star Wars Episode 1 \"La Menace fantome\"','Le son dans l’espace de Star Wars : beaucoup d\'explosions, des tirs de vaisseaux dans un ciel étoilé. L’espace, dans Star Wars, est d’ailleurs aussi bruyant que sur Terre !','ZHde6ey45eM','none','Le son dans l\'espace au cinéma','En effet si la SF tend vers de plus en plus de réalisme, il y a quelque chose qui ne change pas: Les bruitages. Pourtant de nos jours tout le monde sait que le son ne peut se propager dans le vide spatial.  Dans Star Wars comme dans beaucoup de films de science-fiction, l’espace bruyant est souvent plus esthétiques que scientifiques. Et oui, car le son participe autant que l’image à la narration, il nous sert à nous représenter la géographie d’une scène, il créait du hors-champ, pose une ambiance,..','Les faits scientifiques','La lumière est « une onde électromagnétique » alors que le son est une onde mécanique. La première peut se propager même dans le vide, alors que la seconde ne le peut pas.  Le son qui parvient à nos oreilles est une onde, c’est-à-dire un déplacement d’énergie, sans déplacement de matière, de même que la lumière. Mais, et c’est là que se situe toute la différence, l’onde sonore a besoin d’un « support » pour se propager ; contrairement à la lumière qui se déplace facilement dans le vide, car elle est elle-même une particule : le photon. Le son lui ne peut se déplacer que de molécule à molécule, par proximité. Pour se propager il lui faut réaliser une succession de compressions et de dilatations des corps, du milieu dans lequel il évolue. Il faut donc que ce milieu soit composé de quelque chose, d’une matière qu’elle soit solide, liquide ou gazeuse.  Or vous le savez dans l’espace la densité de matière est très faible, beaucoup trop faible pour que la matière puisse être utilisée par le son. Il a en effet mille fois plus de particules par centimètre  cube sur la Terre que dans l’espace.  Ce qui explique le silence absolu. Les explosions dans l’espace se font donc en silence !'),(8,'Le corps humain dans Les Gardiens de la Galaxie','erreurs','Le corps humain ne gèle pas dans l\'espace','Les Gardiens de la Galaxie','Dans les Gardiens de la Galaxy Vol 1, Star Lord part sauver Gamora, flottante dans l’espace et commençant déjà à geler. Certes la scène est très touchante mais elle est aussi complètement fausse.','bseO_laCoXg','none','Le corps gèle dans l\'espace au cinéma','Les gardiens de la galaxie ne sont pas les seuls à s’être fait avoir, Mission to mars et et Sunshine aussi. Cette idée est ancrée dans l’esprit de beaucoup de personnes, le fait de geler instantanément une fois la peau en contact avec le vide. C’est un grand classique du cinéma purement visuel et non scientifique.','Les faits scientifiques','Dans le vide de l’espace, la pression est considérée comme (presque) nulle. En effet, la pression est la force qu’exerce un ensemble d’atomes sur une surface. Plus il y a d’atomes dans un volume donné, plus la pression y est importante. Or, sans matière pas de pression, donc ce que l’on appelle du vide. La pression est une unité fondamentale de la thermodynamique, car elle influence énormément ses réactions. Sans matière, la notion de température n’a aucun sens. Ce que l’on appelle la température d’un corps est en réalité le niveau d’agitation des atomes qui le constituent. Plus les atomes vibrent et s’agitent, plus la température est grande.Or dans le vide, il n’y a théoriquement pas d’atomes. Dons même si l\'univers est le lieu le plus froid qui existe (-270 degrès celcius), vous ne géleriez pas car il n\'y a rien pour conduire la chaleur en dehors de votre corps.'),(9,'Les explosions de Lost in Space','erreurs','Les explosions dans l’espace… n’explosent pas vraiment !','Lost in Space','Dans Lost In Space, l’équipage décide de détruire le verseau suite à une invasion de robots destructeurs, on assiste donc à une explosion digne d’un film de Michael Bay. Mais.. C’est possible ça en fait ?','C49bEUB3HBs','none','Les explosions dans l\'espace au cinéma','Hollywood a tendance à représenter les explosions dans l\'espace comme si elles se passait sur Terre (avec beaucoup de flammes et de fumée). En effet une explosion est toujours plus impréssionante avec des flammes.','Les faits scientifiques','Une explosion, comme nous l\'entendons communément, est une explosion massive de gaz, de chaleur et de pression par un matériau lorsqu\'il est soumis à une certaine pression ou température. Elle est très généralement accompagnées d\'une boule de feu. Cette boule de feu est le véritable point de discorde, car le feu nécessite trois éléments très simples pour exister : l\'oxygène, la chaleur et le combustible. Hors dans l\'espace il n\'y a pas d\'oxygène que du vide. Par conséquent sans l\'oxygène nécessaire, le feu ne se formerait pas et il n\'y aurai donc pas de boule de feu lors de l\'explosion. Cependant si un vaisseau spacial contenant de l\'hydrogène liquide ou de l\'oxygène liquide à bord explose, cet oxydant serait capable de remplir le rôle et de brûler avec le carburant et la chaleur. Toutefois l\'explosion aurait un aspect très différent. Les débris de l\'explosion seraient forcés vers l\'extérieur dans toutes les directions à partir du centre de l\'explosion, et continueraient à se déplacer en ligne droite sans aucune force atmosphérique pour l\'arrêter. La fumée n\'irait pas \"vers le haut\" et le feu ne persisterait pas'),(10,'Les ceintures d\'astéroïdes sont impraticables','erreurs','Les ceintures d\'astéroïdes sont impraticables','Star Wars Ep V - L\'empire contre attaque','Han Solo se lance dans une course poursuite dans une ceinture d\'astéroïdes, c’est une scène culte. La tension est énorme, le danger est omniprésent. Mais qu’en est-t-il vraiment ?','3ME5jhsgmB4','none','Les ceintures d\'astéroide au cinéma','Il suffit de regarder L\'Empire contre-attaque ou L\'attaque des clones pour se dire que les ceintures d\'astéroïdes sont incroyablement dangereuses. Après tout, l\'espace entre les astéroïdes est si réduit que même les minuscules vaisseaux que sont les TIE finissent par s\'y écraser, à défaut de se faire engloutir par un ver géant. Même C-3PO nous met en garde, rappelant que les chances de traverser un champ d\'astéroïdes sont quasiment nulles. Obi-Wan et Han Solo en font d\'ailleurs les frais dans des courses-poursuites effarantes. Les scénaristes ont choisis de rapprocher ces astéroides pour rendre la course poursuite plus trépidante.','Les faits scientifiques','En réalité, les ceintures d\'astéroïdes ne sont pas si dangereuses que ça. Si elles contiennent en effet des astéroïdes en grandes quantités, des kilomètres séparent chacun d\'eux. Et bien que ces derniers se déplacent Les scientifiques de la NASA ont répondu qu\'il y aurait environ une chance sur un milliard pour qu\'une sonde entre en collision avec un astéroïde, dans l\'hypothèse où elle devrait traverser un champ d\'astéroïdes. On a donc plus de chances de se faire frapper cinq fois par la foudre dans la même journée que Han Solo de se manger un énorme caillou en pleine tronche.'),(11,'Les trous noirs ne sont pas des aspirateurs cosmiques','erreurs','Les trous noirs ne sont pas des aspirateurs cosmiques','Star Trek','Les trous noirs ont toujours été une source d\'incompréhension et de fascination. Leur capacité à tout absorber à des années-lumières autour d\'eux est assez effrayante. Différentes séries ont contribué à cette croyance, telles que Star Trek.','0jdL8b011GM','none','Les trous noirs au cinéma','Il est fréquent d\'entendre parler de trou noir dans les informations, les films ou les livres. Ils sont représentés comme de grands trous qui aspirent tout ce qui est proche d\'eux et dont il est impossible d\'en ressortir vivant. Dans la Planète au Trésor, Interstellar, Doctor Who et bien d\'autres, les trous noirs passionnent et effrayent.','Les faits scientifiques','Il existe 4 types différents de trou noir. Le seul que nous pouvons voir est du a un certain type d\'étoile, extrêmement rare qui brûlent leurs réserves de « carburant » à un rythme effréné et meurent au bout de quelques millions d\'années, dans une explosion colossale appelée hypernova, libérant cent fois plus d\'énergie qu\'une supernova. Dès lors, la compression gravitationnelle ne peut plus être compensée par les forces de répulsion des électrons ou des neutrons dégénérés, et l\'effondrement continue à écraser la matière sur elle-même sans plus rencontrer de résistance : un trou noir dit « stellaire » se forme. Les scientifiques pensent que notre Galaxie pourrait abriter environ cinquante millions de trous noirs d\'origine stellaire. Même s\'il est vrai que le trou noir aspire tout ce qui se trouve à proximité immédiate, Il ne peut en rien être comparé à un espirateur cosmique.'),(12,'Il n’y a pas de violente tempêtes sur Mars','erreurs','Il n’y a pas de violente tempêtes sur Mars','Seul sur Mars','Dans la scène d\'ouverture de \" The Martian \", une tempête de poussière colossale menace de renverser la seule fusée qu\'un groupe d\'astronautes peut ramener à la maison. Ils décident donc d\'abandonner leur mission et d\'évacuer.','s0V-kqIe4pw','none','Les tempètes sur Mars au cinéma','Pour être juste, Andy Weir admet volontiers que la tempête de poussière a été utilisée simplement pour déplacer le terrain et laisser Mark Watney échoué sur Mars. Mais on ne le laissera pas s\'en tirer à bon compte, on vous explique.','Les faits scientifiques','D’abord, faisons un peu de physique. Sur la planète rouge, les vents martiens peuvent être extrêmement rapides et atteindre des vitesses supérieures à 160 km/h. Cependant, Mars a beaucoup moins d’atmosphère que la Terre. Ce qui veut dire que l’air y est moins dense. Pour une même vitesse, un « volume de vent » sur Mars exerce sur un objet quelconque une pression beaucoup moindre que ce même volume sur Terre. On quantifie cette pression par la grandeur suivante : la pression dynamique. La pression dynamique est la pression exercée par un fluide en mouvement. Plus cette pression est grande, plus le vent est puissant et plus il peut faire des dégâts. Il se trouve que la pression atmosphérique à la surface de Mars est 100 fois plus légère que celle à la surface de la Terre. Une telle différence de pression n’est pas sans conséquence sur la valeur de la pression dynamique pour une même vitesse du vent. Ainsi, un vent de 160 km/h sur Mars génère autant de pression dynamique qu’une brise de 18 km/h sur Terre. Bref, pas de quoi soulever des tonnes comme dans le film.'),(13,'Il y a énormément de débris dans l’espace','vérités','Il y a énormément de débris dans l’espace','Gravity','Gravity, d\'Alfonso Cuarón, s\'ouvre sur une séquence de destruction de la navette spaciale par une nuée de débris spaciaux détruisant tout sur son passage. Existe-t-il de tels débrits dans notre univers?','vKW-Gd_S_xc','none','Les débris dans l\'espace au cinéma','Les débris spatiaux sont une réalité et peuvent devenir un véritable dange comme dans le film. On en dénombre des centaines de milliers, de tailles variables. Normalement, ceux de plus de 10 cm sont surveillés : leur orbite est suivie par différents organismes comme la NASA ou le CNES. Cependant Il serait très peu probable qu\'ils rentrent en collision avec un autre vaisseau car ils ne seraient pas forcement sur le même orbite et iraient globalement à la même vitesse que le vaisseau. Pour les besoins du film les débris vont beaucoup plus vite que la station spaciale a fin de la détruire.','Les faits scientifiques','C’est une perspective inquiétante : à force de débris gravitant autour de la Terre, l’être humain pourrait se retrouver piégé sur la planète bleue, sans possibilité d’envoyer des satellites en orbite basse. Ce scénario catastrophe, dont le film Gravity s’est inspiré, est envisagé très sérieusement par la Nasa et a pour nom le “Syndrome de Kessler”. Les débris spatiaux sont une pollution générée par l’exploration de l\'espace, par des satellites et des sondes. Ce danger est pris en compte aujourd’hui. Ces dernières années les grandes agences spatiales ont établies des politiques de propreté spatiale. Désormais, quand on lance un satellite, on le fait de façon propre, on évite l’éjection des boulons et des sangles, on fait redescendre les étages de fusée dans l’atmosphère pour qu’ils brûlent… Reste que l’on estime qu’il y a au moins 16 000 objets de plus de 10 cm sur orbite autour de la Terre et les 2/3 sont des débris.'),(14,'Les astronautes sont relié à un ligne de vie','vérités','Les astronautes sont relié à un ligne de vie','Passengers','On peut voir dans cet extrait que Jennifer Lawrence et  Chris Pratt se lance dans le vide reliés à une ligne de vie.','uirzZBGuLF0','none','La ligne de vie au cinema','Si les astronautes n\'étaient pas reliés à une ligne de vie et  qu\'ils venaient à chuter ils risqueraient de dériver dans  l\'espace ad vitam eternam. Cet équipement évident est toujours repris les films.','Les faits scientifiques','Le premier danger, lors d\'une sortie dans l\'espace, c\'est de se perdre. Donc les astronautes sont toujours attaché. Il y a, partout sur la Station spatiale internationale, des sortes de poignées auxquelles ils peuvent en permanence s\'agripper. Ils se  déplacent avec les mains, car les jambes, en orbite, ne servent à rien. Ils ont systématiquement une ligne de vie qui se déroule depuis un enrouleur accroché à leur scaphandre et qu\'ils attachent au sas par lequel ils sortent. Un dispositif qui va les suivre, même s\'ils vont très loin, jusqu\'à 70 ou 80 mètres. Parfois, ils peuvent même en changer, durant la sortie, pour la rallonger. Ainsi, en cas de problème, ils peuvent toujours revenir de là où ils étaient parti. En plus de ça, ils ont des longes de sécurité, un peu comme en via ferrata. Ils les mettent en place dès lors qu\'ils sont immobiles pour réaliser un travail à un endroit précis.'),(15,'Les astronautes disposent d’un mini moteur','vérités','Les astronautes disposent d’un mini moteur','Gravity','On voit dans cet extrait que Georges Clooney se déplace dans l\'espace à l\'aide d\'un système de propulsion permettant de controler sa direction. Les astronautes possède-t-ils un tel outils?','vKW-Gd_S_xc','none','Le mini moteur spacial au cinema','Vous l\'aviez déjà surement vu dans Space cowboys, Wall-E ou plus récemment Gravity, les astronnautes disposent souvent d\'un système de propulsion. Ce système apparait au grand écran au début des années 2000, mais les vrais cosmonnautes s\'en servent-ils vraiment ?','Les faits scientifiques','Le Manned Maneuvering Unit ou MMU est un système de propulsion développé par la NASA pour permettre aux astronautes de se déplacer de manière autonome dans le vide au cours de leurs sorties extravéhiculaires. Le MMU, d\'une masse de 148 kg, s\'accroche dans le dos de la combinaison spatiale portée par l\'astronaute et est contrôlé par celui-ci à l\'aide de manettes situées au bout de deux bras. Le changement de vitesse total fourni par les 24 tuyères éjectant de l\'azote, est de 24,4 m/s. Il a été utilisé au cours de trois missions de la navette spatiale américaine en 1984, avant d\'être retiré du service, car jugé trop dangereux pour les astronautes. Une version moins puissante, le SAFER (delta-V de 3 m/s), a été développée par la suite, et est portée à chacune des sorties des astronautes travaillant dans la Station spatiale internationale pour leur permettre de regagner celle-ci, si un incident les fait partir à la dérive.'),(16,'Des tornades sur Mars','vérités','Des tornades sur Mars','Seul sur Mars','Dans cet extrait issu de Seul sur Mars, on peut voir un Matt Damon, pensif, avec en fond des tornades. Existe-t(il de tels tornades sur Mars?','Yt61MdO8Tbw','none','Les tornades sur Mars au cinema','Seul sur Mars a été le premier film de science fiction à nous montrer des tornades géantes à la surface de Mars. On a l\'habitude dans voir sur Terre, mais, ce phénomène est-il possible sur d\'autres planètes ? Ou est-ce simplement que du visuel ne servant qu\'à impressionner le spectateur ?','Les faits scientifiques','Ces petits tourbillons de poussière sont virevoltants pendant les voyages de Watney sur la planète rouge, mais il y a un défaut avec cette vue sur les tornades imposantes, car elles semblent être suspendues à la Terre depuis le fond des nuages, comme on pourrait s\'attendre à le voir avec les tornades ici sur Terre. Des nuages se forment sur Mars, mais ils ont tendance à être très minces et très flous. Les tourbillons de poussière martiens se débrouillent très bien sans nuages, puisqu\'ils se forment à partir du sol. En raison de la minceur de l\'atmosphère de Mars, la lumière du soleil réchauffe la surface très rapidement. Comme cette chaleur est rapidement transférée à l\'air près du sol, cet air monte rapidement, et l\'air plus froid se précipite pour combler le vide. Ces tornades poussiéreuses, qui peuvent parcourir une certaine distance à travers la surface. Certains d\'entre eux peuvent devenir immenses, atteignant jusqu\'à 20 kilomètres dans le ciel. Ainsi, bien que les grands tourbillons de poussière vus dans le film soient possibles, vous ne verriez des nuages aussi épais avec eux que s\'ils étaient associés à une tempête de poussière passagère.'),(17,'Le corps humain n’explose pas dans l\'espace','erreurs','Le corps humain n’explose pas dans l\'espace','The Simpsons - Treehouse of Horror X (Part 6)','On a tous vu quelques films à petits budgets où les personnages explosent lorsqu\'ils sont en contact direct avec l\'espace. Par exemple ici, dans les Simpson, ou encore dans Outland ou Sunshine. Dès qu’un personnage retire le casque de sa tenue extra-véhiculaire, il se met à gonfler avant d’exploser.','UgJuurTeJI4','none','Le corps explose dans l\'espace au cinéma','C\'est un grand classique de la science-fiction. Un personnage part dans l\'espace et soudainement il se trouve abandonné dans le vide spatial sans un équipement approprié. Sans surprise, l\'incident lui est souvent fatal. Cela a pour but de rajouter un sentiment de peur auprès du spectateur car la mort est quasi-instantanée et extrêmement douloureuse.','Les faits scientifiques','15 secondes, maximum. C’est le temps dont vous disposez pour être secouru si d’aventure vous vous retrouviez éjecté, nu comme un ver, dans le vide spatial. Au-delà de l’aspect très improbable de cette hypothèse, il convient de rectifier les points de vue donnés par la science-fiction depuis des décennies : non, vous n’exploseriez pas Pour autant, l’absence de pression et d’oxygène vous sera fatale en un temps très bref.  En premier lieu intervient le phénomène d’ébullisme ; celui-ci survient dès 20 000 mètres d’altitude. Dans de telles conditions, le point d’ébullition des fluides descend jusqu’à une température inférieure à celle du corps. L’ébullisme engendre donc comme son nom l’indique la formation de bulles dans les fluides organiques. Ces poches de gaz causent alors oedèmes et congestions multiples, sans oublier un gonflement généralisé ; de quoi vous faire doubler de volume sans que la peau, extrêmement élastique, ne subisse la moindre déchirure. À défaut d’exploser, vous serez donc l’objet d’une douleur difficilement soutenable. C’est ce même phénomène qui finira également par perturber l’ensemble du système circulatoire, élargissant chaque veine et vaisseau jusqu’à vous faire sombrer dans l’inconscience.');
/*!40000 ALTER TABLE `fact_sheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_questions`
--

DROP TABLE IF EXISTS `home_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `question` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F4082D91C4663E4` (`page_id`),
  CONSTRAINT `FK_F4082D91C4663E4` FOREIGN KEY (`page_id`) REFERENCES `fact_sheets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_questions`
--

LOCK TABLES `home_questions` WRITE;
/*!40000 ALTER TABLE `home_questions` DISABLE KEYS */;
INSERT INTO `home_questions` VALUES (3,11,'Un trou noir peut se créer n\'importe où.',0),(4,4,'Si une explosion se produit dans l’espace, on l’entendrait même à des années lumières.',0),(5,17,'Si vous sortez dans l’espace sans combinaison, votre corps risquerait d’exploser.',0),(6,8,'Le corps ne gèle pas si il est exposé au vide de l’espace.',1),(7,10,'La masse totale de tous les astéroïdes (On en compte plus de 500 000) est inférieure à celle de la lune.',1),(8,12,'Les vents dans une tempête martienne peuvent atteindre 100 km/h .',1),(9,13,'Le syndrome de Kessler est le nom donné par la Nasa pour illustrer le scénario catastrophe de Gravity.',1),(10,14,'Le fil reliant les astronautes à leur station, se nomme le “Fil d’Ariane”.',0),(11,15,'Le MMU (système de propulsion développé par la NASA) utilise de l’azote pour aider les astronautes à se déplacer.',1),(12,16,'Des tornades sur Mars sont moins puissantes que sur Terre.',0);
/*!40000 ALTER TABLE `home_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180625151550'),('20180627120125'),('20180627132129');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quizz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `question` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_answer` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_answer_correction` tinyint(1) NOT NULL,
  `second_answer` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_answer_correction` tinyint(1) NOT NULL,
  `third_answer` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_answer_correction` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7C77973DC4663E4` (`page_id`),
  CONSTRAINT `FK_7C77973DC4663E4` FOREIGN KEY (`page_id`) REFERENCES `fact_sheets` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizz`
--

LOCK TABLES `quizz` WRITE;
/*!40000 ALTER TABLE `quizz` DISABLE KEYS */;
INSERT INTO `quizz` VALUES (2,8,'Quelle est la température la plus basse enregistrée dans l’espace ?','0 degrès',0,'-50 degrés',0,'-270 degrés',1),(4,15,'Comment s’appelle le mini-moteur que portent les astronautes dans leur dos qui leur permet de se déplacer dans l’espace?','MMU (Manned Maneuvering Unit)',1,'SMU (Super motor unit)',0,'GSB (Go space baby)',0),(5,16,'Que peut-on voir sur Mars?','Des tornades',1,'Des tempêtes de neige',0,'Une tempête de cendre',0),(8,17,'Qu’arriverait-il à notre corps si l’on se retrouvait dans l’espace sans protection ?','Il gèlerait',0,'Il gonflerait',1,'Il exploserait',0),(9,10,'Dans la saga Star Wars quel personnage subit une course poursuite à travers une ceinture d\'astéroïde ?','Obiwan',0,'Han Solo',0,'Les deux',1),(10,13,'A quoi est due l’explosion de la navette spatiale ou se trouve Sandra Bullock et Georges Clooney dans Gravity ?','Des débris spatiaux',1,'Une fuite de gaz',0,'Un tir alien',0),(11,4,'Si un vaisseau explosait dans l’espace, qu’entendrions nous ?','Le bruit de l’explosion',0,'Le bruit de l’explosion mais étouffé',0,'Rien',1),(12,9,'Pour quelle raison ne peut-on pas faire de feu dans l’espace?','Il n’y a pas d’oxygène',1,'Il n’y a pas d’hydrogène',0,'Il n’y a pas de carbone',0),(13,11,'Comment se forme un trou noir?','Par l’explosion d’un astéroïde',0,'L\'effondrement d’une étoile sur elle-même',1,'Une faille dans l’espace',0),(14,12,'Si un vent de 160 km/h souffle sur Mars quel serait son ressenti sur Terre?','18 km/h',1,'50 km/h',0,'200 km/h',0);
/*!40000 ALTER TABLE `quizz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'nebula'
--

--
-- Dumping routines for database 'nebula'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-27 15:32:36
