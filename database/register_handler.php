<?php

include 'connectdb.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$retypepass = $_POST['retypepass'];
$email = $_POST['email'];

try {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if passwords match
    if ($password !== $retypepass) {
      $_SESSION['errors'] = "Password Mismatch!";
      header("Location: ../signup.php");
      exit;
    }

    // Check if username already exists
    if (username_exists($username)) {
      $_SESSION['errors'] = "Username already taken!";
      header("Location: ../signup.php");
      exit;
    }

    // Create an account if username does not exist
    if (create_account($username, $email,$password)) {
      header("Location: ../login.php");
      exit;
    } else {
      $_SESSION['errors'] = "Account creation failed!";
      header("Location: ../signup.php");
      exit;
    }
  }
} catch (\Exception $e) {
  echo "Error: " . $e->getMessage();
}

function username_exists($username)
{
  global $conn;

  $stmt = $conn->prepare("SELECT admin_id FROM users WHERE user = ?");
  if (!$stmt) {
    return false;
  }

  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  return $stmt->num_rows > 0;
}

function create_account($username, $email, $password)
{
  global $conn;

  $hashed_password = password_hash($password, PASSWORD_BCRYPT);

  $stmt = $conn->prepare("INSERT INTO login (email, user, pass, verify_pass) VALUES (?, ?, ?, ?)");
  if (!$stmt) {
    return false;
  }

  $stmt->bind_param("ssss", $email,$username ,$hashed_password, $password);
  return $stmt->execute();
}
