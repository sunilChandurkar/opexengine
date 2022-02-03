CREATE DATABASE opex_engine;

CREATE TABLE opex_engine.users(
id INT NOT NULL AUTO_INCREMENT , 
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
created_at DATETIME NOT NULL , 
updated_at DATETIME NOT NULL , 
PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE opex_engine.roles(
id INT NOT NULL AUTO_INCREMENT , 
role VARCHAR(255) NOT NULL ,
created_at DATETIME NOT NULL , 
updated_at DATETIME NOT NULL , 
PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE opex_engine.companies (
id INT NOT NULL AUTO_INCREMENT , 
company_name VARCHAR(255) NOT NULL , 
user_id INT NULL , 
role_id INT NULL ,
created_at DATETIME NOT NULL , 
updated_at DATETIME NOT NULL , 
PRIMARY KEY (id),
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (role_id) REFERENCES roles(id)
) ENGINE = InnoDB;

#Create a User
INSERT INTO users (first_name, last_name, created_at, updated_at) VALUES ('Sunil', 'Chandurkar', sysdate(), sysdate());

#Create a Role
INSERT INTO roles (role, created_at, updated_at) VALUES ('Developer', sysdate(), sysdate());

#Create a Company with a User
INSERT INTO companies (company_name, user_id, role_id, created_at, updated_at) VALUES ('Opex Engine', 1, 1, sysdate(), sysdate());
