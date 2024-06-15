<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definišite bazni URL vaše aplikacije.
$base_url = 'http://localhost/blog';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>/index.php">Home</a>
      </li>
      <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= $base_url ?>/posts/create.php">Create Post</a>
        </li>
      <?php endif; ?>
    </ul>
    <ul class="navbar-nav">
      <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= htmlspecialchars($_SESSION['email']) ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= $base_url ?>/posts/my_posts.php">My Posts</a>
            <a class="dropdown-item" href="<?= $base_url ?>/users/logout.php">Logout</a>
          </div>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= $base_url ?>/users/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $base_url ?>/users/login.php">Login</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
