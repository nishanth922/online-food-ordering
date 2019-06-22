<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="cs.css">
    </head>
    <body>
        <div class="header">
        <p><h2>Admin Login</h2></p>
          </div>
        <form method="POST">
         <div class="input-group"> 
             <label>Username</label>
             <input name="admin" id="admin" type="text" required>
         </div>
          <div class="input-group">
              <label>Password</label>
            <input name="pass" id="pass" type="password" required>
          </div>
          <div class="input-group">
              <input type="submit" name="submit" value="Login" class="btn">
          </div>
        </form>
            <?php
             $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
         if (isset($_POST["submit"])) {
          $admin=$_POST["admin"];
          $pass=$_POST["pass"];
          $sql="select username,password from users where role='admin'";
          $a=$conn->query($sql);
          while($row=$a->fetch_assoc())
          {
        if($admin == $row['username'] && $pass == $row['password'])
        {
            header("Location: admin12.php");
        }
          }
          $msg="enter valid username and password";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
            ?>      
        
    </body>
</html>
