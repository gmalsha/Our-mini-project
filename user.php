
<?php session_start(); ?>


<?php require_once('inc/connection.php') ?>

<?php 

if (!isset($_SESSION['user_id'] )) {
	# code...
	header('location:index.php');
}

 ?>

<?php 
include('inc/header.php')
 ?>

<body>
	
<header>
	
<div class="name"><h4><i><b>My Shopping Cart</b></i></h4></div>
<div class="loggedin"><h4>Welcome <?php echo $_SESSION['name'] ?>!   <a href="logout.php">Log Out</a></h4></div>


</header>



</body>
 