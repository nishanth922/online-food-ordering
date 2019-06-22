<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editing</title>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <form method="POST">
        <div class="input-group">
            <label>Enter the Item name which you want to Edit</label>
            <input type="text" name="item" id="item" required>
        </div>
            <div class="input-group">
                <label>Enter the new item name</label>
                <input type="text" name="item1" id="item1" required>
            </div>
            <div class="input-group">
                <label>Enter the new cost of the item</label>
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
       $item = $_POST['item'];
$item1 = $_POST['item1'];
$cost=$_POST['cost'];
$sql = "update items set itemname='$item1', price=$cost where itemname='$item'";
$conn->query($sql);
 $msg="Item is edited successfully";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
         <a href="admin12.php" class="btn">Back</a>
    </body>
</html>
