<?php
session_start();

if (strlen($_SESSION['username'])>0) header("location:home.html");

//connect to database
//$db=mysqli_connect("localhost","root","","authentication");
require "database.php";
$db=Database::connectMysqli();

if(isset($_POST['login_btn']))
{
	$username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $password=md5($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM tt_users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
        header("location:home.html");
    }
   else
   {
                $_SESSION['message']="Username and Password combiation incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
  <title>Register , login and logout user php mysql</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
							<h1>Register, login and logout user php mysql</h1>
                        </div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="index.php">
                        <div class='row'>
                            <div class='form-actions'>
								<table>
									 <tr>
										   <td>Username : </td>
										   <td><input type="text" name="username" class="textInput"></td>
									 </tr>
									  <tr>
										   <td>Password : </td>
										   <td><input type="password" name="password" class="textInput"></td>
									 </tr>
									  <tr>
										   <td></td>
										   <td><input type="submit" name="login_btn" class="Log In">&nbsp;
										   <a href="register.php">Register</a></td>
									 </tr>
								</table>
							</div>
						</div>
</form>
</div>
</div>
</body>
</html>
 
 
<!--
In 2 minutes 8 second you don a mistake then last time only you found
In 2 minutes 49 second you done a mistake then last time only you found
Please Change this Your Video Length is Decrease
Your Suscribers will increase
I Like and Thanks for  Who are all Helping to Create this Video
 
About Me: www.visualcv.com/karthickraja
-->