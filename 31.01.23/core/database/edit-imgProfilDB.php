<?php
require_once __DIR__ . './bdd.php';

$target_dir = __DIR__ . ".\..\..\public\images\uploads\ ";
$target_dir = trim($target_dir);

if (isset($_FILES['imageToUpload'])) {
  $target_file = $target_dir . basename($_FILES['imageToUpload']['name']);
  $uploadCheck = "";
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
}

if (isset($_POST['submit']) && isset($_FILES['file'])) {

  $check = getimagesize($_FILES['imageToUpload']["tmp_name"]);

  if ($check !== false) {
    echo "Fichier est une image - " . $check['mime'] . ".";
    $uploadCheck = 1;
  } else {
    echo "Fichier invalide !";
    $uploadCheck = 0;
  }

  if (file_exists($target_file)) {
    echo "Sorry, file already exists. <br>";
    $uploadCheck = 0;
  }

  if ($_FILES["imageToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadCheck = 0;
  }

  if (
    $imageFileType != "jpg" && $imageFileType != "png" &&
    $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadCheck = 0;
  }

  if ($uploadCheck == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file(
      $_FILES["imageToUpload"]["tmp_name"],
      $target_file
    )) {
      echo "The file " . htmlspecialchars(basename(
        $_FILES["imageToUpload"]["name"]
      )) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
