<?php
  require_once 'assets/layouts.php';
  $_SESSION['webheader'] = 'this is a template';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php phpLayout('head')?>
  </head>
  <body>
    <main>
        This is just a template
    </main>
    <footer>
      <?php phpLayout('footer')?>
    </footer>
    <?php phpLayout('library')?>
  </body>
</html>
<?php phpLayout('signature')?>
