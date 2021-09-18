-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 18 sep. 2021 à 08:47
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ongbase`
--

-- --------------------------------------------------------

--
-- Structure de la table `acn`
--

CREATE TABLE `acn` (
  `id_acn` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `benef` int(11) NOT NULL,
  `oper` int(11) NOT NULL,
  `exte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `idactivite` int(11) NOT NULL,
  `codesite` varchar(100) NOT NULL,
  `dateactivite` date NOT NULL,
  `oper_fonc` double NOT NULL,
  `ayantrapport` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `agr`
--

CREATE TABLE `agr` (
  `id_agr` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `benef` int(11) NOT NULL,
  `oper` int(11) NOT NULL,
  `exte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `all_mat`
--

CREATE TABLE `all_mat` (
  `id_allmat` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `0a5` int(11) NOT NULL,
  `6a11` int(11) NOT NULL,
  `12a23` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `nomcommune` varchar(100) NOT NULL,
  `codedistrict` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `Id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `fonction` varchar(250) NOT NULL,
  `lieu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Id`, `user`, `mdp`, `fonction`, `lieu`) VALUES
(1, 'admin', 'service', 'Responsable Suivie et Evaluation', 'Ihorombe'),
(2, 'Claude', 'Ra-Claude', 'Agent de terrain', 'Ihorombe'),
(3, 'Clarelle', 'Cla', 'Agent du bureau', 'Ihorombe');

-- --------------------------------------------------------

--
-- Structure de la table `dc`
--

CREATE TABLE `dc` (
  `id_dc` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `dc0a5` int(11) NOT NULL,
  `dc6a11` int(11) NOT NULL,
  `dc12a23` int(11) NOT NULL,
  `dc24a59` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

CREATE TABLE `district` (
  `nomdistrict` varchar(30) NOT NULL,
  `coderegion` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `edn`
--

CREATE TABLE `edn` (
  `id_end` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `0a23_recenses` int(11) NOT NULL,
  `0a23_p_en` int(11) NOT NULL,
  `24a59_recenses` int(11) NOT NULL,
  `24a59_p_en` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enf_0a5`
--

CREATE TABLE `enf_0a5` (
  `id_0a5` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recenses` int(11) NOT NULL,
  `pesesZ1` int(11) NOT NULL,
  `pesesZ2` int(11) NOT NULL,
  `pesesZ3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enf_6a11`
--

CREATE TABLE `enf_6a11` (
  `id_6a11` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recenses` int(11) NOT NULL,
  `pesesZ1` int(11) NOT NULL,
  `pesesZ2` int(11) NOT NULL,
  `pesesZ3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enf_6a59`
--

CREATE TABLE `enf_6a59` (
  `id_6a59` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recenses` int(11) NOT NULL,
  `muac_pb` int(11) NOT NULL,
  `pb115` int(11) NOT NULL,
  `pb115_125` int(11) NOT NULL,
  `pb115oedeme` int(11) NOT NULL,
  `115pb125oedeme` int(11) NOT NULL,
  `refere_creni` int(11) NOT NULL,
  `refere_crenas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enf_12a23`
--

CREATE TABLE `enf_12a23` (
  `id_12a23` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recenses` int(11) NOT NULL,
  `pesesZ1` int(11) NOT NULL,
  `pesesZ2` int(11) NOT NULL,
  `pesesZ3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `enf_24a59`
--

CREATE TABLE `enf_24a59` (
  `id_24a59` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recenses` int(11) NOT NULL,
  `pesesZ1` int(11) NOT NULL,
  `pesesZ2` int(11) NOT NULL,
  `pesesZ3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `femmes_enceintes`
--

CREATE TABLE `femmes_enceintes` (
  `idfemme_enceinte` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recence` int(11) NOT NULL,
  `refere_cpn` int(11) NOT NULL,
  `participant_en` int(11) NOT NULL,
  `accouchement_med` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `fonct` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `mes_taille`
--

CREATE TABLE `mes_taille` (
  `id_mes_taille` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `0a5m1` int(11) NOT NULL,
  `6a11m1` int(11) NOT NULL,
  `12a23m1` int(11) NOT NULL,
  `24a59m1` int(11) NOT NULL,
  `0a5m2` int(11) NOT NULL,
  `6a11m2` int(11) NOT NULL,
  `12a23m2` int(11) NOT NULL,
  `24a59m2` int(11) NOT NULL,
  `0a5m3` int(11) NOT NULL,
  `6a11m3` int(11) NOT NULL,
  `12a23m3` int(11) NOT NULL,
  `24a59m3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `naissance`
--

CREATE TABLE `naissance` (
  `id_naissance` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recences` int(11) NOT NULL,
  `vivant` int(11) NOT NULL,
  `morts_nes` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `taille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `province`
--

CREATE TABLE `province` (
  `nomprovince` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `province`
--

INSERT INTO `province` (`nomprovince`, `photo`) VALUES
('ANTANANARIVO', 'Antananarivo.JPG'),
('ANTSIRANANA', 'Antsiranana.JPG'),
('FIANARANTSOA', 'Fianarantsoa.JPG'),
('MAHAJANGA', 'Mahajanga.JPG'),
('TOAMASINA', 'Toamasina.JPG'),
('TOLIARA', 'Toliara.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE `reference` (
  `id_reference` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `r0a5` int(11) NOT NULL,
  `r6a11` int(11) NOT NULL,
  `r12a23` int(11) NOT NULL,
  `r24a59` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `province` varchar(100) NOT NULL,
  `nomregion` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `nomsite` varchar(100) NOT NULL,
  `codecommune` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vad`
--

CREATE TABLE `vad` (
  `id_vad` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `p_m_0a23` int(11) NOT NULL,
  `p_m_24a59` int(11) NOT NULL,
  `p_f_enceinte` int(11) NOT NULL,
  `r_m_0a23` int(11) NOT NULL,
  `r_m_24a59` int(11) NOT NULL,
  `r_f_enceinte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `zazatom`
--

CREATE TABLE `zazatom` (
  `id_zazatomady` int(11) NOT NULL,
  `code_site` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dateact` date NOT NULL,
  `recue` int(11) NOT NULL,
  `distribue` int(11) NOT NULL,
  `recue_zzt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acn`
--
ALTER TABLE `acn`
  ADD PRIMARY KEY (`id_acn`),
  ADD KEY `acn_ibfk_1` (`code_site`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`idactivite`),
  ADD KEY `CODESITE` (`codesite`);

--
-- Index pour la table `agr`
--
ALTER TABLE `agr`
  ADD PRIMARY KEY (`id_agr`),
  ADD KEY `agr_ibfk_1` (`code_site`);

--
-- Index pour la table `all_mat`
--
ALTER TABLE `all_mat`
  ADD PRIMARY KEY (`id_allmat`),
  ADD KEY `all_mat_ibfk_1` (`code_site`);

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`nomcommune`),
  ADD KEY `CODEDISTRICT` (`codedistrict`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `dc`
--
ALTER TABLE `dc`
  ADD PRIMARY KEY (`id_dc`),
  ADD KEY `dc_ibfk_1` (`code_site`);

--
-- Index pour la table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`nomdistrict`),
  ADD KEY `CODEREGION` (`coderegion`);

--
-- Index pour la table `edn`
--
ALTER TABLE `edn`
  ADD PRIMARY KEY (`id_end`),
  ADD KEY `edn_ibfk_1` (`code_site`);

--
-- Index pour la table `enf_0a5`
--
ALTER TABLE `enf_0a5`
  ADD PRIMARY KEY (`id_0a5`),
  ADD KEY `enf_0a5_ibfk_1` (`code_site`);

--
-- Index pour la table `enf_6a11`
--
ALTER TABLE `enf_6a11`
  ADD PRIMARY KEY (`id_6a11`),
  ADD KEY `enf_6a11_ibfk_1` (`code_site`);

--
-- Index pour la table `enf_6a59`
--
ALTER TABLE `enf_6a59`
  ADD PRIMARY KEY (`id_6a59`),
  ADD KEY `enf_6a59_ibfk_1` (`code_site`);

--
-- Index pour la table `enf_12a23`
--
ALTER TABLE `enf_12a23`
  ADD PRIMARY KEY (`id_12a23`),
  ADD KEY `enf_12a23_ibfk_1` (`code_site`);

--
-- Index pour la table `enf_24a59`
--
ALTER TABLE `enf_24a59`
  ADD PRIMARY KEY (`id_24a59`),
  ADD KEY `enf_24a59_ibfk_1` (`code_site`);

--
-- Index pour la table `femmes_enceintes`
--
ALTER TABLE `femmes_enceintes`
  ADD PRIMARY KEY (`idfemme_enceinte`),
  ADD KEY `femmes_enceintes_ibfk_1` (`code_site`);

--
-- Index pour la table `mes_taille`
--
ALTER TABLE `mes_taille`
  ADD PRIMARY KEY (`id_mes_taille`),
  ADD KEY `mes_taille_ibfk_1` (`code_site`);

--
-- Index pour la table `naissance`
--
ALTER TABLE `naissance`
  ADD PRIMARY KEY (`id_naissance`),
  ADD KEY `naissance_ibfk_1` (`code_site`);

--
-- Index pour la table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`nomprovince`);

--
-- Index pour la table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`),
  ADD KEY `code_site` (`code_site`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`nomregion`),
  ADD KEY `province` (`province`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`nomsite`),
  ADD KEY `CODECOMMUNE` (`codecommune`);

--
-- Index pour la table `vad`
--
ALTER TABLE `vad`
  ADD PRIMARY KEY (`id_vad`),
  ADD KEY `vad_ibfk_1` (`code_site`);

--
-- Index pour la table `zazatom`
--
ALTER TABLE `zazatom`
  ADD PRIMARY KEY (`id_zazatomady`),
  ADD KEY `zazatom_ibfk_1` (`code_site`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acn`
--
ALTER TABLE `acn`
  MODIFY `id_acn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `idactivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `agr`
--
ALTER TABLE `agr`
  MODIFY `id_agr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `all_mat`
--
ALTER TABLE `all_mat`
  MODIFY `id_allmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `dc`
--
ALTER TABLE `dc`
  MODIFY `id_dc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `edn`
--
ALTER TABLE `edn`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `enf_0a5`
--
ALTER TABLE `enf_0a5`
  MODIFY `id_0a5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `enf_6a11`
--
ALTER TABLE `enf_6a11`
  MODIFY `id_6a11` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `enf_6a59`
--
ALTER TABLE `enf_6a59`
  MODIFY `id_6a59` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `enf_12a23`
--
ALTER TABLE `enf_12a23`
  MODIFY `id_12a23` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `enf_24a59`
--
ALTER TABLE `enf_24a59`
  MODIFY `id_24a59` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `femmes_enceintes`
--
ALTER TABLE `femmes_enceintes`
  MODIFY `idfemme_enceinte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `mes_taille`
--
ALTER TABLE `mes_taille`
  MODIFY `id_mes_taille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `naissance`
--
ALTER TABLE `naissance`
  MODIFY `id_naissance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vad`
--
ALTER TABLE `vad`
  MODIFY `id_vad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `zazatom`
--
ALTER TABLE `zazatom`
  MODIFY `id_zazatomady` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acn`
--
ALTER TABLE `acn`
  ADD CONSTRAINT `acn_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`codesite`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agr`
--
ALTER TABLE `agr`
  ADD CONSTRAINT `agr_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `all_mat`
--
ALTER TABLE `all_mat`
  ADD CONSTRAINT `all_mat_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_ibfk_1` FOREIGN KEY (`codedistrict`) REFERENCES `district` (`nomdistrict`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `dc`
--
ALTER TABLE `dc`
  ADD CONSTRAINT `dc_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`coderegion`) REFERENCES `region` (`nomregion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `edn`
--
ALTER TABLE `edn`
  ADD CONSTRAINT `edn_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enf_0a5`
--
ALTER TABLE `enf_0a5`
  ADD CONSTRAINT `enf_0a5_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enf_6a11`
--
ALTER TABLE `enf_6a11`
  ADD CONSTRAINT `enf_6a11_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enf_6a59`
--
ALTER TABLE `enf_6a59`
  ADD CONSTRAINT `enf_6a59_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enf_12a23`
--
ALTER TABLE `enf_12a23`
  ADD CONSTRAINT `enf_12a23_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enf_24a59`
--
ALTER TABLE `enf_24a59`
  ADD CONSTRAINT `enf_24a59_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `femmes_enceintes`
--
ALTER TABLE `femmes_enceintes`
  ADD CONSTRAINT `femmes_enceintes_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mes_taille`
--
ALTER TABLE `mes_taille`
  ADD CONSTRAINT `mes_taille_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `naissance`
--
ALTER TABLE `naissance`
  ADD CONSTRAINT `naissance_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `reference_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`province`) REFERENCES `province` (`nomprovince`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `site_ibfk_1` FOREIGN KEY (`codecommune`) REFERENCES `commune` (`nomcommune`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vad`
--
ALTER TABLE `vad`
  ADD CONSTRAINT `vad_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `zazatom`
--
ALTER TABLE `zazatom`
  ADD CONSTRAINT `zazatom_ibfk_1` FOREIGN KEY (`code_site`) REFERENCES `site` (`nomsite`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
