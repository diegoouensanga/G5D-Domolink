-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 22 jan. 2019 à 10:34
-- Version du serveur :  8.0.13
-- Version de PHP :  7.1.19

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Domolink`
--
CREATE DATABASE IF NOT EXISTS `Domolink` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Domolink;

-- --------------------------------------------------------

--
-- Structure de la table `Administration`
--

CREATE TABLE `Administration` (
  `cgu` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentions_legales` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `societe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(2083) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(2083) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(2083) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Administration`
--

INSERT INTO `Administration` (`cgu`, `adresse`, `mail`, `telephone`, `mentions_legales`, `nom`, `societe`, `slogan`, `facebook`, `twitter`, `instagram`) VALUES
('Conditions générales d\'utilisation du site DomoLink\r\n\r\n\r\nARTICLE 1 : Objet\r\n\r\nLes présentes « conditions générales d\'utilisation » ont pour objet l\'encadrement juridique de l’utilisation du site [votre site] et de ses services.\r\n\r\nCe contrat est conclu entre :\r\n\r\nLe gérant du site internet, ci-après désigné « l’Éditeur »,\r\n\r\nToute personne physique ou morale souhaitant accéder au site et à ses services, ci-après appelé « l’Utilisateur ».\r\n\r\nLes conditions générales d\'utilisation doivent être acceptées par tout Utilisateur, et son accès au site vaut acceptation de ces conditions.\r\n\r\n\r\nARTICLE 2 : Mentions légales\r\n\r\nPour les personnes morales :\r\n\r\nLe site [nom du site] est édité par la société [nom de la société], [statut juridique (SAS, SARL, etc.)] au capital de [montant en euros] €, dont le siège social est situé au [adresse du siège social].\r\n\r\nLa société est représentée par [nom et prénom du responsable].\r\n\r\n\r\nPour les personnes physiques : \r\n\r\nLe site [nom du site] est édité par [nom et prénom du responsable], domicilié au [adresse postale].\r\n\r\n\r\n\r\nARTICLE 3 : accès aux services\r\n\r\nL’Utilisateur du site [votre site] a accès aux services suivants :\r\n•	[Service n°1]\r\n•	[Service n°2]\r\n•	[Service n°3]\r\n•	[Service n°4]\r\n•	…\r\n\r\nTout Utilisateur ayant accès a internet peut accéder gratuitement et depuis n’importe où au site. Les frais supportés par l’Utilisateur pour y accéder (connexion internet, matériel informatique, etc.) ne sont pas à la charge de l’Éditeur.\r\n\r\nLes services suivants ne sont pas accessible pour l’Utilisateur que s’il est membre du site (c’est-à-dire qu’ile st identifié à l’aide de ses identifiants de connexion) :\r\n•	[Service n°1]\r\n•	[Service n°2]\r\n•	…\r\n\r\nLe site et ses différents services peuvent être interrompus ou suspendus par l’Éditeur, notamment à l’occasion d’une maintenance, sans obligation de préavis ou de justification.\r\n\r\n\r\nARTICLE 4 : Responsabilité de l’Utilisateur\r\n\r\nL\'Utilisateur est responsable des risques liés à l’utilisation de son identifiant de connexion et de son mot de passe. \r\n\r\nLe mot de passe de l’Utilisateur doit rester secret. En cas de divulgation de mot de passe, l’Éditeur décline toute responsabilité.\r\n\r\nL’Utilisateur assume l’entière responsabilité de l’utilisation qu’il fait des informations et contenus présents sur le site [votre site].\r\n\r\nTout usage du service par l\'Utilisateur ayant directement ou indirectement pour conséquence des dommages doit faire l\'objet d\'une indemnisation au profit du site.\r\n\r\nLe site permet aux membres de publier sur le site :\r\n•	[Commentaires] ;\r\n•	[Oeuvres] ;\r\n•	Etc.\r\n\r\nLe membre s’engage à tenir des propos respectueux des autres et de la loi et accepte que ces publications soient modérées ou refusées par l’Éditeur, sans obligation de justification. \r\n\r\nEn publiant sur le site, l’Utilisateur cède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé.\r\n\r\nL’Éditeur s\'engage toutefois à citer le membre en cas d’utilisation de  sa publication\r\n\r\n\r\n\r\nARTICLE 5 : Responsabilité de l’Éditeur\r\n\r\nTout dysfonctionnement du serveur ou du réseau ne peut engager la responsabilité de l’Éditeur.\r\n\r\nDe même, la responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d\'un tiers.\r\n\r\nLe site [votre site] s\'engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données. Toutefois, il n’apporte pas une garantie de sécurité totale.\r\n\r\nL’Éditeur se réserve la faculté d’une non-garantie de la fiabilité des sources, bien que les informations diffusées su le site soient réputées fiables.\r\n\r\nARTICLE 6 : Propriété intellectuelle\r\n\r\nLes contenus du site [votre site] (logos, textes, éléments graphiques, vidéos, etc.) son protégés par le droit d’auteur, en vertu du Code de la propriété intellectuelle.\r\n\r\nL’Utilisateur devra obtenir l’autorisation de l’éditeur du site avant toute reproduction, copie ou publication de ces différents contenus.\r\n\r\nCes derniers peuvent être utilisés par les utilisateurs à des fins privées ; tout usage commercial est interdit.\r\n\r\nL’Utilisateur est entièrement responsable de tout contenu qu’il met en ligne et il s’engage à ne pas porter atteinte à un tiers.\r\n\r\nL’Éditeur du site se réserve le droit de modérer ou de supprimer librement et à tout moment les contenus mis en ligne par les utilisateurs, et ce sans justification.\r\n\r\n\r\nARTICLE 7 : Données personnelles\r\n\r\nL’Utilisateur doit obligatoirement fournir des informations personnelles pour procéder à son inscription sur le site. \r\n\r\nL’adresse électronique (e-mail) de l’utilisateur pourra notamment être utilisée par le site [nom de votre site] pour la communication d’informations diverses et la gestion du compte.\r\n\r\n[Votre site] garantie le respect de la vie privée de l’utilisateur, conformément à la loi n°78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés.\r\n\r\nLe site est déclaré auprès de la CNIL sous le numéro suivant : [numéro].\r\n\r\nEn vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l\'Utilisateur dispose d\'un droit d\'accès, de rectification, de suppression et d\'opposition de ses données personnelles. L\'Utilisateur exerce ce droit via :\r\n\r\n•	Son espace personnel sur le site ;\r\n•	Un formulaire de contact ;\r\n•	Par mail à [adresse mail de l’administrateur] ;\r\n•	Par voie postale au [votre adresse].\r\n\r\n\r\nARTICLE 8 : Liens hypertextes\r\n\r\nLes domaines vers lesquels mènent les liens hypertextes présents sur le site n’engagent pas la responsabilité de l’Éditeur de [votre site], qui n’a pas de contrôle sur ces liens.\r\n\r\nIl est possible pour un tiers de créer un lien vers une page du site [votre site] sans autorisation expresse de l’éditeur.\r\n\r\n\r\nARTICLE 9 : Évolution des conditions générales d’utilisation\r\n\r\nLe site [votre site] se réserve le droit de modifier les clauses de ces conditions générales d’utilisation à tout moment et sans justification.\r\n\r\n\r\nARTICLE 10 : Durée du contrat\r\n\r\nLa durée du présent contrat est indéterminée. Le contrat produit ses effets à l\'égard de l\'Utilisateur à compter du début de l’utilisation du service.\r\n\r\n\r\nARTICLE 11 : Droit applicable et juridiction compétente\r\n\r\nLe présent contrat dépend de la législation française. \r\nEn cas de litige non résolu à l’amiable entre l’Utilisateur et l’Éditeur, les tribunaux de [nom de ville] sont compétents pour régler le contentieux.\r\n\r\n', '10 Rue de Vanves 92130 Issy', 'support@domolink.fr', '0636303630', 'Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet www.DomoLink.fr sont :\r\nEditeur du Site :\r\nSARL DomoLink Numéro de SIRET : 75221735600019\r\nResponsable éditorial : Feller\r\n20 rue Tondu du Metz 60350 ATTICHY\r\nTéléphone : 0360455713\r\nFax : 0972249854\r\nEmail : contact@DomoLink.fr\r\nSite Web : www.DomoLink.fr\r\nHébergement :\r\nHébergeur : SARL DomoLink 20 rue Tondu du Metz 60350 ATTICHY Site Web : www.DomoLink.fr\r\nDéveloppement :\r\nSARL DomoLink\r\nAdresse : 20 rue Tondu du Metz 60350 ATTICHY\r\nSite Web : www.DomoLink.fr\r\nConditions d’utilisation :\r\nCe site (www.DomoLink.fr) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…\r\nL’agence web DomoLink met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de , et signaler toutes modifications du site qu’il jugerait utile. n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.\r\nCookies : Le site www.DomoLink.fr peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.\r\nLiens hypertextes : Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. SARL DomoLink ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.\r\nLes utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de SARL DomoLink.\r\nDans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de SARL DomoLink, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien. SARL DomoLink se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.\r\nServices fournis :\r\nL’ensemble des activités de la société ainsi que ses informations sont présentés sur notre site www.DomoLink.fr.\r\nSARL DomoLink s’efforce de fournir sur le site www.DomoLink.fr des informations aussi précises que possible. les renseignements figurant sur le site www.DomoLink.fr ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site www.DomoLink.fr sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.\r\nLimitation contractuelles sur les données :\r\nLes informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@DomoLink.fr, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).\r\nTout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.\r\nLes liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de SARL DomoLink.\r\nPropriété intellectuelle :\r\nTout le contenu du présent site www.DomoLink.fr, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.\r\nToute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de SARL DomoLink. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.\r\nDéclaration à la CNIL :\r\nConformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).\r\nLitiges :\r\nLes présentes conditions du site www.DomoLink.fr sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.\r\nDonnées personnelles :\r\nDe manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet www.DomoLink.fr.\r\nCependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».\r\nDans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.\r\nEnfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.\r\nDe telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.', 'DomoLink', 'Domisep', 'Une solution de Domisep !', 'https://fr-fr.facebook.com/domolink.app.1', 'https://twitter.com/domolink', 'https://www.instagram.com/domolink_app/');

-- --------------------------------------------------------

--
-- Structure de la table `Animaux`
--

CREATE TABLE `Animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `race` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Animaux`
--

INSERT INTO `Animaux` (`id`, `nom`, `age`, `race`, `id_utilisateur`) VALUES
(3, 'Poisson', NULL, NULL, 35),
(4, 'Kangooroo', NULL, NULL, 35);

-- --------------------------------------------------------

--
-- Structure de la table `Equipement`
--

CREATE TABLE `Equipement` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('capteur','actionneur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  `genre` enum('Température','Humidité','Alarme','Lumières') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donnees` int(11) DEFAULT NULL,
  `piece_id` int(11) DEFAULT NULL,
  `serial_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Equipement`
--

INSERT INTO `Equipement` (`id`, `nom`, `type`, `actif`, `genre`, `donnees`, `piece_id`, `serial_number`) VALUES
(6, NULL, 'capteur', NULL, 'Température', 22, 78, 1),
(7, NULL, 'capteur', NULL, 'Humidité', 18, 78, NULL),
(8, NULL, 'actionneur', 1, 'Alarme', NULL, 78, NULL),
(9, NULL, 'actionneur', 0, 'Lumières', NULL, 78, NULL),
(15, NULL, 'capteur', 0, 'Humidité', 0, 91, 1234),
(17, NULL, 'capteur', 0, 'Humidité', 0, 101, 12345),
(18, NULL, 'capteur', 0, 'Humidité', 0, 101, 123455);

-- --------------------------------------------------------

--
-- Structure de la table `FAQ`
--

CREATE TABLE `FAQ` (
  `id` int(11) NOT NULL,
  `question` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `FAQ`
--

INSERT INTO `FAQ` (`id`, `question`, `reponse`) VALUES
(1, 'Comment changer mon mot de passe ?', 'Rendez-vous dans \"Compte\" , puis cliquer sur \"Changer le mot de passe\" sur le menu.'),
(2, 'Comment supprimer mon compte ?', 'Rendez-vous dans la rubrique \"Compte\" puis cliquer sur \"Supprimer le compte\" sur le menu, et renseignez votre adresse mail.');

-- --------------------------------------------------------

--
-- Structure de la table `Increment`
--

CREATE TABLE `Increment` (
  `statistique_id` int(11) DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_receveur` int(11) DEFAULT NULL,
  `id_envoyeur` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `lu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Messages`
--

INSERT INTO `Messages` (`id`, `message`, `titre`, `id_receveur`, `id_envoyeur`, `date`, `lu`) VALUES
(7, 'Bonjour', 'Test', 31, 34, '2019-01-19 10:07:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Notifications`
--

CREATE TABLE `Notifications` (
  `id` int(11) NOT NULL,
  `expediteur` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci,
  `lu` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Notifications`
--

INSERT INTO `Notifications` (`id`, `expediteur`, `type`, `message`, `lu`, `date`, `utilisateur_id`, `objet`) VALUES
(4, 'System', NULL, 'Vous avez un nouveau message', NULL, '2019-01-19 10:00:07', 33, 'Nouveau Message'),
(5, 'System', NULL, 'Vous avez un nouveau message', NULL, '2019-01-19 10:07:06', 31, 'Nouveau Message');

-- --------------------------------------------------------

--
-- Structure de la table `NourritureAnimaux`
--

CREATE TABLE `NourritureAnimaux` (
  `id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `NourritureAnimaux`
--

INSERT INTO `NourritureAnimaux` (`id`, `animal_id`, `date`) VALUES
(6, 1, '11:11:00'),
(7, 3, '02:02:00'),
(9, 3, '09:09:00');

-- --------------------------------------------------------

--
-- Structure de la table `Pannes`
--

CREATE TABLE `Pannes` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `equipement_id` int(11) DEFAULT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci,
  `etat` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Pannes`
--

INSERT INTO `Pannes` (`id`, `date`, `equipement_id`, `message`, `etat`, `client_id`, `serie`) VALUES
(1, '2019-01-19 00:01:38', NULL, 'Cassé', 1, 31, 1),
(2, '2019-01-19 23:48:09', NULL, 'Ne marche Plus', 1, 31, 123456);

-- --------------------------------------------------------

--
-- Structure de la table `Pieces`
--

CREATE TABLE `Pieces` (
  `id` int(11) NOT NULL,
  `nom` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Pieces`
--

INSERT INTO `Pieces` (`id`, `nom`, `id_utilisateur`) VALUES
(14, 'Chambre d\'amis', 6),
(17, 'Test', 12),
(23, 'Salon', 14),
(25, 'Chambre', 14),
(26, 'Jardin', 15),
(51, 'Cuisine', 15),
(55, 'Chambre', 15),
(56, 'Chambre', 16),
(57, 'Salle De Bain', 14),
(77, 'Test', 22),
(78, 'Jardin', 31),
(79, 'Cuisine', 23),
(81, 'Salon', 23),
(91, 'Salon', 31),
(100, 'Cuisine', 31),
(101, 'Cave', 35);

-- --------------------------------------------------------

--
-- Structure de la table `RDV`
--

CREATE TABLE `RDV` (
  `id` int(11) NOT NULL,
  `cause` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reparateur_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `RDV`
--

INSERT INTO `RDV` (`id`, `cause`, `date`, `reparateur_id`, `client_id`) VALUES
(1, 'panne', '2019-01-18', NULL, 31),
(2, 'panne', '2019-01-23', NULL, 31),
(3, 'panne', '2019-01-27', NULL, 34);

-- --------------------------------------------------------

--
-- Structure de la table `Statistiques`
--

CREATE TABLE `Statistiques` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `depart` datetime DEFAULT NULL,
  `espacement` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labels` text COLLATE utf8mb4_unicode_ci,
  `datas` text COLLATE utf8mb4_unicode_ci,
  `owner_type` enum('piece','capteur','utilisateur') COLLATE utf8mb4_unicode_ci DEFAULT 'piece',
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Statistiques`
--

INSERT INTO `Statistiques` (`id`, `type`, `depart`, `espacement`, `labels`, `datas`, `owner_type`, `owner_id`) VALUES
(1, NULL, NULL, 'mensuelle', '[\"Jan\", \"Fév\", \"Mar\", \"Avr\", \"Mai\", \"Jui\", \"Juil\", \"Aout\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"]', '[1, 2, 3, 4, 5, 6, 7, 8, 10, 17, 2, 15]', 'piece', 78),
(2, NULL, NULL, 'annuelle', '[\"2015\", \"2016\", \"2017\", \"2018\"]', '[8, 10, 17, 2]', 'piece', 78),
(3, NULL, NULL, 'mensuelle', '[\"Jan\", \"Fév\", \"Mar\", \"Avr\", \"Mai\", \"Jui\", \"Juil\", \"Aout\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"]', '[2, 3, 3, 10, 5, 6, 7, 8, 7, 17, 2, 4]', 'utilisateur', 31),
(4, NULL, NULL, 'annuelle', '[\"2015\", \"2016\", \"2017\", \"2018\"]', '[69, 10, 42, 55]', 'utilisateur', 31);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `postal` int(8) DEFAULT NULL,
  `ville` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroRue` int(11) DEFAULT '0',
  `autres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cMAC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `nom`, `prenom`, `mail`, `mdp`, `type`, `telephone`, `naissance`, `postal`, `ville`, `pays`, `rue`, `numeroRue`, `autres`, `cMAC`) VALUES
(16, '', '', 'utilisateur.com', 'dd10ddc914f2528f71534cfbf6d73a9fadd3661efb09ae6d855c2d73fa81cc6b', 0, '', '1970-01-01', 0, '', '', '', 0, '', NULL),
(31, '', '', 'avocat@avocat.com', '9a258d488bdc2474ae16ab0185c12b700f654e415c38cde80ecc591bbf3460c6', 1, '0635298809', '1988-11-18', 75017, 'Lyon', '', '', 15, '', NULL),
(32, NULL, NULL, 'utilisateur@utilisateur.com', 'a3ff17b2f8366fc00af283083a61e0b6c44ac815b8a04e07d500c3f8a4064a6d', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 111),
(34, NULL, NULL, 'utilisateur2@utilisateur2.com', 'bad1f2e9a8e40433ec4e21bc10f79cbc3d00022b98b7d2246ef2225bde4dcc5d', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 123),
(35, NULL, NULL, 'admin@admin.com', '5c06eb3d5a05a19f49476d694ca81a36344660e9d5b98e3d6a6630f31c2422e7', 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1234);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Animaux`
--
ALTER TABLE `Animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Equipement`
--
ALTER TABLE `Equipement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Notifications`
--
ALTER TABLE `Notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `NourritureAnimaux`
--
ALTER TABLE `NourritureAnimaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pannes`
--
ALTER TABLE `Pannes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Pieces`
--
ALTER TABLE `Pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `RDV`
--
ALTER TABLE `RDV`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Statistiques`
--
ALTER TABLE `Statistiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Animaux`
--
ALTER TABLE `Animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Equipement`
--
ALTER TABLE `Equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Notifications`
--
ALTER TABLE `Notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `NourritureAnimaux`
--
ALTER TABLE `NourritureAnimaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `Pannes`
--
ALTER TABLE `Pannes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Pieces`
--
ALTER TABLE `Pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `RDV`
--
ALTER TABLE `RDV`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Statistiques`
--
ALTER TABLE `Statistiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
