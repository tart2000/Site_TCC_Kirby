<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <a class="navbar-brand logo" href="<?php echo $site->url ?>"><img src="<?php echo $site->url() ?>/assets/images/logo.svg" class="img-responsive"></a>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php foreach($pages->visible() as $p): ?>
        <?php if($p->menutitle() != ''): ?>
        <li><a <?php e($p->isOpen(), ' class="active"') ?>href="<?php echo $p->url() ?>"><?php echo $p->menutitle()->text() ?></a></li>
        <?php else: ?>
        <li><a <?php e($p->isOpen(), ' class="active"') ?>href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
        <?php endif ?>
        <?php endforeach ?>
        <li><a href="https://medium.com/techno-culture-club">BLOG <i class="fa fa-external-link"></i></a></li>
        <li><a>|</a></li>
        <!-- Languages -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><?php echo $site->language()->code() ?></a>
          <ul class="dropdown-menu" role="menu">
              <?php foreach($site->languages() as $language): ?>
              <li<?php e($site->language() == $language, ' class="active"') ?>>
                  <a href="<?php echo $page->url($language->code()) ?>">
                    <?php echo html($language->name()) ?>
                  </a>
              </li>
              <?php endforeach ?>
           </ul>
        </li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="menu-spacer"></div>
