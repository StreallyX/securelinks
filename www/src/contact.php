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
                <li><a href="create.php">Create</a></li>
                <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            </nav>
        </header>
        <div class="content">
            <div class="form-container">
            <form id="contactForm" action="sendcontact.php" method="post">
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

                <!-- Subject of Contact Dropdown -->
                <div class="form-group">
                    <label for="contactSubject">Subject of Contact</label>
                    <select id="contactSubject" name="contactSubject" required>
                        <option value="">Please select</option>
                        <option value="addition">Addition</option>
                        <option value="modification">Modification</option>
                        <option value="pageIssue">Page Issue</option>
                        <option value="linkIssue">Link Issue</option>
                        <!-- Add other subjects as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Your Request</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit">Send</button>
            </form>
            </div>
        </div>
    
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