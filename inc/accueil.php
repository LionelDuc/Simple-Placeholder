<?php
if (isset($_GET['action'])){
    $action = $_GET['action'];
}else
    $action = 'bulletin';

switch ($action){
    default;
    case 'bulletin':
        bulletinAction();
        break;
    case 'detail':
        bulletinDetail();
        break;
}

function bulletinAction(){
    global $pdo;

    $sql = 'SELECT l.id, ville, meteo,contenu,date FROM bulletin JOIN temps t ON bulletin.temps_id= t.id JOIN lieu l ON l.id = bulletin.lieu_id ORDER BY date DESC ';
    $result = $pdo->query($sql);
    $bulletins =$result->fetchAll();
    include THEME .'vue/accueil.html.php';
    var_dump($bulletins);
}

function bulletinDetail(){

}