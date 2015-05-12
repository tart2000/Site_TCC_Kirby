<?php snippet('head') ?>
<?php snippet('header') ?>
<script src="<?php echo $site->url() ?>/assets/js/svg.min.js"></script>
<script src="<?php echo $site->url() ?>/assets/js/helpers.js"></script>

<div id="lines"></div>

<div id="intro">
    <main class="container bmt">
        <div class="row bmt">
            <div class="col-md-3 col-sm-4  col-sm-offset-1">
                <img src="/assets/images/logo_TCC_M.png" class="img-responsive">
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-6 left bmt">
                <h3><?php echo $page->text()->kirbytext() ?></h3>
                <a href="/a-propos/" class="btn btn-lg btn-theme">En savoir plus...</a>
            </div>
        </div><!-- /row -->
    </main>
</div>



<script src="<?php echo $site->url() ?>/assets/js/lines.js"></script>

<?php snippet('sticky2') ?>


<?php snippet('evenements') ?>

<div id="nymphe" class="bmt">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 center">
                <h1 class="hand">Technologie X  Culture</h1>
            </div>
        </div>
    </div>
</div>

<?php snippet('projets') ?>

<?php snippet('newsletter') ?>

<div class="container">
    <?php snippet('retour') ?>
</div>

    <!-- <?php snippet('projects') ?> -->


<?php snippet('footer') ?>