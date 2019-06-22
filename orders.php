<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order</title>
        <link rel="stylesheet" href="cs.css">
        <style>
            tr:hover{background-color: cadetblue}
             
        </style>
    </head>
    <body>
       <form method="post">
           <center> <label>Enter the username:</label><input type="text" name="name" required> 
            <table class="input-group">
                   <tr>
                       <th>Enter the Items</th><br>	
                <th>Enter the Price</th>
	</tr>
	   <tr>		
		  <td>
                      <input type="text" name="first" required>
                  </td><br>
                  <td>
                      <pre>  <input type="number" name="price" required=""></pre>
                  </td>
	   </tr>
</table>
               <input type="submit" name="submit" value="submit">
           </center></form>
        
        <?php
         $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
         if (isset($_POST["submit"])) {
        $size=$_POST['first'];
        $name=$_POST['name'];
        $price=$_POST['price'];
         $q = "Insert into item_ordered (username,itemname,price)  values ('$name','$size',$price);";   
         if($conn->query($q)===TRUE)
         {
             $msg="Your Order is Taken Successfully";
              echo"<script type='text/javascript'>alert('$msg');</script>";
         }
         else{
             $msg="Your Order is not placed";
              echo"<script type='text/javascript'>alert('$msg');</script>";
         }
        }
         
	?>
     <br><br><a href="index.php" class="btn" style="float:right">Food Menu</a><br><br>
    <center> <a href="payment.php" class="btn">Pay</a><br><br></center>
    <a href="orders.php" class="btn">Back</a>
</body>
</html>
