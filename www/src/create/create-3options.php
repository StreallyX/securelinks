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
                    <!-- Free Website Option -->
                    <div class="tarif">
                        <h2>Get a Free Website</h2>
                        <p class="price">$0.00</p>
                        <p>Start your online presence with a free website. Choose from a variety of templates to quickly launch your site.</p>
                        <p>Cost-effective way to establish an online presence, user-friendly templates for easy setup.</p>
                        <input type="checkbox" class="option" data-price="0" checked disabled>
                    </div>

                    <!-- Website Security Option -->
                    <div class="tarif">
                        <h2>Secure Your Website</h2>
                        <p class="price">$7.99/month</p>
                        <p>Continuous protection for your website from insta bots, including regular updates and security monitoring.</p>
                        <p>Peace of mind with enhanced security, protection against Instagram bans.</p>
                        <input type="checkbox" class="option" data-price="7.99" checked disabled>
                    </div>
                    

                    <?php
                    // Vérifiez la valeur de $_SESSION['option1']
                    if ($_SESSION['option1'] === true) {
                        $checked = 'checked="checked"';
                    } else {
                        $checked = ''; // Laissez l'attribut 'checked' vide sinon
                    }
                    ?>

                    <!-- SEO Optimization Option -->
                    <!--
                    <div class="tarif">
                        <h2>SEO Optimization</h2>
                        <?php // var_dump($_SESSION);?>
                        <p class="price">$2.99/month</p>
                        <p>Improve your website's visibility on search engines to attract more traffic and potential customers.</p>
                        <p>Higher search engine rankings, increased organic traffic, and improved online visibility.</p>
                        <input type="checkbox" id="seo_optimization" name="seo_optimization" class="option" data-price="2.99" <?php  // echo $checked; ?>>
                    </div>
                    -->

                    <!-- Data Analysis Option -->
                    <!--
                    <div class="tarif">
                        <h2>Data Analysis</h2>
                        <p class="price">$4.99/month</p>
                        <p>Get detailed insights on your website's traffic and user behavior to make informed decisions.</p>
                        <p>Better understanding of audience behavior, data-driven strategies for website improvement.</p>
                        <input type="checkbox" id="data_analysis" name="data_analysis" class="option" data-price="4.99">
                    </div>
                    -->

                    <!-- Advanced Website Customization Option -->
                    
                   

                    <div class="tarif">
                        <label id="pseudo-checkbox" class="pseudo-checkbox" data-price="29.99" >
                            <input type="checkbox" id="advanced_website" name="advanced_website" class="option visually-hidden" data-price="29.99">
                            
                            <h2>Advanced Website Customization</h2>
                            <p class="price">$29.99/month</p>
                            <p>Tailor your website with advanced customization options for a unique and professional online presence.</p>
                            <p>Unique website design, enhanced user experience, alignment with specific brand needs.</p>
                        </label>
                    </div>



                
                    <p>Total Price: <span id="total-price">$7.99</span></p>
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
        const checkboxes = document.querySelectorAll('.option');
        const totalPriceSpan = document.getElementById('total-price');
        const conditionsCheck = document.getElementById('conditions-check');
        const nextButton = document.getElementById('next-button');

        let total = 7.99;

        conditionsCheck.addEventListener('change', () => {
            nextButton.disabled = !conditionsCheck.checked || total === 0;
        });

        // JavaScript pour ouvrir et fermer la modale
        const openModalButton = document.getElementById("openModal");
        const closeModalButton = document.getElementById("closeModal");
        const modal = document.getElementById("myModal");

        openModalButton.addEventListener("click", function() {
            modal.style.display = "block";
        });

        closeModalButton.addEventListener("click", function() {
            modal.style.display = "none";
        });

        // Fermer la modale si l'utilisateur clique en dehors de celle-ci
        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });

        document.getElementById("myForm").addEventListener("submit", function(event) {
            if (!document.getElementById("conditions-check").checked) {
                event.preventDefault(); // Empêche l'envoi du formulaire
                alert("Vous devez cocher la case pour accepter les conditions.");
            }
        });
        document.getElementById("myForm").addEventListener("submit", function(event) {
            if (!document.getElementById("conditions-check").checked) {
                event.preventDefault(); // Empêche l'envoi du formulaire
                alert("Vous devez cocher la case pour accepter les conditions.");
            }
        });

        document.querySelectorAll('.pseudo-checkbox').forEach(item => {
            item.addEventListener('click', function(event) {
                event.stopPropagation(); // Empêche la propagation de l'événement aux éléments parents

                const checkbox = this.querySelector('input[type="checkbox"]');
                checkbox.checked = !checkbox.checked; // Toggle l'état de la checkbox

                // Mise à jour du total
                let price = parseFloat(checkbox.dataset.price);
                total = checkbox.checked ? total + (price / 2) : total - (price / 2);
                totalPriceSpan.textContent = `$${total.toFixed(2)}`;
                // Marquer visuellement la sélection
                this.classList.toggle('selected', checkbox.checked);
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
