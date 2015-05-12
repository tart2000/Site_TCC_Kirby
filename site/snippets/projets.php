<div class="container">
  <div clas="row">
    <div class="col-md-12 center">
        <a href="/projets"><h2><?php echo page('projets')->title() ?></h2></a>
    </div>
    <div class="col-md-12 bmb">
        <div class="lg"><?php echo page('projets')->text()->kirbytext() ?></div>
    </div>
  </div>
</div>
<div id="carousel-projects" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $counter = 0 ?>
    <?php foreach (page('projets')->children()->visible() as $project) : ?>
      <li data-target="#carousel-projects" data-slide-to="<?php echo $counter ?>" class="<?php e($counter==0, 'active') ?>"></li>
    <?php $counter++ ?>
    <?php endforeach ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $counter = 0 ?>
    <?php foreach (page('projets')->children()->visible() as $project) : ?>
    <div class="item <?php e($counter==0, 'active') ?>" style="background: url('<?php echo $site->url() ?>/assets/images/banner-<?php echo $project->projectTag() ?>.jpg') no-repeat left center; background-size: cover;">
      <div class="carousel-caption bpb">
        <h1><?php echo $project->title() ?></h1>
        <h3><?php echo $project->short() ?></h3>
        <a href="<?php echo $project->url() ?>" class="btn btn-theme">En savoir plus</a>
      </div>
    </div>
    <?php $counter++ ?>
    <?php endforeach ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-projects" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-projects" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  


