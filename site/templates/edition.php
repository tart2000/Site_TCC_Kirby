
<?php snippet('head') ?>

<!-- counter info -->

<?php $thedate =  time() ?>
<?php $thisdate = $page->date('','startDate') ?>

<!-- Header --> 

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <a class="navbar-brand plog" href="<?php echo $page->parent()->projectLink() ?>" target="_blank"><img src="/assets/images/<?php echo $page->parent()->projectTag() ?>.png" class="img-responsive"></a>
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
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- end navbar -->


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

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 center">
            <h3><?php echo $page->parent()->short()->kirbytext() ?></h3>
        </div>
    </div>
</div>

<!-- Timer -->
<?php if ($thedate <= $thisdate) : ?>
    <div class="">
        <div class="container">
            <div class="row center" id="clock">
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

<div class="container">
<h3><?php echo $page->text()->kirbytext() ?></h3>
</div>

<!--- Partenaires --> 

<hr>
<div class="container">
    <div class="row">
        <?php if ($page->children() !='') : ?>
            <?php foreach ($page->chidren() as $p) : ?>
                <?php echo $p->title() ?>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>
    <!-- Devenir partenaire -->



<!-- infolettre --> 



<!-- footer -->

Un projet Techno Culture Club 