 <?php
   include('session.php');
    
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $sql1="SELECT firstname FROM svalue WHERE email = '$login_session' ";
   $sql2="SELECT lastname FROM svalue WHERE email = '$login_session' ";
   $sql3="SELECT email FROM svalue WHERE email = '$login_session' ";
   $sql4="SELECT address FROM svalue WHERE email = '$login_session' ";
   $sql5="SELECT class FROM svalue WHERE email = '$login_session' ";
   $sql6="SELECT section FROM svalue WHERE email = '$login_session' ";
   $result1 = mysqli_query($db,$sql1);
   $result2 = mysqli_query($db,$sql2);
   $result3 = mysqli_query($db,$sql3);
   $result4 = mysqli_query($db,$sql5);
   $result5 = mysqli_query($db,$sql6);
   $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
   $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
   $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
   $row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
   $row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC);
   $fname=$row1['firstname'];
   $lname=$row2['lastname'];
   $full_name=$fname . " ". $lname;
   $email=$login_session;
   $class=$row4['class'];
   $section=$row5['section'];
   
   
   
   mysqli_close($db)
   
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
#start{
	border-style: solid
}
</style>
<style>
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
.colorgn{
    background-color:rgb(83, 134, 83);
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
  <div class="colorgreen" style="text-align:center">
    <h2>StudentInformation</h2>
     
  </div>
  <div class="row">
     
    <div class="column">
     <div class="row">
	 
        <label for="fname">First Name</label>
		<p><?php echo $fname;?></p>
        
        <label for="lname">Last Name</label>
		<p><?php echo $lname;?></p>
        
        <label for="country">Class</label>
		<p><?php echo $class;?></p>
         
        <label for="subject">Section</label>
        <p><?php echo $section;?></p>
        <input id="myp" type="submit" value="Myprofile" class="btn btn-primary">
       
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
	$("#myp").click(function(){
		window.open('myprofile.php')
	})
});
</script>
</body>
</html>
<?php 
	 
	$con=mysqli_connect('localhost','root','','student');
	//$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
	//$page = isset($_GET['page']) ? $_GET['page'] : 1;
	//$start = ($page - 1) * $limit;
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}


$limit=3; 
 
$start=($page-1)*$limit;


$query ="SELECT * FROM `svalue` limit $start , $limit;";
$result=mysqli_query($con,$query);
$query1="select count(sid) as id from `svalue`;";
 
 $result1=mysqli_query($con,$query1);
 $count = mysqli_fetch_all($result1,MYSQLI_ASSOC);
 
 $total=$count[0]['id'];
 $pages=ceil($total/$limit);
  
   
	$Previous = $page - 1;
	$Next = $page + 1; 
   
  // $id=$customers['fid'];
   //$fname=$customers['firstname'];
   //$pn=$customers['phonenumber'];
   //$email=$customers['email'];
   //$add=$customers['address'];
	 
	//$result1 = $conn->query("SELECT count(id) AS id FROM customers");
	//$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	//$total = $custCount[0]['id'];
	//$pages = ceil( $total / $limit );

	//$Previous = $page - 1;
	//$Next = $page + 1;

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

</head>
<body>
	<div class="container well">
		 
			<h1 class="text-center">Others Registered Students</h1>
		 
	 
		<div style="height: 200px; overflow-y: auto;">
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    <th>Id</th>
	                    <th>Name</th>
	                    <th>Mobile</th>
	                    <th>Address</th>
	                    <th>Date</th>
	              	</tr>
	          	</thead>
				
	        	<tbody>
				<?php while($customers = mysqli_fetch_array($result,MYSQLI_ASSOC)): ?>
	        		
		        		<tr>
		        			
							<?php $id=$customers['sid'];?>
							<?php $fname=$customers['firstname'];?>
							<?php $pn=$customers['number'];?>
							<?php $email=$customers['email'];?>
							<?php $add=$customers['address'];?>
							
							
							
							
							<td><?php echo $id ;?></td>
		        			<td><?php echo  $fname; ?></td>
		        			<td><?php echo  $pn; ?></td>
		        			<td><?php echo $email; ?></td>
		        			<td><?php echo $add; ?></td>
		        		</tr>
	        		 
					<?php endwhile; ?>
	        	</tbody>
      		</table>

      		
		</div>
		<div class="row">
			<div class="col-md-10">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li class="page-item">
				      <a class="page=link" href="dashboard.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Previous</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li class="page-item"><a class="page-link" href="dashboard.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li class="page-item">
				      <a class="page-link" href="dashboard.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Next &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			  
					 
		</div>	
</div>		
 

</body>
</html>



















