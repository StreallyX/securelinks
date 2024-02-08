<?php
    // Récupération forms website
    session_start(); // Démarrer la session
    
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header("Location: error.php");
    }
    $_SESSION['etape'] = 2;

    // Récupérer les données soumises par le formulaire et les stocker dans la session
    $_SESSION['backgroundcolor'] = $_POST['colorPicker'];
    $_SESSION['userNameInput'] = $_POST['userNameInput'];
    $_SESSION['userDescriptionInput'] = $_POST['userDescriptionInput'];
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['links'])) {
      // Traitement des liens
      $_SESSION['links'] = $_POST['links'];
    }

    $_SESSION['error1'] = false;
    $_SESSION['error2'] = false;
    $_SESSION['error3'] = false;
    $_SESSION['error4'] = false;
    $_SESSION['error5'] = false;
    $_SESSION['error6'] = false;


    var_dump($_SESSION['links']);
    $username = $_SESSION['userNameInput'];

    $target_dir = "../../website/".$username."/"; // Dossier où l'image sera chargée
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $newFileName = "profilepic." . $imageFileType;
    $target_file = $target_dir . $newFileName;


    // Verification si le nom existe deja

    // SQL


    // Vérifie la taille du fichier
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      $_SESSION['error1'] = true;
      echo "Désolé, votre fichier est trop volumineux.";
      $uploadOk = 0;
      header("Location: create-2website.php");
    }else{
      // Création du dossier au nom de la personne
      mkdir("../../website/".$username."/");

    }

// Vérifie si le fichier image est une image réelle ou une fausse image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Le fichier est une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $_SESSION['error2'] = true;
    echo "Le fichier n'est pas une image.";
    $uploadOk = 0;
  }
}

// Vérifie si le fichier existe déjà
if (file_exists($target_file)) {
  $_SESSION['error3'] = true;
  echo "Désolé, le fichier existe déjà.";
  header("Location: create-2website.php");
  $uploadOk = 0;
}



// Autorise certains formats de fichier
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['error4'] = true;
  echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
  header("Location: create-2website.php");
  $uploadOk = 0;
}

// Vérifie si $uploadOk est mis à 0 par une erreur
if ($uploadOk == 0) {
  $_SESSION['error5'] = true;
  echo "Désolé, votre fichier n'a pas été chargé.";
  header("Location: create-2website.php");
// Si tout est ok, essaie de charger le fichier
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Le fichier ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a été chargé.";
  } else {
    $_SESSION['error6'] = true;
    echo "Désolé, il y a eu une erreur lors du chargement de votre fichier.";
    header("Location: create-2website.php");
  }
}




$PHPcontent = "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Page de Profil</title>
        <link rel=\"stylesheet\" href=\"style.css\">
    </head>
    <body class=\"background-image\">
        <div class=\"profile-container\">
            <img src=\"" . $newFileName . "\" alt=\"Photo de Profil\" class=\"profile-image\">
            <h1 class=\"colortextw\">" . $_SESSION['userNameInput'] . "</h1>
            <p class=\"colortextw\">" . $_SESSION['userDescriptionInput'] . "</p>
        </div>
        <div class=\"links-container\">";

if (isset($_SESSION['links']) && is_array($_SESSION['links'])) {
    $compteur = 0;
    foreach ($_SESSION['links'] as $link) {
        $compteur++;

        $PHPcontent .= "<a href=\"redirect.php?link=$compteur\">LIEN$link</a><br>";
    }
}

$PHPcontent .= "</div>
        <footer>
            <p class=\"footertext\">SecureLinks</p>
        </footer>
    </body>
</html>";


$CSScontent = "html {
    height: 100%;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    background-color: #f4f4f4;
    color: #333;
    height: 100%;
}
.background-image {
    background-color: ".$_SESSION['backgroundcolor'].";
    margin: 0;
    padding: 0;
    height: 100%;
}
.profile-container {
    width: 100%;
    text-align: center;
    margin-top: 50px;
}
.profile-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.links-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 50px;
    padding: 0 20px;
    flex-direction: column;
}
.link-box {
    width: 200px;
    height: 100px;
    border-radius: 15px;
    background-size: cover;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
    padding: 10px;
    margin-bottom: 10px;
}
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    color: white;
    font-weight: bold;
    padding-bottom: 40px;
}
.colortextw {
    color: white;
    text-align: center;
}
";


$JScontent ="";


$PHPfilename = $username.".php";

$PHPREDIRECTcontent = "<?php\n";
$PHPREDIRECTcontent .= "if (isset(\$_GET['link']) && ctype_digit(\$_GET['link'])) {\n";
$PHPREDIRECTcontent .= "  \$linkID = \$_GET['link'];\n";
$PHPREDIRECTcontent .= "  switch (\$linkID) {\n";

$compteur2 = 1;
foreach ($_SESSION['links'] as $link) {
    // Ajoute chaque cas dans le contenu de PHPREDIRECTcontent
    $PHPREDIRECTcontent .= "    case {$compteur2}:\n";
    $PHPREDIRECTcontent .= "      header(\"Location: " . $link . "\");\n";
    $PHPREDIRECTcontent .= "      break;\n";
    $compteur2++;
}

$PHPREDIRECTcontent .= "    default:\n";
$PHPREDIRECTcontent .= "      // Redirection par défaut ou gestion d'erreur\n";
$PHPREDIRECTcontent .= "      header(\"Location: error.php\");\n";
$PHPREDIRECTcontent .= "      break;\n";
$PHPREDIRECTcontent .= "  }\n";
$PHPREDIRECTcontent .= "} else {\n";
$PHPREDIRECTcontent .= "  // Si 'link' n'est pas défini ou n'est pas un nombre\n";
$PHPREDIRECTcontent .= "  header(\"Location: error.php\");\n";
$PHPREDIRECTcontent .= "}\n";
$PHPREDIRECTcontent .= "?>\n";

// Utilisez cette chaîne pour créer ou mettre à jour le fichier redirect.php
file_put_contents("../../website/" . $username . "/redirect.php", $PHPREDIRECTcontent);


// Création de la page PHP de la personne
file_put_contents("../../website/".$username."/index.php", $PHPcontent);

// Création du fichier CSS de la personne
file_put_contents("../../website/".$username."/style.css", $CSScontent);

// Création du fichier JS de la personne
file_put_contents("../../website/".$username."/script.js", $JScontent);



header("Location: create-1infos.php");

?>