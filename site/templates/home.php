<?php snippet('head') ?>
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

<div id="projects" class="bmt pt pb">
    <div class="container">
        <div clas="row">
            <div class="col-md-12">
                <h3>Projets</h3>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 mb">
                <p><?php echo page('projets')->text() ?></p>
                <!-- <a href="/projets" class="btn btn-theme">Voir tous les projets</a> -->
            </div>
            <div class="col-md-2 col-xs-4">
                <ul class="nav nav-tabs tabs-left">
                    <?php $first = page('projets')->children()->first() ?>
                    <?php foreach (page('projets')->children() as $project) : ?>
                    <li <?php if($project == $first) echo 'class="active"' ?>>
                        <a href="#<?php echo $project->projectTag() ?>" data-toggle="tab"><?php echo $project->title() ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="col-md-6 col-xs-8">
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php foreach (page('projets')->children() as $project) : ?>
                        <div class="tab-pane  <?php if($project == $first) echo 'active' ?>" id="<?php echo $project->projectTag() ?>">
                            <h4><?php echo $project->title() ?></h4>
                            <p><?php echo $project->short() ?></p>
                            <a href="<?php echo $project->Url() ?>" class="btn btn-theme">En savoir plus</a>
                            <?php echo $key ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>  
        </div>
    </div>
</div>

<?php snippet('newsletter') ?>

<div class="container">
    <?php snippet('retour') ?>
</div>

    <!-- <?php snippet('projects') ?> -->


<?php snippet('footer') ?>