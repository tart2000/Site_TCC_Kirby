<?php setlocale(LC_ALL, 'fr_FR') ?>

    <div class="row">
      <div class="col-md-offset-1 col-md-2 col-sm-2 col-xs-12 gmt">
      <?php if ($event->gifLink() != '') : ?>
      <!-- Si il y a un GIF lien -->
        <img src="<?php echo $event->gifLink() ?>" class="img-responsive">
        <!-- le GIF -->
      <?php endif ?>
      </div>
      <div class="col-md-8 col-sm-10 col-xs-12">
        <?php if ($event->registrationLink() != '') : ?>
          <div class="register">
            <a href="<?php echo $event->registrationLink() ?>" class="btn btn-theme" target="_blank"><?php if ($event->infoLink() != '') : ?><?php echo $event->infoLink() ?><?php else : ?>Informations<?php endif ?></a>
          </div>
        <?php endif ?>
          <!-- si c'est sur plusieurs jours -->
          <?php if ($event->endDate() != '') : ?>
          <?php $sDate = $event->date('U','startDate') ?>
          <?php $eDate = $event->date('U', 'endDate') ?> 
            <h3><i class="fa fa-calendar"></i> <?php echo strftime('%d', $sDate) ?>-<?php echo strftime('%d %B', $eDate) ?> - <?php echo $event->title()->html() ?></h3><br> 
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
            <h3><i class="fa fa-calendar"></i> <?php echo strftime('%A %d %B', $uDate) ?> - <?php echo $event->title()->html() ?></h3><br>
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
        

        
        <p><?php echo $event->text()->kirbytext() ?></p>
      </div>
    </div>