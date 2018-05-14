<?php
  require_once 'assets/layouts.php';
  $_SESSION['webheader'] = 'this is a template';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php phpLayout('head')?>
  </head>

    <?php phpLayout('body')?>

  <body id="body-index" onload="jsOnLoad()">
    <nav>
      <?php phpLayout('nav')?>
    </nav>
    <main>
      <?php phpLayout('main')?>
    </main>
    <footer>
      <?php phpLayout('footer')?>
    </footer>
    <?php phpLayout('library')?>
  </body>
</html>
<?php phpLayout('signature')?>
