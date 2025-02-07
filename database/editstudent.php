<?php

// Include database connection file
include'database/connectdb.php';
//$student_id = $_GET['student_id'];

if($SERVER['REQUEST_METHOD'] == 'GET'){


    if(!isset($GET["student_id"])){
        header("location: index.php");
        exit;
    }

    $student_id = $_GET['student_id'];

    $sql = "SELECT * FROM students_form WHERE student_id= ?";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!$row){
        header("location: index.php");

    }
    $student_id = $row['student_id'];
    $fname = $row['first_name'];
    $midini = $row['mid_ini'];
    $lname = $row['last_name'];
    $course = $row['course'];
    $department = $row['department'];
    $bdate = $row['birth_year'];
    $status =$row['status'];
}

else {
    $student_id = $POST['student_id'];
    $fname = $_POST['first_name'];
    $midini = $_POST['mid_ini'];
    $lname = $_POST['last_name'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $bdate = $_POST['birth_year'];
    $status = $_POST['status'];
    do{
        if( empty($fname)|| empty($midini)|| empty($lname) || empty($course) ||  empty($department) || empty($bdate) || empty($status)){

        }
        else {
            // Prepare the update query
            $stmt = $conn->prepare("UPDATE students_form SET first_name = ?, mid_ini = ?, last_name = ?, course = ?, department = ?, birth_year = ?, status = ? WHERE student_id = ?");
            $stmt->bind_param("sssssssi", $fname, $midini, $lname, $course, $department, $bdate, $status, $student_id);
            $result = $conn->query($stmt);
            if ($stmt->execute()) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error updating record: " . $stmt->error;
            }
            $stmt->close();
        }
    }while(true);
}

?>
