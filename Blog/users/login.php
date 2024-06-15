<?php
session_start();
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Pripremite i izvršite SQL upit za proveru korisnika
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Postavite sesijske promenljive
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_type'] = $user['user_type'];

        // Preusmerite korisnika na glavnu stranicu
        header('Location: ../index.php');
        exit;
    } else {
        // Neuspešna prijava
        header('Location: login.php?error=invalid_credentials');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <div class="container mt-4">
        <h1>Login</h1>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
            <div class="alert alert-danger" role="alert">
                Invalid email or password. Please try again.
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <?php include '../templates/footer.php'; ?>
</body>
</html>
