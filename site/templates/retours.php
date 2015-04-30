<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">

    <?php foreach(page('retours')->children() as $retour): ?>
        <div class="row center">
        <h2><a href="<?php echo $retour->url() ?>">Retour sur <?php echo $retour->title()->html() ?></a></h2>
            <div class="col-md-5 left">
                <h3  class="nomt"><?php echo $retour->place() ?> - <?php echo $retour->dates() ?> <?php echo $retour->year() ?></h3>
                <p><?php echo $retour->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $retour->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="bmt right">
                    <a href="<?php echo $retour->url() ?>" class="btn btn-theme">Lire en entier</a>
                </div>
            </div>
        </div>

        <hr>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>