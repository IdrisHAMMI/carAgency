<?php

class Signup extends dbh {
    protected function executeStatement($stmt, $params) {
        if ($stmt->execute($params)) {
            return true;
        } else {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
    }
}