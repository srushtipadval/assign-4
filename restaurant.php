<?php
header("Content-type: application/json");
require 'data.php';



if (isset($_GET['req'])) {
    $jsonData = file_get_contents("https://davids-restaurant.herokuapp.com/menu_items.json");
    $dataList = json_decode($jsonData, true)['menu_items'];     

    try {
    
        $details = new Restaurant($dataList);
       
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }

    $req=$_GET['req'];
    switch ($req) {
        case 'menudetail':
            $name=$_GET['name'];
            echo $details->getDetails($name);
            break;
        case 'menulist':
            echo $details->getList();
            break;
        default:
            echo json_encode(["In-valid request"]);
            break;
    }
}
?>