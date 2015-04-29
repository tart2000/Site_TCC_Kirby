<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">
        <div class="row center">
            <h2><a href="<?php echo $page->url() ?>">Retour sur <?php echo $page->title()->html() ?></a></h2>
        </div>
        <div class="row center">
            <div class="col-md-5 left">
                <h3><?php echo $page->place() ?> - <?php echo $page->dates() ?> <?php echo $page->year() ?></h3>
                <em><?php echo $page->participants() ?> participants</em> - 
                <em><?php echo $page->nbprojets() ?> projets</em>
                <p><?php echo $page->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $page->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="bmt">
                    <a href="<?php echo $site->url()?>/projets/<?php echo $page->connect() ?>" class="btn btn-theme right">En savoir plus sur ce projet</a>
                </div>
            </div>
        </div>

        <!-- Images -->
        <?php if ($page->images() != '') : ?>
        <div class="row">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                <div class="col-md-3 col-xs-6">
                    <a href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive mt mb"></a>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>

        <!-- Partenaires -->
        <?php snippet('partners') ?>
  </main>
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

<?php snippet('footer') ?>