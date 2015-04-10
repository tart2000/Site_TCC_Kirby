<?php snippet('head') ?>
<div class="project-header">

</div>

  <main class="container">

    <h1><?php echo $page->title()->html() ?></h1>

    <h3><?php echo $page->short() ?></h3>

    <div class="row">
      <div class="col-md-8">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php $first = $page->images()->first() ?>
            <?php $index0 = 0 ?>
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $index0 ?>" <?php if($image == $first) echo 'class="active"' ?>></li>
            <?php $index0++; ?>
            <?php endforeach ?>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php $first = $page->images()->first() ?>
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
              <div class="item <?php if($image == $first) echo 'active' ?>">
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
              </div>
            <?php endforeach ?>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- end carousel -->

        <?php echo $page->text()->kirbytext() ?>
      </div>

      <!-- 2ème colonne -->
      <div class="col-md-4">
        <img src="/assets/images/<?php echo $page->title() ?>.png" class="img-responsive pb">
        <a href="<?php echo $page->projectLink() ?>" target="_blank"><?php echo $page->projectLink() ?></a>
        <hr>
        <b>Tags:</b> <?php echo $page->tags() ?>
        <hr>
        <?php $thetag=$page->projectTag(); ?>
        <strong>Editions précédentes</strong></br>
        <?php foreach (page('retours')->children()->filterBy('tags',$thetag,',') as $retour) : ?>
            <a href="<?php echo $retour->Url() ?>">Retour sur <?php echo $retour->title() ?></a></br>
            <p><?php echo $retour->dates() ?><br>
            <?php echo $retour->place() ?></p>
        <?php endforeach ?>
        <strong>Nouvelles</strong></br>
        <?php foreach (page('news')->children()->filterBy('tags',$thetag,',') as $retour) : ?>
            <a href="<?php echo $retour->Url() ?>"><?php echo $retour->title() ?></a></br>
        <?php endforeach ?>
      </div>
    </div>
    <!-- end 2ème colonne -->

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>