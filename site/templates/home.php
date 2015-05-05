<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="intro">
    <main class="container bmt">
        <div class="row bmt">
            <div class="col-md-3 col-sm-4  col-sm-offset-1">
                <img src="/assets/images/logo_TCC_M.png" class="img-responsive">
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-6 left bmt white-bg">
                <h3><?php echo $page->text()->kirbytext() ?></h3>
                <a href="/a-propos/" class="btn btn-lg btn-theme">En savoir plus...</a>
            </div>
        </div><!-- /row -->
    </main>
</div>



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

<div id="projects" class="bmt pt pb">
    <div class="container">
        <div clas="row">
            <div class="col-md-12 center">
                <a href="/projets"><h2>Projets</h2></a>
            </div>
            <div class="col-md-12 bmb">
                <p class="lg"><?php echo page('projets')->text() ?></p>
            </div>
            <div class="col-md-3 col-xs-4">
                <ul class="nav nav-tabs tabs-left">
                    <?php $first = page('projets')->children()->first() ?>
                    <?php foreach (page('projets')->children()->visible() as $project) : ?>
                    <li <?php if($project == $first) echo 'class="active"' ?>>
                        <a href="#<?php echo $project->projectTag() ?>" data-toggle="tab"><?php echo $project->title() ?></a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="col-md-9 col-xs-8">
                <!-- Tab panes -->
                <div class="tab-content pt">
                    <?php foreach (page('projets')->children()->visible() as $project) : ?>
                        <div class="tab-pane  <?php if($project == $first) echo 'active' ?>" id="<?php echo $project->projectTag() ?>">
                            <div class="col-md-6 mb">
                                <p class="lg"><?php echo $project->short() ?></p>
                                <a href="<?php echo $project->Url() ?>" class="btn btn-theme">En savoir plus</a>
                                <?php echo $key ?>
                            </div>
                            <div class="col-md-6">
                                <img src="../assets/images/banner-<?php echo $project->projectTag() ?>.jpg" class="img-responsive">
                            </div>
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