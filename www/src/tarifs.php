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
    <h2>Choose your plan</h2>
        <div class="price-row">
            <div class="price-col">
                <h4>Sales ??%</h4>
                <p>Starter</p>
                <h3><span class="Price">7.99</span><span class="month">CHF/ month</span></h3>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>❌ SEO Optimization</li>
                    <li>❌ Data Analysis</li>
                    <li>❌ Website Customization</li>
                </ul>
                <button>Add To Cart</button>
            </div>
            <div class="price-col Sales">
                <h4>Sales 25%</h4>
                <p>Advanced</p>
                <h3>14.99<span class="month"><span class="Price">19.99</span>CHF/ month</span></h3>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>✅ SEO Optimization</li>
                    <li>✅ Data Analysis</li>
                    <li>❌ Website Customization</li>
                </ul>
                <button>Add To Cart</button>
            </div>
            <div class="price-col Premium">
                <h4>Sales ??%</h4>
                <p>Premium</p>
                <h3><span class="Price">49.99</span><span class="month">CHF/ month</span></h3>
                <ul>
                    <li>✅ Site Web</li>
                    <li>✅ Secured Website</li>
                    <li>✅ SEO Optimization</li>
                    <li>✅ Data Analysis</li>
                    <li>✅ Website Customization</li>
                </ul>
                <button>Add To Cart</button>
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