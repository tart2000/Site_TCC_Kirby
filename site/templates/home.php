<?php snippet('head') ?>
<?php snippet('menu') ?>

<div id="lines"></div>

<div id="intro">
    <main class="container bmt">
        <div class="row bmt">
            <div class="col-md-3 col-sm-4  col-sm-offset-1">
                <img src="/assets/images/logo_TCC_M.png" class="img-responsive">
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-6 left bmt">
                <h3><?php echo $page->text()->kirbytext() ?></h3>
                <a href="/a-propos/" class="btn btn-theme"><?php echo l::get('plus') ?></a>
            </div>
        </div><!-- /row -->
    </main>
</div>



<script src="<?php echo $site->url() ?>/assets/js/lines.js"></script>

<?php snippet('sticky2') ?>

<?php snippet('evenements') ?> 

<?php snippet('projets_carousel') ?>

<?php snippet('newsletter') ?>

<!--
<div class="container">
    <?php snippet('retour') ?>
</div>
-->

<script src="<?php echo $site->url() ?>/assets/js/svg.min.js"></script>
<script src="<?php echo $site->url() ?>/assets/js/helpers.js"></script>

<?php snippet('footer') ?>