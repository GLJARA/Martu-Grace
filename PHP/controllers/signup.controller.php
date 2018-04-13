<?php
require __DIR__ . '/../helpers/functions.helper.php';



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
