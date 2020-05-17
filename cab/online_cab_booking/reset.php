
<html>
<body bgcolor="powderblue">
<center>
<form method="post">
Enter Your Mail<br><br>
<input type="text" name="email" placeholder="Enter Your Mail..." required/>
<input type="submit" name="submit" value="Click here"/>
</form>
</center>
</body>
</html>
<center>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$name=$_POST['email'];
	$qry="SELECT * FROM signup WHERE email='$name'";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1){
	?>
<script>
 alert('Your Email is incorrect!!');
 window.open('reset.php','_self');
 </script>
 <?php
}
else
{
	$data=mysqli_fetch_assoc($run);
	echo "Your Password is ".$data['password'];
}
}
?>
<br><br><br>
<a href="finalloginform.php">Click here to Login</a>
</center>