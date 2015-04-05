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

</main>

<div id="projects" class="grey bmt pt pb">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <h3>Nouveaux projets</h3>
            </div>
            <div class="col-md-4">
                <p><?php echo page('projects')->text() ?></p>
                <a href="/projects" class="btn btn-theme">Voir tous les projets</a>
            </div>
            <?php foreach (page('projects')->children()->limit(2) as $project) : ?>
                <div class="col-md-4 col-sm-6">
                    <h4><?php echo $project->title() ?></h4>
                    <p><?php echo $project->short() ?></p>
                    <a href="<?php echo $project->Url() ?>">En savoir plus</a></br>
                    <a href="<?php echo $project->projectLink() ?>"><?php echo $project->projectLink() ?> <i class="fa fa-external-link"></i></a></br>
                    
                    <?php $thetag=$project->projectTag(); ?>
                    <strong>Editions précédentes</strong></br>
                    <?php foreach (page('retours')->children()->filterBy('tags',$thetag,',') as $retour) : ?>
                        <a href="<?php echo $retour->Url() ?>">Retour sur <?php echo $retour->title() ?></a></br>
                    <?php endforeach ?>
                    <strong>Nouvelles</strong></br>
                    <?php foreach (page('news')->children()->filterBy('tags',$thetag,',') as $retour) : ?>
                        <a href="<?php echo $retour->Url() ?>"><?php echo $retour->title() ?></a></br>
                    <?php endforeach ?>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php snippet('newsletter') ?>

<div class="container">
    <?php snippet('retour') ?>
</div>

    <!-- <?php snippet('projects') ?> -->


<?php snippet('footer') ?>