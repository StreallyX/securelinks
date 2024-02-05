<!-- stripe payant : https://buy.stripe.com/8wMcOggIt96H8gMeUU stipe gratos test : https://buy.stripe.com/4gwbKc63P96H7cI8wx -->
<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: error.php");
    }
    header('Location: create-5stock-infos.php');
?>