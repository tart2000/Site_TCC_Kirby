<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">

    <div class="row center">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  <?php foreach(page()->children()->sortBy('startDate') as $event): ?>
    <?php $thedate = time() ?>
    <?php $thisdate = $event->date('','startDate') ?>
    <?php if ($thedate <= $thisdate) : ?>
      <?php snippet('evenement', array('event' => $event)) ?>
    <?php endif ?>
  <?php endforeach ?>

  <hr>
  <div class="row center bmt">
    <h3>Evénements passés</h3> 
  </div>
    <?php foreach(page()->children()->sortBy('startDate')->flip() as $event): ?>
    <?php $thedate=strtotime(date("Y-m-d"))?>
    <?php $thisdate = $event->date('','startDate') ?>
    <?php if ($thedate > $thisdate) : ?>
    <div class="row mt">
      <div class="col-md-10 col-md-offset-1">
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
            <strong><?php echo $event->date('j','startDate') ?>-<?php echo $event->date('j M','endDate') ?> - <?php echo $event->title()->html() ?> - <?php echo $event->venueName() ?></strong>
          <?php else : ?>
          <!-- si c'est sur un seul jour -->
             <strong><?php echo $event->date('j M','startDate') ?> - <?php echo $event->title()->html() ?> - <?php echo $event->venueName() ?></strong>
          <?php endif ?>
        
        <p><?php echo $event->text() ?></p>
      </div>
    </div>
    <?php endif ?>
  <?php endforeach ?>




  </main>

<?php snippet('footer') ?>