<?php
include "connectdb.php";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS Enrollment_Students";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error . "<br>");
}

// Select the database
$conn->select_db("Enrollment_Students");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS students_form (
    student_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    mid_ini VARCHAR(2),
    last_name VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,   
    birth_year DATE NOT NULL,
    status ENUM('Ongoing', 'Drop', 'Done') NOT NULL
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table 'students_form' created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error . "<br>");
}

// Set AUTO_INCREMENT start value correctly
$sql = "ALTER TABLE students_form AUTO_INCREMENT = 143000"; 
if ($conn->query($sql) === TRUE) {
    echo "AUTO_INCREMENT set to 143000 successfully.<br>";
} else {
    die("Error setting AUTO_INCREMENT: " . $conn->error . "<br>");
}

$sql = "CREATE TABLE IF NOT EXISTS loginadmin(
    admin_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    user VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    verify_pass VARCHAR(50) NOT NULL
)"; 

if ($conn->query($sql) === TRUE) {
    echo "Table 'loginadmin' created successfully or already exists.<br>";
} else {
    die("Error setting AUTO_INCREMENT: " . $conn->error . "<br>");
}

// Close connection
$conn->close();
?>
