<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Food Menu</title>
        
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
            
            .btn{
                padding: 5px;
	font-size: 15px;
	color: white;
	background: cadetblue;
	border: none;
	border-radius: 3px;
            }
        </style>
    </head>
    <body>
        <h2 style="background-color: black;width: 15%; height: 20%; color: white "><pre>  Food Menu</pre></h2>
        <form method="POST" style="float: right">
        <input style="float: right" type="submit" name="submit" value="search" class="btn">
        <input style="float: right" type="search" name="search" id="mySearch" placeholder="Search for item">  
            </form>
            <?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="select * from items;";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            echo"<table><tr><th>Item name</th><th>Price</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo"<tr><td>".$row["itemname"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo"</table><br><br>";
        }
        else{
            echo '0 results';
        }
         if(isset($_POST['submit']))
            {
                $search=$_POST['search'];
                $query ="SELECT * FROM items WHERE name LIKE %{'$search}%";
                $result1=$conn->query($query);
                if($result->num_rows>0)
                {
                     echo"<table><tr><th>Item name</th><th>Price</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo"<tr><td>".$row["name"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
            $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
                }
            }
        ?>
        <br><br><a href="orders.php" class="btn">Place your Order</a><br><br>
        <a href="users.php" class="btn">Back</a>
    </body>
</html>
