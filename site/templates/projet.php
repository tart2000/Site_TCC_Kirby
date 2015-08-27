<?php snippet('head') ?>
<?php snippet('menu') ?>

<?php $thetag=$page->projectTag() ?>
<?php $theTag2 = $page->uid() ?>
<?php $thedate = time() ?>

<div class="container project-page mt">
    <?php foreach(page('news')->children()->filterBy('sticky','1')->filterBy('tags',$thetag,',')->flip() as $new): ?>
    <?php $thisEndDate =  $new->date('','newsEnd') ?>
        <?php if ($thisEndDate > $thedate) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php echo $new->title() ?></strong> 
                    <?php if ($new->newsLink() != '') : ?>
                        <a href="<?php echo $new->newsLink() ?>"><i class="fa fa-external-link sml"></i></a>
                    <?php endif ?>
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

      <!-- Texte de la page -->
      <div class="pt">
        <h3><?php echo $page->short() ?></h3>
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

    <!-- 2ème colonne -->
    <div class="col-md-4">
      <a href="<?php echo $page->projectLink() ?>" target="_blank"><img src="/assets/images/<?php echo $page->projectTag() ?>.png" class="img-responsive pb"></a>
      <!-- icones sociales du projet -->
      <div class="mt">
        <?php if ($page->fb() != '') : ?>
          <a href="<?php echo $page->fb() ?>" target="_blank"><i class="fa fa-2x fa-facebook right mr"></i></a>
        <?php endif ?>
        <?php if ($page->tw() != '') : ?>
          <a href="<?php echo $page->tw() ?>" target="_blank"><i class="fa fa-2x fa-twitter right mr"></i></a>
        <?php endif ?>
        <?php if ($page->projectLink() != '') : ?>
          <a href="<?php echo $page->projectLink() ?>" target="_blank" class="right"><i class="fa fa-external-link fa-2x mr"></i></a>
        <?php endif ?>
      </div>
      <div class="clearfix"></div>
      
      <!-- next edition -->
      <?php if ($page->children()->filterBy('template','edition') != '') : ?>
        <?php $nextDate = $page->children()->filterBy('template','edition')->first()->date('','startDate') ?>
        <?php if ($thedate <= $nextDate) : ?>
        <hr>
          <strong>Édition à venir</strong></br>
          <?php foreach ($page->children()->filterBy('template','edition') as $e) : ?>
            <a href="<?php echo $e->url() ?>" target="_blank" class="yellow"><?php echo $e->title() ?> - <?php echo $e->dateText() ?></a>
          <?php endforeach ?>
        <?php endif ?>
      <?php endif ?>

      <!-- news -->
      <?php $counter = 0; ?>
      <?php foreach (page('news')->children()->filterBy('tags',$thetag,',')->sortBy('newsDate')->limit(5) as $news) : ?>
        <?php $theNewsDate=$news->date('','newsEnd') ?>
          <?php if ($theNewsDate >= $thedate) : ?>
            <?php if ($counter == '0') : ?>
              <hr>
              <strong>Nouvelles</strong></br>
            <?php endif ?>
            <?php $counter++ ?>
            <strong><?php echo $news->title() ?></strong>
            <?php if ($news->newsLink() != '') : ?>
              <a href="<?php echo $news->newsLink() ?>"><i class="fa fa-external-link"></i></a>
            <?php endif ?>
            <?php echo $news->text() ?><br> 
          <?php endif ?>
      <?php endforeach ?>
      
      <!-- events -->
      <?php if (page('evenements')->children()->filterBy('tags',$thetag,',') != '') : ?>
          <?php $count = 0 ?>
          <?php foreach (page('evenements')->children()->filterBy('tags',$thetag,',')->sortBy('startDate')->limit(5) as $event) : ?>
            <?php $eventDate=$event->date('','startDate') ?>
              <?php if ($eventDate >= $thedate) : ?>
                <?php if ($count == 0) : ?>
                  <hr>
                  <strong>Événements à venir</strong></br>
                <?php endif ?>
                <?php $count++ ?>
                <?php echo $event->date('d M','startDate') ?> - <a href="<?php echo $event->Url() ?>"><?php echo $event->title() ?></a></br>
              <?php endif ?>
          <?php endforeach ?>
      <?php endif ?>

      <!-- Postes -->
      <?php if ($page->children()->filterBy('template','poste') != '') : ?>
        <hr>
        <strong>Rejoignez l'équipe !</strong></br>
          <?php foreach ($page->children()->filterBy('template','poste') as $p) : ?>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></br>
          <?php endforeach ?>
      <?php endif ?>

      <!-- retours -->
      <?php if (page('retours')->children()->filterBy('connect',$theTag2,',') != '') : ?>
        <hr>
        <strong>Archives</strong></br>
          <?php foreach (page('retours')->children()->filterBy('connect',$theTag2,',') as $retour) : ?>
              <a href="<?php echo $retour->Url() ?>">Retour sur <?php echo $retour->title() ?></a></br>
              <p><?php echo $retour->dates() ?> <?php echo $retour->year() ?> - <?php echo $retour->participants() ?> participants<br>
              <a href="<?php echo $retour->Url() ?>" class="right">Voir <i class="fa fa-arrow-right"></i></a>
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