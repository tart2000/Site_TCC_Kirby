<?php snippet('header') ?>

  <main class="container">

    <?php snippet('retour') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <!-- <?php snippet('projects') ?> -->

  </main>

<?php snippet('footer') ?>