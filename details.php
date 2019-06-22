<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Details</title>
        <link rel="stylesheet" href="cs.css">
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
    <body>
     <form method="POST">
          <div class="input-group">  <label>Enter the Username</label>
              <input type="text" name="name" id="name" required></div>
              
              <div class="input-group">
              <input type="submit" name="submit" value="Submit" class="btn">
          </div>
        </form>
<?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if(isset($_POST["submit"]))
        {
            $name=$_POST['name'];
        
            $sql="select username,id from users";
            $a=$conn->query($sql);
           
         $s1="select users.name,users.username,users.contact,orders.status from orders inner join users on orders.username=users.username where users.username= $name";
                    $result = $conn->query($s1);
                    if($result -> num_rows >0)
                    {
                        echo"<table><tr><th>Name</th><th>Username</th><th>Contact</th><th>Status of the order</th></tr>";
                        while($row = $result->fetch_assoc())
                        {
                            echo"<tr><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["contact"]."</td><td>".$row["status"]."</td></tr>";
                        }
                        echo"</table>";
                    }
                    else{
                        $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
                    }
                }
        ?>
    </body>
</html>
