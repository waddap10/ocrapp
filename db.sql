CREATE DATABASE ocrapp;

USE ocrapp;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150),
    email VARCHAR(150),
    password VARCHAR(150),
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    deleted_at TIMESTAMP NULL
)

CREATE TABLE data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nik VARCHAR(150),
    nama VARCHAR(150),
    ttl VARCHAR(150),
    gender VARCHAR(150),
    alamat VARCHAR(150),
    rtrw VARCHAR(150),
    desa VARCHAR(150),
    kec VARCHAR(150),
    kota VARCHAR(150),
    provinsi VARCHAR(150),
    agama VARCHAR(150),
    sts_kawin VARCHAR(150),
    job VARCHAR(150),
    nation VARCHAR(150),
    exp VARCHAR(150),
    goldar VARCHAR(150),
    nama_image varchar(100),
    status TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL,
    deleted_at TIMESTAMP NULL
)