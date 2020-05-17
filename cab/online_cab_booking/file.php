<?php
include('dbcon.php');
session_start();
$id=$_SESSION['nid'];
$qry="select * from cache where id='$id'";
$run=mysqli_query($con,$qry);
if($run){
     $data=mysqli_fetch_assoc($run);
}
else
{?>
<script>
alert('Not Connected to the cache');
</script>
<?php
}
?>