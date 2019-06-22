<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
        <link rel="stylesheet" href="cs.css">
</head>
<body>
<div class="header">
	<h2>Sign up</h2>
</div>
<form method="POST">
	<div class="input-group">
		<label>Username</label>
                <input type="text" name="username"  id="user" required>
	</div>
        <div class="input-group">
		<label>Name</label>
                <input type="text" name="name"  id="username" required>
	</div>
	<div class="input-group">
		<label>Email</label>
                <input type="email" name="email"  id="email" required>
	</div>
	<div class="input-group">
		<label>Password</label>
                <input type="password" name="password" id="pass" required>
	</div>
        <div class="input-group">
		<label>Address</label>
                <input type="text" name="address" id="address" required>
	</div>
        <div class="input-group">
		<label>Contact</label>
                <input type="number" name="contact"  id="contact" required limit="10">
	</div>
	<div class="input-group">
            <button type="submit" class="btn" name="submit" value="Register">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
    <?php
    if (isset($_POST["submit"]))
    {
        $servername="localhost";
        $username="root";
        $password="root";
        $dbname="food_order";
        $conn=new mysqli($servername,$username,$password,$dbname);
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
        $sql="insert into users (username,name,email,password,address,contact) values('$username','$name','$email','$password','$address','$contact');";
        if($conn->query($sql) === TRUE)
        {
            header("Location: login.php");
        }
        else
        {
             $msg="Not Signed in";
              echo"<script type='text/javascript'>alert('$msg');</script>";
        }
    }
    ?>
</body>
</html>