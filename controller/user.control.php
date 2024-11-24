<?php
include_once "../classes/dbh.class.php";
include_once "../classes/user.inc.php";
class User extends dbh {
    
    // FETCHES ALL USERS
        public function getAllUsers() {
            $stmt = $this->connect()->query("SELECT * FROM personne");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function deleteUser($userId) {
            try{
                $stmt = $this->connect()->query("DELETE from personne WHERE id_personne = :id_personne");
                $stmt->execute([$userId]);
                
                return true;
            } catch(PDOException $e){
                return false;
            }
            
        }
    
    }
    


    $user = new User();
    $users = $user->getAllUsers();
