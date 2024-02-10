<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Profil</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/tarifs.css">
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
        <div class="tarifs-container">
            <!-- Silver Package -->
            <div class="tarif silver">
                <h2>Silver Package</h2>
                <p class="price">7.99 CHF/month</p>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>❌ SEO Optimization</li>
                    <li>❌ Data Analysis</li>
                    <li>❌ Website Customization</li>
                </ul>
                <p>Secure and establish your online presence with a website and continuous protection against threats.</p>
                <a href="contact.php" class="tarif-button">Learn More</a>
            </div>

            <!-- Gold Package -->
            <div class="tarif gold">
                <h2>Gold Package</h2>
                <p class="price">14.99 CHF/month</p>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>✅ SEO Optimization</li>
                    <li>✅ Data Analysis</li>
                    <li>❌ Website Customization</li>
                </ul>
                <p>Enhance your site with SEO optimization and data analysis for better visibility and insights.</p>
                <a href="contact.php" class="tarif-button">Learn More</a>
            </div>

            <!-- Platinum Package -->
            <div class="tarif platinum">
                <h2>Platinum Package</h2>
                <p class="price">49.99 CHF/month</p>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>✅ SEO Optimization</li>
                    <li>✅ Data Analysis</li>
                    <li>✅ Website Customization</li>
                </ul>
                <p>The ultimate package offering full access to website customization for a unique and professional online presence.</p>
                <a href="contact.php" class="tarif-button">Learn More</a>
            </div>
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