<?php
session_start(); // Démarrer la session
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/create-6validation.css">
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
        <div class="content">
            <h1>Confirmation de Paiement</h1>
            <p>Nous vous remercions pour votre achat ! Votre paiement a été effectué avec succès.</p>

            <h2>Détails de la commande :</h2>
            <p>Votre commande est maintenant en traitement et sera livrée dans les prochaines 24 heures. Nous mettons tout en œuvre pour assurer une livraison rapide et sécurisée directement à votre adresse.</p>

            <h2>Que se passe-t-il ensuite ?</h2>

            <h2>Confirmation par email : </h2>
            <p>Vous recevrez un email de confirmation contenant les détails de votre commande ainsi qu'un lien de suivi pour suivre l'avancement de votre livraison en temps réel.
            Préparation de la commande : Notre équipe dédiée prépare votre commande avec le plus grand soin pour s'assurer qu'elle répond à vos attentes.</p>
            <h2>Livraison : <p>Vous serez informé(e) dès que votre commande sera expédiée et en route vers vous.</p>
            <h2>Besoin d'aide ?</h2>
            <p>Si vous avez des questions ou besoin d'assistance concernant votre commande, n'hésitez pas à contacter notre service clientèle. Nous sommes là pour vous aider !</p>

            <h2>Email :</h2> serviceclient@votresite.com
            <h2>Téléphone :</h2> 01 23 45 67 89 (Du lundi au vendredi de 9h à 18h)
            <p>Nous vous remercions de votre confiance et nous réjouissons de vous compter parmi nos clients satisfaits.</p>

            <p>L'équipe [Nom de votre entreprise/site]</p>
        </div>
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