
<?php
session_start();
$_SESSION['etape'] = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/create-2website.css">
    </head>
    <body>
        <!-- <body> contient le contenu visible de votre page web -->
        <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <div class="etapes">
                    <div class="etape remplie"></div>
                    <div class="etape"></div>
                    <div class="etape"></div>
                    <div class="etape"></div>
                    <div class="etape"></div>
                </div>
                <div class="flex-content">
                    <div class="content-text">
                        <form action="makePage.php" method="post" enctype="multipart/form-data">
                            <h1>Build your website</h1>

                            <h2>Choose your profil image</h2>
                            <?php 

                                // Gestion d'erreur

                                
                                // Pas de fichier

                                if(isset($_SESSION['error0']) && $_SESSION['error0'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Aucun fichier enregistrer.</div>
                                    <?php $_SESSION['error0'] = false; endif; ?>
                                <?php 
                                // Fichier trop volumineux
                                if(isset($_SESSION['error1']) && $_SESSION['error1'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Fichier trop volumineux.</div>
                                    <?php $_SESSION['error1'] = false; endif; 
                                // Le Fichier n'est pas une image
                                
                                // Fichier trop volumineux
                                if(isset($_SESSION['error2']) && $_SESSION['error2'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Le Fichier n'est pas une image.</div>
                                    <?php $_SESSION['error2'] = false; endif; 
                                // Désolé, le fichier existe déjà
                                
                                // Fichier trop volumineux
                                if(isset($_SESSION['error3']) && $_SESSION['error3'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Désolé, le fichier existe déjà.</div>
                                    <?php $_SESSION['error3'] = false; endif; 
                                // Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.
                             
                                // Fichier trop volumineux
                                if(isset($_SESSION['error4']) && $_SESSION['error4'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.</div>
                                    <?php $_SESSION['error4'] = false; endif; 
                                // Désolé, votre fichier n'a pas été chargé.

                            
                                // Fichier trop volumineux
                                if(isset($_SESSION['error5']) && $_SESSION['error5'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Désolé, votre fichier n'a pas été chargé.</div>
                                    <?php $_SESSION['error5'] = false; endif;
                                // Désolé, il y a eu une erreur lors du chargement de votre fichier
                             
                                // Fichier trop volumineux
                                if(isset($_SESSION['error6']) && $_SESSION['error6'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Désolé, il y a eu une erreur lors du chargement de votre fichier.</div>
                                    <?php $_SESSION['error6'] = false; endif; 

                                // Pas de nom
                                if(isset($_SESSION['error7']) && $_SESSION['error7'] === true) : ?>
                                    <div class="error-message" ><i class="fa fa-exclamation-triangle"></i>Désolé, vous devez saisir un username.</div>
                                    <?php $_SESSION['error7'] = false; endif; 

                            ?>

                            <input type="file" name="fileToUpload" id="fileToUpload">

                            <h2>Choose your color</h2>
                            <div class="color-picker-container">
                                <input name="colorPicker" type="color" id="colorPicker" value="<?php echo isset($_SESSION['backgroundcolor']) ? $_SESSION['backgroundcolor'] : '#0000FF'; ?>">
                            </div>


                            <h2>Add your links</h2>
                            <div class="link-add-container">
                                <input name="linkInput" type="url" id="linkInput" placeholder="Entrez votre lien ici">
                                <button type="button" onclick="addLink()" class="btn-add">+</button>
                            </div>
                            
                            <div id="linksList" class="links-list">
                                <!-- Les liens ajoutés apparaîtront ici -->
                                
                                <?php 
                                    if (isset($_SESSION['links']) && is_array($_SESSION['links'])) {
                                        foreach ($_SESSION['links'] as $link) {
                                    
                                            ?>
                                                <div class="link-item">
                                                    <span><?php echo $link; ?></span>
                                                    <input type="hidden" name="links[]" value="<?php echo $link; ?>">
                                                    <button class="btn-remove" type="button">-</button>
                                                </div>

                                            <?php
                                        }
                                    }
                                ?>

                            </div>

                            <h2>Insert your infos</h2>
                            <input name="userNameInput" type="text" id="userNameInput" placeholder="Insert your username" value="<?php echo isset($_SESSION['userNameInput']) ? $_SESSION['userNameInput'] : ''; ?>" oninput="updateUserInfo()">
                            <input name="userDescriptionInput" type="text" id="userDescriptionInput" placeholder="Write whatever you want" value="<?php echo isset($_SESSION['userDescriptionInput']) ? $_SESSION['userDescriptionInput'] : ''; ?>" oninput="updateUserInfo()">

                            <input name="submit" type="submit" value="Next">
                        </form>
                    </div>
                    <div class="content-text">
                    <div class="presentation">
                            <!-- Conteneur pour le profil utilisateur -->
                            <div class="profile-container">
                                <img src="../image/fille.png" alt="Photo de Profil" class="profile-image" id="profileImage">
                                <!-- Image de profil de l'utilisateur -->
                                <h1 id="title" class="colortextw"></h1> 
                                <!-- Nom d'utilisateur affiché comme un titre -->
                                <p id="desc" class="colortextw"></p>
                                <!-- Description ou slogan sous le nom d'utilisateur --> 
                            </div>

                            <!-- Conteneur pour les liens -->
                            <div class="links-container">
                                <!-- Chaque <a> est un lien vers une autre page ou site, avec une image de fond personnalisée -->
                                <a href="create-2website.php" class="link-box" style="background-image: url('../image/links.png');"></a>
                                <a href="create-2website.php" class="link-box" style="background-image: url('../image/links.png');"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <script>
            updateUserInfo();
            document.getElementById('colorPicker').addEventListener('input',function() {
            document.querySelector('.presentation').style.backgroundColor = this.value;
            });
            function updatePhoneContent(htmlContent) {
            document.querySelector('.presentation').innerHTML = htmlContent;
            }
            function addLink() {
                var linkInput = document.getElementById('linkInput');
                var link = linkInput.value.trim();

                if (link) {
                    var linksList = document.getElementById('linksList');
                    var linkItem = document.createElement('div');
                    linkItem.classList.add('link-item');

                    var linkText = document.createElement('span');
                    linkText.textContent = link;
                    linkItem.appendChild(linkText);

                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'links[]'); // Important pour PHP
                    hiddenInput.value = link;

                    var removeBtn = document.createElement('button');
                    removeBtn.textContent = '-';
                    removeBtn.classList.add('btn-remove');
                    removeBtn.type = 'button'; // Pour éviter de soumettre le formulaire
                    removeBtn.onclick = function() {
                        
                        linksList.removeChild(linkItem);
                    };

                    linkItem.appendChild(hiddenInput);
                    linkItem.appendChild(removeBtn);
                    linksList.appendChild(linkItem);

                    linkInput.value = ''; // Réinitialiser le champ de saisie
                } else {
                    alert("Veuillez entrer un lien.");
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                // Attache l'écouteur d'événements au conteneur parent 'linksList'
                var linksList = document.getElementById('linksList');
                
                linksList.addEventListener('click', function(event) {
                    // Vérifie si l'élément cliqué est un bouton de suppression
                    if (event.target.classList.contains('btn-remove')) {
                        var linkItem = event.target.parentNode; // Obtient le div 'link-item' parent
                        linksList.removeChild(linkItem); // Supprime le 'link-item' du conteneur
                    }
                });
            });


            function updateUserInfo() {
            // Récupérer les valeurs des champs de saisie
            var userName = document.getElementById('userNameInput').value;
            var userDescription = document.getElementById('userDescriptionInput').value;

            // Mettre à jour le contenu des éléments h1 et p
            document.getElementById('title').innerHTML = userName;
            document.getElementById('desc').innerHTML = userDescription;
            document.querySelector('.presentation').style.backgroundColor = document.getElementById('colorPicker').value
        }
        
        document.getElementById('fileToUpload').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                    // Met à jour l'attribut src de l'image avec le résultat de FileReader
                    document.getElementById('profileImage').src = e.target.result;
                };
                
                // Lit le fichier sélectionné
                reader.readAsDataURL(this.files[0]);
            }
        });
        setTimeout(function() {
            const errors = document.querySelectorAll('.error-message');
            errors.forEach(function(error) {
                error.style.opacity = '0';
                setTimeout(function() { error.style.display = 'none'; }, 600);
            });
        }, 5000); // Les messages disparaîtront après 5 secondes


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
