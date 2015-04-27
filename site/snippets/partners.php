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