<?php
// dd($_POST['message'])
$query->insert([
    'userName'=>$_POST['name'],
    'email'=>$_POST['email'],
    'phoneNumber'=>$_POST['phone'],
   
    'message'=>$_POST['message']
   ],"Messages");
   
   header("location:/thank");