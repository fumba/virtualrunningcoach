/*
SQLyog Community v12.3.1 (64 bit)
MySQL - 5.7.12-0ubuntu1.1 : Database - homestead
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `days` */

DROP TABLE IF EXISTS `days`;

CREATE TABLE `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `week_id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `distance` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `days` */

insert  into `days`(`id`,`week_id`,`order`,`status`,`distance`,`name`,`details`,`created_at`,`updated_at`) values 
(1,1,1,1,2,'Monday','Warm up: 10 minutes dynamic stretching.<br>Run 2 miles easy, taking walking breaks if needed.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(2,1,1,1,0,'Tuesday','Cross Training Day: Pick your favourite (swimming, biking, rowing, etc.). Do 30 minutes at moderate intensity.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(3,1,1,1,0,'Wednesday','Rest Day','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(4,1,1,0,2,'Thursday','Warm up: 10 minutes dynamic stretching. <br>Run 2 miles easy, taking walking breaks if needed.  ','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(5,1,1,0,0,'Friday','Strength Training Day: Do a total body workout that includes leg, arm, and core exercises.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(6,1,1,0,3,'Saturday','Warm up: 10 minutes dynamic stretching. <br>Run 3 miles. If needed, take 3 minutes walking between each mile.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(7,1,1,0,2,'Sunday','Rest Day','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(8,3,1,1,2,'Monday','Warm up: 10 minutes dynamic stretching.<br>Run 2 miles easy, taking walking breaks if needed.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(9,3,1,1,0,'Tuesday','Cross Training Day: Pick your favourite (swimming, biking, rowing, etc.). Do 30 minutes at moderate intensity.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(10,3,1,1,0,'Wednesday','Rest Day','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(11,3,1,0,2,'Thursday','Warm up: 10 minutes dynamic stretching. <br>Run 2 miles easy, taking walking breaks if needed.  ','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(12,3,1,0,0,'Friday','Strength Training Day: Do a total body workout that includes leg, arm, and core exercises.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(13,3,1,0,3,'Saturday','Warm up: 10 minutes dynamic stretching. <br>Run 3 miles. If needed, take 3 minutes walking between each mile.','2016-12-19 16:29:12','2016-12-19 16:29:12'),
(14,3,1,0,2,'Sunday','Rest Day','2016-12-19 16:29:12','2016-12-19 16:29:12');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(22,'2014_10_12_000000_create_users_table',1),
(23,'2014_10_12_100000_create_password_resets_table',1),
(24,'2016_11_16_024511_create_permission_tables',1),
(25,'2016_11_21_202732_create_plans_table',1),
(26,'2016_11_21_213620_create_weeks_table',1),
(27,'2016_11_22_224042_create_days_table',1),
(28,'2016_12_16_161056_create_plan_days_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `plan_days` */

DROP TABLE IF EXISTS `plan_days`;

CREATE TABLE `plan_days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `day_1` int(11) NOT NULL DEFAULT '0',
  `day_2` int(11) NOT NULL DEFAULT '0',
  `day_3` int(11) NOT NULL DEFAULT '0',
  `day_4` int(11) NOT NULL DEFAULT '0',
  `day_5` int(11) NOT NULL DEFAULT '0',
  `day_6` int(11) NOT NULL DEFAULT '0',
  `day_7` int(11) NOT NULL DEFAULT '0',
  `day_8` int(11) NOT NULL DEFAULT '0',
  `day_9` int(11) NOT NULL DEFAULT '0',
  `day_10` int(11) NOT NULL DEFAULT '0',
  `day_11` int(11) NOT NULL DEFAULT '0',
  `day_12` int(11) NOT NULL DEFAULT '0',
  `day_13` int(11) NOT NULL DEFAULT '0',
  `day_14` int(11) NOT NULL DEFAULT '0',
  `day_15` int(11) NOT NULL DEFAULT '0',
  `day_16` int(11) NOT NULL DEFAULT '0',
  `day_17` int(11) NOT NULL DEFAULT '0',
  `day_18` int(11) NOT NULL DEFAULT '0',
  `day_19` int(11) NOT NULL DEFAULT '0',
  `day_20` int(11) NOT NULL DEFAULT '0',
  `day_21` int(11) NOT NULL DEFAULT '0',
  `day_22` int(11) NOT NULL DEFAULT '0',
  `day_23` int(11) NOT NULL DEFAULT '0',
  `day_24` int(11) NOT NULL DEFAULT '0',
  `day_25` int(11) NOT NULL DEFAULT '0',
  `day_26` int(11) NOT NULL DEFAULT '0',
  `day_27` int(11) NOT NULL DEFAULT '0',
  `day_28` int(11) NOT NULL DEFAULT '0',
  `day_29` int(11) NOT NULL DEFAULT '0',
  `day_30` int(11) NOT NULL DEFAULT '0',
  `day_31` int(11) NOT NULL DEFAULT '0',
  `day_32` int(11) NOT NULL DEFAULT '0',
  `day_33` int(11) NOT NULL DEFAULT '0',
  `day_34` int(11) NOT NULL DEFAULT '0',
  `day_35` int(11) NOT NULL DEFAULT '0',
  `day_36` int(11) NOT NULL DEFAULT '0',
  `day_37` int(11) NOT NULL DEFAULT '0',
  `day_38` int(11) NOT NULL DEFAULT '0',
  `day_39` int(11) NOT NULL DEFAULT '0',
  `day_40` int(11) NOT NULL DEFAULT '0',
  `day_41` int(11) NOT NULL DEFAULT '0',
  `day_42` int(11) NOT NULL DEFAULT '0',
  `day_43` int(11) NOT NULL DEFAULT '0',
  `day_44` int(11) NOT NULL DEFAULT '0',
  `day_45` int(11) NOT NULL DEFAULT '0',
  `day_46` int(11) NOT NULL DEFAULT '0',
  `day_47` int(11) NOT NULL DEFAULT '0',
  `day_48` int(11) NOT NULL DEFAULT '0',
  `day_49` int(11) NOT NULL DEFAULT '0',
  `day_50` int(11) NOT NULL DEFAULT '0',
  `day_51` int(11) NOT NULL DEFAULT '0',
  `day_52` int(11) NOT NULL DEFAULT '0',
  `day_53` int(11) NOT NULL DEFAULT '0',
  `day_54` int(11) NOT NULL DEFAULT '0',
  `day_55` int(11) NOT NULL DEFAULT '0',
  `day_56` int(11) NOT NULL DEFAULT '0',
  `day_57` int(11) NOT NULL DEFAULT '0',
  `day_58` int(11) NOT NULL DEFAULT '0',
  `day_59` int(11) NOT NULL DEFAULT '0',
  `day_60` int(11) NOT NULL DEFAULT '0',
  `day_61` int(11) NOT NULL DEFAULT '0',
  `day_62` int(11) NOT NULL DEFAULT '0',
  `day_63` int(11) NOT NULL DEFAULT '0',
  `day_64` int(11) NOT NULL DEFAULT '0',
  `day_65` int(11) NOT NULL DEFAULT '0',
  `day_66` int(11) NOT NULL DEFAULT '0',
  `day_67` int(11) NOT NULL DEFAULT '0',
  `day_68` int(11) NOT NULL DEFAULT '0',
  `day_69` int(11) NOT NULL DEFAULT '0',
  `day_70` int(11) NOT NULL DEFAULT '0',
  `day_71` int(11) NOT NULL DEFAULT '0',
  `day_72` int(11) NOT NULL DEFAULT '0',
  `day_73` int(11) NOT NULL DEFAULT '0',
  `day_74` int(11) NOT NULL DEFAULT '0',
  `day_75` int(11) NOT NULL DEFAULT '0',
  `day_76` int(11) NOT NULL DEFAULT '0',
  `day_77` int(11) NOT NULL DEFAULT '0',
  `day_78` int(11) NOT NULL DEFAULT '0',
  `day_79` int(11) NOT NULL DEFAULT '0',
  `day_80` int(11) NOT NULL DEFAULT '0',
  `day_81` int(11) NOT NULL DEFAULT '0',
  `day_82` int(11) NOT NULL DEFAULT '0',
  `day_83` int(11) NOT NULL DEFAULT '0',
  `day_84` int(11) NOT NULL DEFAULT '0',
  `day_85` int(11) NOT NULL DEFAULT '0',
  `day_86` int(11) NOT NULL DEFAULT '0',
  `day_87` int(11) NOT NULL DEFAULT '0',
  `day_88` int(11) NOT NULL DEFAULT '0',
  `day_89` int(11) NOT NULL DEFAULT '0',
  `day_90` int(11) NOT NULL DEFAULT '0',
  `day_91` int(11) NOT NULL DEFAULT '0',
  `day_92` int(11) NOT NULL DEFAULT '0',
  `day_93` int(11) NOT NULL DEFAULT '0',
  `day_94` int(11) NOT NULL DEFAULT '0',
  `day_95` int(11) NOT NULL DEFAULT '0',
  `day_96` int(11) NOT NULL DEFAULT '0',
  `day_97` int(11) NOT NULL DEFAULT '0',
  `day_98` int(11) NOT NULL DEFAULT '0',
  `day_99` int(11) NOT NULL DEFAULT '0',
  `day_100` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plan_days` */

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plans_type_unique` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `plans` */

insert  into `plans`(`id`,`type`,`name`,`created_at`,`updated_at`) values 
(1,'5k','5K','2016-12-19 16:29:11','2016-12-19 16:29:11'),
(2,'10k','10K','2016-12-19 16:29:11','2016-12-19 16:29:11'),
(3,'half_marathon','Half Marathon','2016-12-19 16:29:11','2016-12-19 16:29:11'),
(4,'marathon','Marathon','2016-12-19 16:29:11','2016-12-19 16:29:11');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `user_has_permissions` */

DROP TABLE IF EXISTS `user_has_permissions`;

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `user_has_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_has_permissions` */

/*Table structure for table `user_has_roles` */

DROP TABLE IF EXISTS `user_has_roles`;

CREATE TABLE `user_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `user_has_roles_user_id_foreign` (`user_id`),
  CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_has_roles` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plan_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

/*Table structure for table `weeks` */

DROP TABLE IF EXISTS `weeks`;

CREATE TABLE `weeks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `weeks` */

insert  into `weeks`(`id`,`name`,`plan_id`,`created_at`,`updated_at`) values 
(1,'1',1,'2016-12-19 16:29:12','2016-12-19 16:29:12'),
(2,'2',1,'2016-12-19 16:29:12','2016-12-19 16:29:12'),
(3,'1',2,'2016-12-19 16:29:12','2016-12-19 16:29:12'),
(4,'2',2,'2016-12-19 16:29:12','2016-12-19 16:29:12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
