<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">   
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table,th,tr,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            th,td{
                padding:10px;
                text-align: center;
            }
            tr:hover{background-color: cadetblue}
        </style>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <div class="topnav">
            <a style="float: right; background-color: rgb" class="active" href="admin.php">Logout</a></div>
        <form  method="POST">
            <label>enter the username:</label>
            <input type="text" name="name" id="user">
           
            <input type="submit" name="submit" value="show previous order details" class="btn">
        </form><br><br>
         <?php
        if(isset($_POST["submit"]))
        {
            $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        $name=$_POST["name"];
        $sql="select * from item_ordered where username='$name'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
         if($result->num_rows>0)
        {
            echo"<table><tr><th>Name</th><th>Item</th><th>Cost</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo"<tr><td>".$row["username"]."</td><td>".$row["itemname"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
            $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        }
        ?>
    <center> <a href="index.php" class="btn">Food Menu</a></center>

    </body>
</html>
