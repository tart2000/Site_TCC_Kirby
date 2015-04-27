<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">
        <div class="row center">
            <h2><a href="<?php echo $page->url() ?>">Retour sur <?php echo $page->title()->html() ?></a></h2>
        </div>
        <div class="row center">
            <div class="col-md-5 left">
                <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
                <a href="<?php echo $page->url() ?>">
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
                </a>
                <?php endif ?>
                <h3><?php echo $page->place() ?> - <?php echo $page->dates() ?> <?php echo $page->year() ?></h3>
                <em><?php echo $page->participants() ?> participants</em>
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
        <hr>
        <div class="row center">
            <h2>Partenaires</h2>
        </div>
        <div class="row pb">
            <?php foreach ($page->children('partenaires')->sortBy('category') as $p) :?>
                <?php $size = html($p->superWidth()) ?>
                <?php $size2 = $size * 2 ; ?>
                <div class="col-md-<?php echo $size2 ?> partner">
                    <?php if ($p->images() != '') : ?>
                        <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                    <?php else : ?>
                        <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>

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