<div id="sticky">
    <div class="container center">
        <?php foreach(page('news')->children()->filterBy('sticky','1')->limit(1) as $new): ?>
            <h4>Annonce : <?php echo $new->title() ?> 
                <?php if ($new->newsLink() != '') : ?>
                <a href="<?php echo $new->newsLink() ?>"><i class="fa fa-external-link sml"></i></a>
                <?php endif ?>
            </h4>
            <p><?php echo $new->text() ?></p>
        <?php endforeach ?>
    </div>
</div>