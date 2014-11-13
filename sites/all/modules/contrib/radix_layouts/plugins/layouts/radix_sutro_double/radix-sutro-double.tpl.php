<?php
/**
 * @file
 * Template for Radix Sutro Double.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display sutro-double clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 header panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 column1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column1']; ?>
        </div>
      </div>
      <div class="col-md-6 column2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column2']; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 middle panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['middle']; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 secondcolumn1 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['secondcolumn1']; ?>
        </div>
      </div>
      <div class="col-md-6 secondcolumn2 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['secondcolumn2']; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 footer panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </div>

</div><!-- /.sutro-double -->
