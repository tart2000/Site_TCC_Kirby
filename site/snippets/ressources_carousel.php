<div class="center pb">
	<h1><?php echo page('ressources')->title() ?></h1>
	<h4><?php echo page('ressources')->subtitle() ?></h4>
</div>

<div class="container bmb">
	<div clas="row">
	  	<?php foreach (page('ressources')->children()->visible()->limit(3) as $p) : ?>
	  		<div class="col-md-4 col-sm-6">
		  		<div>
	                <a href="<?php echo $p->url() ?>"><img src="<?php echo $site->url() ?>/assets/images/banner-<?php echo $p->projectTag() ?>.jpg" class="img-responsive"></a>
	            </div>
	            <a href="<?php echo $p->url() ?>"><div class="project-header-s center">
	                <h1 class="left"><?php echo $p->title() ?></h1>
	            </div></a>
	            <div class="text">
	            	<h4><?php echo $p->short()->excerpt(120) ?> <a href="<?php echo $p->url() ?>"><i class="fa fa-arrow-right"></i></a></h4>
	            </div>
		  	</div>
		<?php endforeach ?>
	</div>
	<div class="clearfix"></div>
	<div class="row center">
		<a href=<?php echo page('ressources')->url() ?> class="underline lg"><?php echo l::get('all-resources') ?> <i class="fa fa-arrow-right"></i></a>
	</div>
</div>
