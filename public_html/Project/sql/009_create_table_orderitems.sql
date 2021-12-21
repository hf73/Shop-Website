CREATE TABLE IF NOT EXISTS OrderItems(

    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    product_id int,
    quantity int,
    unit_price int,

    FOREIGN KEY (product_id) REFERENCES Products(id),
    FOREIGN KEY (user_id) REFERENCES Users(id),

    UNIQUE KEY (product_id, user_id),
    UNIQUE KEY (order_id, product_id)
)