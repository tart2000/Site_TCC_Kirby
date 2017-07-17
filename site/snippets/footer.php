  <footer class="footer cf bmt" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <strong><?php echo page('services')->title() ?></strong></br>
                <?php foreach (page('services')->children()->visible() as $service): ?>
                    <a href="<?php echo $service->url() ?>"><?php echo $service->title() ?></a></br>
                <?php endforeach ?>

                </br>
                <strong><?php echo page('projets')->title() ?></strong></br>
                <?php foreach (page('projets')->children()->visible() as $service): ?>
                    <a href="<?php echo $service->url() ?>"><?php echo $service->title() ?></a></br>
                <?php endforeach ?>

            </div>


            <div class="col-sm-2 col-sm-offset-1">
                <a href="http://technoculture.club" target="_blank"><img src="/assets/images/logo_TCC_M.png" class="img-responsive"></a>
                <div class="social center mt">
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook fa-2x mr"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter fa-2x mr"></i></a>
                    <a href="<?php echo $site->linkedin() ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1 right">
                <strong>Contact</strong>
                <p>Techno Culture Club<br>
                2275 boul Saint-Joseph E #1.120<br>
                Montréal, QC</p>
                <div class="clearfix"></div>
                <strong>Code</strong><br>
                <p><?php echo l::get('made') ?> <a href="http://getkirby.com">Kirby</a>
                <a href="https://github.com/tart2000/Site_TCC_Kirby" target="_blank"><i class="fa fa-github"></i></a></p>
            </div>
        </div>
    </div>

  </footer>
  <?php snippet('incl_scripts') ?>
</body>
</html>
