<?php
session_start();
require '../db.php';

// Proverite da li je korisnik ulogovan
if (!isset($_SESSION['user_id'])) {
    // Ako korisnik nije ulogovan, preusmerite ga na login stranicu
    header('Location: ../users/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];  // Dodali smo preuzimanje ID-a korisnika iz sesije

    // Upload slike
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
        
        if (in_array($image_extension, $allowed_extensions)) {
            $image_path = 'uploads/' . uniqid('', true) . '.' . $image_extension;
            move_uploaded_file($image_tmp_name, '../' . $image_path);
        }
    }

    // Pripremite i izvršite SQL upit za čuvanje informacija o postu
    $stmt = $pdo->prepare('INSERT INTO posts (title, content, image_path) VALUES (?, ?, ?)');
    $stmt->execute([$title, $content, $image_path]);
    
    // Preuzmite ID poslednje umetnutog posta
    $post_id = $pdo->lastInsertId();

    // Unesite podatke u tabelu user_posts
    $stmt = $pdo->prepare('INSERT INTO user_posts (user_id, post_id) VALUES (?, ?)');
    $stmt->execute([$user_id, $post_id]);
    
    // Preusmerite korisnika nazad na glavnu stranicu
    header('Location: ../index.php');
    exit;
}
?>
