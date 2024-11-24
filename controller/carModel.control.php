<?php

include_once "../classes/dbh.class.php";

class CarModel extends dbh {
    private $carBrand;
    private $carModel;
    private $carRegistration;
    private $carType;
    private $carPrice;
    private $carStatus;
    private $carPicture;

    public function __construct($carBrand, $carModel, $carRegistration, $carType, $carPrice, $carStatus, $carPicture) {
        $this->carBrand = $carBrand;
        $this->carModel = $carModel;
        $this->carRegistration = $carRegistration;
        $this->carType = $carType;
        $this->carPrice = $carPrice;
        $this->carStatus = $carStatus;
        $this->carPicture = $carPicture;
    }

    //FETCHES CAR DATA
    public function getAllCars() {
        $stmt = $this->connect()->query("SELECT * FROM vehicule");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //INSERTS CAR DATA w/ IMG
    public function insertCarData() {
        try {
            $stmt = $this->connect()->prepare(
                'INSERT INTO vehicule (marque, modele, matricule, prix_journalier, 
                type_vehicule, statut_dispo, photo) VALUES (?, ?, ?, ?, ?, ?, ?)'
            );

            $stmt->execute([
                $this->carBrand,
                $this->carModel,
                $this->carRegistration,
                $this->carPrice,
                $this->carType,
                $this->carStatus,
                $this->carPicture
            ]);

            echo "Car data inserted successfully!";
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
            exit();
        }
    }
}

