<?php snippet('head') ?>
<?php snippet('menu') ?>

<main class="container bmt">
  <?php snippet('breadcrumb') ?>
  <div class="text lg">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
  </div>

  <hr>

  <!-- list of jobs -->
  <?php $jobs = $page
    ->children()
    ->visible()
    ->filter(function($child) {
      return $child->date(null, 'startdate') <= time() && $child->date(null, 'enddate') >= time();
    });
   ?>
  <?php foreach ($jobs as $subpage) : ?>
  <div class="row">
    <div class="col-md-12">
        <h3><?= $subpage->title() ?></h3>
        <!-- metainfo -->
        <ul class="list-inline">
          <li><i class="fa fa-clock-o"></i> <?= $subpage->position_type()->text()->lower() ?></li>
          <li><i class="fa fa-hourglass-end"></i> <?= $subpage->enddate()->text() ?></li>
          <li><i class="fa fa-map-marker"></i> <?= $subpage->location()->text() ?></li>
        </ul> <!-- end metainfo -->
        <!-- short description of post -->
        <p><?= $subpage->short() ?></p>
        <a href="<?= $subpage->url() ?>" class="underline"><?php echo l::get('see') ?> <i class="fa fa-arrow-right"></i></a>
        <hr>
    </div>
  </div>
  <?php endforeach ?>
</main>

<?php snippet('footer') ?>
