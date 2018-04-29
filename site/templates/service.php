<?php snippet('head') ?>
<?php snippet('menu') ?>

<?php $thetag = $page->projectTag() ?>
<?php $thedate = time() ?>


<main class="container">
  <?php snippet('breadcrumb') ?>
  <div class="row">
    <!--title and subtitle and CTA left column-->
    <div class="col-md-4">
      <!--title-->
      <h2><?php echo $page->title()->kirbytext() ?></h2>
      <h3><?php echo $page->short()->kirbytext() ?></h3>
    </div>

    <div class="col-md-8">
      <!-- Carousel right column -->
      <?php if ($page->images() != '') : ?>
      <div id="project-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php $first = $page->images()->flip()->first() ?>
          <?php $index0 = 0 ?>
          <?php foreach($page->images()->flip() as $image): ?>
          <li data-target="#project-carousel" data-slide-to="<?php echo $index0 ?>" <?php if($image == $first) echo 'class="active"' ?>></li>
          <?php $index0++; ?>
          <?php endforeach ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php $first = $page->images()->flip()->first() ?>
          <?php foreach($page->images()->flip() as $image): ?>
            <div class="item <?php if($image == $first) echo 'active' ?>">
              <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            </div>
          <?php endforeach ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#project-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#project-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <?php endif ?>
      <!-- end carousel -->
    </div>
  </div><!-- close top row -->

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <!-- icones sociales du projet -->
      <div class="mt right mr">
        <?php if ($page->fb() != '') : ?>
        <button type="button" class="btn btn-round btn-default" aria-label="Facebook link"><a href="<?php echo $page->fb() ?>" target="_blank"><i class="fa fa fa-facebook" aria-hidden="true"></i></a></button>
        <?php endif ?>
        <?php if ($page->tw() != '') : ?>
        <button type="button" class="btn btn-default btn-round" aria-label="Twitter link"><a href="<?php echo $page->tw() ?>" target="_blank"><i class="fa fa fa-twitter" aria-hidden="true"></i></a></button>
      <?php endif ?>
      <?php if ($page->projectLink() != '') : ?>
        <button type="button" class="btn btn-round btn-default" aria-label="External link" style="vertical-align:middle;"><a href="<?php echo $page->projectLink() ?>" target="_blank" class="right"><i class="fa fa-external-link fa" aria-hidden="true"></i> <?php echo l::get('project-page-link') ?></span></a></button>
      <?php endif ?>
      </div>
      <div class="clearfix"></div>

      <!-- tags -->
      <?php if ($page->tags() != '') : ?>
        <hr>
        <b>Tags:</b>
        <?php foreach ($page->tags()->split(',') as $atag) : ?>
          <div class="atag grey"><?php echo $atag ?></div>
        <?php endforeach ?>
      <?php endif ?>

      <!-- docs -->
      <?php if ($page->hasDocuments()) : ?>
        <hr>
        <b>Documents</b><br>
        <ul>
          <?php foreach ($page->documents() as $doc) : ?>
          <li><a href="<?php echo $doc->url() ?>" download><?php echo $doc->filename() ?> (<?php echo $doc->niceSize() ?>)</a></li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <!-- mailchimp integration -->
      <?php if ($page->mailchimp() != '') : ?>
        <hr>
        <?php $listID = $page->mailchimp() ?>
        <!-- <?php snippet('Mailchimp') ?>
        <?php snippet('mailingList', array('listID' => $listID)) ?> -->
      <?php endif ?>

      <!-- description -->
      <div class="pt">
      <?php if ($page->tags() != '' && $page->mailchimp() == '') : ?><hr><?php endif ?>
      <?php echo $page->text()->kirbytext() ?>
      </div>

    </div><!--endcol-->
  </div><!--endrow-->

</main>

<?php snippet('footer') ?>
