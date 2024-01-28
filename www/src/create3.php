<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page de Profil</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- <body> contient le contenu visible de votre page web -->
        <header class="header">
            
            <div class="title-and-links">
                <div class="title-container">
                    <h1>SecureLinks</h1>
                </div>
                <nav class="nav-links">
                    <ul>
                        <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="tarifs.php" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="example.php" class="nav-link">Example</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header> 
        <div class="createCenter">
            <form id="submitForm">
                <input type="email" name="email" placeholder="Votre e-mail">
                <input type="text" name="fullname" placeholder="Nom et prénom">
                <input type="hidden" name="profileData" id="profileData">
                <button type="submit">Send us your website</button>
            </form>
        </div>

        <script>      </script>
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
