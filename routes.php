<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('home', 'App/Http/Controllers/HomeController.php@index');

$router->get('users', 'App/Http/Controllers/UsersController.php@index');
$router->get('users/create', 'App/Http/Controllers/UserController.php@create');

$router->get('education', 'App/Http/Controllers/EducationController.php@index');
$router->get('skills', 'App/Http/Controllers/SkillsController.php@index');

$router->get('employment', 'App/Http/Controllers/EmploymentController.php@index');

$router->get('hobbies', 'App/Http/Controllers/HobbiesController.php@index');
$router->get('login', 'App/Http/Controllers/LoginController.php');
$router->get('logout', 'App/Http/Controllers/LoginController.php@logout');