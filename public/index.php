<?php


session_start();
$id_session = session_id();
$userVisited = [];

if(!array_search($id_session, $userVisited)){
    array_push($userVisited, $id_session);
}

define('VIEW_PATH', "../pages/");

$router = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$router = $router ?? 'cv';
switch($router){
    case 'cv':
        require VIEW_PATH .'page.php';
        break;
    case 'contact':
        require VIEW_PATH . 'contact.php' ;
        break;
    case 'hobbies':
        require VIEW_PATH . 'hobby.php';
        break;
    default:
        require VIEW_PATH . 'notfound.php';
        break;
    }