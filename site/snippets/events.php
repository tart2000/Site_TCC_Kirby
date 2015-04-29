

<div class="container">
  <div class="row center">
    <h2>Evénements à venir</h2>
  </div>
  <?php foreach(page('evenements')->children()->sortBy('startDate') as $event): ?>
    <?php $thedate=strtotime(date("Y-m-d"))?>
    <?php $thisdate = $event->date('','startDate') ?>
    <?php if ($thedate <= $thisdate) : ?>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
            <h3><i class="fa fa-calendar"></i> <?php echo $event->date('j','startDate') ?>-<?php echo $event->date('j M','endDate') ?> - <a href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a></h3>
            <?php if ($event->venueName() != '') : ?>
              <?php if ($event->venueLink() != '') : ?>
                <a href="<?php echo $event->venueLink() ?>" target="_blank"><strong><i class="fa fa-map-marker"></i>  <?php echo $event->venueName() ?></strong></a>
              <?php else : ?>
                <strong><i class="fa fa-map-marker"></i> <?php echo $event->venueName() ?></strong>
              <?php endif ?>
            <?php endif ?>
          <?php else : ?>
          <!-- si c'est sur un seul jour -->
            <h3><i class="fa fa-calendar"></i> <?php echo $event->date('j M','startDate') ?> - <a href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a></h3>
            <strong><?php echo $event->startTime() ?> - <?php echo $event->endTime() ?> 
              <?php if ($event->venueName() != '') : ?>
                <?php if ($event->venueLink() != '') : ?>
                  <a href="<?php echo $event->venueLink() ?>" target="_blank"><i class="fa fa-map-marker"></i> <?php echo $event->venueName() ?></a>
                <?php else : ?>
                  <i class="fa fa-map-marker"></i> <?php echo $event->venueName() ?>
                <?php endif ?>
              <?php endif ?>
            </strong>
          <?php endif ?>
        
        <?php if ($event->registrationLink() != '') : ?>
          <div class="register">
            <a href="<?php echo $event->registrationLink() ?>" class="btn btn-theme" target="_blank">Inscriptions</a>
          </div>
        <?php endif ?>
        
        <p><?php echo $event->text() ?></p>
      </div>
    </div>
    <?php endif ?>
  <?php endforeach ?>

  <div class="row center bmt">
    <a href="/evenements" class="btn btn-theme">Voir tous les événements</a>
  </div>
</div>
