<?php

$query->insert([
    "shoe_id" =>$_POST['id'],
    'brand'=>$_POST['brand'],
    "price"=>$_POST['price'],
    "quantity"=>$_POST['quantity'],
    "size"=>$_POST['size'],
    "userName"=> $_POST['name'],
    "phoneNumber"=>$_POST["phone"],
    "email"=>$_POST["email"],
    "address"=>$_POST['address'],
    "visa"=>$_POST["visa"]   
],"orders");
   
view("order");