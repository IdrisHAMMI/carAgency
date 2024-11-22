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
        <?php if( isset($_SESSION['login']) ): ?>
            <?php if( unserialize($_SESSION['login'])->getRole() == "CLIENT" ): ?>
                <!-- GERANT -->
                <a href="#" class="btn btn-success">UHH UMM BAZGINGa</a>
                <?php endif; ?>
            <!-- CLIENT -->


            <a href="?action=logout" class="btn btn-danger">Logout</a>
        <?php endif;?>

            <a href="signup.php" class="btn btn-success">Signup</a>
            <a href="login.php" class="btn btn-success">Login</a>
    </header>

    <main class="container-fluid">
