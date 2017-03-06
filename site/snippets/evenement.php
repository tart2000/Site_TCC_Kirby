<div class="row center bmt">
    <?php foreach(page('retours')->children()->limit(1) as $evenement): ?>
    <h3><a href="<?php echo $evenement->url() ?>"><?php echo $retour->title()->html() ?></a></h3>
        <div class="col-md-5 left">
            <h3 class="nomt"><?php echo $evenement->place() ?> - <?php echo $evenement->dates() ?> <?php echo $retour->year() ?></h3>
            <p><?php echo $evenement->text()->kirbytext() ?></p>
        </div>

        <div class="col-md-7">
            <div class="responsive-video">
                <iframe src="//player.vimeo.com/video/<?php echo $evenement->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="bmt right">
                <a href="<?php echo $evenement->url() ?>" class="btn btn-theme">En savoir plus</a><a href="/retours" class="btn btn-theme">Voir tous les evenements</a>
            </div>
        </div>

    <?php endforeach ?>
</div>
