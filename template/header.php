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
        
        <?php if (isset($_SESSION['login']) && $_SESSION['role'] == "GERANT"): ?>        
            <h4>Welcome <?= htmlspecialchars($_SESSION['login']); ?></h4>
            <a href="../admin/userTable.php" class="btn btn-success">User Management</a>
            <a href="../admin/carTable.php" class="btn btn-success">Car Management</a>
            <a href="../admin/bookingTable.php" class="btn btn-success">Booking Management</a>
            <a href="../client/form.php" class="btn btn-success">Form</a>
            <a href="../classes/logout.inc.php" class="btn btn-danger">Logout</a>
            <?php endif ?>

        <?php if (isset($_SESSION['login']) && $_SESSION['role'] == "CLIENT"): ?>
            <h4>Welcome <?= htmlspecialchars($_SESSION['login']); ?></h4>
            <a href="../client/form.php" class="btn btn-success">Form</a>
            <a href="../classes/logout.inc.php" class="btn btn-danger">Logout</a>
            <?php endif ?>
    <?php else: ?>
        <a href="login.php" class="btn btn-success">Login</a>
        <a href="../client/form.php" class="btn btn-success">Form</a>
    <?php endif; ?>
</header>

<main class="container-fluid">