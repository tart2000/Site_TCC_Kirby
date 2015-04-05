<?php snippet('header') ?>

<div id="aboutwrap">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1><?php echo $page->header()->kirbytext() ?></h1>
            </div>
        </div>
    </div>
</div>

  <main class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>

  </main>

<?php snippet('footer') ?>