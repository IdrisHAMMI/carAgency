<?php

class Signup extends dbh {
    protected function executeStatement($stmt, $params) {
        if ($stmt->execute($params)) {
            return true;
        } else {
            // Debugging: Output error information
            var_dump($stmt->errorInfo());
            exit(); // Stop execution during debugging
        }
    }

    protected function setUser($civility, $firstName, $lastName, $loginName, $email, $role, $phoneNumber, $password) {
        try {
            $stmt = $this->connect()->prepare(
                'INSERT INTO personne (civilite, prenom, nom, login, email, role, tel, mdp) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?);'
            );

            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            if ($this->executeStatement(
                $stmt,
                array($civility, $firstName, $lastName, $loginName, $email, $role, $phoneNumber, $hashedPwd)
            )) {
                echo "Query executed successfully!";
            }
        } catch (PDOException $e) {
            // Output the error message for debugging
            echo "Database error: " . $e->getMessage();
            exit();
        }
    }
}
