<?php
 include('session.php');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  //$sql1="SELECT firstname FROM userdatavalue WHERE email = '$login_session' ";
//$result1 = mysqli_query($db,$sql1);
//$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
//print_r($row1);


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$number=$_POST['number'];
$address=$_POST['address'];

$nu1="STU" . $_POST['number'];
 
$sql="update svalue set userid='$nu1', firstname='$fname',lastname='$lname',number='$number',address='$address'    where email='$login_session';";
if(($fname=="") &&  ($lname=="") &&( $number=="") && ($address==""))
{
echo "enter data completely";
header("location: update.php");
}
else{	

$run1=mysqli_query($db,$sql);
 

if($run1==true )
{
	echo "data insert successfully";
}
else
{
	echo mysqli_error($db);
}

}

?>
<html>
<body>
<form>
 <button ><a href = "logout.php">Sign Out</a></button>
</form>