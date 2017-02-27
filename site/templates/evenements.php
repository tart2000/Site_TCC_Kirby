<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container bmt">

    <?php foreach(page('evenements')->children() as $evenement): ?>
        <div class="row center">
        <h2><a href="<?php echo $evenement->url() ?>"><?php echo $evenement->title()->html() ?></a></h2>
            <div class="col-md-5 left">
                <h3  class="nomt"><?php echo $evenement->place() ?> - <?php echo $evenement->dates() ?> <?php echo $evenement->year() ?></h3>
                <p><?php echo $evenement->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $evenement->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="bmt right">
                    <a href="<?php echo $evenement->url() ?>" class="btn btn-theme">Lire en entier</a>
                </div>
            </div>
        </div>

        <hr>

    <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
