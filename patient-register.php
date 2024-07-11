

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Rating System</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="img">

<div id="hpmepage">
	
</div>


<div id="d" class="container mt-3">
	 		<div class="row">
	 			<div class="col-md-4 offset-md-4 text-light mt-5">
		 			<form method="POST" action="function.php">

					  <div class="form-group mb-1">
					    <label style="color:#33FFF0; margin-top: 3px; margin-bottom: -3px;" for="fname" class="form-label"><h4>First Name:</h4> </label>
					    <input type="text" placeholder="First Name" name="fname" class="form-control" id="fname" aria-describedby="emailHelp">
					    
					  </div>

					   <div class="form-group mb-1">
					    <label style="color:#33FFF0; margin-top: 3px; margin-bottom: -3px;" for="lname" class="form-label"><h4>Last Name:</h4> </label>
					    <input type="text" placeholder="Last Name" name="lname" class="form-control" id="lname" aria-describedby="emailHelp">
					    
					  </div>

					   <div class="form-group mb-1">
					    <label style="color:#33FFF0; margin-top: 3px; margin-bottom: -3px;" for="exampleInputEmail1" class="form-label"><h4>Email:</h4> </label>
					    <input type="email" placeholder="Email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
					  </div>

					   <div class="form-group mb-1">
					   	    <label  style="color:#33FFF0; margin-top: 3px; margin-bottom: -3px;" for="exampleInputEmail1" class="form-label"><h4>Phone:</h4> </label>
	                        <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
	                   </div>

					  <div class="form-group mb-1">
					    <label  style="color:#33FFF0; margin-top: 3px; margin-bottom: -3px;" for="pass" class="form-label"><h4>Password:</h4></label>
					    <input name="password" type="password" placeholder="Password" class="form-control" id="pass">
					  </div>

					

					   <div class="form-group">
                            <div class="mb-3 mt-3" style="font-size: 21px; ">
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="Male" checked>
                                    <span> Male </span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="Female">
                                    <span>Female </span> 
                                </label>
                            </div>
                            
                        </div>
					 
					  <button type="submit" name="patient_submit" class="btn btn-primary btn-sm">Register</button> 
					  
					    
					  <a href="index.php" style="margin-left: 210px;" class="btn btn-success btn-sm">Go To Home</a>
					   <a 
					   class="btn btn-warning btn-sm "
					   style="display: inline-block; font-size:16px; color:#fff; text-decoration: none; 
					   margin-left: 113px; margin-top:-57px;"
					   href="patient-login.php">Have Account?</a>
					</form>
		 				
	 			</div>
	 		</div>
 	</div>


	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
