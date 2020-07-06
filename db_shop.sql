DROP DATABASE my_shop;
CREATE DATABASE `my_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use my_shop;

CREATE TABLE  category (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(200) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT 1,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
) ;

CREATE TABLE product (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL UNIQUE,
  image varchar(200) NULL,
  price float NOT NULL,
  sale_price float NULL DEFAULT 0,
  content text NULL,
  category_id int NOT NULL,
  status tinyint(1) DEFAULT 1,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
 );

CREATE TABLE customer (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL UNIQUE,
  phone varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  gender tinyint(1) DEFAULT 1,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
 );

CREATE TABLE users (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email varchar(100) NULL UNIQUE,
  password varchar(100) NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
 );

CREATE TABLE orders (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(100)  NULL,
  email varchar(100) NULL,
  phone VARCHAR(100)  NULL,
  address varchar(100) NULL,
  customer_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
 );

CREATE TABLE order_detail (
  order_id int NOT NULL,
  product_id int NOT NULL,
  quantity int NOT NULL,
  price float NOT NULL
 );

CREATE TABLE  banner (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(200) NOT NULL UNIQUE,
  content tinyint(1) DEFAULT 1,
  img varchar(200) DEFAULT 1,
  link varchar(200) NULL DEFAULT '#',
  ordering int DEFAULT 0,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
) ;
CREATE TABLE  comment (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  content text NULL,
  created_date date,
  user_id int NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp DEFAULT CURRENT_TIMESTAMP
) ;



ALTER TABLE product ADD FOREIGN KEY (category_id) REFERENCES category(id);
ALTER TABLE orders ADD FOREIGN KEY (customer_id) REFERENCES customer(id);
ALTER TABLE order_detail ADD FOREIGN KEY (order_id) REFERENCES orders(id);
ALTER TABLE order_detail ADD FOREIGN KEY (product_id) REFERENCES product(id);
ALTER TABLE comment ADD FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE order_detail ADD PRIMARY KEY (order_id,product_id);


INSERT INTO category(name) VALUES ('Áo Nam'),
('Áo Nữ'),
('Quần Nam'),
('Chân Váy'),
('Hoodie'),
('Đồng Hồ'),
('Thắt Lưng da'),
('Mũ'),
('Áo Nam & Nữ'),
('Quần Nam & Nữ'),
('Đồ Lót')













