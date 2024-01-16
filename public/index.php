<?php

$pageCourant = $_SERVER['REQUEST_URI'];

switch($pageCourant){
    case "/":
        require './index.php';
        break;
    case "/hobbie.php":
        require './hobbie.php';
        break;
    case "/contact.php":
        require './contact.php';
        break;
    default:
        require './notfound.php';
        break;
}