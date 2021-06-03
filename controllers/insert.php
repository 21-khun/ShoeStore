<?php

$query->insert([
 'name'=>$_POST['name'],
 'address'=>$_POST['address']
],"users");

header("location:/");