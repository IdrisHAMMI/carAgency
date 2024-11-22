<?php

//LOGIN CONTROLER FUNCTION
class LoginContr extends Login {

  private $login;
  private $password;

  public function __construct($login, $password) {
    $this->login = $login;
    $this->password = $password;
  }

  public function loginUser() {
    if($this->emptyInput() == false) {
      header("location: ../client/login.php?error=emptyinput");
      exit();
    }
    $this->getUser($this->login, $this->password);
  }
  
//EMPTY SIGNUP FUNCTION
private function emptyInput() {
  if(empty($this->login) || empty($this->password)) {
    $result = false;
  }
  else {
    $result = true;
  }
  return $result;
  } 
}