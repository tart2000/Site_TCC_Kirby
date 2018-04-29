<?php snippet('head') ?>
<?php snippet('menu') ?>

<main class="container bmt">
  <?php snippet('breadcrumb') ?>
  <div class="text lg">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </div>

  <hr>
  <?php foreach ($page->children()->visible() as $service) : ?>
  <div class="row">
    <div class="col-md-4 col-sm-6 pb">
      <!-- image -->
      <div>
        <a href="<?php echo $service->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $service->projectTag() ?>.jpg" class="img-responsive"></a>
      </div>
      <a href="<?php echo $service->url() ?>"><div class="project-header-s center">
          <h1><?php echo $service->title() ?></h1>
      </div></a>

    </div>
    <div class="col-md-8 col-sm-6">
        <div class="text-proj">
            <h4><?php echo $service->short() ?></h4>
            <?php echo $service->text()->excerpt(400) ?>
            <div class="clearfix"></div>
            <a href="<?php echo $service->url() ?>" class="underline"><?php echo l::get('see') ?> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <hr>
    </div>
  </div>
  <?php endforeach ?>
</main>

<?php snippet('footer') ?>
