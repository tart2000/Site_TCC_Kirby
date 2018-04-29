<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container">
    <?php snippet('breadcrumb') ?>
    <div class="text">
      <h1><?= $page->title()->html() ?></h1>
      <!-- metainfo -->
      <ul class="list-inline">
        <li><i class="fa fa-clock-o"></i> <?= $page->position_type()->text()->lower() ?></li>
        <li><i class="fa fa-hourglass-end"></i> <?= $page->enddate()->text() ?></li>
        <li><i class="fa fa-map-marker"></i> <?= $page->location()->text() ?></li>
      </ul> <!-- end metainfo -->
      <p><?= $page->short()->kirbytext() ?></p>
      <hr>
      <iframe src="<?=$page->pdflink()->text() ?>/preview" width="640" height="480"></iframe>
      <p><a class="underline" href="<?=$page->pdflink()->text() ?>"><?= l::get('download')?> (PDF, <?= $page->pdfsize()->text() ?>)</a></p>

      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>
