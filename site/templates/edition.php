


<?php snippet('head') ?>

<script src="<?php echo $site->url() ?>/assets/js/svg.min.js"></script>
<script src="<?php echo $site->url() ?>/assets/js/helpers.js"></script>

<!-- counter info -->

<?php $thedate =  time() ?>
<?php $thisdate = $page->date('','startDate') ?>
<?php setlocale(LC_ALL, 'fr_FR') ?>


<!-- redirect if after event -->
<?php if ($thedate > $thisdate) : ?>
    <?php go($page->parent()->url()) ?>
<?php endif ?>

<!-- Header --> 

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <a class="navbar-brand plog" href="<?php echo $page->parent()->projectLink() ?>"><img src="/assets/images/<?php echo $page->parent()->projectTag() ?>.png" class="img-responsive"></a>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" class="navdate hide"><strong><?php echo $page->dateText() ?> - <?php echo $page->venue() ?></strong></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- end navbar -->

<div id="lines"></div>
<script src="<?php echo $site->url() ?>/assets/js/lines.js"></script>

<!-- Splash -->
<div class="project-header header-marg" style="background-image: url('<?php echo $page->images()->sortBy('sort', 'asc')->first()->url() ?>');">

    <div class="container">
        <div class="row bpt bpb">
            <div class="col-sm-1 col-sm-offset-2">
                <a type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-play-circle-o"></i></a>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <h1><?php echo $page->dateText() ?></h1>
                <h1><?php echo $page->venue() ?></h1>
            </div>
        </div>
    </div>


    <!-- Pop-up Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Vidéo de <?php echo $page->parent()->title() ?></h4>
                </div>
                <div class="modal-body">
                    <div class="responsive-video">
                        <iframe src="//player.vimeo.com/video/<?php echo $page->videoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container bpb">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 center">
            <h3><?php echo $page->parent()->short()->kirbytext() ?></h3>
            <a href="http://www.museomix.org" class="btn btn-theme">En savoir plus sur le concept de Museomix</a> <a href="<?php echo $page->parent()->url() ?>" class="btn btn-theme">En savoir plus sur <?php echo $page->parent()->title() ?></a>
        </div>
    </div>
</div>

<!-- Timer -->
<?php if ($thedate <= $thisdate) : ?>
<div id="countdown" class="bpt bpb bmb stretched-bg" style="background-image: url('<?php echo $page->images()->sortBy('sort', 'asc')->offset(1)->first()->url() ?>');">
    <div class="container">
        <div class="row center countdown">
            <h3>Rendez-vous dans : </h3>
        </div>
        <div class="row center countdown" id="clock">
        </div>
    </div>
</div>
<?php endif ?>

<script type="text/javascript">
$('#clock').countdown("<?php echo $page->date('Y/m/d','startDate') ?>", function(event) {
  var $this = $(this).html(event.strftime(''
    + '<h2>%D jours : %H heures : %m minutes : %S secondes</h2>'
    ));
});
</script>


<!-- Texte de l'édition -->
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 center lg"> 
            <p><?php echo $page->text()->kirbytext() ?></p>
            
        </div>
    </div>
</div>

<!-- Vidéos -->

<?php if ($page->videoDesc1() != '') : ?>
<div class="project-video bpt bpb bmb stretched-bg" style="background-image: url('<?php echo $page->images()->sortBy('sort', 'asc')->offset(2)->first()->url() ?>');">
<div class="container bmt">
    <div class="row center">
            <div class="col-xs-8 col-sm-4">
                <p class="videodesc"><?php echo $page->videoDesc1() ?></p>
                <?php if ($page->vimeoCode1() != '') : ?>
                <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeoCode1() ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
                <?php if ($page->youtubeCode1() != '') : ?>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $page->youtubeCode1() ?>" frameborder="0" allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
            </div>
                
                <?php if ($page->videoDesc2() != '') : ?>
            <div class="col-xs-8 col-sm-4">
                <p class="videodesc"><?php echo $page->videoDesc2() ?></p>
                <?php if ($page->vimeoCode2() != '') : ?>
                <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeoCode2() ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
                <?php if ($page->youtubeCode2() != '') : ?>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $page->youtubeCode2() ?>" frameborder="0" allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
            </div>
            <?php else : ?>
                <?php endif ?>
                
                <?php if ($page->videoDesc3() != '') : ?>
            <div class="col-xs-8 col-sm-4">
                <p class="videodesc"><?php echo $page->videoDesc3() ?></p>
                <?php if ($page->vimeoCode3() != '') : ?>
                <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeoCode3() ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
                <?php if ($page->youtubeCode3() != '') : ?>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $page->youtubeCode3() ?>" frameborder="0" allowfullscreen></iframe>
                <?php else : ?>
                <?php endif ?>
            </div>
            <?php else : ?>
                <?php endif ?>   
        
        </div>
    </div>
</div>
<?php else : ?>
                <?php endif ?>
                
        <!-- Fin vidéos -->

<!-- Appel à participants -->
<?php $aapStart = $page->date('','debutCall') ?>
<?php $aapEnd = $page->date('','endCall') ?>

<div class="container bmt">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <?php if ($thedate < $aapEnd) : ?>
            <?php if ($thedate > $aapStart) : ?>
            <!-- Pendant AàP -->
                <div class="bs-callout bs-callout-warning"> 
                    <a href="<?php echo $page->registrationLink() ?>" target="_blank" class="btn btn-theme right"><?php echo $page->registrationText() ?></a>
                    <h4>Participer :</h4>
                    <div class="lg">
                        <?php echo $page->call4p()->kirbytext() ?>
                    </div>
                </div>
            <?php else : ?>
            <!-- Avant AàP -->
                <div class="bs-callout bs-callout-default">
                <h4>Participer :</h4>
                <p class="lg">Rendez-vous le <?php echo strftime("%e %B",$aapStart) ?> pour l'ouverture des places !</p>
                </div>
            <?php endif ?>
        <?php else : ?>
        <!-- Après AàP -->

        <?php endif ?>
        </div>
    </div>
</div>

<!-- Team --> 
<?php if ($page->children('team') != '') : ?>
<div class="container bmt">
    <div class="row center">
        <h2>Équipe</h2>
    </div>
    <div class="row">
    <?php foreach ($page->children('team') as $team) : ?>
        <div class="col-md-2 col-sm-3 col-xs-4 team">
        <div class="thumbnail">
            <?php if ($team->images() != '') : ?>
                
                <img src="<?php echo $team->images()->first()->url() ?>" onmouseover="this.src='<?php echo $team->images()->sortBy('sort', 'asc')->offset(1)->first()->url() ?>'" onmouseout="this.src='<?php echo $team->images()->first()->url() ?>'" />
                </div>
            <?php else : ?>
                <img src="<?php echo $site->url() ?>/assets/images/avatar.png" class="img-responsive">
            <?php endif ?>
            <div class="team-text">
                <strong><?php echo $team->title() ?> <?php echo $team->nom() ?></strong>
                <p>
                    <?php if ($team->role() != '') : ?>
                        <?php echo $team->role() ?><br>
                    <?php endif ?>
                    <?php if ($team->tw() != '') : ?>
                        <?php echo twitter($team->tw()) ?>
                    <?php endif ?> 
                    <?php if ($team->mail() != '') : ?>
                        <a href="mailto:<?php echo $team->mail() ?>"><i class="fa fa-envelope"></i></a>
                    <?php endif ?>
                    </p>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>
<?php endif ?>

<!-- Contacts -->
<div class="container center contacts bmt mb lg">
    <p>
    <?php if ($page->contact() != '') : ?>
        <a href="mailto:<?php echo $page->contact() ?>" target="_blank">Contact</a> | 
    <?php endif ?>
    <?php if ($page->presse() != '') : ?>
        <a href="<?php echo $page->presse() ?>" target="_blank">Presse</a> | 
    <?php endif ?>
    <?php if ($page->benevoles() != '') : ?>
        <a href="<?php echo $page->benevoles() ?>" target="_blank">Devenir bénévole</a>
    <?php endif ?>
    </p>
</div>

<!-- Partenaires -->
<?php snippet('partners') ?>

 <!-- Devenir partenaire -->
<div class="container">
    <div class="row center">
        <a class="" data-toggle="collapse" href="#collapsePartner" aria-expanded="false" aria-controls="collapsePartner">
          Devenir partenaire<br>
          <i class="fa fa-caret-down"></i>
        </a>
    </div>
    <div class="collapse" id="collapsePartner">
      <div class="well mt">
        <h4>Pourquoi devenir partenaire de <?php echo $page->parent()->title() ?> ?</h4>
        <div class="lg"><?php echo $page->partenaire()->kirbytext() ?></div>
      </div>
    </div>
</div>

<!-- infolettre --> 



<!-- footer -->


<div class="footer center">
    Un projet Techno Culture Club <br>
    <a href="<?php echo $site->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/logo_TCC_M.png" style="max-width:10%;"></a>
</div>