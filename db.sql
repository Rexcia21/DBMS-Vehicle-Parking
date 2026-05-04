CREATE DATABASE parking_db;

USE parking_db;

CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_no VARCHAR(50),
    entry_time DATETIME,
    exit_time DATETIME,
    fee INT
);
