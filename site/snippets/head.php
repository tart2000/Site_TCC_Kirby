<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.vertical-tabs.min.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="<?php echo $site->url() ?>/assets/js/jquery.countdown.min.js"></script>
  <link rel="icon" type="image/ico" href="/assets/images/favicon.ico" />
  <?php echo css('assets/css/style.css') ?>

</head>

<body>