<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">
    <div class="row center">
        <h2><?php echo $page->title() ?></h2>
    </div>

    <?php $thedate = strtotime(date("Y-m-d")) ?>

    <div class="row">
    <?php foreach(page('news')->children()->sortBy('newsDate')->flip() as $n): ?>
        <?php $thisDate = $n->date('','newsEnd') ?>
            
            <div class="col-md-8 col-md-offset-2 
                <?php if ($n->newsEnd() != '') : ?>
                    <?php if ($thedate > $thisdate) : ?> 
                        <?php echo 'old' ?>
                    <?php endif ?>
                <?php endif ?>
                ">
                <div class="col-xs-10">
                    <h3><?php echo $n->title() ?></h3>
                </div>
                <div class="clearfix"></div>
                <?php if ($n->newsLink() != '') : ?>
                    <?php if ($n->newsEnd() != '') : ?>
                        <?php if ($thedate <= $thisdate) : ?> 
                            <div class="register">
                                <a href="<?php echo $n->newsLink() ?>" class="btn btn-theme" target="_blank">Plus d'infos</a>
                            </div>
                        <?php endif ?>
                    <?php elseif ($n->newsEnd() == '') : ?>
                        <div class="register">
                            <a href="<?php echo $n->newsLink() ?>" class="btn btn-theme" target="_blank">Plus d'infos</a>
                        </div>
                    <?php endif ?>
                <?php endif ?>
                <div class="col-xs-12">
                    <?php echo $n->date('d M','newsDate') ?>
                    <?php echo $n->text()->kirbytext() ?>
                <hr>
                </div>
                
            </div>
        
    <?php endforeach ?>
    </div>

  </main>

<?php snippet('footer') ?>