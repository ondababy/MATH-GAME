<?php
session_start();
include("../db/config.php");

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirmPass = trim($_POST['confirmPass']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message'] = 'Invalid email format.';
    header("Location: register.php");
    exit();
}

if (strlen($password) < 6) {
    $_SESSION['message'] = 'Password should be at least 6 characters long.';
    header("Location: register.php");
    exit();
}

if ($password !== $confirmPass) {
    $_SESSION['message'] = 'Passwords do not match.';
    header("Location: register.php");
    exit();
}

$password = sha1($password);

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['userId'] = mysqli_insert_id($conn);
    $_SESSION['message'] = 'Registration successful!';
    header("Location: login.php");
    exit();
} else {
    $_SESSION['message'] = 'Registration failed. Please try again.';
    header("Location: register.php");
    exit();
}
?>
