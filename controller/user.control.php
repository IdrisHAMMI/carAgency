<?php
include_once "../classes/dbh.class.php";
class User extends dbh {
    
    // FETCHES ALL USERS
        public function getAllUsers() {
            $stmt = $this->connect()->query("SELECT * FROM personne");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    
    $user = new User();
    $users = $user->getAllUsers();
