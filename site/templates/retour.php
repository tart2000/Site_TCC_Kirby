<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="container bmt">
        <div class="row center">
            <h2><a href="<?php echo $page->url() ?>">Retour sur <?php echo $page->title()->html() ?></a></h2>
        </div>
        <div class="row center">
            <div class="col-md-5 left">
                <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
                <a href="<?php echo $page->url() ?>">
                  <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive">
                </a>
                <?php endif ?>
                <h3><?php echo $page->place() ?> - <?php echo $page->dates() ?> <?php echo $page->year() ?></h3>
                <em><?php echo $page->participants() ?> participants</em>
                <p><?php echo $page->text()->kirbytext() ?></p>
            </div>
            <div class="col-md-7">
                <div class="responsive-video">
                    <iframe src="//player.vimeo.com/video/<?php echo $page->vimeoLink() ?>?portrait=0" width="5" height="3" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="bmt">
                    <a href="<?php echo $site->url()?>/projets/<?php echo $page->connect() ?>" class="btn btn-theme right">En savoir plus sur ce projet</a>
                </div>
            </div>
        </div>

        <!-- Images -->
        <?php if ($page->images() != '') : ?>
        <div class="row">
            <?php foreach($page->images()->sortBy('sort', 'asc')->offset('1') as $image): ?>
                <div class="col-md-3 col-xs-6">
                    <a href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" class="img-responsive mt mb"></a>
                </div>
            <?php endforeach ?>
        </div>
        <?php endif ?>

        <!-- Partenaires -->
        <?php if ($page->children() != '') : ?>
            <hr>
            <div class="row center">
                <h2>Partenaires</h2>
            </div>
            <div class="row pb partners">
                <!-- Co-organisateurs -->
                <?php if ($page->children()->filterBy('category','co',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Co-organisateurs</h3></div>
                    <?php foreach ($page->children()->filterBy('category','co',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="clearfix"></div>

                <!-- Sponsors -->
                <?php if ($page->children()->filterBy('category','sponsor',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Commanditaires</h3></div>
                    <?php foreach ($page->children()->filterBy('category','sponsor',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="clearfix"></div>

                <!-- Service -->
                <?php if ($page->children()->filterBy('category','service',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Partenaires de service</h3></div>
                    <?php foreach ($page->children()->filterBy('category','service',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="clearfix"></div>

                <!-- Technique -->
                <?php if ($page->children()->filterBy('category','technical',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Partenaires techniques</h3></div>
                    <?php foreach ($page->children()->filterBy('category','technical',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="clearfix"></div>


                <!-- Partenaires communauté -->
                <?php if ($page->children()->filterBy('category','community',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Partenaires communauté</h3></div>
                    <?php foreach ($page->children()->filterBy('category','community',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <div class="clearfix"></div>

                <!-- Partenaires diffusion -->
                <?php if ($page->children()->filterBy('category','diffusion',',') != '') : ?>
                    <div class="col-sm-2 partner"><h3>Partenaires de diffusion</h3></div>
                    <?php foreach ($page->children()->filterBy('category','diffusion',',') as $p) : ?>
                        <?php $size = html($p->superWidth()) ?>
                        <?php $size2 = $size * 2 ; ?>
                        <div class="col-sm-<?php echo $size2 ?> partner">
                            <?php if ($p->images() != '') : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><img src='<?php echo $p->images()->first()->url() ?>' class="img-responsive"></a>
                            <?php else : ?>
                                <a href="<?php echo $p->lien() ?>" target="_blank"><?php echo $p->title() ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>

            </div>
        <?php endif ?>

  </main>
    <!-- navigation -->
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">
          <nav class="" role="navigation">
            <ul class="pager">
              <?php if($prev = $page->prev()): ?>
              <li class="previous"><a href="<?php echo $prev->url() ?>">&larr; Précédent</a></li>
              <?php endif ?>
              <?php if($next = $page->next()): ?>
              <li class="next"><a href="<?php echo $next->url() ?>">Suivant &rarr;</a></li>
              <?php endif ?>
            </ul>
          </nav>
      </div>
    </div>

<?php snippet('footer') ?>