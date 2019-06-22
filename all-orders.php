<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">   
    <head>
        <title>All Orders</title>
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
    </head>
    <center><body>
         <?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="select * from item_ordered";
        $result=$conn->query($sql);
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
        ?>
        </body>
    </center>
</html>

