<?php
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
        <img src=\"image/profil.png\" alt=\"Photo de Profil\" class=\"profile-image\">
        <h1 class=\"colortextw\">@ana.whiterose</h1>
        <p class=\"colortextw\">My secret world ♥</p>
        </div>
        <div class=\"links-container\">
            <a href=\"https://mym.fans/Anawhiterose\" class=\"link-box\" style=\"background-image: url('image/mym.png');\"></a>
            <a href=\"https://onlyfans.com/ana.whiterose\" class=\"link-box\" style=\"background-image: url('image/onlyfans.png');\"></a>
        </div>
        <footer>
            <p class=\"footertext\" style=\"\">SecureLinks</p>
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
    background: linear-gradient(to bottom, rgb(214, 0, 0), #500000);
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

$username = "salope02";

$PHPfilename = $username.".php";

// Création du dossier au nom de la personne
mkdir("../../website/".$username);

// Création de la apge PHP de la personne
file_put_contents("../../website/".$username."/index.php", $PHPcontent);

// Création du fichier CSS de la personne
file_put_contents("../../website/".$username."/style.css", $CSScontent);
// Création du fichier JS de la personne
file_put_contents("../../website/".$username."/script.js", $content);


header("Location: \\www\\website\\" . $username."\\");

?>