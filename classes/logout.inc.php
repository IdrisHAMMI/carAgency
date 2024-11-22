<?php

//LOGOUT FUNCTIONALITY
session_start();
session_unset();
session_destroy();

header("location: ../client/form.php?=logoutok");
exit();