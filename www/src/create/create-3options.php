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
              <li><a href="../index.php">Home</a></li>
              <li><a href="tarifs.php">Pricing</a></li>
              <li><a href="example.php">Example</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
           </div>
          </nav>
        
        </header> 
      
        <div class="content">
        <div class="tarifs-container">
            <!-- Free Website Option -->
            <div class="tarif">
                <h2>Get a Free Website</h2>
                <p class="price">$0.00</p>
                <p>Start your online presence with a free website. Choose from a variety of templates to quickly launch your site.</p>
                <p>Cost-effective way to establish an online presence, user-friendly templates for easy setup.</p>
                <input type="checkbox" class="option" data-price="0">
            </div>

            <!-- Website Security Option -->
            <div class="tarif">
                <h2>Secure Your Website</h2>
                <p class="price">$7.99/month</p>
                <p>Continuous protection for your website from insta bots, including regular updates and security monitoring.</p>
                <p>Peace of mind with enhanced security, protection against Instagram bans.</p>
                <input type="checkbox" class="option" data-price="7.99">
            </div>

            <!-- SEO Optimization Option -->
            <div class="tarif">
                <h2>SEO Optimization</h2>
                <p class="price">$2.99/month</p>
                <p>Improve your website's visibility on search engines to attract more traffic and potential customers.</p>
                <p>Higher search engine rankings, increased organic traffic, and improved online visibility.</p>
                <input type="checkbox" class="option" data-price="2.99">
            </div>

            <!-- Data Analysis Option -->
            <div class="tarif">
                <h2>Data Analysis</h2>
                <p class="price">$4.99/month</p>
                <p>Get detailed insights on your website's traffic and user behavior to make informed decisions.</p>
                <p>Better understanding of audience behavior, data-driven strategies for website improvement.</p>
                <input type="checkbox" class="option" data-price="4.99">
            </div>

            <!-- Advanced Website Customization Option -->
            <div class="tarif">
                <h2>Advanced Website Customization</h2>
                <p class="price">$29.99/month</p>
                <p>Tailor your website with advanced customization options for a unique and professional online presence.</p>
                <p>Unique website design, enhanced user experience, alignment with specific brand needs.</p>
                <input type="checkbox" class="option" data-price="29.99">
            </div>
        </div>
        <p>Total Price: <span id="total-price">$0.00</span></p>
        <input type="checkbox" id="conditions-check"> I have read the terms and conditions
        <button id="next-button" disabled>Next</button>
    </div>
    <script>
        const checkboxes = document.querySelectorAll('.option');
        const totalPriceSpan = document.getElementById('total-price');
        const conditionsCheck = document.getElementById('conditions-check');
        const nextButton = document.getElementById('next-button');

        let total = 0;

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                if (checkbox.checked) {
                    total += price;
                } else {
                    total -= price;
                }
                totalPriceSpan.textContent = `$${total.toFixed(2)}`;
                nextButton.disabled = !conditionsCheck.checked || total === 0;
            });
        });

        conditionsCheck.addEventListener('change', () => {
            nextButton.disabled = !conditionsCheck.checked || total === 0;
        });
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