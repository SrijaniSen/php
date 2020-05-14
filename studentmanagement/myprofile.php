<?php
 include('session.php');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $sql1="SELECT firstname FROM svalue WHERE email = '$login_session' ";
   $sql2="SELECT lastname FROM svalue WHERE email = '$login_session' ";
   $sql3="SELECT email FROM svalue WHERE email = '$login_session' ";
   $sql4="SELECT address FROM svalue WHERE email = '$login_session' ";
   $sql5="SELECT class FROM svalue WHERE email = '$login_session' ";
   $sql6="SELECT section FROM svalue WHERE email = '$login_session' ";
   $sql7="SELECT number FROM svalue WHERE email = '$login_session' ";
   $sql8="SELECT userid FROM svalue WHERE email = '$login_session' ";
   $result1 = mysqli_query($db,$sql1);
   $result2 = mysqli_query($db,$sql2);
   $result3 = mysqli_query($db,$sql3);
   $result4 = mysqli_query($db,$sql5);
   $result5 = mysqli_query($db,$sql6);
   $result6=mysqli_query($db,$sql4);
   $result7=mysqli_query($db,$sql7);
   $result8=mysqli_query($db,$sql8);
   
	
   
   $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
   $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
   $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
   $row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
   $row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC);
   $row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC);
   $row7 = mysqli_fetch_array($result7,MYSQLI_ASSOC);
   $row8 = mysqli_fetch_array($result8,MYSQLI_ASSOC);
   $fname=$row1['firstname'];
   $lname=$row2['lastname'];
   $email=$login_session;
   $class=$row4['class'];
   $section=$row5['section'];
   $address=$row6['address'];
   $phonenumber=$row7['number'];
   $userid=$row8['userid'];
   ?>
 <html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
p {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.image-effect{
    background-image: linear-gradient(rgba(255, 255, 255, 0.815),rgba(255, 255, 255, 0.815)), url(./class.jpg) ;
    
}
 
.colorgreen{
    background-color: rgb(114, 170, 97);
}
</style>

</head>
  <body>
 <div class="container col-md-6 image-effect">
  <div class="colorgreen"  style="text-align:center">
    <h2>StudentInformation</h2>
     
  </div>
  <div class="row">
     
    <div class="column">
     <div class="row">
	 
	    <label for="country">UserId</label>
		<p><?php echo $userid;?></p>
	 
        <label for="fname">First Name</label>
		<p><?php echo $fname;?></p>
        
        <label for="lname">Last Name</label>
		<p><?php echo $lname;?></p>
        
		 
		<label for="country">Email</label>
		<p><?php echo $email;?></p>
		
		<label for="country">Address</label>
		<p><?php echo $address;?></p>
		
		
		<label for="country">ContactNo</label>
		<p><?php echo $phonenumber;?></p>
		
		 
		
		<label for="country">Class</label>
		<p><?php echo $class;?></p>
         
        <label for="subject">Section</label>
        <p><?php echo $section;?></p>
		
       <button ><a href = "logout.php">Sign Out</a></button>
	   <button ><a href = "update.php">edit</a></button>
       
    </div>
  </div>
</div>
 

</body>
</html>