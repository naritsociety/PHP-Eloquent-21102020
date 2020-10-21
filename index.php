<?php
require 'start.php';
use Controllers\UsersController;

$user = UsersController::create_user("narit", "narit@gmail.com", "maddog1234");

print_r($user);

 ?>
