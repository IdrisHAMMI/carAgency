<?php
include "../template/header.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="container">
<form action="../classes/login.inc.php" method="POST">
    <div>
        <h2 class="text-center">Connection</h2>
    </div>
    <div class="form-group">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" class="form-control" maxlength="25" required>
    </div>

    <div class="form-group">
        <label for="mdp">Mot de Passe :</label>
        <input type="password" id="mdp" name="mdp" class="form-control" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary mt-2">Se Connecter</button>
</form>
</body>
</html>