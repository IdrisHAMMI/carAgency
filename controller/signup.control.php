<?php

class SignupContr extends Signup {
    private $civility;
    private $firstName;
    private $lastName;
    private $loginName;
    private $email;
    private $role;
    private $phoneNumber;
    private $password;

    public function __construct($civility, $firstName, $lastName, $loginName, $email, $role, $phoneNumber, $password) {
        $this->civility = $civility;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->loginName = $loginName;
        $this->email = $email;
        $this->role = $role;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
    }

    public function signupUser() {
        // VALIDATE INPUT
        if (!$this->validateInput()) {
            header("location: ../client/form.php?error=invalidinput");
            exit();
        }

        // CHECK IF LOGIN NAME IS TAKEN
        if ($this->checkUserExists($this->loginName)) {
            header("location: ../client/form.php?error=userexists");
            exit();
        }

        // TRY/CATCH TO INSERT USER IN DB
        try {
            $this->setUser(
                $this->civility,
                $this->firstName,
                $this->lastName,
                $this->loginName,
                $this->email,
                $this->role,
                $this->phoneNumber,
                $this->password
            );
            header("location: ../client/form.php?error=none");
            exit();
        } catch (Exception $e) {
            // Log the error and redirect with a general error message
            error_log("Signup error: " . $e->getMessage());
            header("location: ../client/form.php?error=stmtfailed");
            exit();
        }
    }

    // VALIDATE FORM INPUT
    private function validateInput() {
        if (empty($this->civility) || empty($this->firstName) || empty($this->lastName) || 
            empty($this->loginName) || empty($this->email) || empty($this->role) || 
            empty($this->phoneNumber) || empty($this->password)) {
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false; // Invalid email format
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->loginName)) {
            return false; // INVALID CHARACTERS
        }

        if (strlen($this->password) < 6) {
            return false; // PASSWORD TOO SHORT
        }

        return true;
    }

    // CHECK IF USER IS ALREADY IN DB
    private function checkUserExists($loginName) {
        try {
            $stmt = $this->connect()->prepare("SELECT login FROM personne WHERE login = ?;");
            $stmt->execute([$loginName]);

            return $stmt->fetch() !== false;
        } catch (PDOException $e) {
            error_log("Database check error: " . $e->getMessage());
            header("location: ../client/form.php?error=stmtfailed");
            exit();
        }
    }
}
