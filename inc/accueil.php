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
