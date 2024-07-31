USE DB652110101;
CREATE TABLE `shops` (
`id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
`code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
`name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
`latitude` double NOT NULL,
`longitude` double NOT NULL,
`address` text COLLATE utf8mb4_unicode_ci NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `shops_code_unique` (`code`),
KEY `shops_created_at_index` (`created_at`),
KEY `shops_updated_at_index` (`updated_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `shops` (`code`, `name`, `owner`, `latitude`, `longitude`, `address`)
VALUES ('SH001', 'Saynut_bibibilio', 'Nutnichaeieie', 18.8004538, 98.9488998, 'College of Arts, Media and Technology\n239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200');
INSERT INTO shops (code, name, owner, latitude, longitude, address)
VALUES ('SH002', 'ONRYPOPPY', 'THE GANG ', 18.7921726, 98.9575002, 'Chiang Mai University Cooperative Store, 239 Huaykaew Rd., Suthep, Muang, Chiang Mai 50200');

select * from shops ;
DROP TABLE IF EXISTS shops;
