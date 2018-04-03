

<?php session_start(); ?>


<?php require_once('inc/connection.php') ?>




 <?php 


       
    if(isset($_POST['submit'])){

      $error =array ();

      if (!isset($_POST['email'])|| strlen(trim($_POST['email']))<1 ) {
        $error[] ="User name is missing /invalid";
      }
    
    if (!isset($_POST['password'])|| strlen(trim($_POST['password']))<1 ) {
        $error[] ="Password is missing /invalid";
      }


if (empty($error)) {
  
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $result= mysqli_query($connection,"select * from users where email='".$email."' and password='".md5($password)."'");
       
       if($result){

       if(mysqli_num_rows($result)==1){

$user= mysqli_fetch_assoc($result);

$_SESSION['user_id'] = $user['userID'];

$_SESSION['name'] = $user['username'];


          header('location:user.php');

            $message = $Results['name']." Login Sucessfully!!";
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
<body style="background-color:  #008080">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  


<div class="container">
  <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
    <div class="panel panel-info" > 
      <div class="panel-heading"> 
        <div class="panel-title"> Sign In </div> 


  <?php 

if (isset($error)&& !empty($error)) {
 
  echo '<p id="error">Invalid User/Password</p>';




}

           ?>

        <div class="forgot-password"> <a href="#">Forgot password?</a> </div> 
      </div> 
      <div class="panel-body panel-pad"> 
        <div id="login-alert" class="alert alert-danger col-sm-12 login-alert">
       </div> 
          <form id="loginform" class="form-horizontal" role="form" action="login.php" method="post">
            
            <div class="input-group margT25"> 
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </span> 
              <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email"> 
            </div> 
            <div class="input-group margT25"> 
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
              <input id="login-password" type="password" class="form-control" name="password" placeholder="password"> 
            </div> 
            <div class="input-group"> 
              <div class="checkbox"> 
                <label> 
                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
                </label> 
              </div> 
            </div> 
            <div class="form-group margT10"> 
            <!-- Button --> 
              <div class="col-sm-12 controls"> 
              <input id="button" type="submit" name="submit" value="login">
              </div> 
            </div> 
            <div class="form-group"> 
              <div class="col-md-12 control"> 
                <div class="no-acc"> 
                  Don't have an account! 
                  <a href="signup.php" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Sign Up Here </a> 
                  
                </div> 
              </div> 
            </div> 
          </form> 
        </div> 
      </div> 
    </div>
  </body>
</html>