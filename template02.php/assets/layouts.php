<?php
function phpLayout($section){
  switch($section){
    case 'head':
      $_SESSION['webtitle'] = str_replace('.php','',basename(htmlspecialchars($_SERVER['PHP_SELF'])));
      echo "
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title>" . $_SESSION['webtitle'] . " | " . $_SESSION['webheader'] . "</title>
        <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
        <script language=\"javascript\" src=\"assets/js/script.js\" defer></script>
        <script language=\"javascript\" src=\"assets/js/interactive.js\" defer></script>
        <script language=\"javascript\" src=\"assets/js/animation.js\" defer></script>
        ";
      break;

    case 'nav':

      break;


    case 'main':
      break;

    case 'footer':
      $year = date('Y', gettimeofday(true));
      echo "
      <small>&copy;$year Michael James Turiano Albatana</small>
      ";
      break;

    case 'library':
      echo "<script language=\"javascript\" src=\"../../dev-modules/greensock-js/greensock-js-1.20.3/src/minified/TweenMax.min.js\"></script>";
      break;

    case 'signature':
      echo file_get_contents('signature');
      break;

    default:
      break;
  }
}
?>

