<div class="row">
  <div class="col-md-12">
<?php if(!empty($content['top'])): ?>
    <?php print $content['top']; ?>
<?php endif; ?>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
<?php if(!empty($content['left'])): ?> 
    <?php print $content['left']; ?>
<?php endif; ?>
  </div>
  <div class="col-md-6 last">
<?php if(!empty($content['right'])): ?> 
    <?php print $content['right']; ?>
<?php endif; ?>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
<?php if(!empty($content['bottom'])): ?> 
    <?php print $content['bottom']; ?>
<?php endif; ?>
  </div>
</div>