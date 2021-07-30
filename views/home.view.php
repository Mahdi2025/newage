<?php require 'views/partials/header.view.php' ?>
<head>
  <link rel="stylesheet" href="main.css/style.css">
</head>

<h1>myCV<h1>
<div class="main">
    <label>name:</label><?= $vars['user']->name ?>
    <br>
    <label>position:</label><?= $vars['user']->position ?>
    <br>
    <label>age:</label><?= $vars['user']->age ?>
    <br>
    <label>email:</label><?= $vars['user']->email ?>

    
   
</div>


<h1>Educations</h1>


<?php foreach ($vars['educations'] as $education) : ?>
    <div class="row">
        <div class="col-12"><?= $education->course ?></div>
        <div class="col-12"><?= $education->college ?></div>
        <div class="col-12"><?= $education->description ?></div>
    </div>
<?php endforeach ?>

<h1>skills</h1>


<?php foreach ($vars['skills'] as $skills) : ?>
    <div class="row">
        <div class="col-12"><?= $skills->skill ?></div>
    </div>
<?php endforeach ?>


<h1>hobbies</h1>


<?php foreach ($vars['hobbies'] as $hobbies) : ?>
    <div class="row">
        <div class="col-12"><?= $hobbies->hobbies ?></div>
    </div>
<?php endforeach ?>


<h1>Employment</h1>
<?php foreach ($vars['employment'] as $Employment) : ?>
    <div class="row">
        <div class="col-12"><?= $Employment->company ?></div>
    </div>
<?php endforeach ?>



 <?php require 'views/partials/footer.view.php' ?>