<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['fname'];
$lname=$_POST['lname'];
$emailid=$_POST['email'];
$address=$_POST['address'];
$country=$_POST['count'];
$pass1=$_POST['password'];
$pass2=$_POST['password2'];
$error=array();
if(empty($name))
	array_push($error,"Username is blank");
if(empty($lname))
	array_push($error,"lastname is blank");
if(empty($emailid))
	array_push($error,"Email Id is blank");
if(empty($address))
	array_push($error,"address is blank");
if(empty($pass1))
	array_push($error,"password is blank");
if($pass1!=$pass2){
array_push($error,"Confirm password is not same");}

/*$res="SELECT * FROM `signup`";
$result=mysqli_query($con,$res);
$data=mysqli_fetch_assoc($result);
if($data['usernname']===$user)
	array_push($error,"Username is already taken");
*/
if(count($error)==0)
{
	#$pass3=md5($pass1);
	#$qry="INSERT INTO `student`(`username`, `password`) VALUES ('$user','$pass1')";
	$qry="INSERT INTO `signup`(`firstname`, `lastname`, `email`, `address`, `country`, `password`) VALUES ('$name','$lname','$emailid','$address','$country','$pass1')";
	$run=mysqli_query($con,$qry);
	if($run)
		echo "<script>alert("Uploaded successfully")</script>";
}
else{
	echo "NOt connected bro";
	print_r($error);
}
}
?>

