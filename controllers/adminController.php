
<?php
require "views/partials/heading.php";
?>

<div class="container" style="background:white;height:100vh;">
<h1>Log In Here!</h1>
    <div class="col-xs-12">
        <div class="col-md-6">
        <form action="logIn.php" class="form-group" method="post">
        <label for="fullname"> Name:</label>

      <input type="text" id=" fullname" name="name" class="form-control" required>

     <label for="ph">Password :</label>
     <input type="password" id="ph" name="password" class="form-control" required><br>

     <input type="submit" value="Log In" class="btn btn-danger"><br>
</form>

        </div>
    
    

    </div>

</div>

    
<?php
require "views/partials/footer.php";
?>
