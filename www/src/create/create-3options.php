<?php
session_start();

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: error.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/create-3options.css">
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
      
        <div class="content">
            <form id="myForm" action="create-4payment.php" method="post">
                <div class="tarifs-container">
                    <!-- Silver Package -->
                    <div class="tarif silver">
                        <h2>Silver Package</h2>
                        <p class="price">7.99 $/month</p>
                        <ul>
                            <li>✅ Site Web</li>
                            <li>✅ Secured Website</li>
                            <li>❌ SEO Optimization</li>
                            <li>❌ Data Analysis</li>
                            <li>❌ Website Customization</li>
                        </ul>
                        <p>Secure and establish your online presence with a website and continuous protection against threats.</p>
                        <button type="button" id="selectSilver" class="tarif-button" data-price="7.99">Select</button>
                    </div>

                    <!-- Gold Package -->
                    <div class="tarif gold">
                        <h2>Gold Package</h2>
                        <p class="price">14.99 $/month</p>
                        <ul>
                            <li>✅ Site Web</li>
                            <li>✅ Secured Website</li>
                            <li>✅ SEO Optimization</li>
                            <li>✅ Data Analysis</li>
                            <li>❌ Website Customization</li>
                        </ul>
                        <p>Enhance your site with SEO optimization and data analysis for better visibility and insights.</p>
                        <button type="button" id="selectGold" class="tarif-button" data-price="14.99">Select</button>
                    </div>

                    <!-- Platinum Package -->
                    <div class="tarif platinum">
                        <h2>Platinum Package</h2>
                        <p class="price">39.99 $/month</p>
                        <ul>
                            <li>✅ Site Web</li>
                            <li>✅ Secured Website</li>
                            <li>✅ SEO Optimization</li>
                            <li>✅ Data Analysis</li>
                            <li>✅ Website Customization</li>
                        </ul>
                        <p>The ultimate package offering full access to website customization for a unique and professional online presence.</p>
                        <button type="button" id="selectPlatinum" class="tarif-button" data-price="49.99">Select</button>
                    </div>
                </div>
                <div class="container">
                    <input type="hidden" name="selectedPackage" id="selectedPackage" value="">
                    <a href="#" id="openModal">Voir les Conditions Générales</a>

                    <!-- Modale pour les Conditions Générales -->
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close-button" id="closeModal">&times;</span>
                            <h2>Conditions Générales</h2>
                            <!-- Ajoutez ici le contenu de vos conditions générales -->
                            <p>Ceci sont les conditions générales de notre service.</p>
                        </div>
                    </div>
                    <input type="checkbox" id="conditions-check"> I have read the terms and conditions
                
                    <input type="submit" value="Next">
                </div>
            </form>
        </div>
    <script>

        // Sélectionner tous les boutons de tarif
        const buttons = document.querySelectorAll('.tarif-button');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Désélectionner tous les boutons
                buttons.forEach(btn => btn.classList.remove('tarif-button-selected'));
                
                // Sélectionner le bouton cliqué
                this.classList.add('tarif-button-selected');

                // Mettre à jour la valeur du champ caché avec l'ID du package sélectionné
                document.getElementById('selectedPackage').value = this.id; // Utiliser l'ID du bouton comme valeur
            });
        });


    </script>
        
        <footer class="footer">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="contact-info">
                <a href="src/contact.php"><h3 id="ContactUsFooter">Contact Us</h3></a>
                <p>Email: securelinkspro@gmail.com</p>
            </div>
            <div class="social-media">
                <h3>Follow Us</h3>
                <ul>
                    <!-- Mettre le bon lien -->
                    <li><a href="https://instagram/securelinks" class="fa fa-instagram"></a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
