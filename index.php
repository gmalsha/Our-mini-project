<?php 
include('inc/header.php')
 ?>



<body id="mypage" data-spy="scroll" data-target="#myNavbar" data-offset="50" style="background-color: black">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
<?php 
include('nav.php')
 ?>



  
<div class="topic" id="index">

   
   

 <h1 style="color: white"><b><i>Smart Accessories</i></b></h1>
  <h3 style="color: white">......We provide world's best devices......</h3>
</div>

  
 

 <div class="container" style="background-color: #800000">


  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important;" >
      

      <div class="item active">
        <img src="img/1.jpg"  style="width:100%; height: 400px;">
      </div>
    
      <div class="item">
        <img src="img/2.jpg"  style="width:100% ; height: 400px;">
      </div>
       <div class="item">
        <img src="img/3.jpg" style="width:100%; height: 400px;">
      </div>

       <div class="item">
        <img src="img/4.jpg" style="width:100%; height: 400px;" >
      </div>

        <div class="item">
        <img src="img/5.jpg"  style="width:100%; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   </div>



 
 



<div id="about" class="container-fluid text-center" style="background-color:darkblue; " >
  
  <h2 style="color:black;">What we offer</h2>

  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small "></span>
      <h4 style="color:#303030;">POWER</h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4 style="color:#303030;">LOVE</h4>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4 style="color:#303030;">JOB DONE</h4>
  
    </div>
  </div>
<br>
<br>
<br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4 style="color:#303030;">GREEN</h4>
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4 style="color:#303030;">CERTIFIED</h4>
    
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
   
    </div>
  </div>

</div>






<div id="contact" class="container-fluid"   style="background-color:#DB7093;">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Sabaragamuwa University, SriLanka</p>
      <p><span class="glyphicon glyphicon-phone"></span> 0375678789</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@gamil.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container text-center" id="acc">

  <div class="row">
    <div class="col-sm-4" id="phone">
      <p class="text-center" style="font-size: 40px; color: black;"><strong><b>Smart Phones</b></strong></p><br>

  <a href="phone.php "><img src="img/phone.jpg" class="img-circle person" alt="Random Name" width="255" height="255"></a>

      
    </div>
    <div class="col-sm-4">
      <p class="text-center" style="font-size: 40px; color: black;"><strong><b>Tablets</b></strong></p><br>

<a href="tablets.php"><img src="img/tablet.jpg" class="img-circle person" alt="Random Name" width="255" height="255"></a>

      
    </div>
    <div class="col-sm-4">
      <p class="text-center" style="font-size: 40px; color: black;"><strong><b>Laptops</b></strong></p><br>
      <a href="laptops.php"> <img src="img/laptop.jpg" class="img-circle person" alt="Random Name" width="255" height="255"></a>
     
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#mypage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


<?php 

include('inc/footer.php')
 ?>

