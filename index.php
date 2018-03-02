<?php

include 'config.php';
include 'inc/connexion.php';

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else
    $page = 'accueil';

switch ($page){
    default:
    case 'accueil':
        $file = 'accueil.php';
        break;
    case 'detail':
        $file = 'detail.php';
        break;
}

include 'inc/' . $file;
include THEME . 'layout.html.php';