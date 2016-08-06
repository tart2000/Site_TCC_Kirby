

<div class="container events">
  <div class="row center">
    <h2><?php echo l::get('coming-up') ?></h2>
  </div>
  <?php $event_count = 0 ?>
  <?php foreach(page('evenements')->children()->sortBy('startDate') as $event): ?>
    <?php $thedate = time() ?>
    <?php $startdate = $event->date('','startDate') ?>
    <?php if ($event->endDate() != '') : ?>
      <?php $enddate = $event->date('','endDate') ?>
      <?php if ($thedate <= $enddate) : ?>
        <?php snippet('evenement', array('event' => $event)) ?>
        <?php $event_count += 1 ?>
      <?php endif ?>
    <?php else : ?>
      <?php if ($thedate <= $startdate) : ?>
        <?php snippet('evenement', array('event' => $event)) ?>
        <?php $event_count += 1 ?>
      <?php endif ?>
    <?php endif ?>
  <?php endforeach ?>

  <?php if ($event_count == 0) : ?>
    <?php echo $page->uneventful() ?>
    <div class="row center">
      <h4><?php echo page('evenements')->uneventful()->html() ?></h4>
    </div>
  <?php endif ?>

  <div class="row center bmt">
    <a href="/evenements" class="btn btn-theme"><?php echo l::get('all-events') ?></a>
  </div>
</div>



