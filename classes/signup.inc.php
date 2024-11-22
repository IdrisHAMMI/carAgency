<?php

if (isset($_POST["submit"])) {
    $civility = $_POST["civilite"];
    $firstName = $_POST["prenom"];
    $lastName = $_POST["nom"];
    $loginName = $_POST["login"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $phoneNumber = $_POST["tel"];
    $password = $_POST["mdp"];


include "dbh.class.php"; //DATABASE CLASS
include "signup.class.php"; //SIGNUP CLASS
include "../controller/signup.control.php";//SIGNUP CONTROLLER



$signup = new SignupContr($civility, $firstName, $lastName, $loginName, $email, $role, $phoneNumber, $password);
$signup->signupUser();
header("location: form.php?error=none");
}