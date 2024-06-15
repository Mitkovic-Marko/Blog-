<?php
session_start();
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Provera da li se lozinke poklapaju
    if ($password !== $confirm_password) {
        header('Location: register.php?error=password_mismatch');
        exit;
    }

    // Hash lozinke
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Podrazumevani tip korisnika
    $user_type = 'user';

    // Insert novog korisnika u bazu podataka
    $stmt = $pdo->prepare('INSERT INTO users (email, password, user_type) VALUES (?, ?, ?)');
    $stmt->execute([$email, $password_hash, $user_type]);

    // Preusmeravanje na stranicu za prijavu
    header('Location: login.php');
    exit;
}
?>
