CREATE TABLE IF NOT EXISTS OrderItems(

    id int AUTO_INCREMENT PRIMARY KEY,
    order_id int,
    product_id int,
    quantity int,
    unit_price int,

    FOREIGN KEY (product_id) REFERENCES Products(id),
    FOREIGN KEY (order_id) REFERENCES Orders(id),
   
    UNIQUE KEY (order_id, product_id)
)