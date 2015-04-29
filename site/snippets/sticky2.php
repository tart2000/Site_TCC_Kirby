<div class="container mt">
    <?php $thedate = strtotime(date("Y-m-d")); ?>
    <?php $counter = 0 ?>
    <?php foreach(page('news')->children()->filterBy('sticky','1')->flip() as $new): ?>
    <?php $thisEndDate =  $new->date('','newsEnd') ?>
        <?php if ($thisEndDate > $thedate) : ?>
            <?php if ($counter == 0) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><?php echo $new->title() ?></strong> 
                <?php if ($new->newsLink() != '') : ?>
                    <a href="<?php echo $new->newsLink() ?>"><i class="fa fa-external-link sml"></i></a>
                <?php endif ?><br>
              <?php echo $new->text() ?>
            </div>
            <?php $counter++ ?>
            <?php endif ?>
        <?php endif ?>
    <?php endforeach ?>
</div>