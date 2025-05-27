CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    fullname VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO users (email, fullname, password)
VALUES ('admin@gmail.com', 'admin', '123');

CREATE TABLE category (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE product (
    id_product INT PRIMARY KEY AUTO_INCREMENT,
    id_category INT NOT NULL,
    id_user INT NOT NULL,
    title VARCHAR(200) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    discount DECIMAL(5, 2) DEFAULT 0,
    image VARCHAR(255),
    FOREIGN KEY (id_category) REFERENCES category(id_category),
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);
