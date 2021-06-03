<?php
require "core/functions.php";
// require "core/databases/connection.php";
// require "core/databases/queryBuilder.php";
// require "core/Router.php";
// require "core/Request.php";
$config=require "config.php";
$query=new queryBuilder(connection::connect($config["databases"]));
