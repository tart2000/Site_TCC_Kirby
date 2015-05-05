<?php setlocale(LC_ALL, 'fr_FR') ?>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
          <?php $sDate = $event->date('U','startDate') ?>
          <?php $eDate = $event->date('U', 'endDate') ?> 
            <h3><i class="fa fa-calendar"></i> <?php echo strftime('%d', $sDate) ?>-<?php echo strftime('%d %B', $eDate) ?> - <?php echo $event->title()->html() ?></h3> <?php if ($event->infoLink() != '') : ?><a href="<?php echo $event->infoLink() ?>" target="_blank"> <i class="fa fa-external-link"></i></a><?php endif ?><br>
            <?php if ($event->venueName() != '') : ?>
              <?php if ($event->venueLink() != '') : ?>
                <a href="<?php echo $event->venueLink() ?>" target="_blank"><strong><i class="fa fa-map-marker"></i>  <?php echo $event->venueName() ?></strong></a>
              <?php else : ?>
                <strong><i class="fa fa-map-marker"></i> <?php echo $event->venueName() ?></strong>
              <?php endif ?>
            <?php endif ?>
          <?php else : ?>
          <!-- si c'est sur un seul jour -->
          <?php $uDate = $event->date('U','startDate') ?>
            <h3><i class="fa fa-calendar"></i> <?php echo strftime('%A %d %B', $uDate) ?> - <?php echo $event->title()->html() ?></h3> <?php if ($event->infoLink() != '') : ?><a href="<?php echo $event->infoLink() ?>" target="_blank"> <i class="fa fa-external-link"></i></a><?php endif ?><br>
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
            <a href="<?php echo $event->registrationLink() ?>" class="btn btn-theme" target="_blank"><?php if ($event->infoLink() != '') : ?><?php echo $event->infoLink() ?><?php else : ?>Informations<?php endif ?></a>
          </div>
        <?php endif ?>
        
        <p><?php echo $event->text()->kirbytext() ?></p>
      </div>
    </div>