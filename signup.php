

<?php require_once('inc/connection.php') ?>




 <?php 

    if(isset($_POST['submit']) ){


      $error =array ();

        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $username      = mysqli_real_escape_string($connection,$_POST['username']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);



      $error =array ();

      if (!isset($_POST['email'])|| strlen(trim($_POST['email']))<1 ) {
        $error[] ="User name is missing /invalid";
      }
    
    if (!isset($_POST['password'])|| strlen(trim($_POST['password']))<1 ) {
        $error[] ="Password is missing /invalid";
      }


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $error[]  =  "Invalid email address please type a valid email!!";
        }

        if($numResults>=1)
        {
            $error[]  = $email." Email already exist!!";
        }

       

       if (empty($error)) {
               $query =  "INSERT INTO  users(name,username,email,password) values('".$name."','".$username."','".$email."','".md5($password)."')";
        	 
               $result =  mysqli_query($connection ,$query);

               if ($result) {

               	 if(mysqli_result($result)==1){


            $message = $Results['name']." Signup Sucessfully!!";
             }
        else
        {
            $error[]= "Invalid email or password!!";
            
        } 

         }
           
        }

       
    }


?>

<?php 

include('inc/header.php')
 ?>



<body style="background-color:#008080;">
	<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h3 class="title" style="color: black; font-size: 32px;"><b>Sign Up</b></h3>

	               		 <?php 

if (isset($error)&& !empty($error)) {
 
  echo '<div class="errmsg">';
  echo "<b> There were error(s) on your form</b><br>";
  foreach ($error as $errors) {
  	echo "$errors <br>";
  }
  echo "<div>";
}

           ?>
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="signup.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user " aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope " aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user " aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock " ></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock " ></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input id="button" type="submit" name="submit" value="signup">
						</div>
						<div class="login-register">
				            <a href="login.php">Back to Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>
			</body>
</html>