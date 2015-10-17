

<div class="container events">
  <div class="row center">
    <h2>Événements à venir</h2>
  </div>
  <?php foreach(page('evenements')->children()->sortBy('startDate') as $event): ?>
    <?php $thedate = time() ?>
    <?php $startdate = $event->date('','startDate') ?>
    <?php if ($event->endDate() != '') : ?>
      <?php $enddate = $event->date('','endDate') ?>
      <?php if ($thedate <= $enddate) : ?>
        <?php snippet('evenement', array('event' => $event)) ?>
      <?php endif ?>
    <?php else : ?> 
      <?php if ($thedate <= $startdate) : ?>
        <?php snippet('evenement', array('event' => $event)) ?>
      <?php endif ?>
    <?php endif ?>
  <?php endforeach ?>

  <div class="row center bmt">
    <a href="/evenements" class="btn btn-theme">Voir tous les événements</a>
  </div>
</div>
