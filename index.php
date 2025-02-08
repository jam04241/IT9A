<?php

 include"database/connectdb.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USAP</title>
    <link rel="icon" href="images/favicon.ico" type="icon/picture">
    <link rel="stylesheet" href="style/index-style.css">
    <link rel="stylesheet" href="statics/css/bootstrap.css" >
    <script src="statics/js/bootstrap.js"></script> 

</head>
<body>
    <div class="main">
        <div class="header">

        </div>
        <div class="content">
            <div class="container-sm" style="background-color: aqua;">
                <h1 class="text-center">STUDENT ENROLLEMENT FORM</h1>
            <!-- Button trigger modal for ADD BUTTON-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">Add</button>


            <table class="table table-sm table-strip">
            <th scope="col">Student ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Initial</th>
            <th scope="col">Lastname</th>
            <th scope="col">Course</th>
            <th scope="col">Department</th>
            <th scope="col">Status</th>
            <th scope="col">Birth Date</th>
            <th scope="col">action</th>
            <tbody>
            <?php
                // echo "database connection success";
                include"database/connectdb.php";     
                
                $sql = "SELECT * from students_form";
                $result = $conn->query($sql);
        
                if ($conn->connect_error) {
                     die("Database connection unsuccessful" . $conn->connect_error);
                        
                }
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                                    <td> $row[student_id] </td>
                                    <td> $row[first_name] </td>
                                    <td> $row[mid_ini] </td>
                                    <td> $row[last_name] </td>
                                    <td> $row[course] </td>
                                    <td> $row[department] </td>
                                    <td> $row[birth_year] </td>
                                    <td> $row[status]</td>
        
                                    <td>


                                        <a class='btn btn-primary btn-sm' href='edit.php?student_id=<?php echo $row[student_id]; ?>'>Edit</a>
                                        <a class='btn btn-danger btn-sm' href='delete.php?student_id=<?php echo $row[student_id]; ?>'>Delete</a>

                                    </td>
                                </tr>
                                ";
                            }
                            
                            
                                          
            ?>
            </tbody>
            </table>
            <!-- Button trigger modal for BUTTON -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">
            Edit
            </button>
            </div>
        </div> -->

        <!-- Modal for ADD BUTTON-->
        <div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  
            <div class="modal-body">
                <!--TO PUT THE DATA-->
                <div class="container">
                        <div class="row">
                <form class="form" action="../database/addstudent.php" method="POST">
                        <div class="row">
                            <div class="col-5">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="fname" required/>
                            </div>

                            <div class="col-2">
                                <label>Mid ini</label>
                                <input class="form-control" type="text" name="mid_ini"/>
                            </div>
                            <div class="col-5">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="lname" required/>
                            </div>                        
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                <label>Course</label>
                                <input class="form-control" type="text" name="course" required/>
                            </div>
                            <div class="col-3">
                                <label>Department</label>
                                <input class="form-control" type="text" name="dept" required/>
                            </div>
                            <div class="col-6">
                                <label>Birth Date</label>
                                <input class="form-control" type="date" name="bdate" required/>
                            </div>
                        </div> 
               
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
            </div>

                
        </div>
        </div>
 
    </div>
</body>
</html>