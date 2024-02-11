<?php
if (isset($_GET['link']) && ctype_digit($_GET['link'])) {
  $linkID = $_GET['link'];
  switch ($linkID) {
    default:
      // Redirection par défaut ou gestion d'erreur
      header("Location: error.php");
      break;
  }
} else {
  // Si 'link' n'est pas défini ou n'est pas un nombre
  header("Location: error.php");
}
?>
