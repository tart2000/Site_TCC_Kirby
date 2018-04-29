<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <li class="breadcrumb-item">
      <a href="<?= $crumb->url() ?>">
        <?= html($crumb->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <!--add to list element aria-current="page"-->
  </ol>
</nav>
