<?php
include('database/connectdb.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $student_id = $_GET["student_id"];
    $sql = "SELECT * FROM students_form WHERE student_id = $student_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row;
    $fname = $row['fname'];
    $mid_ini = $row['mid_ini'];
    $lname = $row['lname'];
    $course = $row['course'];
    $department = $row['department'];
    $bdate = $row['bdate'];
    $status = $row['status'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/favicon.ico" type="icon/picture">
    <link rel="stylesheet" href="/style/edit-style.css">
    <link rel="stylesheet" href="statics/css/bootstrap.css" >
    <script src="statics/js/bootstrap.js"></script> 

</head>
<body>
    <div class="main">
        <div class="content">
            <div class="container-sm my-5">
                <form method="POST" action="/database/editstudent.php">
                <h1 CLASS="text-center">EDIT STUDENT</h1>
                <div class="row">
                    <div class="col-5">
                    <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                    <label>Student ID</label>
                    <input class="form-control" type="text" name="fname" value="<?php echo $student_id; ?>" disabled/>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-5">
                        <label>First Name</label>
                        <input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>" required/>
                    </div>
                    <div class="col-sm-2">
                        <label>Middle</label>
                        <input class="form-control" type="text" name="mid_ini" value="<?php echo $mid_ini; ?>"/>
                    </div>
                    <div class="col-sm-5">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="lname" value="<?php echo $lname; ?>" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label>Course</label>
                        <input class="form-control" type="text" name="course" value="<?php echo $course; ?>" required/>
                    </div>
                    <div class="col-sm-3">
                        <label>Department</label>
                        <input class="form-control" type="text" name="department" value="<?php echo $department; ?>" required/>
                    </div>
                    <div class="col-sm-3">
                        <label>Birth Year</label>
                        <input class="form-control" type="text" name="bdate" value="<?php echo $bdate?>" required/>
                    </div>
                    
                    <div class="col-sm-3 mt-4">
                    <label>Status</label>
                    <select class="form-control" type="status" name="status" value="<?php echo $status?>" required>
                        <option value="Ongoing">Ongoing</option>
                        <option value="Done">Done</option>
                     </select>
                    </div>
                </div>
                <div class="row mt-1">
                <div class="col-sm-1 mx-auto mt-2">
                    <button type="button w-100" class="btn btn-danger" data-bs-dismiss="modal"><a class="cancel-btn" href="index.php">Cancel</a></button>
                </div>   
                <div class="col-sm-1 mx-auto mt-2">
                    <button type="submit" class="btn btn-success" href="database/editstudent.php">Update</button>
                </div>
                </div>
                </div>
                </form>  
            </div>
        </div>
    </div>
</body>
</html>