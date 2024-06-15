<?php
require 'db.php';
$posts = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC')->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            width: 350px; 
            height: 200px; 
            object-fit: cover; 
        }

        .post-content {
            padding: 15px;
        }

        .post-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

       

        .read-more {
            display: none;
        }
        .post-text {
            font-size: 16px;
            color: #555;
            display: -webkit-box;
            -webkit-line-clamp: 7; 
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <div class="container mt-4">
        <h1>Sport news</h1> <a href="posts/create.php" class="btn btn-primary mb-2">Create Post</a>
        <div class="row">
            <?php foreach ($posts as $index => $post): ?>
                <div class="col-md-4 mb-3">
                    <div class="card post-card"> <!-- Dodali smo klasu 'card' i 'post-card' -->
                        <?php if (!empty($post['image_path'])): ?>
                            <img src="<?= htmlspecialchars($post['image_path']) ?>" class="card-img-top post-image" alt="Post Image">
                        <?php endif; ?>
                        <div class="card-body post-content">
                            <h5 class="card-title post-title"><?= htmlspecialchars($post['title']) ?></h5>
                            <div class="post-text"><?= nl2br(htmlspecialchars($post['content'])) ?></div>
                            <div class="read-more"> 
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                            <p class="post-time"><?= htmlspecialchars($post['created_at']) ?></p>
                            <a href="posts/show.php?id=<?= $post['id'] ?>" class="btn btn-secondary">Read More</a>
                            <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin'): ?>
                                <form action="posts/delete.php" method="POST" class="d-inline">
                                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php if (($index + 1) % 3 == 0): ?>
                    </div><div class="row">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        
    </div>

    <?php include 'templates/footer.php'; ?>
    <script>
        document.querySelectorAll('.read-more').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                item.parentElement.querySelector('.post-text').style.display = 'block'; 
                item.style.display = 'none';
            });
        });
    </script>
</body>
</html>
