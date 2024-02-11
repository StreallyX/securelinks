<!-- stripe payant : https://buy.stripe.com/8wMcOggIt96H8gMeUU stipe gratos test : https://buy.stripe.com/4gwbKc63P96H7cI8wx -->
<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: error.php");
    }
    else{
        session_start();

        $_SESSION['package'] = $_POST['selectedPackage'];
        var_dump($_SESSION['package']);

        if($_SESSION['package'] === "selectSilver"){

            header('Location: create-5stock-infos.php');
        }
        else if($_SESSION['package'] === "selectGold"){

            header('Location: create-5stock-infos.php');

        }else if($_SESSION['package'] === "selectPlatinum"){

            header('Location: create-5stock-infos.php');

        }else{
            header("Location: error.php");
        }

    }
    
?>