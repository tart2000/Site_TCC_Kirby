<?php snippet('head') ?>
<?php snippet('menu') ?>
<main class="container bmt">
  <div class="text lg">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </div>

  <hr>
  <?php foreach ($page->children()->visible() as $project) : ?>
  <div class="row">
    <div class="col-md-4 col-sm-6 pb">
      <!-- image -->
      <div>
        <a href="<?php echo $project->url() ?>">
          <?php if($project->projectTag() != ''): ?>
            <img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $project->projectTag() ?>.jpg" class="img-responsive">
          <?php else : ?>
            <img src="<?php echo $project->images()->flip()->first()->url() ?>" class="img-responsive">
          <?php endif ?>
        </a>
      </div>
      <a href="<?php echo $project->url() ?>"><div class="project-header-s left">
        <h1><?php echo $project->title() ?></h1>
      </div></a>
    </div>
    <div class="col-md-8 col-sm-6">
      <div class="text-proj">
        <h4><?php echo $project->short() ?></h4>
        <?php echo $project->text()->excerpt(200) ?>
        <div class="clearfix"></div>
        <a href="<?php echo $project->url() ?>" class="right btn btn-theme"><?php echo l::get('see') ?> <i class="fa fa-arrow-right"></i></a>
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
