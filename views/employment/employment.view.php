<h2>Employment</h2>


<?php foreach($vars['employment'] as $employment) : ?>
    <div><?= $employment->company ?></div>
    <div><?= $employment->designation ?></div>
    <div><?= $employment->fromyear ?>/<?= $employment->toyear ?></div>
    
    <div><?= $employment->company ?></div>
    <div><?= $employment->description ?></div>
<?php endforeach ?>