<?php snippet('head') ?>
<?php snippet('menu') ?>

  <main class="container bmt">

    <div class="row center">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <div class="events">
      <?php foreach(page()->children()->sortBy('startDate') as $event): ?>
        <?php $thedate = time() ?>
        <?php $thisdate = $event->date('','startDate') ?>
        <?php if ($thedate <= $thisdate) : ?>
          <?php snippet('evenement', array('event' => $event)) ?>
        <?php endif ?>
      <?php endforeach ?>
    </div>

  <hr>
  <div class="row center bmt">
    <h3>Evénements passés</h3> 
  </div>
    <?php foreach(page()->children()->sortBy('startDate')->flip() as $event): ?>
    <?php $thedate=strtotime(date("Y-m-d"))?>
    <?php $thisdate = $event->date('','startDate') ?>
    <?php $sDate = $event->date('U','startDate') ?>
    <?php $eDate = $event->date('U', 'endDate') ?> 
    <?php if ($thedate > $thisdate) : ?>
    <div class="row mt">
      <div class="col-md-10 col-md-offset-1">
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
            <strong><?php echo strftime('%d', $sDate) ?>-<?php echo strftime('%d %B', $eDate) ?> - <?php echo $event->title()->html() ?> - <?php echo $event->venueName() ?></strong>
          <?php else : ?>
          <!-- si c'est sur un seul jour -->
             <strong><?php echo strftime('%A %d %B', $sDate) ?> - <?php echo $event->title()->html() ?> - <?php echo $event->venueName() ?></strong>
          <?php endif ?>
        
        <p><?php echo $event->text() ?></p>
      </div>
    </div>
    <?php endif ?>
  <?php endforeach ?>




  </main>

<?php snippet('footer') ?>