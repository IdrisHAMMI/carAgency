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
        <?php /*if( isset($_SESSION['user']) ):*/ ?>
            <?php /*if( unserialize($_SESSION['user'])->getRole() == "GERANT" ):*/ ?>
                <!-- GERANT -->
            <?php /* endif;*/ ?>
            <!-- CLIENT -->
            <a href="signup.php" class="btn btn-success">Signup</a>
            <a href="login.php" class="btn btn-success">Login</a>

            <a href="?action=logout" class="btn btn-danger">Logout</a>
        <?php /*endif;*/?>


    </header>

    <main class="container-fluid">

    