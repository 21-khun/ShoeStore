<?php

// $router->register([
//     ""=>"controllers/indexController.php",
//     "about"=>"controllers/aboutController.php",
//     "contact"=>"controllers/contactController.php",
//     "order"=>"controllers/orderController.php",
//     'name'=>"controllers/addName.php"
// ]);

$router->get("","controllers/indexController.php");
$router->get("about","controllers/aboutController.php");
$router->get("contact","controllers/contactController.php");
$router->post("name","controllers/insert.php");
$router->get("shop","controllers/shopController.php");
$router->get("service","controllers/serviceController.php");
$router->get("item","controllers/itemController.php");
$router->post("addCart","controllers/addCartController.php");
$router->post("order","controllers/orderController.php");
$router->get('login',"controllers/adminController.php");

$router->post('klm',"controllers/databasesController.php");
$router->post('message',"controllers/messageController.php");
$router->get('thank',"controllers/thankController.php");


