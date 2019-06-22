<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="stylesheet" href="cs.css">
</head>
<body>
    <div class="header">
        <p><h2>Login to order your favorite food</h2></p>
          </div>
      <form method="POST">
         <div class="input-group"> 
             <label>Username</label>
             <input name="user" id="user" type="text" required>
         </div>
          <div class="input-group">
              <label>Password</label>
            <input name="pass" id="pass" type="password" required>
          </div>
          <div class="input-group">
              <input type="submit" name="submit" value="Login" class="btn">
          </div>
        <p><a href="register.php" class="btn">Register Now!</a></p>
      </form>
      <?php
       $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if (isset($_POST["submit"])) {
          $user=$_POST["user"];
          $pass=$_POST["pass"];
          $sql="select username,password from users where role='customer'";
          $a=$conn->query($sql);

          while($row=$a->fetch_assoc())
          {
        if($user == $row['username'] && $pass == $row['password'])
        {
          header("Location: users.php");
          }
        }
              $msg="enter valid username and password";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
      ?>
</body>
</html>
