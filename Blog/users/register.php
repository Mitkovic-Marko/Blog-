<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <div class="container mt-4">
        <h1>Register</h1>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch'): ?>
            <div class="alert alert-danger" role="alert">
                Passwords do not match. Please try again.
            </div>
        <?php endif; ?>
        <form action="store.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <?php include '../templates/footer.php'; ?>
</body>
</html>
