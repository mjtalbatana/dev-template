<?php
function fn_layout_head(){
  $_SESSION['webtitle'] = str_replace('.php','',basename(htmlspecialchars($_SERVER['PHP_SELF'])));
  $string = "
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
  echo $string;
  }

function fn_layout_main(){

}

function fn_layout_footer(){
  $v_year = date('Y', gettimeofday(true));
  echo "
  <small>&copy;$v_year Michael James Turiano Albatana</small>
  ";
}

function fn_layout_libraries(){
  echo "<script language=\"javascript\" src=\"../../dev-modules/greensock-js/greensock-js-1.20.3/src/minified/TweenMax.min.js\"></script>";
}

function fn_layout_signature(){

  $string = file_get_contents()
  "
  <!-- Web Template (integrated) version 1.8 20180202 =================+-->
  <!-- Developer: Michael James Turiano Albatana                       |-->
  <!-- Language: HTML, CSS, SASS/SCSS, JS, PHP                         |-->
  <!-- Libraries/API: GSAP.js                                          |-->
  <!-- IDE/Editor/Debugger: VSCode+Extension+Debugger, Chrome DevTools |-->
  <!-- Repositories/Hosts: Git, GitHub, GitLab, Heroku                 |-->
  <!-- Coding Analytics: Codealike, WakaTime                           |-->
  <!-- Email: mjtalbatana@gmail.com                                    |-->
  <!-- Github: https://github.com/mjtalbatana                          |-->
  <!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana               |-->
  <!-- END OF SIGNATURE ===============================================+-->
  ";
  echo $string;
}

function fn_layout_important_stuff(){
  echo "

  ";
}
?>
