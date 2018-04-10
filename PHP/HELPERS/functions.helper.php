<?php
function getAllProfiles() {
  $profiles = file_get_contents(__DIR__ . '/../../DB/profiles.json');
  $profiles = json_decode($profiles, true);
  if (!$profiles) {
    $profiles = [];
  }
  return $profiles;
}
function saveFiles($inputName, $dir, $name)
{
  $origin = $_FILES[$inputName]['tmp_name'];

  $ext = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);

  $destino = $dir . $nombre . '.' . $ext;

  move_uploaded_file($origen, $destino);

  return $nombre . '.' . $ext;
}

 ?>
