<?php
$name=$_POST['name'];
$password=$_POST['password'];
if($name=="admin" && $password=="1234"){ ?>
<form action="/klm" method="post">
<input type="submit" value="Go TO Admin Panel">
</form>

<?php
}
else{
    header('location:/login?login=failed');

    
}
?>


