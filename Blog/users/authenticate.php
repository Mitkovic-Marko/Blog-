<?php
require '../db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user from the database
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Set session variables and redirect to the homepage
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header('Location: ../index.php');
        exit;
    } else {
        header('Location: login.php?error=invalid_credentials');
        exit;
    }
}
?>
