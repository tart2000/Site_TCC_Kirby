<div class="row center mt">
    <?php foreach(page('retours')->children()->limit(1) as $retour): ?>
    <h2><a href="<?php echo $retour->url() ?>">Retour sur <?php echo $retour->title()->html() ?></a></h2>
        <div class="col-md-5 left">
            <h3><?php echo $retour->place() ?> - <?php echo $retour->dates() ?> <?php echo $retour->year() ?></h3>
            <p><?php echo $retour->text()->kirbytext() ?></p>
        </div>

        <div class="col-md-7">
            <div class="responsive-video">
                <iframe src="//player.vimeo.com/video/<?php echo $retour->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="bmt right">
                <a href="<?php echo $retour->url() ?>" class="btn btn-theme">En savoir plus</a><a href="/retours" class="btn btn-theme">Voir tous les retours</a>
            </div>
        </div>

    <?php endforeach ?>
</div>