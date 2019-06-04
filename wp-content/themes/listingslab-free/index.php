<?php include 'pwa/wpObj.php'; ?>
<?php // include 'pwa/inc_console.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'pwa/inc_meta.php'; ?>
    <title><?php echo $wpObj->bloginfo->name; ?></title>
    <?php include 'pwa/inc_style.php'; ?>
  </head>
  <body>
    <div class="listingslab" />
      <noscript><?php echo $wpObj->bloginfo->name; ?></noscript>
      <div id="listingslab-react" />
      <header>
        <?php include 'pwa/inc_header.php'; ?>
      </header>
      <aside>
        <?php include 'pwa/inc_aside.php'; ?>
      </aside>
      <main>
        <?php include 'pwa/inc_main.php'; ?>
      </main>
      
      <footer>
        <?php include 'pwa/inc_footer.php'; ?>
      </footer>
    </div>
  </body>
</html>