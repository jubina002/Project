<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> ThePawsitivePetCare Online Website</title>

    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
       
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                     ThePawsitivePetCare Online Website</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Pets</a></li>
                        <li><a href="contacts.php">Contacts</a></li>               
                    </ul>
                </div>
            </div><!--/.....................container----------------> 
        </nav><!--/..........................nav-->

       <li id="page_about">
    <div class="title-wrapper">
        <center>
        <h2>About Us</h2>
    </div>
    
    <h4></h4>
    <p style="text-align:justify;">
    ThePawsitivePetCare operates as an online pet shop adopting and selling furry friends.
    The company started in 2023 as a small pet shop to sell quality products for pets such as dogs and cats. 
    Today, the company solely focuses on adopting and finding home for the dogs.
    </p>
    
    <div class="v_space"></div>
     <center> 
    <div class="two_third" style="width:48%;">
        <h2>Mission</h2>
            <p style="text-align:justify;">
            Our goal is to help our customers find the best furry friends online by giving them the best price.</p>
    </div>
    
    <div class="one_third_last" style="width:48%;">
        <h2>Vision</h2>
         <p style="text-align:justify;">
            To be the top of the mind trusted online pet shop nationwide.
        </p>
    </div>
    </div>
    <br><br><br>
    
    <iframe height="400" frameborder="0" style="width: 100%;" src="https://www.google.com/maps/place/27%C2%B042'59.0%22N+85%C2%B017'01.0%22E/@27.7164,85.2824091,18z/data=!3m1!4b1!4m13!1m8!3m7!1s0x39eb18ece8135209:0xa82eb67cf4731fa8!2sSwayambhu,+Kathmandu+44600!3b1!8m2!3d27.7192103!4d85.2955242!16s%2Fg%2F1tdf9j5m!3m3!8m2!3d27.7164!4d85.283597?entry=ttu"> </iframe>
    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>