<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transaction</title>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <form method="POST">
            <div class="input-group">
            <label>Pay here:</label>
            <label>Card number:</label><input type="text" name="card" value="null">
            <label>Enter CVV number:</label><input type="text" name="cvv" value="null">
            <label>Mobile Number:</label><input type="text" name="mob">
            <label>Enter the Payment Method:</label><input type="text" name="meth">
            <label>Enter the amount:</label><input type="number" name="am">
            <input type="submit" name="submit" value="pay" class="btn">
            </div>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
            $card=$_POST['card'];
            $cvv=$_POST['cvv'];
            $mob=$_POST['mob'];
            $meth=$_POST['meth'];
            $am=$_POST['am'];
            $s="insert into payment (card_number,cvv,mobile_no,payment_type,payed_amount) values('$card','$cvv','$mob','$meth','$am');";
            if($conn->query($s) === TRUE)
        {
            $msg="Payment is done";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        else
        {
            $msg="Payment is not done";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
        }
        ?>
        <a href="payment.php" class="btn">Back</a><br><br>
        <a href="logout.php" class="btn">logout</a>
    </body>
</html>
 