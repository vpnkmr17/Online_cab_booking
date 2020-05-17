<!--DOCTYPE HTML-->
<?php 
session_start();
echo "The value is".$_SESSION['uname'];
echo "The value of id is".$_SESSION['uid'];
?>
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
  top: 0
  left: 0;
  min-width: 99%; 
  min-height: 1%;
  object-fit: cover;
  
}
.content
 {
 /* position: -webkit-sticky;
  position: sticky;*/
  position: fixed;
  top: 0;
  width: 100%;
  background-color: white;
  opacity: 0.9;
}
.button 
{ border-radius: 8px;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.btn-group .button 
{
  background-color: white; /* Green #4CAF50*/
  border: none;
  color: white;
  padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  cursor: pointer;
  float: left;
}

.btn-group .button:hover {
  background-color: #ffd300;/*#3e8e41*/
}
.button1 
{ border-radius: 8px;
  background-color: #ffcc00; /* Green #4CAF50*/
  border: none;
  color: white;
  padding: 16px 125px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text], input[type=password] {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
<body class="body">
<header class="content">
<div  style="height:2%;padding:10px;border-bottom:solid 1px black;">
<nav style="margin-left:70%;color:ffffff;"> 
<a href="logout.php" style="color:#ff0055;;margin-left:20px;">LOGOUT</a> |<!--Pinkish Red Neon #ff0055-->
</nav>
</div>
<div  style="padding:30px;height:4%;border-bottom:solid 1px black;">
<center><strong><big  style="color:#39ff14;margin-left:50px;font-size:2vw"><em>NEURON</em></big></strong></center>
</div>
</header>

<span>
<h1  style="margin-left:360px;color:#ff073a;margin-top:150px;font-size:30px"><em>Book a City Taxi to your destination in town</em></h1><!--Neon Red #ff073a-->
<h3  style="margin-left:450px;color:#fe019a;font-size:20px"><em>Choose from a range of categories and prices</em></h3><!--Neon Pink #fe019a-->
</span>
<section style="width:26%;margin-left:60px;margin-top:100px;">'
<form action="aftersignup.php" method="post">
<div class="btn-group" style="padding=30px;border-radius:8px;border:none;height:520px;background-color:white;">
  <button class="button"><a href="C:\Users\Rushikesh\Desktop\Cab-booking\finalproject1.html"  style="color:#fc8472"><em>City Taxi</em></a></button>
  <button class="button"><a href="C:\Users\Rushikesh\Desktop\Cab-booking\Outstation.html"  style="color:#fc8472"><em>Outstation</em></a></button>
  <button class="button"><a href="C:\Users\Rushikesh\Desktop\Cab-booking\rentals.html" style="color:#fc8472"><em>Rentals</em></a></button><hr /><br /><br />
<h3 style="margin-left:20%;color:#39ff14;"><em><b>Your everyday travel partner</b></em></h3>
<h4 style="margin-left:20%;color:#39ff14;"><em>AC Cabs for point to point travel</em></h4>
<label for="Pick Up"><b style="color:#39ff14"><em>Pick Up</em></b></label>
<input type="text" placeholder="CURRENT LOCATION" name="src" style="margin-left:5px;border-radius:4px;"/>
<label style="color:#39ff14" for="Drop"><b><em>Drop</em></b></label>
<input type="text" placeholder="ENTER DROP FOR RIDE ESTIMATE" name="drop" style="margin-left:5px;border-radius:4px;"/>
<label style="color:#39ff14" for="When"><b><em>When</em></b></label>	
<input type="text" placeholder="NOW" name="when" style="margin-left:5px;border-radius:4px;"/>

<input type="hidden" value="<?php echo $_SESSION['uid'];?>" name="id"/>
<input type="hidden" value="<?php echo $_SESSION['uname'];?>" name="name"/>
<input type="submit" style="margin-left:150px" value="Search Cabs" name="submit" />
</div>
</form>
</section><br /><br /><br /><br />
<footer style="margin-top:4%">
Top Visited Cities<br /><br /><hr /><br /><br />
<span>Popular Outstation Routes</span>
<span style="margin-left:20px;height:100px;width:50px;border:solid 1x white">Northern India
<ul style="margin-left:12%;list-style-type:none;">
<li>Delhi to Chandigarh Outstation Cabs</li>
<li>Delhi to Agra Outstation Cabs</li>
<li>Delhi to Jaipur Outstation Cabs</li>
<li>Delhi to Shimla Outstation Cabs</li>
<li>Delhi to Nainital Outstation Cabs</li>
<li>Jaipur to Delhi Outstation Cabs</li>
</ul>
</span>
<span style="margin-left:20px;">
Southern India
<ul style="margin-left:12%;list-style-type:none;">
<li>Chennai to Pondicherry Outstation Cabs</li>
<li>Chennai to Tirupati Outstation Cabs</li>
<li>Chennai to Vellore Outstation Cabs</li>
<li>Hyderabad to Vijayawada Outstation Cabs</li>
<li>Hyderabad to Warangal Outstation Cabs</li>
<li>Hyderabad to Tirupati Outstation Cabs</li>
</ul>
</span>
<span >
East & West India
<ul style="margin-left:12%;list-style-type:none;">
<li>Mumbai to Pune Outstation Cabs</li>
<li>Mumbai to Mahabaleshwar Outstation Cabs</li>
<li>Mumbai to Lonavala Outstation Cabs</li>
<li>Mumbai to Nashik Outstation Cabs</li>
<li>Mumbai to Matheran Outstation Cabs</li>
<li>Mumbai to Shirdi Outstation Cabs</li>
</ul>
</span>
</footer>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	include('dbcon.php');
	$src=$_POST['src'];
	$dest=$_POST['drop'];
	$id=$_POST['id'];
	$name=$_POST['name'];
	echo "The valuse of id is".$id;
	$qry1="update signup set cache_id='$id' where user_id='$id';";
	$run1=mysqli_query($con,$qry1);
	if($run1)
	{?>
<script>
alert("The successfull is done");
</script>
<?php
	}
	$qry="insert into cache values('$id','$name','$src','$dest')";
	$run=mysqli_query($con,$qry);
	if($run){
		session_start();
		$_SESSION['nid']=$id;
    ?>
	<script>
	alert('succesfully uploaded');
	window.open('newsearch.php','_self');
	</script>
	<?php
}
else
{?>
<script>
alert('Not Connected to the cache');
</script>
<?php
}
}
?>
