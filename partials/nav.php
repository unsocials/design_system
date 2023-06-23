<?php 
/**
 * Nav file 
 * Design System
 * Author: Mez - Massimo Maestri
 */
?>

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-8">
        <a href="/">
          <img class="logo" src="<?= $config['path']['img'] . $config['name_logo']; ?>" alt="Logo <?= $config['name']; ?>">
          <span class="fs-4 name"><?= $config['name']; ?></span>
        </a>
      </div>
      <div class="col-4 text-end">
        <button type="button" class="btn btn-outline-primary me-2"><a href="/atomic">Atomic</a></button>
        <button type="button" class="btn btn-outline-primary me-2"><a href="/design">Design</a></button>
      </div>
    </div>
  </header>

  <?php if(isset($attr['nav'])): ?>
    <?php if($attr['nav'] == 'atomic'):?>
    <div id="navbar" class="nav-scroller py-1 mb-3 border-bottom">
      <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=typography">Typography</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=link">Link</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=button">Button</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=list">List</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=media">Media</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=color">Color</a>
        <a class="nav-item nav-link link-body-emphasis" href="/atomic?components=font">Font</a>
      </nav>
    </div>
    <?php elseif($attr['nav'] == 'design'): ?>
      <div id="navbar" class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
          <a class="nav-item nav-link link-body-emphasis" href="/design?components=form">Form</a>
          <a class="nav-item nav-link link-body-emphasis" href="/design?components=table">Table</a>
          <a class="nav-item nav-link link-body-emphasis" href="/design?components=card">Card</a>
          <a class="nav-item nav-link link-body-emphasis" href="/design?components=tab">Tab</a>
          <a class="nav-item nav-link link-body-emphasis" href="/design?components=menu">Menu</a>
        </nav>
      </div>
    <?php else: ?>
      <!-- Nulla -->
    <?php endif ?>
  <?php endif ?>
  
</div>