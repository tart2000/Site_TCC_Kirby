<?php snippet('head') ?>
<?php snippet('menu') ?>

<div class="container pt">
    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2 bmb">
    		<div class="center">
    			<h2>WANTED</h2>
    			<h1><?php echo $page->title() ?></h1>
    		</div>
    		<hr>
    		<?php if ($page->nous() != '') : ?>
	    		<h3>Nous sommes</h3>
	    		<?php echo $page->nous()->kirbytext() ?>
    		<?php endif ?>
    		<?php if ($page->toi() != '') : ?>
    			<h3>Tu es</h3>
    			<?php echo $page->toi()->kirbytext() ?>
    		<?php endif ?>
    		<?php if ($page->mission() != '') : ?>
    			<h3>Mission</h3>
    			<?php echo $page->mission()->kirbytext() ?>
    		<?php endif ?>
    		<?php if ($page->pouvoirs() != '') : ?>
    			<h3>Super pouvoirs</h3>
    			<?php echo $page->pouvoirs()->kirbytext() ?>
    		<?php endif ?>
    		<hr>
    		<?php if ($page->periode() != '') : ?>
    		<p>
    			<strong>Période :</strong>
    			<?php echo $page->periode() ?>
    		</p>
    		<?php endif ?>
    		<?php if ($page->heures() != '') : ?>
    		<p>
    			<strong>Disponibilité :</strong>
    			<?php echo $page->heures() ?>
    		</p>
    		<?php endif ?>
    		<p><strong>Projet :</strong> <a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></p>
    	</div>
        <div class="center col-sm-12 bmb bpb">
            <a href="mailto:<?php echo $page->contact() ?>" class="btn btn-lg btn-theme">Répondre !</a>
        </div>
    </div>
</div>

<?php snippet('footer') ?>
