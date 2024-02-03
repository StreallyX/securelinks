<?php
$target_dir = "../"; // Dossier où l'image sera chargée
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Vérifie si le fichier image est une image réelle ou une fausse image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Le fichier est une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Le fichier n'est pas une image.";
    $uploadOk = 0;
  }
}

// Vérifie si le fichier existe déjà
if (file_exists($target_file)) {
  echo "Désolé, le fichier existe déjà.";
  $uploadOk = 0;
}

// Vérifie la taille du fichier
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Désolé, votre fichier est trop volumineux.";
  $uploadOk = 0;
}

// Autorise certains formats de fichier
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
  $uploadOk = 0;
}

// Vérifie si $uploadOk est mis à 0 par une erreur
if ($uploadOk == 0) {
  echo "Désolé, votre fichier n'a pas été chargé.";
// Si tout est ok, essaie de charger le fichier
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Le fichier ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a été chargé.";
  } else {
    echo "Désolé, il y a eu une erreur lors du chargement de votre fichier.";
  }
}
?>