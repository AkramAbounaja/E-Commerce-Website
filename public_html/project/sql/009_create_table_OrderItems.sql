CREATE TABLE IF NOT EXISTS  `OrderItems`
(
    `id`         int auto_increment not null,
    `order_id`    int,
    `product_id`    int,
    `quantity` int,
    `unit_price` DECIMAL(5,2),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`order_id`) REFERENCES Orders(`id`),
    FOREIGN KEY (`product_id`) REFERENCES Products(`id`),
    check (`unit_price` > 000.00), 
    check (`quantity` > 0)
);