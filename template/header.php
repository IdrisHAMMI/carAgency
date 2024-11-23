<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Agence</title>
</head>
<body>

<header class="bg-secondary p-4 mb-3">
    <?php if (isset($_SESSION['login'])): ?>
        <h4>Welcome <?= htmlspecialchars($_SESSION['email']); ?></h4>
        <a href="#" class="btn btn-success">UHH UMM BAZGINGa</a>
        <a href="?action=logout" class="btn btn-danger">Logout</a>
    <?php else: ?>
        <a href="signup.php" class="btn btn-success">Signup</a>
        <a href="login.php" class="btn btn-success">Login</a>
    <?php endif; ?>
</header>


    <main class="container-fluid">
