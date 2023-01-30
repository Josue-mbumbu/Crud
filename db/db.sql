CREATE TABLE users (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    firstName int,
    lastName varchar(255),
    username varchar(255),
    password varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE employee (
id INT  AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
position VARCHAR(100),
bureau VARCHAR(100),
age VARCHAR(100),
dateDebut VARCHAR(100),
salaire VARCHAR(100),
user INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
FOREIGN KEY (user) REFERENCES users(id)

);