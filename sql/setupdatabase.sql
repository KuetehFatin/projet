CREATE DATABASE IF NOT EXISTS Lissashop;
USE Lissashop;

--สร้างตารางลูกค้า
CREATE TABLE customers ( 
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_tel VARCHAR(10) NOT NULL,
    customer_address VARCHAR(255) NOT NULL
);


--สร้างตารางพนักงาน
CREATE TABLE employee (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(255) NOT NULL,
    employee_email VARCHAR(255) NOT NULL,
    employee_tel VARCHAR(10) NOT NULL,
    employee_address VARCHAR(255) NOT NULL,
    employee_position VARCHAR(255) NOT NULL
);


--สร้างตารางเงินเดือนพนักงาน
CREATE TABLE salary (
    salary_id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT,
    salary_date DATE,
    salary_amount DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES employee(employee_id)
);


--ข้อมูลซัพพลาย
CREATE TABLE supplier (
    supplier_id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_name VARCHAR(255) NOT NULL,
    supplier_tel VARCHAR(10) NOT NULL,
    supplier_address VARCHAR(255) NOT NULL
);


--สร้างตารางประเภทสินค้า
CREATE TABLE  category (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);


--สร้างตารางสินค้า
CREATE TABLE product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    product_image VARCHAR(255) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(category_id)
);


--สร้างตารางการขาย
CREATE TABLE sale  (
    sale_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    customer_id INT,
    sale_date DATE,
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);


--สร้างตารางรายละเอียดการขาย
CREATE TABLE saledetails (
    saledetails_id INT AUTO_INCREMENT PRIMARY KEY,
    saledetails_quantity INT NOT NULL,
    saledetails_price DECIMAL(10,2) NOT NULL,
    sale_id INT,
    product_id INT,
    FOREIGN KEY (sale_id) REFERENCES sale(sale_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);


--สร้างตารางการชำระเงิน
CREATE TABLE payment (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    sale_id INT,
    payment_date DATE,
    payment_status VARCHAR(255) NOT NULL,
    payment_slip VARCHAR(255) NOT NULL,
    FOREIGN KEY (sale_id) REFERENCES sale(sale_id)
);


--สร้างตารางการจัดส่งสินค้า
CREATE TABLE delivery (
    delivery_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    delivery_date DATE,
    customer_address VARCHAR(255) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);


--สร้างตารางวัสดุอุปกรณ์
CREATE TABLE materials (
    materials_id INT AUTO_INCREMENT PRIMARY KEY,
    materials_name VARCHAR(255) NOT NULL,
    materials_quantity INT NOT NULL 
);


--สร้างตารางการผลิตสินค้า
CREATE TABLE production (
    production_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    employee_id INT,
    materials INT,
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);


--สร้างตารางรายละเอียดการผลิต
CREATE TABLE productiondetails (
    productiondetails_id INT AUTO_INCREMENT PRIMARY KEY,
    production_id INT,
    materials_id INT,
    productiondetails_date DATE,
    productiondetails_quantity INT NOT NULL,
    FOREIGN KEY (production_id) REFERENCES production(production_id),
    FOREIGN KEY (materials_id) REFERENCES materials(materials_id)
);


--สร้างตารางการสั่งซื้อวัสดุอุปกรณ์
CREATE TABLE ordermaterials (
    ordermaterials_id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_id INT,
    ordermaterials_date DATE
);


--สร้างตารางรายละเอียดการสั่งซื้อวัสดุอุปกรณ์
CREATE TABLE ordermaterialsdetails (
    ordermaterialsdetails_id INT AUTO_INCREMENT PRIMARY KEY,
    ordermaterials_id INT,
    materials_id INT,
    ordermaterialsdetails_date DATE,
    ordermaterialsdetails_quantity INT NOT NULL,
    FOREIGN KEY (ordermaterials_id) REFERENCES ordermaterials(ordermaterials_id),
    FOREIGN KEY (materials_id) REFERENCES materials(materials_id)
);



