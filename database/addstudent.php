<?php
// insert_student.php

include "connectdb.php"; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $midini = $_POST['mid_ini'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $dept = 'oten';
    $status = 'Ongoing';
    $bdate = $_POST['bdate'];


    // Prepare the insert query
    $stmt = $conn->prepare("INSERT INTO students_form (first_name, mid_ini, last_name, course, department,birth_year,status) VALUES (?, ?, ?, ?, ?, ?, ?);");

    // Bind the parameters
    $stmt->bind_param("sssssss", $fname,$midini, $lname, $course, $dept, $bdate,$status);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to the page with success message
        header("Location:../index.php");
        exit();
    } else {
        // Error handling
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
