<?php snippet('head') ?>
<?php snippet('menu') ?>

<div id="lines"></div>

<div id="intro">
  <!-- Logo and tagline -->
  <main class="container bmt">
    <div class="row bmt">
      <div class="col-md-3 col-sm-4 col-sm-offset-1">
        <div class="hidden-xs">
          <img src="/assets/images/logo_TCC_M.png" class="img-responsive">
        </div>
        <div class="visible-xs">
          <img src="/assets/images/logo_TCC_S.png" class="img-responsive center">
        </div>
      </div>
      <div class="col-md-6 col-md-offset-1 col-sm-6 left bmt">
        <h3><?php echo $page->text()->kirbytext() ?></h3>
        <a href="/a-propos/" class="underline"><?php echo l::get('plus') ?></a>
      </div>
    </div><!-- /row -->
  </main>

<!-- 3 features (icons + txt) -->
<div id="features" class="bmt">
  <div class="center">
  	<h1><?php echo $page->featurestitle()->text() ?></h1>
  </div>

  <div class="row bmt">
    <div class="visible-md visible-lg col-md-3"></div>
    <?php foreach($pages->visible()->limit(3) as $p): ?>
    <a class="click-div" href="<?php echo $p->url() ?>">
      <div class="col-xs-12 col-sm-4 col-md-2 center feat-div glow">
        <?php $images = $p->images();
          $pngimg = $images->findBy('extension','png');
          if($pngimg):
         ?>
        <img src="<?php echo $pngimg->url() ?>" height="100" />
        <?php endif ?>
        <h3><?php echo $p->title()->kirbytext() ?></h3>
        <p><?php echo $p->subtitle()->kirbytext() ?></p>
      </div>
    </a>
    <?php endforeach ?>
    <div class="visible-md visible-lg col-md-3"></div>
  </div><!-- /row -->
</div>

</div>

<div class="gray-block">
  <?php snippet('services_carousel') ?>
</div>

<div class="gray-block">
  <?php snippet('projets_carousel') ?>
</div>

<div class="gray-block">
  <?php snippet('ressources_carousel') ?>
</div>

<div class="yellow-block">
  <?php snippet('newsletter') ?>
</div>

<?php snippet('footer') ?>
