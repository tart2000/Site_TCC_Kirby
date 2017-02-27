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
                    <a href="<?php echo $site->facebook() ?>"><i class="fa fa-facebook fa-2x mr"></i></a>
                    <a href="<?php echo $site->twitter() ?>"><i class="fa fa-twitter fa-2x mr"></i></a>
                    <a href="<?php echo $site->linkedin() ?>"><i class="fa fa-linkedin fa-2x"></i></a>
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

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="<?php echo $site->url() ?>/assets/js/jquery.countdown.min.js"></script>
  <script src="<?php echo $site->url() ?>/assets/js/main.js"></script>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":<?php echo l::get('cookie-message') ?>,"dismiss":<?php echo l::get('cookie-dismiss') ?>,"learnMore":<?php echo l::get('cookie-learn-more') ?>,"link":"http://technoculture.club/cookie","theme":"dark-top"};
</script>

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"http://technoculture.club/cookie","theme":"dark-top"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

</body>
</html>