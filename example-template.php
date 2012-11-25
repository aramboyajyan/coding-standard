<?php

/**
 * @file
 * Coding standard for HTML and PHP templates.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */
?>

<!-- #example -->
<section id="example" class="sample-class <?php print $extra_class ? $extra_class : ''; ?>">

  <?php // Block comments ?>
  <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
  <?php endif; ?>

  <!-- #items -->
  <div id="items">
    <?php foreach ($items as $item): ?>
      <div class="item"><?php print $item->title; ?></div>
    <?php endforeach; ?>
  </div>
  <!-- /#items -->

  <!-- #description -->
  <div id="description"><?php print $description; ?></div>
  <!-- /#description -->

</section>
<!-- /#example -->
