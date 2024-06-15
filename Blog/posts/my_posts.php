<?php
session_start();
require '../db.php';


if (!isset($_SESSION['user_id'])) {
    header('Location: ../users/login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$statement = $pdo->prepare('SELECT posts.*, user_posts.user_id FROM posts INNER JOIN user_posts ON posts.id = user_posts.post_id WHERE user_posts.user_id = ?');
$statement->execute([$user_id]);
$posts = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .post-card {
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .post-image {
            width: 100%;
            height: auto; 
            object-fit: cover;
        }

        .post-content {
            padding: 15px;
        }

        .post-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .post-text {
            font-size: 16px;
            color: #555;
            display: -webkit-box;
            -webkit-line-clamp: 7; 
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more {
            display: none;
        }
    </style>
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <div class="container mt-4">
        <h1>My Posts</h1>
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-4 mb-3">
                    <div class="card post-card">
                        
                        <div class="card-body post-content">
                            <h5 class="card-title post-title"><?= htmlspecialchars($post['title']) ?></h5>
                            <p class="card-text post-text"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                            <p class="post-time"><?= htmlspecialchars($post['created_at']) ?></p>
                            <a href="show.php?id=<?= $post['id'] ?>" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include '../templates/footer.php'; ?>
</body>
</html>
