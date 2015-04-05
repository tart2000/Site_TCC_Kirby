<?php snippet('header') ?>

<div id="nymphe">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 center">
                <h1>Bienvenue au techno culture club !</h1>
                <h1>Au croisement de la culture et de la technologie.</h1>
            </div>
        </div>
    </div>
</div>

<?php snippet('sticky') ?>

  <main class="container">

    <div class="row bmt">
        <div class="col-md-3 col-sd-6 col-xs-6 col-md-offset-1">
            <img src="/assets/images/logo_TCC_M.png" class="img-responsive">
        </div>
        <div class="col-md-6 col-md-offset-1 left bmt">
            <h3><?php echo $page->text()->kirbytext() ?></h3>
            <a href="/a-propos/" class="btn btn-lg btn-theme">En savoir plus...</a>
        </div>
    </div><!-- /row -->

    <?php snippet('retour') ?>

      

    <hr>

    <!-- <?php snippet('projects') ?> -->

  </main>

<?php snippet('footer') ?>