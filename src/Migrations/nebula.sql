USE `nebula`;
DROP TABLE IF EXISTS `fact_sheets`;
CREATE TABLE `nebula`.`fact_sheets` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) NOT NULL,
  `tab_title` varchar(110) NOT NULL,
  `category` varchar(60) NOT NULL,
  `main_title` varchar(60) NOT NULL,
  `video_description_title` varchar(60) NOT NULL,
  `video_description_text` varchar(3000) NOT NULL,
  `video_src` varchar(2048) NOT NULL,
  `video_alt` varchar(100) NOT NULL,
  `explanation_title` varchar(60) NOT NULL,
  `explanation_text` varchar(3000) NOT NULL,
  `scientific_fact_title` varchar(60) NOT NULL,
  `scientific_fact_text` varchar(3000) NOT NULL,
  `posted_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);
/*index*/
SELECT
  `posted_at`
FROM `fact_sheets`;
/*show*/
SELECT
  `slug`,
  `tab_title`,
  `category`,
  `main_title`,
  `video_description_title`,
  `video_description_text`,
  `video_src`,
  `video_alt`,
  `explanation_title`,
  `explanation_text`,
  `scientific_fact_title`,
  `scientific_fact_text`,
  `posted_at`
FROM
  `fact_sheets`
WHERE
  `id` = 1
;
/*add*/
INSERT INTO `fact_sheets` SET
  `slug` = 'test slug',
  `tab_title` = 'test tab_title',
  `category` = 'test category',
  `main_title` = 'test main_title',
  `video_description_title` = 'test video_description_title',
  `video_description_text` = 'test video_description_text',
  `video_src` = 'test video_src',
  `video_alt` = 'test video_alt',
  `explanation_title` = 'test explanation_title',
  `explanation_text` = 'test explanation_text',
  `scientific_fact_title` = 'test scientific_fact_title',
  `scientific_fact_text` = 'test scientific_fact_text',
  `posted_at`= '2000-01-01 00:00:00'
;
/*edit*/
UPDATE
  `fact_sheets`
SET
  `slug` = 'test slug',
  `tab_title` = 'test tab_title',
  `category` = 'test category',
  `main_title` = 'test main_title',
  `video_description_title` = 'test video_description_title',
  `video_description_text` = 'test video_description_text',
  `video_src` = 'test video_src',
  `video_alt` = 'test video_alt',
  `explanation_title` = 'test explanation_title',
  `explanation_text` = 'test explanation_text',
  `scientific_fact_title` = 'test scientific_fact_title',
  `scientific_fact_text` = 'test scientific_fact_text',
  `posted_at`= '2000-01-01 00:00:00'
WHERE
  `id` = 1
;
/*delete*/
DELETE FROM `fact_sheets` WHERE `id` = 1;
#  -------------------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `nebula`.`questions` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(120) NOT NULL,
  `answer` BOOLEAN NOT NULL,
  `id_fact`INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `id_fact_constraint` FOREIGN KEY (`id_fact`) REFERENCES `nebula`.`fact_sheets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);
DROP TABLE IF EXISTS `users`;
CREATE TABLE `nebula`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
);