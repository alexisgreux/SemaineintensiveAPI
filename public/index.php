<?php

<<<<<<< HEAD
include '../database/database.php';
=======
include '../database/database

>>>>>>> 586144addb2e73ca3aad7fb4351723c0a9e63459

/**
 * Routing
 */

define ('URL','http://localhost:8888/semaineIntensiveAPI/public/');

 //Get q param
 $q = !empty($_GET['q']) ? $_GET['q'] : 'home';

 //define controller
 $controller = '404';

 if($q == 'home')
{
    $controller = 'home';
} else if ($q == 'about-us')
{
    $controller = 'about';
} else if (preg_match('/^page\/[1-9][0-9]*$/', $q))
{
    $controller = 'page';
}
 

 //include controller
 include '../controllers/'.$controller.'.php';