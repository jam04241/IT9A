<?php
// insert_student.php

include "connectdb.php"; // Include database connection file

$student_id = $_GET['student_id'];

$stmt = $conn->prepare('DELETE FROM students_form WHERE student_id = ?');
$stmt ->bind_param('i', $student_id);
if ($stmt->execute()) {
    header("Location: ../index.php");
    exit;
  } else {
    echo "operation failed";
  }
  
?>