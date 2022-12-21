CREATE TABLE IF NOT EXISTS  `Orders`
(
    `id`         int auto_increment not null,
    `user_id`    int,
    `created`    timestamp default current_timestamp,
    `total_price` DECIMAL(8,2),
    `payment_method` VARCHAR(255),
    `address` VARCHAR(255) NOT NULL,
    `money_recieved` DECIMAL(8,2),
    `first_name` VARCHAR(255),
    `last_name` VARCHAR(255),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    CONSTRAINT CHK_Order CHECK (`total_price` > 000000.00 AND `payment_method`='Cash' OR `payment_method`='Visa' OR `payment_method`='MasterCard' OR `payment_method`='Amex')
);