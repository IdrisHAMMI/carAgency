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
            $this-> civility = $civility;
            $this-> firstName = $firstName;
            $this-> lastName = $lastName;
            $this-> loginName = $loginName;
            $this-> email = $email;
            $this-> role = $role;
            $this-> phoneNumber = $phoneNumber;
            $this-> password = $password;
        }
            public function signupUser() {
            //TODO: add switch error cases
        }
        
    }