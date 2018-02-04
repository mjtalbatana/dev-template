<?php
  require_once 'assets/layouts.php';
  $_SESSION['webheader'] = 'this is a template';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php fn_layout_head()?>
  </head>
  <body>
    <main>
        This is just a template
    </main>
    <footer>
      <?php fn_layout_footer()?>
    </footer>
    <?php fn_layout_libraries()?>
  </body>
</html>
<?php fn_layout_signature()?>
