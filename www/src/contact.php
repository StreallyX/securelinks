<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Profil</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
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
    <div class="content">
        <div class="form-container">
            <form id="contactForm">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Request</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
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

