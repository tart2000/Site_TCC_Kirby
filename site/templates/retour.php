<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">

        <div class="row center">
        <h2><a href="<?php echo $page->url() ?>">Retour sur <?php echo $page->title()->html() ?></a></h2>
            <div class="col-md-5 left">
                <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
                <a href="<?php echo $page->url() ?>">
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
                </a>
                <?php endif ?>
                <h3><?php echo $page->place() ?> - <?php echo $page->dates() ?> <?php echo $page->year() ?></h3>
                <p><?php echo $page->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $page->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $counter=0; foreach($page->images()->sortBy('sort', 'asc') as $image): if($counter++ == 0) continue; ?>
                <div class="col-md-3 col-xs-6">
                    <a href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive mt mb"></a>
                </div>
            <?php endforeach ?>
        </div>
        <hr>

  </main>

  <nav class="nextprev cf" role="navigation">
    <?php if($prev = $page->prevVisible()): ?>
    <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
    <?php endif ?>
    <?php if($next = $page->nextVisible()): ?>
    <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
    <?php endif ?>
  </nav>

<?php snippet('footer') ?>