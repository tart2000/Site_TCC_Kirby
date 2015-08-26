  <footer class="footer cf" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <strong>Projets</strong></br>
                <?php foreach (page('projets')->children()->visible() as $project): ?>
                    <a href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a></br>
                <?php endforeach ?>
            </div>
            <div class="col-md-2 col-md-offset-1">
                <a href="http://technoculture.club" target="_blank"><img src="/assets/images/logo_TCC_M.png" class="img-responsive"></a>
                <div class="social center mt">
                    <a href="<?php $site->facebook() ?>"><i class="fa fa-facebook fa-2x mr"></i></a>
                    <a href="<?php $site->twitter() ?>"><i class="fa fa-twitter fa-2x mr"></i></a>
                    <a href="<?php $site->linkedin() ?>"><i class="fa fa-linkedin fa-2x"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 right">
                <strong>Contact</strong>
                <p>Techno Culture Club<br> 
                7255 Alexandra #203<br> 
                Montréal, QC</p>
                <div class="clearfix"></div>
                <strong>Code</strong><br>
                <p>fait avec <a href="http://getkirby.com">Kirby</a>
                <a href="https://github.com/tart2000/Site_TCC_Kirby" target="_blank"><i class="fa fa-github"></i></a></p>
                <p>Dernière mise à jour :<br> 
                <?php echo $site->modified('d/m/Y H:i') ?></p>
            </div>
        </div>
    </div>

  </footer>

</body>
</html>