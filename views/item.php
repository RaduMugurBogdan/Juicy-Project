<?php 
if (isset($_GET['id'])) {
    require_once '../controllers/ShopController.php';
    $Shop = new ShopController();
    $res  = $Shop->getItemById($_GET['id']);
    // foreach($res as $r){
    //     echo $r['url'];
    // }
    echo $res[0]['url']; // [{"name":"dani"}];

}
