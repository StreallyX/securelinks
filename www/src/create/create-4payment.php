<?php
session_start(); // Assurez-vous d'avoir démarré la session si ce n'est pas déjà fait.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données soumises par le formulaire et les stocker dans la session
    $_SESSION['option1'] = isset($_POST['seo_optimization']) ? true : false;
    $_SESSION['option2'] = isset($_POST['data_analysis']) ? true : false;
    $_SESSION['option3'] = isset($_POST['advanced_website']) ? true : false;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="../css/global.css">
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
              <li><a href="../../index.php">Home</a></li>
              <li><a href="../tarifs.php">Pricing</a></li>
              <li><a href="../create.php">Create</a></li>
              <li><a href="../contact.php">Contact</a></li>
            </ul>
           </div>
          </nav>
        </header> 
        <!-- Content -->

            <p><?php echo $_SESSION['option1']?></p>
            <?php var_dump($_POST); 
            var_dump($_SESSION);?>
            <!-- https://buy.stripe.com/8wMcOggIt96H8gMeUU -->
            <?php
                if ($_SESSION['option1'] === false && $_SESSION['option2'] === false && $_SESSION['option3'] === false) {
                    header('Location: https://buy.stripe.com/4gwbKc63P96H7cI8wx');
                    exit;
                }
            ?>

        <!-- Content -->
        <footer class="footer">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>Email: securelinkspro@gmail.com</p>
                <p>Phone: +41 76 675 77 23</p>
            </div>
            <div class="social-media">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><img src="facebook-icon.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="twitter-icon.png" alt="Twitter"></a></li>
                    <li><a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
