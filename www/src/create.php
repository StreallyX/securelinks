<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/create.css">
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
        
        <div class="flex-content">
            <div class="content-text">
                <h1>Create your website</h1>
                <p>Create your own website with our tools</p>
                <a class="custom-button" href="create/create-1infos.php">Create</a>
            </div>
            <div class="content-text">
                <div class="presentation">
                    <!-- Conteneur pour le profil utilisateur -->
                    <div class="profile-container">
                        <img src="image/fille.png" alt="Photo de Profil" class="profile-image">
                        <!-- Image de profil de l'utilisateur -->
                        <h1 class="colortextw">@the.girl1234</h1> 
                        <!-- Nom d'utilisateur affiché comme un titre -->
                        <p class="colortextw">SecureLinks</p>
                        <!-- Description ou slogan sous le nom d'utilisateur -->
                    </div>

                    <!-- Conteneur pour les liens -->
                    <div class="links-container">
                        <!-- Chaque <a> est un lien vers une autre page ou site, avec une image de fond personnalisée -->
                        <a href="create.php" class="link-box" style="background-image: url('image/mym.png');"></a>
                        <a href="create.php" class="link-box" style="background-image: url('image/onlyfans.png');"></a>
                    </div>
                </div>
            </div>
        </div>

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
