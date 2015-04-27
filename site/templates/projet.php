<?php snippet('head') ?>
<div class="project-header" style="background-image: url('../assets/images/banner-<?php echo $page->projectTag() ?>.jpg');">
    <div class="container center">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1><?php echo $page->title()->html() ?></h1>
          <h3><?php echo $page->short() ?></h3>
        </div>
      </div>
    </div>
</div>

<div class="back-link">
  <a href="<?php echo $site->url() ?>" title="Retour"><img src="<?php echo $site->url() ?>/assets/images/logo_TCC_sign_S.png" class="img-responsive"></a>
</div>

<?php $thetag=$page->projectTag(); ?>
<?php $theTag2 = $page->dirname(); ?>
<?php $thedate = strtotime(date("Y-m-d")); ?>

<div class="container mt">
    <?php foreach(page('news')->children()->filterBy('sticky','1')->filterBy('tags',$thetag,',')->flip() as $new): ?>
    <?php $thisEndDate =  $new->date('','newsEnd') ?>
        <?php if ($thisEndDate > $thedate) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php echo $new->title() ?></strong> 
                    <?php if ($new->newsLink() != '') : ?>
                        <a href="<?php echo $new->newsLink() ?>"><i class="fa fa-external-link sml"></i></a>
                    <?php endif ?><br>
                <?php echo $new->text() ?>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</div>


<main class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ($page->images() != '') : ?>
        <!-- Carousel -->
        <div id="project-carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php $first = $page->images()->flip()->first() ?>
            <?php $index0 = 0 ?>
            <?php foreach($page->images()->flip() as $image): ?>
            <li data-target="#project-carousel" data-slide-to="<?php echo $index0 ?>" <?php if($image == $first) echo 'class="active"' ?>></li>
            <?php $index0++; ?>
            <?php endforeach ?>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php $first = $page->images()->flip()->first() ?>
            <?php foreach($page->images()->flip() as $image): ?>
              <div class="item <?php if($image == $first) echo 'active' ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
              </div>
            <?php endforeach ?>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#project-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#project-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- end carousel -->
      <?php endif ?>

      <div class="pt lg">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

    <!-- 2ème colonne -->
    <div class="col-md-4">
      <a href="<?php echo $page->projectLink() ?>" target="_blank"><img src="/assets/images/<?php echo $page->projectTag() ?>.png" class="img-responsive pb"></a>
      <a href="<?php echo $page->projectLink() ?>" target="_blank" class="right">Site du projet <i class="fa fa-external-link"></i></a>
      <div class="clearfix"></div>
      
      <?php if (page('retours')->children()->filterBy('connect',$theTag2,',') != '') : ?>
        <hr>
        <strong>Editions précédentes</strong></br>
          <?php foreach (page('retours')->children()->filterBy('connect',$theTag2,',') as $retour) : ?>
              <a href="<?php echo $retour->Url() ?>">Retour sur <?php echo $retour->title() ?></a></br>
              <p><?php echo $retour->dates() ?> <?php echo $retour->year() ?> - <?php echo $retour->participants() ?> participants<br>
              <a href="<?php echo $retour->placeLink() ?>" target="_blank"><?php echo $retour->place() ?></a></p>
              <a href="<?php echo $retour->Url() ?>" class="right">Voir <i class="fa fa-arrow-right"></i></a>
              <div class="clearfix"></div>
          <?php endforeach ?>
      <?php endif ?> 

      <?php if (page('news')->children()->filterBy('tags',$thetag,',') != '') : ?>
        <hr>
        <strong>Nouvelles</strong></br>
          <?php foreach (page('news')->children()->filterBy('tags',$thetag,',')->sortBy('newsDate')->limit(5) as $news) : ?>
            <?php $theNewsDate=$news->date('','newsDate') ?>
              <?php if ($theNewsDate >= $thedate) : ?>
                <a href="<?php echo $news->Url() ?>"><?php echo $news->title() ?></a></br>
              <?php endif ?>
          <?php endforeach ?>
      <?php endif ?>
      
      <?php if (page('evenements')->children()->filterBy('tags',$thetag,',') != '') : ?>
        <hr>
        <strong>Prochains événements</strong></br>
          <?php foreach (page('evenements')->children()->filterBy('tags',$thetag,',')->sortBy('startDate')->limit(5) as $event) : ?>
            <?php $eventDate=$event->date('','startDate') ?>
              <?php if ($eventDate >= $thedate) : ?>
                <?php echo $event->date('d M','startDate') ?> - <a href="<?php echo $event->Url() ?>"><?php echo $event->title() ?></a></br>
              <?php endif ?>
          <?php endforeach ?>
      <?php endif ?>

      <?php if ($page->tags() != '') : ?>
        <hr>
        <b>Tags:</b><br> 
        <?php foreach ($page->tags()->split(',') as $atag) : ?>
          <div class="atag grey"><?php echo $atag ?></div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
  <!-- end 2ème colonne -->

    <!-- navigation -->
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">
          <nav class="" role="navigation">
            <ul class="pager">
              <?php if($prev = $page->prev()): ?>
              <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; Précédent</a></li>
              <?php endif ?>
              <?php if($next = $page->next()): ?>
              <li class="next"><a href="<?php echo $next->url() ?>">Suivant &rarr;</a></li>
              <?php endif ?>
            </ul>
          </nav>
      </div>
    </div>

</main>

<?php snippet('footer') ?>