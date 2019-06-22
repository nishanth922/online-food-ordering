<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title> Home Page</title>
        <link rel="stylesheet" href="cs.css">
</head>

<body>
      <?php
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        ?>
    <div class="topnav">
  <a style="background-color: orange" class="active" href="#home">Home</a>
  <a style="background-color: orange" href="admin11.php">Admin Login</a>
  <a style="float: right; background-color: orange" href="login.php">Login</a>
   <a style="float: right; background-color: orange" href="register.php">Sign up</a></div>
    <img src="C:\Users\Nishanth\Desktop\logo.png" alt="logo" width="" height="">
   
       
    </body>
</html>





