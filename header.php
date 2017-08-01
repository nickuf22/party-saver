<!doctype html>
<html lang="en">

  <head>
      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php bloginfo('title') ?></title>

      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700,800" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">

      <?php wp_head(); ?>

  </head>

  <body>
<?php include_once("analyticstracking.php") ?>
    <header>

        <a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>images/partysaverlogo.svg" alt="Party Saver Logo" title="Party Saver Logo" width="200" height="" /></a>

        <nav class="stroke">
                <ul>

                    <?php wp_nav_menu(); ?>

                </ul>

        </nav>

    </header>
