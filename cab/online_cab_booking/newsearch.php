<!--DOCTYPE HTML-->
<html>
<head><script language="javascript" type="text/javascript" >
window.onload = function () {
    var url = document.location.href,
        params = url.split('?')[1].split('&'),
        data = {}, tmp;
    for (var i = 0, l = params.length; i < l; i++) {
         tmp = params[i].split('=');
         data[tmp[0]] = tmp[1];
    }
    document.getElementById('destination').innerHTML = data.name;
}
</script></head>
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
  padding: 16px 35%;/*125px width*/
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


/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
 
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
div.ex1 {
  background-color: lightblue;
  width: 75%;
  height: 90px;
  overflow: scroll;
}

</style>
<body class="body">
<?php
include('file.php');
$src=$_POST['src'];
$dest=$_POST['dest'];
?>
<header class="content">
<div  style="height:2%;padding:10px;border-bottom:solid 1px black;">
<nav style="margin-left:70%;color:ffffff;"> 
<a href="#Support" style="color:#ff9933;margin-left:20px;">SUPPORT</a> |<!--Neon Carrot #ff9933-->
</nav>
</div>
<div  style="padding:30px;height:4%;border-bottom:solid 1px black;">
<strong><big style="color:#39ff14;margin-left:50px;font-size:2vw"><em>NEURON</em></big></strong>
<a href="C:\Users\Rushikesh\Desktop\Cab-booking\booknow.html" style="color:ffffff;margin-left:62%;"><b style="color:#fe4164"><em>BOOKNOW</em></b></a> |<!--Neon Fuchsia #fe4164-->
<a href="/html/" style="color:ffffff;margin-left:20px;"><b style="color:#ADFF2F"><em>ABOUT US</em></b></a>
</div>
</header>

<span>
<h1  style="margin-left:360px;color:#ff073a;margin-top:150px;font-size:30px"><em>Book a City Taxi to your destination in town</em></h1><!--Neon Red #ff073a-->
<h3  style="margin-left:450px;color:#fe019a;font-size:20px"><em>Choose from a range of categories and prices</em></h3><!--Neon Pink #fe019a-->
</span>
<section style="width:40%;margin-left:60px;margin-top:100px;">
<label for="Pick Up"><b style="color:#39ff14"><em>Pick Up</em></b></label>
<input type="text"  value="<?php echo $data['src'];?>" name="src" placeholder="CURRENT LOCATION" style="margin-left:5px;border-radius:4px;"/>
<label style="color:#39ff14" for="Drop"><b><em>Drop</em></b></label>
<input type="text" value="<?php  echo $data['dest']; ?>" name="dest" placeholder="ENTER DROP FOR RIDE ESTIMATE"  style="margin-left:5px;border-radius:4px;"/>
<label style="color:#39ff14" for="When"><b><em>When</em></b></label>	
<input type="text" placeholder="NOW"  style="margin-left:5px;border-radius:4px;"/>
<div class="ex1" style="padding=30px;border-radius:8px;border:none;height:520px;background-color:white;">
<a href="display.php?name=ric" 
 <img src="rickshaw.png" height='10%' width='10%' align="middle"/><em style="color:#fe4164"><b style="margin-left:150px">Rickshaw</b><sub>Small fares for short rides </sub></em><hr />
</a>
<a href="display.php?name=micro">
 <img src="micro.png" name="micro" height='10%' width='10%' align="middle"/><em style="color:#fe4164"><b style="margin-left:150px">Micro</b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=mini" >
<img src="mini.png" name="mini" height='10%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Mini</b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=share" >
<img src="ola_share.png" name="share" height='8%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Share</b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=rickshaw" >
<img src="rickshaw.png" name="rickshaw" height='10%' width='10%' align="middle"/><em style="color:#fe4164"><b style="margin-left:150px">Rickshaw</b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=primesedan" >
<img src="primesedan.png" name="primesedan" height='10%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Prime Sedan</b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=primeplay" >
<img src="primeplay.png" name="primeplay" height='10%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Prime Play </b></em><b style="float:right">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=suv" >
<img src="suv.png" name="suv" height='10%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Suv</b></em><b style="margin-left:150px">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
<a href="display.php?name=lux" >
<img src="lux.jpg" name="lux" height='10%' width='10%' align="middle"/><b><em style="color:#fe4164"><b style="margin-left:150px">Lux</b></em><b style="margin-left:150px">₹<?php echo rand(100,150);?>-₹ <?php echo rand(200,300);?></b><hr />
</a>
</div>
</section><br /><br /><br /><br />
<footer id="footer" style="background-color:#ddd;margin-top:5%;">
 <div class="row">
  <div class="column">
<h4>Top Visited Cities</h4>
<h4>Popular Outstation Routes</h4>
  </div>
  <div class="column" ><br /><br />
<ul style="list-style-type:none;">
<li><h4>Northern India</h4></li>
<li>Delhi to Chandigarh Outstation Cabs</li><br />
<li>Delhi to Agra Outstation Cabs</li><br />
<li>Delhi to Jaipur Outstation Cabs</li><br />
<li>Delhi to Shimla Outstation Cabs</li><br />
<li>Delhi to Nainital Outstation Cabs</li><br />
<li>Jaipur to Delhi Outstation Cabs</li><br />
</ul>
  </div>
  <div class="column" ><br /><br />
 <ul style="list-style-type:none;">
<li><h4>  Southern India</h4></li>
<li>Chennai to Pondicherry Outstation Cabs</li><br />
<li>Chennai to Tirupati Outstation Cabs</li><br />
<li>Chennai to Vellore Outstation Cabs</li><br />
<li>Hyderabad to Vijayawada Outstation Cabs</li><br />
<li>Hyderabad to Warangal Outstation Cabs</li><br />
<li>Hyderabad to Tirupati Outstation Cabs</li><br />
</ul>
  </div>
  <div class="column" ><br /><br />
 <ul style="list-style-type:none;">
<li><h4>East & West India</h4></li><br />
<li>Mumbai to Pune Outstation Cabs</li><br />
<li>Mumbai to Mahabaleshwar Outstation Cabs</li><br />
<li>Mumbai to Lonavala Outstation Cabs</li><br />
<li>Mumbai to Nashik Outstation Cabs</li><br />
<li>Mumbai to Matheran Outstation Cabs</li><br />
<li>Mumbai to Shirdi Outstation Cabs</li><br />
</ul>
  </div>
</div>
<div id="Support" style="margin-left:30%;width:500px;height:150px;border:solid 1px white">
</div>
</footer>
</body>
</html>