<?php
$fileSaveSession = 'saveSession.txt';
$usersVisited = [];

session_start();
$_SESSION['userSession'] = [];
if(!isset($_SESSION['userForm'])){
    $_SESSION['userForm'] = [];
}

$id_session = session_id();
array_push($_SESSION['userSession'], $id_session);

$fichier = fopen($fileSaveSession, 'r');
$i = 0;
while ( ($ligne = fgets($fichier)) !== false){
    $usersVisited[$i] = $ligne;
    $i++;
}

//var_dump($usersVisited);

//if(!in_array($id_session, $usersVisited)) {
//    if (is_writable($fileSaveSession)) {
//        if (!$fp = fopen($fileSaveSession, 'a')) {
//            //echo "impossible de lire le fichier ($fileSaveSession)";
//            exit();
//        }
//
//        if (fwrite($fp, $id_session . PHP_EOL) === false) {
//          //  echo "Impossible d'écrire dans le fichier";
//        }
//
//        //echo "écriture ok ! ";
//        fclose($fp);
//    } else {
//        //echo "le fichier n'est pas accessible en écriture";
//    }
//}

//if(!array_search($id_session, $userVisited)){
//    array_push($userVisited, $id_session);
//}

$routerArray = [
    "page",
    "contact",
    "hobby"
];

define('VIEW_PATH', "../pages/");

$router = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);
$router = $router ?? "page";

ob_start();
$render = "";

if(array_search($router, $routerArray) !== false){
    $i = array_search($router, $routerArray);
    require VIEW_PATH . $routerArray[$i] . ".php";
}else{
    require VIEW_PATH . "notfound.php";
}

$render = ob_get_clean();
echo $render;