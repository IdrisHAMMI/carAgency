<?php

include_once "../controller/carModel.control.php";

//INITIALIZING VARIABLES WITH EMPTY VALUES FOR getAllCarts
$carBrand = $carModel = $carRegistration = $carType = $carPrice = $carStatus = $carPicture = '';

if (isset($_POST['submit'])) {

    // RETRIEVE FORM DATA
    $carBrand = $_POST['marque'];
    $carModel = $_POST['modele'];
    $carRegistration = $_POST['matricule'];
    $carType = $_POST['prix_journalier'];
    $carPrice = $_POST['type_vehicule'];
    $carStatus = $_POST['statut_dispo'];

    // FILE UPLOAD HANDLING
    $file = $_FILES['photo'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $uploadDir = '../img/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // SAVES THE FILE WITH A UNIQUE NAME
    $carPicture = $uploadDir . uniqid() . "-" . $fileName;
    move_uploaded_file($fileTmpName, $carPicture);

    
    include_once '../controller/carModel.control.php';

    $car = new CarModel($carBrand, $carModel, $carRegistration, $carType, $carPrice, $carStatus, $carPicture);
    $car->insertCarData();
    $cars = $car->getAllCars();
    
    
    //REDIRECT WHEN FINISHED SENDING THE QUERY
    header("Location: ../client/form.php?success=carAdded");
    exit();
}


$car = new CarModel('', '', '', '', '', '', '');
$cars = $car->getAllCars();