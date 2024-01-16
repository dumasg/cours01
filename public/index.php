<?php

$router = $_GET["page"];

define('VIEW_PATH', dirname(__DIR__) . './pages');


switch($router){
    case 'cv':
        require '../pages/page.php';
        break;
    case 'contact':
        require '../pages/contact.php';
        break;
    case 'hobbies':
        require '../pages/hobby.php';
        break;
    default:
        require '../pages/notfound.php';
        break;
    }