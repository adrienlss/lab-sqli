CREATE DATABASE IF NOT EXISTS lab_sqli;
USE lab_sqli;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    flag VARCHAR(255)
);
INSERT INTO users (username, password, flag) VALUES
    ('admin', 'admin123', 'FLAG{sql-injection-success}'),
    ('analyst', 'analyst123', NULL),
    ('student', 'student123', NULL);
