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
    <center>
        <?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        $s="select * from payment";
        $result=$conn->query($s);
            if($result->num_rows>0)
            {
                echo"<table><tr><th>Card Number</th><th>CVV</th><th>Mobile Number</th><th>Payment Method</th><th>Payed amount</th></tr>";
                while($row = $result->fetch_assoc())
                {
                   echo"<tr><td>".$row["card_number"]."</td><td>".$row["cvv"]."</td><td>".$row["mobile_no"]."</td><td>".$row["payment_type"]."</td><td>".$row["payed_amount"]."</td></tr>";
                }
                echo"</table>";
            }
            else
            {
                $msg="Enter valid information";
              echo"<script type='text/javascript'>alert('$msg');</script>";
            }

            ?></center>
    <a href="admin12.php" class="btn">Back</a>
    </body>
</html>

