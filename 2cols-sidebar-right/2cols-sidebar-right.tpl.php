<div class="row">
  <div class="col-md-12">
<?php if(!empty($content['top'])): ?>
    <?php print $content['top']; ?>
<?php endif; ?>
  </div>
</div>

<div class="row">
  <div class="col-md-9">
<?php if(!empty($content['center'])): ?> 
    <?php print $content['center']; ?>
<?php endif; ?>
  </div>
  <div class="col-md-3">
<?php if(!empty($content['sidebar'])): ?> 
    <?php print $content['sidebar']; ?>
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