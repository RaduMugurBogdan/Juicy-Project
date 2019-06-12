<?php
class ShopController
{
    public function __contruct()
    { }
    
    public function getItems($cat = "", $brand = "", $sizePack = ""){
        require_once '../models/ShopModel.php';
        $Shop = new ShopModel();
        $result = $Shop->getItems($cat,$brand,$sizePack);
        return $result ? $result : false;
    }

    public function getItemById($id = ""){
        require_once '../models/ShopModel.php';
        $Shop = new ShopModel();
        $result = $Shop->getItemById($id);
        return $result ? $result : false;
    }

    
}
