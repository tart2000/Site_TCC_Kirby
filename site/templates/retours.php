<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">

    <?php foreach(page('retours')->children() as $retour): ?>
        <div class="row center">
        <h2><a href="<?php echo $retour->url() ?>">Retour sur <?php echo $retour->title()->html() ?></a></h2>
            <div class="col-md-5 left">
                <?php if($image = $retour->images()->sortBy('sort', 'asc')->first()): ?>
                <a href="<?php echo $retour->url() ?>">
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $retour->title()->html() ?>" class="img-responsive">
                </a>
                <?php endif ?>
                <h3><?php echo $retour->place() ?> - <?php echo $retour->dates() ?> <?php echo $retour->year() ?></h3>
                <p><?php echo $retour->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $retour->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <hr>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>