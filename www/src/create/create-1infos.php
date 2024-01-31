<?php
session_start(); // Démarrer la session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises par le formulaire et les stocker dans la session
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/create-1infos.css">
    </head>
    <body>
        <!-- <body> contient le contenu visible de votre page web -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
        <header class="header">
            <nav role="navigation">
            <h1 id="NavTitle">SecureLinks</h1>
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            <ul id="menu">
              <li><a href="../index.php">Home</a></li>
              <li><a href="tarifs.php">Pricing</a></li>
              <li><a href="example.php">Example</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
           </div>
          </nav>
        </header> 
        <!-- Content -->

        <div class="container">
            <div class="etapes">
                <div class="etape remplie"></div>
                <div class="etape"></div>
                <div class="etape"></div>
                <div class="etape"></div>
                <div class="etape"></div>
            </div>
            <h1>Send us your infos</h1>
            <form action="create-2website.php" method="post">
                <label for="nom">Nom :</label><br>
                <input type="text" id="nom" name="nom" value="<?php if($_SESSION['nom'] != ''){ echo $_SESSION['nom'];} ?>"><br><br>

                <label for="nom">Prenom :</label><br>
                <input type="text" id="prenom" name="prenom" value="<?php if($_SESSION['prenom'] != ''){ echo $_SESSION['prenom'];}?>"><br><br>
                
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email" value="<?php if($_SESSION['email'] != ''){ echo $_SESSION['email'];}?>"><br><br>
                
                <input type="submit" value="Soumettre">
            </form>
        </div>

        <!-- Content -->
    <footer class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Email: securelinkspro@gmail.com</p>
            <p>Phone: +41 76 675 77 23</p>
        </div>
        <div class="social-media">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="#" class="fa fa-instagram"></a></li>
            </ul>
        </div>
    </footer>
    </body>
</html>