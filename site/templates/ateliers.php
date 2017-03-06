<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container bmt">

    <div class="text lg">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>
    <div class="row">
    <?php foreach ($page->children()->visible() as $atelier) : ?>
        <div class="col-md-4 col-sm-6 pb">
            <div>
                <a href="<?php echo $atelier->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $atelier->projectTag() ?>.jpg" class="img-responsive"></a>
            </div>
            <div class="project-header-s center">
                <h1><?php echo $atelier->title() ?></h1>
            </div>

        </div>
        <div class="col-md-8 col-sm-6">
            <div class="text-proj">
                <h4><?php echo $atelier->short() ?></h4>
                <?php echo $atelier->text()->excerpt(400) ?>
                <div class="clearfix"></div>
                <a href="<?php echo $atelier->url() ?>" class="right btn btn-theme"><?php echo l::get('see') ?> <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <hr>
        </div>
    <?php endforeach ?>
    </div>

  </main>

<?php snippet('footer') ?>
