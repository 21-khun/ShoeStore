<?php
// $items=$query->selectAll("items");
$images=$query->selectOne("shoes",$_GET['id']);
// dd($images);
view("item",[
    // "items"=>$items,
    "images"=>$images
]);