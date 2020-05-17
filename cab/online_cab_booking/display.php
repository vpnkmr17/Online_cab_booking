<?php
$fare=rand(150,300);
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
input[type=text], input[type=password],input[type=number] {
  width: 95%;
  font-color:black;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]{
background-color: green;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<h3 color="red" align="center"><a href='logout.php' > Logout </a>
<?php
include('file.php');
?>
<form method="post">
<table align="center" border="5px" width="30%">
<tr>
<td>Source <input value="<?php echo $data['src'];?>" name="src" type="text" required name="s" /></td>
</tr>
<br><br><br><br>
<tr>
<td>Destination<input value="<?php echo $data['dest']; ?>" name="dest" type="text" required name="s" /></td>
</tr>
<br><br><br><br>
<tr>
<td>Cab<input value=<?php echo $_GET['name']; ?> type="text" required name="c" /></td>
</tr>
<tr>
<td>Fare<input value="<?php echo $fare;?>" type="number" required name="s" /></td>
</tr>
<tr>
<td>
 PAYMENT : <select name="payment" id="count">
            <option value="null">Cash</option>
            <option value="<?php echo $fare;?>">Paytm</option>
            <option value="<?php echo $fare;?>">Google Pay</option>
            <option value="<?php echo $fare; ?>">Phone pe</option>
            <option value="<?php echo $fare;?>">PayPal</option>
            
	</select>		<br><br><br>
</td>
</tr>
</table><br><br><br><br>
<center><input type="submit" value="Confirm Booking" name="book"/></center>
</form>
</body>
</html>
<?php
if(isset($_POST['book']))
{
	include('dbcon.php');
	$error=array();
	$src=$_POST['src'];
	$id=$data['id'];
	$dest=$_POST['dest'];
	$fare=$_POST['payment'];
	$cname=$_GET['name'];
	$bo=uniqid(true);
	$d=date("y-m-d");
	$pay=uniqid(true);
	$qry1="insert into payment values('$pay','$fare','$d')";
	$run=mysqli_query($con,$qry1);
	if(!$run)
		array_push($error,'Query 1 is not executed');
	$qry2="select * from cab where cab_name='$cname'";
	$run1=mysqli_query($con,$qry2);
	if(!$run1)
		array_push($error,'Query 2 is not executed');
	$datag=mysqli_fetch_assoc($run1);
	$dr=$datag['driver_id'];
	$qry3="insert into booking values('$bo','$src','$dest','$fare','$pay','$dr')";
	$run2=mysqli_query($con,$qry3);
	if(!$run2)
		array_push($error,'Query 3 is not executed');
	$qry4="select * from cab where driver_id='$dr'";
	$run3=mysqli_query($con,$qry4);
	if(!$run3)
		array_push($error,'Query 4 is not executed');
	$data1=mysqli_fetch_assoc($run3);
	$cab=$data1['cab_id'];
	$qry5="select * from cache where username='$cname'";
	$run4=mysqli_query($con,$qry4);
	if(!$run4)
		array_push($error,'Query 5 is not executed');
	$data2=mysqli_fetch_assoc($run4);
	$cus=$data2['id'];
	$qry6="insert into books values('$id','$cab','$d')";
	$run5=mysqli_query($con,$qry6);
	if(!$run5)
		array_push($error,'Query 6 is not executed');
	$qry7="update signup set book_id='$bo' where user_id='$id'";
	$run6=mysqli_query($con,$qry7);
	if(!$run6)
		array_push($error,'Query 7 is not executed');
	$qry8="update cab set book_id='$bo' where cab_id='$cab'";
	$run7=mysqli_query($con,$qry8);
	if(!$run7)
		array_push($error,'Query 8 is not executed');
	
		?>
		<script>
		alert('Congratulations Your Booking has done!!!');
		window.open('aftersignup.php','_self');
		</script>
		<?php
	
}
?>