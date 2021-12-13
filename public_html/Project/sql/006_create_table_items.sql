 CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(30) UNIQUE, -- alternatively you'd have a SKU that's unique
    description text,
    category text,
    stock int DEFAULT  0,
    cost int DEFAULT  99999,
    image text, -- this col type can't have a default value
    visibility boolean,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)