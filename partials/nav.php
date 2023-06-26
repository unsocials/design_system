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
        <button type="button" class="btn btn-outline-primary me-2"><a href="/content">Content</a></button>
        <button type="button" class="btn btn-outline-primary me-2"><a href="/components">Components</a></button>
        <button type="button" class="btn btn-outline-primary me-2"><a href="/layout">Layout</a></button>
      </div>
    </div>
  </header>

  <?php if(isset($attr['nav'])): ?>
    <?php if($attr['nav'] == 'content'):?>
    <div id="navbar" class="nav-scroller py-1 mb-3 border-bottom">
      <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=typography">Typography</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=link">Link</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=button">Button</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=list">List</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=media">Media</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=color">Color</a>
        <a class="nav-item nav-link link-body-emphasis" href="/content?section=font">Font</a>
      </nav>
    </div>
    <?php elseif($attr['nav'] == 'components'): ?>
      <div id="navbar" class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=form">Form</a>
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=table">Table</a>
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=accordion">Accordion</a>
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=alert">Alert</a>
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=card">Card</a>
          <a class="nav-item nav-link link-body-emphasis" href="/components?section=menu">Menu</a>
        </nav>
      </div>
    <?php else: ?>
      <!-- Nulla -->
    <?php endif ?>
  <?php endif ?>
  
</div>