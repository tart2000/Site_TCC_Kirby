<div class="colour-block cyan-bg bmt"></div>
<div class="yellow-narrow-spacer center">
	<h1><?php echo page('services')->title() ?></h1>
	<h4><?php echo page('services')->subtitle() ?></h4>
</div>
<div class="colour-block cyan-bg bmb"></div>

<div class="container bmb">
	<div clas="row">
	  	<?php foreach (page('services')->children()->visible()->limit(3) as $p) : ?>
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
		<a href="/services" class="btn btn-theme"><?php echo l::get('all-services') ?></a>
	</div>
</div>
