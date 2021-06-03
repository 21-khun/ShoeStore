<?php

function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

function view($uri,$data=[]){
   extract($data);
    return require "views/$uri.view.php";
}