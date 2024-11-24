<?php
include "../controller/user.control.php";
include "../template/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>
<body>
    <div>
    <h2 class="text-center">User Management</h2>
    </div>
<div class="container">
<table class="table table-strepid">
    <tr>
        <th>User ID</th>
        <th>Civility</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Login</th>
        <th>User Role</th>        
        <th>Phone Number</th>
    </tr>
    <?php
        foreach ($users as $user): ?>
    <tr>
       <td><?= htmlspecialchars($user['id_personne']); ?></td>
       <td><?= htmlspecialchars($user['civilite']); ?></td>
       <td><?= htmlspecialchars($user['prenom']); ?></td>
       <td><?= htmlspecialchars($user['nom']); ?></td>
       <td><?= htmlspecialchars($user['email']); ?></td>
       <td><?= htmlspecialchars($user['login']); ?></td>
       <td><?= htmlspecialchars($user['role']); ?></td>
       <td><?= htmlspecialchars($user['tel']); ?></td>
       <td>
         <a href="#" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
       </td>
       <td>
         <a href="../classes/user.inc.php?id=<?php $user['id_personne']; ?>" name="delete_user" class="btn btn-danger"><i class="bi bi-trash red"></i></a>
       </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>