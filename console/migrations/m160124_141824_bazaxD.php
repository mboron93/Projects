<?php

use yii\db\Migration;

class m160124_141824_bazaxD extends Migration
{
    public function up()
    {
        $sql = <<<GROCIK
                -- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 24 Sty 2016, 14:16
-- Wersja serwera: 5.5.46-0ubuntu0.14.04.2
-- Wersja PHP: 5.5.9-1ubuntu4.14

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `projectdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id_miasta` int(11) NOT NULL AUTO_INCREMENT,
  `miasto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_miasta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tabela Truncate przed wstawieniem `city`
--

TRUNCATE TABLE `city`;
--
-- Zrzut danych tabeli `city`
--

INSERT INTO `city` (`id_miasta`, `miasto`) VALUES
(3, 'Gdynia'),
(4, 'Gdańsk'),
(5, 'Wejherowo'),
(6, 'Wrocław'),
(7, 'Kazimierz'),
(8, 'Poznań');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dish`
--

DROP TABLE IF EXISTS `dish`;
CREATE TABLE IF NOT EXISTS `dish` (
  `id_dania` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_dania` varchar(30) NOT NULL,
  `opis` text NOT NULL,
  `koszt_dania` float NOT NULL,
  `id_restauracji` int(11) NOT NULL,
  `rodzaj` text NOT NULL,
  PRIMARY KEY (`id_dania`,`id_restauracji`),
  KEY `id_restauracji` (`id_restauracji`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Tabela Truncate przed wstawieniem `dish`
--

TRUNCATE TABLE `dish`;
--
-- Zrzut danych tabeli `dish`
--

INSERT INTO `dish` (`id_dania`, `nazwa_dania`, `opis`, `koszt_dania`, `id_restauracji`, `rodzaj`) VALUES
(3, 'Calzone', '', 21, 1, 'Pizza'),
(4, '2000', '', 19, 1, 'Pizza'),
(5, 'Tino specjalite', '', 43, 2, 'Pizza'),
(6, 'hawajska', '', 25, 2, 'Pizza'),
(7, 'świat serów', '', 90, 3, 'Pizza'),
(8, 'krupnik', '', 25, 3, 'Zupy'),
(9, 'kotlet po bawarsku', '', 25, 4, 'Dania obiadowe'),
(10, 'bigos na smalcu', '', 16, 4, 'Dania obiadowe'),
(11, 'margarita', '', 11, 5, 'Pizza'),
(12, 'mix', '', 23, 5, 'Makarony'),
(13, 'pikantne kawałki kurczaka', '', 18, 6, 'Dania obiadowe'),
(14, 'śledź w occie', '', 12, 6, 'Sałatki'),
(15, 'kurczak w ryżu', '', 19, 7, 'Dania obiadowe'),
(16, 'ryż w kurczaku', '', 91, 7, 'Sałatki'),
(17, 'durum', '', 14, 8, 'Rollo'),
(18, 'kebab w bółce', '', 15, 8, 'Kebab'),
(19, 'king', '', 7, 9, 'Dania obiadowe'),
(20, 'Bujrger', '', 9, 9, 'Dania obiadowe'),
(21, 'kurczaczki', '', 15, 10, 'Dodatki'),
(22, 'b-smart', '', 6, 10, 'Dodatki'),
(23, 'Schabowy raz', '', 25, 11, 'Dania obiadowe'),
(24, 'Schabowy dwa', '', 26, 11, 'Dania obiadowe'),
(25, 'Polski StejkXXL', '', 55, 12, 'Dania obiadowe'),
(26, 'Nie Polski StejkXXL', '', 30, 12, 'Dania obiadowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id_restauracji` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(50) NOT NULL,
  `id_miasta` int(30) NOT NULL,
  `telefon` INT(11),
  `e-mail` VARCHAR(55),
  PRIMARY KEY (`id_restauracji`,`id_miasta`),
  KEY `id_miasta` (`id_miasta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Tabela Truncate przed wstawieniem `restaurant`
--

TRUNCATE TABLE `restaurant`;
--
-- Zrzut danych tabeli `restaurant`
--

INSERT INTO `restaurant` (`id_restauracji`, `nazwa`, `id_miasta` , `telefon` , `e-mail`) VALUES
(1, 'valmont', 4, 4562342, 'VALMONT@VALMONT.PL'),
(2, 'tino', 4, 5323423, 'tino@tino.pl'),
(3, 'pizza hut', 3, 3452342, 'hut@hut.com'),
(4, 'polskie jadło', 7, 4534212,'blabla@gmail.com'),
(5, 'city pizza',  7, 31231223,'city@city.net'),
(6, 'kwadrans', 3, 345232,'kw@kwkwkw.kw'),
(7, 'pekin bar', 8, 4534,'china@pekin.pl'),
(8, 'Kebab star', 5, 3453453,'kebab@star.pl'),
(9, 'Burger King', 5, 3453243,'burger@king.pl'),
(10, 'KFC', 6, 34534, 'kfc@kfc.kfc'),
(11, 'Schabowy Raz', 6, 34534, 'schab@raz.pl'),
(12, 'Polskie Stejki', 8, 2342321,'stejk@gmail.com');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dania_restauracji_ibfk_1` FOREIGN KEY (`id_restauracji`) REFERENCES `restaurant` (`id_restauracji`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restauracje_ibfk_1` FOREIGN KEY (`id_miasta`) REFERENCES `city` (`id_miasta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

GROCIK;
        $this->execute($sql);
    }

    public function down()
    {
        echo "m160124_141824_bazaxD cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
