<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Payment Details</title>
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
        <form method="post">
            <label>enter the username:</label>
            <input type="text" name="name" required>
            <input type="submit" value="submit" name="submit">
        </form>
        <?php
         $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if (isset($_POST["submit"])) 
        {
            $name=$_POST['name'];
            $sql="select username,sum(price) as price from item_ordered where item_ordered.username='$name'";
            $result=$conn->query($sql);
                if($result->num_rows>0)
                {
                     echo"<table><tr><th>Name</th><th>Price</th></tr>";
            while($row = $result->fetch_assoc())
            {
                echo"<tr><td>".$row["username"]."</td><td>".$row["price"]."</td></tr>";
            }
            echo"</table>";
        }
        else{
           $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
                }
        }
        ?>
        <br><br>
        <a href="pay.php" class="btn">Pay</a>
    </body>
</html>

