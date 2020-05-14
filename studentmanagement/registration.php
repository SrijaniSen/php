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

    <title>registration</title>
</head>
<body>
    <div class="container  col-md-6 image-effect">


        <div class="row  colorgreen fg-black">
            <div class="col-12">
                <h1> REGISTER<h1>
            </div>
        </div>
        <form method="post" action="submit.php">
            <div class="form-group">
                <label for="examplefirstname">First Name</label>
                <input type="text" placeholder="First Name" class="form-control" name="fn" >
                    
                 <h5 id="firstname"></h5>
            </div>
            <div class="form-group">
                <label for="Last Name">Last Name</label>
                <input type="text" placeholder="Last Name" class="form-control" id="Last Name" name="ln">
                    
                <h5 id="lastname"></h5>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" name="em"
                    aria-describedby="emailHelp" required>
                 <h5 id="email"></h5>
            </div>
           <div class="form-group">
                <label for="exampleInputEmail1">Contact Number</label>
                <input type="text" placeholder=" Enter your contact number" class="form-control" id="num1" name="cn"
                     aria-describedby="emailHelp" required>
                 <h5 id="contactnumber"></h5>
            </div>
            <div class="form-group">
                 <select class="form-control" id="sclass" name="sclass" required="true">
                         <option hidden>Select the Class</option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                         <option value="4">Four</option>
                         <option value="5">Five</option>
                    </select>
            </div>
            <div class="form-group">
                                 
                    <select class="form-control" id="ssection" name="ssection" required="true" disabled>
                                    <option selected="selected" value="select">Select the Section</option>
                    </select>
                
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" placeholder=" Enter your address" class="form-control" id="exampleInputEmail1" name="ad"
                    aria-describedby="emailHelp" required> 
					<h5 id="address"></h5>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" placeholder=" Enter your Password" class="form-control" id="pass1" name="pw"
                    aria-describedby="emailHelp" required> 
					<h5 id="password"></h5>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Confirm Password</label>
                <input type="password" placeholder=" confirm password" class="form-control" id="cp1" name="cpw"
                    aria-describedby="emailHelp" required> 
					<h5 id="confirmpassword"></h5>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Upload image</label>
                <input type="file" class="form-control" id="image1" name="up">
                     
					<h5 id="image"></h5>

            </div>
            
            <div class="row">
                <div class="col-6">
            <div class="button">
                <button id="finalcheck"   type="submit" class="btn btn-success">Register</button></button>
            </div>
            </div>
            <div class="col-6 ">
                <div class="button ">
                    <button type="button" class="btn btn-success ">Cancel</button></button>
                </div>
                </div>
        <br>
        <br>
    </div>
    <br>
    

    </form>

    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="clientvalid.js"  ></script>

<script src="dropdown.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 	
</body>

</html>
            