<?php
  $wpObj = new stdClass();
  include 'pwa/inc_create_obj.php';
  $wpObj->nav = get_terms('nav_menu');
?>
<pre><?php 
          // var_dump($wpObj->queriedObj->post_title)
          // foreach($wpObj->nav as $menu){
          //   echo $menu->name . " n";
          // }
?></pre>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="red" />
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="/png/icon.png">
    <link rel="stylesheet" href="<?php echo $wpObj->bloginfo->stylesheet_directory; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $wpObj->bloginfo->stylesheet_directory; ?>/style.css">
    <title><?php echo $wpObj->bloginfo->name; ?></title>
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