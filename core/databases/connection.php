<?php

class connection{
    public static function connect($config){ 
       try{
            return  $pdo=new pdo("{$config['host']};dbname={$config['dbname']}",$config['user'],$config['password']);
          }catch(PDOException $e){
            echo  $e->getMessage();
          }

    }
}