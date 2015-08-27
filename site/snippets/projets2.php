<div class="container bmb">
	<div class="row">
		<div class="col-md-12 center">
        	<a href="/projets"><h2><?php echo page('projets')->title() ?></h2></a>
    	</div>
	</div>
	<div clas="row">
	  	<?php foreach (page('projets')->children()->visible()->limit(3) as $p) : ?>
	  		<div class="col-md-4 col-sm-6">
		  		<div>
	                <a href="<?php echo $p->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $p->projectTag() ?>.jpg" class="img-responsive"></a>
	            </div>
	            <div class="project-header-s center">
	                <h1><?php echo $p->title() ?></h1>
	            </div>
	            <div class="text">
	            	<h4><?php echo $p->short()->excerpt(120) ?> <a href="<?php echo $p->url() ?>"><i class="fa fa-arrow-right"></i></a></h4>
	            </div>
		  	</div>
		<?php endforeach ?>
	</div>
	<div class="clearfix"></div>
	<div class="row center">
		<a href="/projets" class="btn btn-theme">Voir tous les projets</a>
	</div>
</div>