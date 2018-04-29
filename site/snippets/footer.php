  <footer class="footer cf bmt" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
              <p>
              <?php foreach($pages->visible() as $p): ?>
              <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></br>
              <?php endforeach ?>
              </p>
            </div>


            <div class="col-sm-2 col-sm-offset-1">
                <a href="http://technoculture.club" target="_blank"><img src="/assets/images/logo_TCC_M.png" class="img-responsive center-block" style="max-height:150px;"></a>
                <div class="social center mt">
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook fa-2x mr"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter fa-2x mr"></i></a>
                    <a href="<?php echo $site->instagram() ?>"><i class="fa fa-instagram fa-2x mr"></i></a>
                    <a href="<?php echo $site->linkedin() ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1 right">
                <strong><a href="contact">Contact</a></strong>
                <p>Techno Culture Club<br>
                2275 boul Saint-Joseph E #1.120<br>
                Montréal, QC, H2H 1G4</p>
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
