<?php
require __DIR__ . '/../helpers/functions.helper.php';

//----------------------
// validatios
//----------------------
// validate email

if (isset($_POST['email'])) {
  $email = trim($_POST['email']); // lo dejamos sin blancos
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msgError = 1;
  }
}
