<?php snippet('head') ?>
<?php snippet('menu') ?>

<?php if ($page->hasImages()) : ?>
	<?php echo $page->images()->first() ?>
<?php endif ?>
  <main class="container">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php if () : ?>

	<?php endif ?>
  </main>

<?php snippet('footer') ?>