<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">
        <div class="row center">
            <h2><a href="<?php echo $page->url() ?>">Retour sur <?php echo $page->title()->html() ?></a></h2>
        </div>
        <div class="row center">
            <div class="col-md-5 left">
                <h3 class="nomt"><?php echo $page->place() ?> - <?php echo $page->dates() ?> <?php echo $page->year() ?></h3>
                <em><?php echo $page->participants() ?> participants</em> - 
                <em><?php echo $page->nbprojets() ?> 
                  <?php if ($page->projectLink() != '' ) : ?>
                    <a href="<?php echo $page->projectLink ?>" target="_blank"> projets</a>
                  <?php else : ?>
                    projets
                  <?php endif ?>

                </em>
                <p><?php echo $page->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $page->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="bmt">
                    <?php $link = $page->connect()?>
                    <a href="<?php echo $site->url()?>/projets/<?php echo $link ?>" class="btn btn-theme right">En savoir plus sur ce projet</a>
                </div>
            </div>
        </div>

        <!-- Images -->
        <?php if ($page->images() != '') : ?>
          <div id="links" class="row">
            <?php foreach ($page->images()->sortBy('sort', 'asc') as $image) : ?>
            <div class="col-md-3 col-xs-6">
              <a href="<?php echo $image->url() ?>" class="carousel-image" data-gallery>
                <img src="<?php echo $image->url() ?>" class="img-responsive mt mb">
              </a>  
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

<!-- gallery --> 
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>


<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>




<?php snippet('footer') ?>