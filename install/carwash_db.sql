-- Create database if not exists
CREATE DATABASE IF NOT EXISTS carwash_db;

-- Update Database structure
USE carwash_db;


-- Create a table in the database for user_tb data (id, phone, password, name, email)


-- Create a table in the database for booking_tb data (id, phone, car, cleaning, user_id, date_added, date_cleaned)
CREATE TABLE IF NOT EXISTS carwash_db.booking_tb (
  id INT NOT NULL AUTO_INCREMENT,
  phone VARCHAR(20) NOT NULL,
  car VARCHAR(20) NOT NULL,
  cleaning VARCHAR(20) NOT NULL,
  user_id INT NOT NULL,
  date_added DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_booked DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS carwash_db.user_tb (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  gender VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

-- Create a table in the database for

