<?php
session_start();
require __DIR__ . '/../helpers/functions.helper.php';

//----------------------
// validatios
//----------------------
$_SESSION['errorEmail'] = null;
$email = trim($_POST['email']); // lo dejamos sin blancos
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_SESSION['errorEmail'] = 'The email is not valid ';
    $_SESSION['email'] = $email;
  header('Location: http://localhost/TI/singup.php');
  exit;
}

//----------------------
// save profile
//----------------------
$profile['name'] = $_POST['name'];
$profile['email'] = $_POST['email'];
$profile['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

$profiles = getAllProfiles();
$profiles[] = $profile;
$profiles = json_encode($profiles);

file_put_contents(__DIR__ . '/../../DB/profiles.json', $profiles);
