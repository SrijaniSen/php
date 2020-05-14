 <?php
    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'student');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $ep=md5($mypassword);
      $sql = "SELECT * FROM svalue WHERE email = '$myusername' and password = '$ep'";
	  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.php");
      }else {
         
		 echo '<script>alert( "Your Login Name or Password is invalid")</script>'; 
      }
   }
?>




























<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>student log in</title>
</head>
<body>
    <div class="container image-effect col-md-4 bg-white">


        <div class="row p-4 colorgreen fg-black">
            <div class="col-12">
                <h1> User Log in<h1>
            </div>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="examplefirstname">Email</label>
                <input name= "username" type="text" placeholder="User Name" class="form-control" id="User Name"
                    aria-describedby="emailHelp" >
                <small id="emailHelp" class="form-text text-muted">Plz Enter Your  User Name Here</small>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input name="password" type="Password" placeholder="Password" class="form-control" id="Last Name"
                    aria-describedby="emailHelp" >
                <small id="emailHelp" class="form-text text-muted">Plz Enter Your Password Here</small>
            </div>
            
                <div class="row">
                    <div class="col-6">
                <div class="button">
                    <button type="submit" formaction="login.php" class="btn btn-success">Log In</button>
                </div>
                </div>
                <div class="col-6 ">
                    <div class="button ">
                        <button formaction="registration.php" type="submit" class="btn btn-success sign">Sign Up</button></button>
                    </div>
                    </div>
                 <br>
                 <br>   

            </div>
            </div>
        
            </form>
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>