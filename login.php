<?php include'helpers/not_authenticated.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="/images/hacker.svg" type="icon/picture"/>
    <link rel="stylesheet" href="style/login-style.css">
    <link rel="stylesheet" href="statics/css/bootstrap.css" >
    <script src="statics/js/bootstrap.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>

    </header>
    <div class="main">
        <div class="content justify-content-center">
            <div class="container d-flex" style="padding-top: 2.5rem; padding-bottom:2.5rem; width:70vw;">
                <div class="container">
                   
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="image">
                                <img src="images/aizen.png" type="image" alt="aizen" class="aizen">
                                <h1 class="text-center">Welcome to my Soul Society</h1>
                            </div>
                        </div>   

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                    <form action="/database/loginadmin.php" method="POST">
                    <div class="col-sm-6 mb-3">
                        <i class="bi bi-person"></i>
                            <label for="username-form" >Username</label>
                            <input type="username" class="form-control" name="username"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <i class="bi bi-key"></i>
                            <label for="password-form" >Password</label>
                            <input type="password" class="form-control" name="password"/>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <a type="button" class="btn btn-success" href="index.php"> Login </a>
                        </div>
                    </div>
                        
                    <div class="row mb-3">
                        <div class="col">
                            <p> Dont' have account? </p>
                            <a type="submit" class="btn btn-primary" href="signup.php"> Signup </a>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
    </body>
</html>