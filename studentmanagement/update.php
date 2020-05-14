
 



<?php
include('session.php');
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
  <div  class="colorgreen"style="text-align:center">
    <h2>Edit Your Profile</h2>
     
  </div>
  <div class="row">
    
    <div class="column">
      <form action="editsubmit.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name.."><br/><br/><br/>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name.."><br/><br/><br/>
		
		<label for="country">Email</label>
		<p><?php echo $login_session;?></p><br/><br/><br/>
        
        <label for="lname">ContactNumber</label>
        <input type="text" id="lname" name="number" placeholder="Your phoneNumber.."><br/><br/><br/>
		<label for="lname">Address</label>
        <input type="text" id="lname" name="address" placeholder="Your phoneNumber.."><br/><br/><br/>
		 
        
         
        <input class="btn btn-primary" type="submit" value="Submit">
      </form>
    </div>
	
  </div>
</div>
</body>
</html>



