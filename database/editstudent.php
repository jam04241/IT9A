<?php

// Include database connection file
include'database/connectdb.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $fname = $_POST['fname'];
    $mid_ini = $_POST['mid_ini'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $bdate = $_POST['bdate'];
    $status = $_POST['status'];

    // Update Query
    $sql = "UPDATE 
                students_form 
            SET 
                first_name=?, 
                mid_ini=?,
                last_name=?, 
                course=?, 
                department=?, 
                birth_year=?, 
                status=? 
            WHERE 
                student_id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $fname, $mid_ini, $lname, $course, $department, $bdate, $status, $student_id);
    $stmt->execute();

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location='/index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
