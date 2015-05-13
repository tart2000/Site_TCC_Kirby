<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container bmt">

    <div class="text lg">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>
    <div class="row">
    <?php foreach ($page->children() as $project) : ?>
        <div class="col-md-4 col-sm-6 pb">
            <div>
                <a href="<?php echo $project->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $project->projectTag() ?>.jpg" class="img-responsive"></a>
            </div>
            <div class="project-header-s center">
                <h1><?php echo $project->title() ?></h1>
            </div>

        </div>
        <div class="col-md-8 col-sm-6">
            <div class="text-proj">
                <h4><?php echo $project->short() ?></h4>
                <?php echo $project->text()->excerpt(400) ?>
                <div class="clearfix"></div>
                <a href="<?php echo $project->url() ?>" class="right btn btn-theme">Voir <i class="fa fa-arrow-right"></i></a>
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