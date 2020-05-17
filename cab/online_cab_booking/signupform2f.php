
<!--DOCTYPE HTML-->
<html>
<style>
.p {
  border-style: solid;
  border-color: green;
}
body {
  background-image: url("1_KLIKWuTm2716ph-2vg2cOg.gif");
  background-color: #cccccc;
  height: 736px; /* You must set a specified height 736px*/
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
.bgVideo {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%; 
  min-height: 40%;
}
.content {
  position: absolute;
  top: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.position {
  center: 0;
  height:80%;
  width:55%;
  margin-left:20%;
  margin-top:10%;
}
//shadow 
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
//shadow on hover
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
//hover
.button {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
</style>
<body class="body">
<fieldset class="content p" style="height:700px">
<legend ><h1><em>NEURON</h1></em></legend>
<header><h3><em>Create your Neuron account</em></h3></header><br><br>
<form action="signupform2f.php"  name="SignUp" method="post" onsubmit="return validator()">
<em> 
FIRST NAME : <input type="textfield" placeholder="FIRST NAME"  name="fname" id="fname"style="margin-right:50px" required max=15/> 
LAST NAME : <input type="textfield"  placeholder="LAST NAME" name="lname" id="lname" required max=15/> <br /><br><br>
Mobile Number:<input type="text" placeholder="Number" name="mobile" required /><br> <br> <br>
EMAIL ID : <input type="text" name="email" id="email" placeholder="EMAIL ID" required /><br />
<br><br>
ADDRESS :
 <textarea  cols="30" rows="5" name="address" id="address" placeholder="ADDRESS"></textarea><br><br>
  COUNTRY : <select name="country" id="count">
            <option value="008">Albania</option>
            <option value="012">Algeria</option>
            <option value="016">American Samoa</option>
            <option value="020">Andorra</option>
            <option value="024">Angola</option>
            <option value="660">Anguilla</option>
            <option value="010">Antarctica</option>
            <option value="028">Antigua And Barbuda</option>
            <option value="032">Argentina</option>
            <option value="051">Armenia</option>
            <option value="533">Aruba</option>
	</select>		<br><br><br>
PASSWORD : <input type="password" name="password" id="password" /><br><br><br><br><br>
CONFIRM PASSWORD : <input type="password" name="password2" id="password3" /><br><br><br><br><br>
 <input type="submit" value="SUBMIT" name="submit" style="margin-left:30%;padding:12px 28px;border-radius:8px;background-color:#4CAF50;color:white;" />
 </em>
</form>
</fieldset>
<script type="text/javascript">
function validator()
{
var x=document.forms["SignUp"]["fname"].value;
if (x==null || x=="")
{
  alert("Please enter first name");
  return false;
}
var pass1=document.getElementById("password");
var pass2=document.getElementById("password3");
if(pass1.value!=pass2.value)
{
	alert("Password is not same");
	return false;
}
var checkOnlyChars = /^[A-Za-z]+$/;
if(!x.match(checkOnlyChars))
{
	alert("Only chars are allowed");
	return false;
}

if (x.length > 20)
{
  alert("Maximum length of name is 20");
  return false;
}  

  
var x=document.forms["SignUp"]["email"].value;
var at=x.indexOf("@");
var dot = x.lastIndexOf(".");
if(x.length>=50)
{
  alert("Please enter valid e-mail ID");
  return false;
}
if (at<1 || dot<at+2 || dot+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var x=document.forms["SignUp"]["phone"].value;
if (x.length > 11)
{
  alert("Maximum length of phone number is 11");
  return false;
}  

var numericExpression = /^[0-9]+$/;
if(!x.match(numericExpression))
{
	alert("Only numerics are allowed");
	return false;
}
}
</script>
</body>
</html>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$name=$_POST['fname'];
$lname=$_POST['lname'];
$emailid=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$country=$_POST['country'];
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

if(count($error)==0)
{
	#$pass3=md5($pass1);
	#$qry="INSERT INTO `student`(`username`, `password`) VALUES ('$user','$pass1')";
	$qry="INSERT INTO `signup`( `firstname`, `lastname`, `mobile`, `email`, `address`, `country`, `password`, `book_id`, `cache_id`) VALUES ('$name','$lname','$mobile','$emailid','$address','$country','$pass1',null,null)";
	$run=mysqli_query($con,$qry);
	if($run){
		session_start();
		$qry2="SELECT * FROM signup WHERE email='$emailid'";
		$run1=mysqli_query($con,$qry2);
		$data=mysqli_fetch_assoc($run1);
		?>
		<script>
	alert('Account Created successfully Please login ');
	window.open('finalloginform.php','_self');
	</script>
	<?php
	
	}
}
}?>