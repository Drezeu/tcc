DROP DATABASE IF EXISTS DB_TIETA_PERFUMARIA;

CREATE DATABASE IF NOT EXISTS DB_TIETA_PERFUMARIA;

USE DB_TIETA_PERFUMARIA;

CREATE TABLE IF NOT EXISTS TB_CLIENTS(
	CD_CLIENT INT AUTO_INCREMENT PRIMARY KEY,
	DS_CLIENT_USER VARCHAR(255) NOT NULL UNIQUE,
	DS_CLIENT_EMAIL VARCHAR(255) NOT NULL UNIQUE,
	DS_CLIENT_PASSWORD VARCHAR(255) NOT NULL,
	ST_CLIENT_ADMIN BOOLEAN NOT NULL,
	NM_CLIENT VARCHAR(255) NOT NULL,
	DS_CLIENT_BIRTHDATE VARCHAR(255) NOT NULL,
    DS_CLIENT_CPF VARCHAR(255) NOT NULL UNIQUE,
    DS_CLIENT_PHONE VARCHAR(255) NOT NULL,
    ID_ADDRESS INT NOT NULL,
    ID_CLIENT_IMG INT
);
CREATE TABLE IF NOT EXISTS TB_ADDRESS(
	CD_ADDRESS INT AUTO_INCREMENT PRIMARY KEY,
    DS_ADDRESS_STREET VARCHAR(255) NOT NULL,
    DS_ADDRESS_NEIGHBORHOOD VARCHAR(255) NOT NULL,
    DS_ADDRESS_CITY VARCHAR(255) NOT NULL,
    ID_ADDRESS_STATE INT NOT NULL,
    DS_ADDRESS_COMPLEMENT VARCHAR(255),
    DS_ADDRESS_ZIPCODE VARCHAR(9) NOT NULL
);
CREATE TABLE IF NOT EXISTS TB_ADDRESS_STATES(
	CD_ADDRESS_STATE INT AUTO_INCREMENT PRIMARY KEY,
    DS_ADDRESS_STATE_UF CHAR(2) NOT NULL,
    NM_ADDRESS_STATE VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS TB_PRODUCTS(
	CD_PRODUCT INT AUTO_INCREMENT PRIMARY KEY,
	NM_PRODUCT VARCHAR(255) NOT NULL,
	DS_PRODUCT LONGTEXT NOT NULL,
	VL_PRODUCT INT NOT NULL,
    ID_PRODUCT_CATEGORY INT,
    ID_PRODUCT_IMG INT,
    ST_CAROUSEL BOOLEAN NOT NULL
);
CREATE TABLE IF NOT EXISTS TB_PRODUCTS_CATEGORIES(
	CD_PRODUCT_CATEGORY INT AUTO_INCREMENT PRIMARY KEY,
    NM_PRODUCT_CATEGORY VARCHAR(255) NOT NULL UNIQUE,
    DS_PRODUCT_CATEGORY LONGTEXT
);
CREATE TABLE IF NOT EXISTS TB_CLIENTS_PRODUCTS(
	CD_CLIENT_PRODUCT INT AUTO_INCREMENT PRIMARY KEY, 
	ID_CLIENT INT,
    ID_PRODUCT INT
);
CREATE TABLE IF NOT EXISTS TB_BASKETS(
	CD_BASKET INT AUTO_INCREMENT PRIMARY KEY,
	ID_CLIENT_PRODUCT INT
);
CREATE TABLE IF NOT EXISTS TB_CLIENTS_IMGS(
	CD_CLIENT_IMG INT AUTO_INCREMENT PRIMARY KEY,
	DS_CLIENT_IMG VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS TB_PRODUCTS_IMGS(
	CD_PRODUCT_IMG INT AUTO_INCREMENT PRIMARY KEY,
	DS_PRODUCT_IMG VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS TB_MESSAGES(
	CD_MESSAGE INT AUTO_INCREMENT PRIMARY KEY,
    ID_MESSAGE_FROM INT NOT NULL,
    ID_MESSAGE_TO INT,
	DS_MESSAGE_SUBJECT VARCHAR(255) NOT NULL,
    DS_MESSAGE LONGTEXT
);

ALTER TABLE TB_CLIENTS ADD FOREIGN KEY (ID_ADDRESS) REFERENCES TB_ADDRESS (CD_ADDRESS);
ALTER TABLE TB_CLIENTS_PRODUCTS ADD FOREIGN KEY (ID_CLIENT) REFERENCES TB_CLIENTS (CD_CLIENT);
ALTER TABLE TB_CLIENTS_PRODUCTS ADD	FOREIGN KEY (ID_PRODUCT) REFERENCES TB_PRODUCTS (CD_PRODUCT);
ALTER TABLE TB_ADDRESS ADD FOREIGN KEY (ID_ADDRESS_STATE) REFERENCES TB_ADDRESS_STATES(CD_ADDRESS_STATE);
ALTER TABLE TB_BASKETS ADD FOREIGN KEY (ID_CLIENT_PRODUCT) REFERENCES TB_CLIENTS_PRODUCTS (CD_CLIENT_PRODUCT);
ALTER TABLE TB_CLIENTS ADD FOREIGN KEY (ID_CLIENT_IMG) REFERENCES TB_CLIENTS_IMGS (CD_CLIENT_IMG);
ALTER TABLE TB_PRODUCTS ADD FOREIGN KEY (ID_PRODUCT_CATEGORY) REFERENCES TB_PRODUCTS_CATEGORIES (CD_PRODUCT_CATEGORY);
ALTER TABLE TB_PRODUCTS ADD FOREIGN KEY (ID_PRODUCT_IMG) REFERENCES TB_PRODUCTS_IMGS (CD_PRODUCT_IMG);
ALTER TABLE TB_MESSAGES ADD FOREIGN KEY (ID_MESSAGE_FROM) REFERENCES TB_CLIENTS (CD_CLIENT);
ALTER TABLE TB_MESSAGES ADD FOREIGN KEY (ID_MESSAGE_TO) REFERENCES TB_CLIENTS (CD_CLIENT);

INSERT INTO TB_ADDRESS_STATES (DS_ADDRESS_STATE_UF, NM_ADDRESS_STATE) VALUES ('AC', 'Acre'), ('AL', 'Alagoas'), ('AP', 'Amapá'), ('AM', 'Amazonas'), ('BA', 'Bahia'), ('CE', 'Ceará'), ('ES', 'Espírito Santo'), ('GO', 'Goiás'), ('MA', 'Maranhão'), ('MT', 'Mato Grosso'), ('MS', 'Mato Grosso do Sul'), ('MG', 'Minas Gerais'), ('PA', 'Pará'), ('PB', 'Paraíba'), ('PR', 'Paraná'), ('PE', 'Pernambuco'), ('PI', 'Piauí'), ('RJ', 'Rio de Janeiro'), ('RN', 'Rio Grande do Norte'), ('RS', 'Rio Grande do Sul'), ('RO', 'Rondônia'), ('RR', 'Roraima'), ('SC', 'Santa Catarina'), ('SP', 'São Paulo'), ('SE', 'Sergipe'), ('TO', 'Tocantins'), ('DF', 'Distrito Federal');
INSERT INTO TB_CLIENTS_IMGS VALUES (NULL, '/files/img/avatars/avatar.png');
INSERT INTO TB_ADDRESS VALUES (NULL, 'rua', 'bairro', 'cidade', 1, 'complemento', '00000-000');
INSERT INTO TB_CLIENTS VALUES (NULL, 'admin', 'admin@admin.com', '$2y$10$HAep5zcsfr7ewMT4j.1NHO81XqZCw01iSxUAkhfm.5uKAjdV9f3we', '1', 'Administrator', '0000-00-00', '000.000.000-00', '(11) 11111-1111', 1, 1);
INSERT INTO TB_PRODUCTS_IMGS VALUES (NULL, '/files/img/products/product.png');
INSERT INTO TB_PRODUCTS_CATEGORIES VALUES (NULL, 'Nome da categoria' , 'Descrição da categoria');
INSERT INTO TB_PRODUCTS VALUES (NULL,'Nome do produto' ,'Descrição do produto' , 99, 1, 1, 1);
INSERT INTO TB_MESSAGES VALUES (NULL, 1 , 1, 'test message', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');


SELECT * FROM TB_CLIENTS_IMGS;
SELECT * FROM TB_ADDRESS;
SELECT * FROM TB_CLIENTS;	
SELECT * FROM TB_PRODUCTS_IMGS;
SELECT * FROM TB_PRODUCTS_CATEGORIES;
SELECT * FROM TB_PRODUCTS;
SELECT * FROM TB_ADDRESS_STATES;
SELECT * FROM TB_MESSAGES;
SELECT P.*, C.*, I.* FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_CATEGORIES AS C INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_CATEGORY=C.CD_PRODUCT_CATEGORY AND P.ID_PRODUCT_IMG=I.CD_PRODUCT_IMG WHERE CD_PRODUCT = 1;