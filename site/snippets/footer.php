  <footer class="footer cf bmt" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <strong><?php echo page('projets')->title() ?></strong></br>
                <?php foreach (page('projets')->children()->visible() as $project): ?>
                    <a href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></br>
                <?php endforeach ?>
            </div>
            <div class="col-sm-2 col-sm-offset-1">
                <a href="http://technoculture.club" target="_blank"><img src="/assets/images/logo_TCC_M.png" class="img-responsive"></a>
                <div class="social center mt">
                    <a href="<?php $site->facebook() ?>"><i class="fa fa-facebook fa-2x mr"></i></a>
                    <a href="<?php $site->twitter() ?>"><i class="fa fa-twitter fa-2x mr"></i></a>
                    <a href="<?php $site->linkedin() ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-1 right">
                <strong>Contact</strong>
                <p>Techno Culture Club<br> 
                7255 Alexandra #203<br> 
                Montréal, QC</p>
                <div class="clearfix"></div>
                <strong>Code</strong><br>
                <p><?php echo l::get('made') ?> <a href="http://getkirby.com">Kirby</a>
                <a href="https://github.com/tart2000/Site_TCC_Kirby" target="_blank"><i class="fa fa-github"></i></a></p>
            </div>
        </div>
    </div>

  </footer>

</body>
</html>