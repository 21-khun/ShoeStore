<?php

class Router{
    protected $routes=[
        "GET"=>[],
        "POST"=>[]
    ];

public function get($uri,$controller){
    $this->routes["GET"][$uri]=$controller;

}
public function post($uri,$controller){
    $this->routes["POST"][$uri]=$controller;

}
public static function load($fileName)
{
    $router=new Router;
    require $fileName;
    return $router;
}
public function direct($uri,$method)
{
    if(array_key_exists($uri,$this->routes[$method])){
       return $this->routes[$method][$uri];
    }else{
        echo "404 ERROR";
        die();
        
    }
    
}


}
