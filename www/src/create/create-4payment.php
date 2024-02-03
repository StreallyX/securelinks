<!-- stripe payant : https://buy.stripe.com/8wMcOggIt96H8gMeUU stipe gratos test : https://buy.stripe.com/4gwbKc63P96H7cI8wx -->
<?php
    if ($_SESSION['option1'] === false && $_SESSION['option2'] === false && $_SESSION['option3'] === false) {
        header('Location: create-5stock-infos.php');
        exit;
    }
?>
