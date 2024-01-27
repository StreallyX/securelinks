<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="../logo.png" alt="SecureLinks Logo" class="logo">
        </div>
        <div class="title-and-links">
            <div class="title-container">
                <h1>SecureLinks</h1>
            </div>
            <nav class="nav-links">
                <ul>
                    <li class="nav-item"><a href="../index.php" class="nav-link">Page d'accueil</a></li>
                    <li class="nav-item"><a href="tarifs.php" class="nav-link">Tarifs</a></li>
                    <li class="nav-item"><a href="exemple.php" class="nav-link">Exemple</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="form-container">
        <form id="contactForm">
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Votre Demande</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>

