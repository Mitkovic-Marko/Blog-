<?php
session_start();
require '../db.php';

// Proverite da li je korisnik ulogovan
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'admin') {
    header('Location: ../users/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = $_POST['post_id'];

    // Prvo obrišite zapise iz tabele user_posts
    $stmt = $pdo->prepare('DELETE FROM user_posts WHERE post_id = ?');
    $stmt->execute([$post_id]);

    // Zatim obrišite post iz tabele posts
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute([$post_id]);

    // Preusmerite korisnika nazad na glavnu stranicu
    header('Location: ../index.php');
    exit;
}
?>
