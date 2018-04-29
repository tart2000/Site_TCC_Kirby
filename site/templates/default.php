<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container">
    <?php snippet('breadcrumb') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
