 <?php
$fn1=$_POST['fn'];
$ln1=$_POST['ln'];
$em1=$_POST['em'];
$pa1=md5($_POST['pw']);
$cp1=$_POST['cpw'];
$ad1=$_POST['ad'];
$nu2=$_POST['cn'];
$cl1=$_POST['sclass'];
$sc1=$_POST['ssection'];
$nu1="STU" . $_POST['cn'];

//$cl1=$_POST['sclass'];
//$sc1=$_POST['ssection'];
//$imagename=$_FILES['img']['name'];
//$tempname=$_FILES['img']['tmp_name'];
//print_r($imagename);
//move_uploaded_file($tempname,"../STD_IMG/$imagename");
 
$con=mysqli_connect('localhost','root','','student');
$sql="select * from svalue where email='$em1'";
$result_email=mysqli_query($con,$sql);
//var_dump($result_email);
$var1=(mysqli_num_rows($result_email));

if(mysqli_num_rows($result_email)>0)
{
	 echo "email is already registered";
	 
}
else
{
 
 
 
$query2="INSERT INTO `svalue` (`firstname`, `lastname`, `email`, `number`, `address`,`password`,`class`,`section`,`image`,`userid`) VALUES ( '$fn1','$ln1','$em1','$nu2','$ad1','$pa1','$cl1','$sc1','','$nu1');";

 
$run2=mysqli_query($con,$query2);

if($run2==true )
{
	echo "data insert successfully";
}
else
{
	echo mysqli_error($con);
}
}
?>
<html>
<body>
<form action="login.php">
<input type="submit" value="Back to log in "> 
</form>