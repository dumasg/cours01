<?php
$fileSaveSession = 'saveSession.txt';
$usersVisited = [];

session_start();
$_SESSION['userSession'] = [];
$id_session = session_id();
array_push($_SESSION['userSession'], $id_session);

$fichier = fopen($fileSaveSession, 'r');
$i = 0;
while ( ($ligne = fgets($fichier)) !== false){
    $usersVisited[$i] = $ligne;
    $i++;
}

//var_dump($usersVisited);

if(!in_array($id_session, $usersVisited)) {
    if (is_writable($fileSaveSession)) {
        if (!$fp = fopen($fileSaveSession, 'a')) {
            //echo "impossible de lire le fichier ($fileSaveSession)";
            exit();
        }

        if (fwrite($fp, $id_session . PHP_EOL) === false) {
          //  echo "Impossible d'écrire dans le fichier";
        }

        //echo "écriture ok ! ";
        fclose($fp);
    } else {
        //echo "le fichier n'est pas accessible en écriture";
    }
}

//if(!array_search($id_session, $userVisited)){
//    array_push($userVisited, $id_session);
//}


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