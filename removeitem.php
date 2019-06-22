<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deleting</title>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <form method="POST">
        <div class="input-group">
            <label>Enter the Item name which you want to Remove</label>
            <input type="text" name="item" id="item" required>
        </div>
            <div class="input-group">
                <input type="submit" name="submit" value="Remove from menu">    
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
       
$sql = "delete from items where itemname= '$item'";
$conn->query($sql);
 $msg="Item is removed from menu successfully";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        ?>
         <a href="admin12.php" class="btn">Back</a>
    </body>
</html>
