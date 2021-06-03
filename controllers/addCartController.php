<?php
// view("addCart");
$id=$_POST['id'];
$getItems=$query->selectOne("shoes",$id);
view("addCart",[
    'getItems'=>$getItems
    
]);