<?php snippet('head') ?>
<?php snippet('menu') ?>

<?php $thetag = $page->projectTag() ?>
<?php $thedate = time() ?>


<main class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ($page->images() != '') : ?>
        <?php if ($page->images()->length() > 1) : ?>
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
        <?php else : ?>
        <!-- single image -->
        <div id="project-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo $page->images()->flip()->first()->url() ?>" alt="<?php echo $page->title()->html() ?>">
            </div>
          </div>
        </div>
        <!-- end single image -->
        <?php endif ?>
      <?php endif ?>

      <!-- Texte de la page -->
      <div class="pt">
        <h3><?php echo $page->short() ?></h3>
        <?php echo $page->text()->kirbytext() ?>
      </div>

      <!-- navigation -->
      <div class="col-md-12">
        <nav class="" role="navigation">
          <ul class="pager">
            <?php if($page->hasPrevVisible() && $prev = $page->prev()): ?>
            <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; <?php echo l::get('previous') ?></a></li>
            <?php endif ?>
            <?php if($page->hasNextVisible() && $next = $page->next()): ?>
            <li class="next"><a href="<?php echo $next->url() ?>"><?php echo l::get('next') ?> &rarr;</a></li>
            <?php endif ?>
          </ul>
        </nav>
      </div>
    </div><!-- 1ere colonne -->

    <!-- 2ème colonne -->
    <div class="col-md-4">
      <a href="<?php echo $page->projectLink() ?>" target="_blank"><img src="<?php echo $fname ?>" class="img-responsive pb center-block" style="max-height:250px"></a>
      <!-- icones sociales du projet -->
      <div class="mt right mr">
        <?php if ($page->fb() != '') : ?>
        <button type="button" class="btn btn-round btn-default" aria-label="Facebook link"><a href="<?php echo $page->fb() ?>" target="_blank"><i class="fa fa fa-facebook" aria-hidden="true"></i></a></button>
        <?php endif ?>
        <?php if ($page->tw() != '') : ?>
        <button type="button" class="btn btn-default btn-round" aria-label="Twitter link"><a href="<?php echo $page->tw() ?>" target="_blank"><i class="fa fa fa-twitter" aria-hidden="true"></i></a></button>
      <?php endif ?>
      <?php if ($page->projectLink() != '') : ?>
        <button type="button" class="btn btn-round btn-default" aria-label="External link" style="vertical-align:middle;"><a href="<?php echo $page->projectLink() ?>" target="_blank" class="right"><i class="fa fa-external-link fa" aria-hidden="true"></i> <?php echo l::get('project-page-link') ?></span></a></button>
      <?php endif ?>
      </div>
      <div class="clearfix"></div>

      <!-- next edition -->
      <?php if ($page->children()->filterBy('template','edition') != '') : ?>
        <?php $nextDate = $page->children()->filterBy('template','edition')->first()->date('','startDate') ?>
        <?php if ($thedate <= $nextDate) : ?>
        <hr>
          <strong><?php echo l::get('coming-edition') ?></strong></br>
          <?php foreach ($page->children()->filterBy('template','edition') as $e) : ?>
            <a href="<?php echo $e->url() ?>" target="_blank" class="yellow-bg"><?php echo $e->title() ?> - <?php echo $e->dateText() ?></a>
          <?php endforeach ?>
        <?php endif ?>
      <?php endif ?>

      <!-- Postes -->
      <?php if ($page->children()->filterBy('template','poste') != '') : ?>
        <hr>
        <strong><?php echo l::get('join-team') ?></strong></br>
          <?php foreach ($page->children()->filterBy('template','poste') as $p) : ?>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></br>
          <?php endforeach ?>
      <?php endif ?>

      <!-- editions -->
      <?php if ($page->children()->filterBy('connect',$thetag,',') != '') : ?>
        <hr>
        <strong>Archives</strong></br>
        <?php foreach ($page->children()->filterBy('connect',$thetag,',') as $retour) : ?>
        <a href="<?php echo $retour->url() ?>">Retour sur <?php echo $retour->title() ?></a></br>
        <p><?php echo $retour->dates() ?> <?php echo $retour->year() ?> - <?php echo $retour->participants() ?> participants<br>
        <a href="<?php echo $retour->url() ?>" class="right"><?php echo l::get('see') ?> <i class="fa fa-arrow-right"></i></a>
        <a href="<?php echo $retour->placeLink() ?>" target="_blank"><?php echo $retour->place() ?></a></p>
        <div class="clearfix"></div>
        <?php endforeach ?>
      <?php endif ?>

      <!-- lien vers projet global -->
      <?php if ($page->textLien() != '') : ?>
        <hr>
        <?php echo $page->textLien()->kirbytext() ?>
        <a href="<?php echo $page->lien() ?>" target="_blank" class="btn btn-theme"><?php echo $page->titreLien() ?></a>
      <?php endif ?>

      <!-- tags -->
      <?php if ($page->tags() != '') : ?>
        <hr>
        <b>Tags</b><br>
        <?php foreach ($page->tags()->split(',') as $atag) : ?>
          <div class="atag grey"><?php echo $atag ?></div>
        <?php endforeach ?>
      <?php endif ?>

      <!-- docs -->
      <?php if ($page->hasDocuments()) : ?>
        <hr>
        <b>Documents</b><br>
        <ul>
          <?php foreach ($page->documents() as $doc) : ?>
          <li><a href="<?php echo $doc->url() ?>" download><?php echo $doc->filename() ?> (<?php echo $doc->niceSize() ?>)</a></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <!-- mailchimp integration -->
      <?php if ($page->mailchimp() != '') : ?>
        <?php $listID = $page->mailchimp() ?>
        <!-- <?php snippet('Mailchimp') ?>
        <?php snippet('mailingList', array('listID' => $listID)) ?> -->
      <?php endif ?>

    </div> <!-- end 2ème colonne -->
  </div> <!-- end row -->

</main>

<?php snippet('footer') ?>
