<?php
include "../classes/user.class.php";
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
        <th>Booking ID</th>
        <th>Booking Day</th>
        <th>Booking Day Start</th>
        <th>Booking Day End</th>
        <th>Car ID</th>
        <th>User ID</th>
    </tr>
    <?php
        foreach ($users as $user): ?>
    <tr>
       <td><?= htmlspecialchars($user['id_reservation']); ?></td>
       <td><?= htmlspecialchars($user['date_reservation']); ?></td>
       <td><?= htmlspecialchars($user['date_debut']); ?></td>
       <td><?= htmlspecialchars($user['date_fin']); ?></td>
       <td><?= htmlspecialchars($user['id_vehicule']); ?></td>
       <td><?= htmlspecialchars($user['id_personne']); ?></td>
                    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>