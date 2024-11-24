<?php
include_once "../classes/car.inc.php";
include_once "../template/header.php";
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
        <th>Car Id</th>
        <th>Car Brand</th>
        <th>Car Model</th>
        <th>Car Regsitration</th>
        <th>Car Type</th>
        <th>Price</th>
        <th>Availability Status</th>
        <th>Car Picture</th> 
    </tr>
    <?php
        foreach ($cars as $car): ?>
    <tr>
       <td><?= htmlspecialchars($car['id_vehicule']); ?></td>
       <td><?= htmlspecialchars($car['marque']); ?></td>
       <td><?= htmlspecialchars($car['modele']); ?></td>
       <td><?= htmlspecialchars($car['matricule']); ?></td>
       <td><?= htmlspecialchars($car['prix_journalier']); ?></td>
       <td><?= htmlspecialchars($car['type_vehicule']); ?></td>
       <td><?= htmlspecialchars($car['statut_dispo']); ?></td>
       <td><img src="../img/<?= htmlspecialchars($car['photo']); ?>" alt="Car Image" width="100"></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>