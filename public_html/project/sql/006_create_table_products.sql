CREATE TABLE IF NOT EXISTS `Products`
(
    `id` int AUTO_INCREMENT PRIMARY  KEY,
    `name` varchar(30) UNIQUE, 
    `description` text,
    `category` varchar(255),
    `stock` int DEFAULT  0,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    `unit_price` DECIMAL(5,2),
    `visibility` TINYINT(1),
    check (stock >= 0), -- don't allow negative stock; I don't allow backorders
    check (unit_price >= 0) -- don't allow negative costs
)