<?php
if (isset($_GET['link']) && ctype_digit($_GET['link'])) {
  $linkID = $_GET['link'];
  switch ($linkID) {
    case 1:
      header("Location: h");
      break;
    case 2:
      header("Location: jrzthgrfwe");
      break;
    case 3:
      header("Location: td");
      break;
    case 4:
      header("Location: s");
      break;
    case 5:
      header("Location: s");
      break;
    case 6:
      header("Location: s");
      break;
    case 7:
      header("Location: s");
      break;
    case 8:
      header("Location: s");
      break;
    case 9:
      header("Location: s");
      break;
    case 10:
      header("Location: s");
      break;
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
