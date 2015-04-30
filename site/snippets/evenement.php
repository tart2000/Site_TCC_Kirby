    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
            <h3><i class="fa fa-calendar"></i> <?php echo $event->date('j','startDate') ?>-<?php echo $event->date('j M','endDate') ?> - <?php echo $event->title()->html() ?></h3> <?php if ($event->infoLink() != '') : ?><a href="<?php echo $event->infoLink() ?>" target="_blank"> <i class="fa fa-external-link"></i></a><?php endif ?><br>
            <?php if ($event->venueName() != '') : ?>
              <?php if ($event->venueLink() != '') : ?>
                <a href="<?php echo $event->venueLink() ?>" target="_blank"><strong><i class="fa fa-map-marker"></i>  <?php echo $event->venueName() ?></strong></a>
              <?php else : ?>
                <strong><i class="fa fa-map-marker"></i> <?php echo $event->venueName() ?></strong>
              <?php endif ?>
            <?php endif ?>
          <?php else : ?>
          <!-- si c'est sur un seul jour -->
            <h3><i class="fa fa-calendar"></i> <?php echo $event->date('j M','startDate') ?> - <?php echo $event->title()->html() ?></h3> <?php if ($event->infoLink() != '') : ?><a href="<?php echo $event->infoLink() ?>" target="_blank"> <i class="fa fa-external-link"></i></a><?php endif ?><br>
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