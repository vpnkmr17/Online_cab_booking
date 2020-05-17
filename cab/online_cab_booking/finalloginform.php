<!--DOCTYPE HTML-->
<?php
session_start();
if(isset($_SESSION['uname']))
{
	?>
	<script>
	alert("Koi toh login hai abhi baad mei try kar tu");
	window.open('aftersignup.php','_self');
	</script>
	<?php
}
?>
<html>
<style>
body {
  background-image: url("1_KLIKWuTm2716ph-2vg2cOg.gif");
  background-color: #cccccc;
  height: 736px; /* You must set a specified height 736px*/
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 5px 0 5px 0;
}

/* Avatar image */
img.avatar {
  width: 25%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  margin-left:80%;
  
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
.bgVideo {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%; 
  min-height: 100%;
  
}
.content {
  position: absolute;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>
<body class="body"> 
 

<form action="finalloginform.php" method="post" style="align:center;padding:40px 20px">
 <div class="imgcontainer">
    <img src="loginicon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><em>Username   :  </em></label>
    <input type="text" placeholder="Enter Username" value="<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name'];?>" name="uname" required>
	<br /><br /><br />
    <label for="psw"><em>Password   :  </em></label>
    <input type="password" placeholder="Enter Password"  value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass'];?>" name="psw" required>
	<br /><br /><br />
    <input type="submit" name="submit" value="Login" />
    <label>
      <input type="checkbox" <?php if(isset($_COOKIE['name'])) { ?> checked <?php };?> name="remember"> <em>Remember me</em>
    </label>
  </div>

  <div class="container" >
    <span class="psw"><em>Forgot <a href="reset.php">password?</a></em></span>
  </div>
</form>

</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit'])){
$name=$_POST['uname'];
$pass=$_POST['psw'];
$qry="SELECT * FROM signup WHERE email='$name' AND password='$pass'";
$res=mysqli_query($con,$qry);
if(mysqli_num_rows($res)<1){
	?>
<script>
 alert('Your Username or Password is incorrect!!');
 window.open('finalloginform.php','_self');
 </script>
 <?php
}
else{
	$data=mysqli_fetch_assoc($res);
	if(isset($_POST['remember'])){
		setcookie("name",$name,time()+1*60*60*60);
		setcookie("pass",$pass,time()+1*60*60*60);
		$_SESSION['uname']=$name;
	}
	else{
		if(isset($_COOKIE['name']))
			setcookie("name","");
		if(isset($_COOKIE['pass']))
			setcookie("pass","");
	}
		
	$_SESSION['uid']=$data['user_id'];
	$_SESSION['uname']=$name;
	header('location:aftersignup.php');
}
}
?>