CREATE TABLE `account_data`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `fullnames` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
CREATE TABLE `booking_data`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `origin` VARCHAR(255) NOT NULL,
    `destination` VARCHAR(255) NOT NULL,
    `date_of_travel` DATE NOT NULL
);