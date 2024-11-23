<?php

//ON SUBMIT SEND DATA QUERY FROM DB, LOGIN CONTROLER & LOGIN CLASSES THEN REDIRECT USER TO FORM
if (isset($_POST["submit"])) {

  $login = $_POST["login"];
  $password = $_POST["mdp"];


  include 'dbh.class.php';
  include 'login.class.php';
  include '../controller/login.control.php';

  $login = new LoginContr($login, $password);

  $login->loginUser();

  header("location: ../client/form.php?=logincheckok");
}