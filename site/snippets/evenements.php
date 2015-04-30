

<div class="container events">
  <div class="row center">
    <h2>Evénements à venir</h2>
  </div>
  <?php foreach(page('evenements')->children()->sortBy('startDate') as $event): ?>
    <?php $thedate = time() ?>
    <?php $thisdate = $event->date('','startDate') ?>
    <?php if ($thedate <= $thisdate) : ?>
      <?php snippet('evenement', array('event' => $event)) ?>
    <?php endif ?>
  <?php endforeach ?>

  <div class="row center bmt">
    <a href="/evenements" class="btn btn-theme">Voir tous les événements</a>
  </div>
</div>
