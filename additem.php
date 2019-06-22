<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adding</title>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <form method="POST">
        <div class="input-group">
            <label>Enter the Item name which you want to Add</label>
            <input type="text" name="item" id="item" required>
        </div>
            <div class="input-group">
                <label>Enter the cost of the Item</label>
                <input type="number" name="cost" id="cost" required>
            </div>
            <div class="input-group">
                <input type="submit" name="submit" value="Add to menu">    
            </div>
        </form>
        <?php
         $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if(isset($_POST['submit']))
        {
       $name = $_POST['item'];
$price = $_POST['cost'];
$sql = "INSERT INTO items (itemname, price) VALUES ('$name', $price)";
$conn->query($sql);
 $msg="Item is added to menu successfully";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
        <a href="admin12.php" class="btn">Back</a>
    </body>
</html>