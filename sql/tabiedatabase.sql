CREATE DATABASE IF NOT EXISTS Lissashop;
USE Lissashop;
CREATE TABLE customers ( 
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_tel VARCHAR(10) NOT NULL,
    customer_address VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NULL,
    customer_password VARCHAR(255) NOT NULL,
    customer_confirmpassword VARCHAR(255) NOT NULL
);
