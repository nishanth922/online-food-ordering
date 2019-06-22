<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">   
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <center><body>
        <form  method="POST">
            <label>enter the username:</label>
            <input type="text" name="name" id="user" required=""><br><br>
           
            <input type="submit" name="submit" value="show order details">
        </form>
         <?php
        if(isset($_POST["submit"]))
        {
       
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if(isset($_POST["submit"]))
        {
        $name=$_POST["name"];
        $sql="select * from orders  where username= '$name' ";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            echo"<table><tr><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Contact</th><th>Description</th><th>Date</th><th>Payment_type</th><th>Total</th><th>Status</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo"<tr><td>".$row["name"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td><td>".$row["description"]."</td><td>".$row["date"]."</td><td>".$row["payment_type"]."</td><td>".$row["total"]."</td><td>".$row["status"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
           $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        }
        }
        ?>

        </body></center>
</html>

