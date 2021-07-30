
<h1>Education</h1>
<?php foreach($vars['education'] as $education) : ?>
    <div><?= $education->course ?></div>
    <div><?= $education->college ?></div>
    <div><?= $education->fromyear ?>/<?= $education->toyear ?></div>
    
    <div><?= $education->description ?></div>
<?php endforeach ?>


