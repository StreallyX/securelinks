<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $seveur = "localhost";
    $utilisateur = "root"; // Nom d'utilisateur de la base de données
    $motDePasse = "root";  // Mot de passe de la base de données
    $baseDeDonnees = "db_securelinks"; // Nom de la base de données

    // Établir une connexion à la base de données
    $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    // Vérifier la connexion
    if (!$connexion) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    } else {
        echo "Connexion réussie à la base de données!";
    }

    // Requête SQL
    $sql = "INSERT INTO t_contact (idContact, conSurname, conLastname, conMail, conMessage) VALUES (NULL, '{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}', '{$_POST['message']}');";

    // Exécution de la requête SQL
    $resultat = mysqli_query($connexion, $sql);



    // ... Vous pouvez maintenant exécuter des requêtes SQL et interagir avec la base de données.

    // Pour fermer la connexion lorsque vous avez fini, utilisez :
    mysqli_close($connexion);

    header("Location: contact.php");

}


?>