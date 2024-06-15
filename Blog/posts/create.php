<?php
session_start();

// Proverite da li je korisnik ulogovan
if (!isset($_SESSION['user_id'])) {
    // Ako korisnik nije ulogovan, preusmerite ga na login stranicu
    header('Location: ../users/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <div class="container mt-4">
        <h1>Create Post</h1>
        <form action="store.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

    </div>
    <?php include '../templates/footer.php'; ?>
</body>
</html>
