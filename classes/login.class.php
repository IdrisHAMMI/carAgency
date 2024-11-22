<?php

class Login extends dbh {
    protected function getUser($login, $password) {
        $stmt = $this->connect()->prepare('SELECT * FROM personne WHERE login = ?');
        if (!$stmt->execute(array($login))) {
            $stmt = null;
            header("location: ../client/login.php?error=stmtfailed");
            exit();
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
        if (!$user) {
            // USER NOT FOUND
            header("location: ../client/login.php?error=usernotfound");
            exit();
        }
  
        if (!password_verify($password, $user['userPass'])) {
            //INVALID PASSWORD
            header("location: ../client/login.php?error=wrongpassword");
            exit();
        } 
  
        
        //START SESSIONS
        session_start();
        $_SESSION["id_personne"] = $user["id_personne"];
        $_SESSION["prenom"] = $user["prenom"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"] = $user["role"];
     }

  }