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
            <div class="etapes">
                <div class="etape"></div>
                <div class="etape remplie"></div>
                <div class="etape"></div>
                <div class="etape"></div>
                <div class="etape"></div>
            </div>
            <div class="flex-content">
                <div class="content-text">
                    <form action="create-1infos.php" method="post">
                        <h1>Build your website</h1>

                        <h2>Choose your profil image</h2>
                        
                        <input type="file" id="imageInput" name="image" accept="image/*" />

                        <h2>Choose your color</h2>
                        <div class="color-picker-container">
                            <input type="color" id="colorPicker" value="#1100FF">
                        </div>


                        <h2>Add your links</h2>
                        <div class="link-add-container">
                            <input type="url" id="linkInput" placeholder="Entrez votre lien ici">
                            <span onclick="addLink()" class="btn-add">+</span>
                        </div>
                        
                        <div id="linksList" class="links-list">
                            <!-- Les liens ajoutés apparaîtront ici -->
                        </div>

                        <h2>Insert your infos</h2>
                        <input type="text" id="userNameInput" placeholder="Insert your username" value="@the.girl1234" oninput="updateUserInfo()">
                        <input type="text" id="userDescriptionInput" placeholder="Write whatever you want" value="SecureLinks" oninput="updateUserInfo()">
                        <button class="marge" onclick="updateProfile()">Mettre à jour le profil</button>

                    
                        <input type="submit" value="Next">
                     </form>
                </div>
                <div class="content-text">
                <div class="presentation">
                        <!-- Conteneur pour le profil utilisateur -->
                        <div class="profile-container">
                            <img src="../image/fille.png" alt="Photo de Profil" class="profile-image">
                            <!-- Image de profil de l'utilisateur -->
                            <h1 class="colortextw">@the.girl1234</h1> 
                            <!-- Nom d'utilisateur affiché comme un titre -->
                            <p class="colortextw">SecureLinks</p>
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
        <script>
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
                    linkItem.textContent = link;

                    var removeBtn = document.createElement('button');
                    removeBtn.textContent = '-';
                    removeBtn.classList.add('btn-remove');
                    removeBtn.onclick = function() {
                        linksList.removeChild(linkItem);
                    };

                    linkItem.appendChild(removeBtn);
                    linksList.appendChild(linkItem);

                    linkInput.value = ''; // Réinitialiser le champ de saisie
                } else {
                    alert("Veuillez entrer un lien.");
                }
            }
            function updateUserInfo() {
            // Récupérer les valeurs des champs de saisie
            var userName = document.getElementById('userNameInput').value;
            var userDescription = document.getElementById('userDescriptionInput').value;

            // Mettre à jour le contenu des éléments h1 et p
            document.getElementById('userNameDisplay').innerHTML = userName;
            document.getElementById('userDescriptionDisplay').innerHTML = userDescription;
        }



        </script>
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
