<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container">
    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
      <?php if ($page->hasImages()) : ?>
        <div class="center">
          <img src="<?php echo $page->images()->first()->url() ?>" class="img-responsive">
        </div>
      <?php endif ?>
      </div>
      <div class="col-sm-8 col-sm-offset-2">
        <div class="flag">
              <a href="<?php echo $page->parent()->url() ?>">FR</a>
            </div>
	      <h1><?php echo $page->title()->html() ?></h1>
	      <div class="lg">
	      	<?php echo $page->text()->kirbytext() ?>
	      </div>
  		</div>
    </div>

    <?php if ($page->ctatext() != '') : ?>
    	<div class="center">
    		<a class="btn btn-lg btn-theme" href="<?php echo $page->ctalink() ?>" target="_blank"><?php echo $page->ctatext() ?></a>
		</div>
	<?php endif ?>
  </main>

<?php snippet('footer') ?>