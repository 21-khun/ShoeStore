<?php
$orders=$query->selectALl("orders");
$messages=$query->selectAll("Messages");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Order Box</h1>
<table cellspacing="0" cellpadding="5" border="1px">
    <tr>
        <th>ID</th>
        <th>Shoe_id</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>UserName</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>Address</th>
        <th>Visa</th>
    </tr>
    <?php foreach($orders as $order):?>
        <tr>
            <td><?= $order->id?></td>
            <td><?= $order->shoe_id?></td>
            <td><?= $order->brand?></td>
            <td><?= $order->price?></td>
            <td><?= $order->quantity?></td>
            <td><?= $order->size?></td>
            <td><?= $order->userName?></td>
            <td><?= $order->phoneNumber?></td>
            <td><?= $order->email?></td>
            <td><?= $order->address?></td>
            <td><?= $order->visa?></td>

        </tr>
    <?php endforeach; ?>
</table><br><br><br>

<h1>Message BOx</h1>
<table cellspacing="0" cellpadding="5" border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Message</th>

    </tr>
    <?php foreach($messages as $message):?>
        <tr>
            <td><?= $message->id?></td>
            <td><?= $message->userName?></td>
            <td><?= $message->email?></td>
            <td><?= $message->phoneNumber?></td>
            <td><?= $message->message?></td>


        </tr>
    <?php endforeach; ?>
</table><br> <br><br>
<form action="/" method="GET">
<input type="submit" style="width:100px;height:40px" value="LogOut">
</form>
</body>
</html>