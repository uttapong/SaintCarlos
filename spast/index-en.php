<!DOCTYPE html>
<html lang="en">
    <head>
    <title>St.Carlos Medical &amp; Spa</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script>
	$(function(){
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg','images/slide-2.jpg','images/slide-3.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true,
			slideDirection: 'N',
			slideShowSpeed: 1000,
			transitionEffect: 'fade',
			sequenceMode: 'normal',		
			pagination: '#nav'
	
       });	
    });
    </script>

    <!--[if lt IE 8]>
   <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
    <!--[if lt IE 9]>   
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   <script src="js/html5shiv.js"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
  <![endif]-->

 </head>
 <body>
<div class="extra-block1"> 
      <!--==============================row-top=================================-->

<?include"lang.php"?>
  </div>
      
      <!--==============================header=================================-->
      
      <header>
<div class="row-nav">
          <div class="main">
        <h1 class="logo"><a href="#"><img alt="Eni Gma" src="images/logo.png"></a></h1>
        <nav>
           <ul class="menu">
            <li class="current"><a href="index-en.php">Home</a></li>
            <li><a href="About-Us-en.php">About Us</a></li>
            <li><a href="Services-en.php">Services</a></li>
            <li><a href="Package-en.php">Package</a></li>
            <li><a href="Contacts-en.php ">Contacts</a></li>
          </ul>
       </nav>
        <div class="clear"></div>
      </div>
    </div>
  </header>
 </div>

<div class="block">
      <div class="nav-buttons">
    <div id="nav">&nbsp;</div>
  </div>

    <!--==============================content=================================-->
    <section id="content">
  
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper border-vert">
        <article class="grid_5">
              <h3>Krung Siam St.Carlos Medical Spa</h3>
              <figure class="img-rounded"><img src="images/page2-img1.jpg" alt="" /> </figure>
              <h4> St. Carlos Medical Spa</h4>
              <p>We are now opening our doors to everyone and experience our system of applying integrated medicine. We combine the latest medical technology integrated with alternative forms of treatment to address medical concerns, physical challenges, and mental issues. Our patients also benefit from our full service offerings in skin care and aesthetic medicine services.</p><br>
              <a href="About-Us-en.php" class="button">Read More</a> </article>
        <article class="grid_3 prefix_2">
              <center><h3>Our Services</h3></center>
              <ul class="list-services">
            <li>
       
                  <h5><a href="Body-Treatments-en.php">Body Treatments</a></h5>
                  <h5><a href="Medical-Equipment-en.php">Medical Equipment</a></h5>
				  <h5><a href="Body-Massage-en.php">Body Massage</a></h5>
				  <h5><a href="Medical-Spa-en.php">Medical Spa</a></h5>
				  <h5><a href="Spa-Facial-Therapies-en.php">Spa Facial Therapies</a></h5>
				  <h5><a href="Hydro-Therapy-en.php">Hydro Therapy</a></h5>
				  <h5><a href="Hands&Feet-Treatment-en.php">Hands & Feet Treatment</a></h5>
				  <h5><a href="Hair-Treatment-en.php">Hair Treatment</a></h5>
			</li>
          </ul>
      </div>
     </div>
  </div>  
 </section> 
 

      
      <!--==============================footer================================-->
   <footer>
<?include"inc-footer.php"?>
  </footer>
 </div>
</body>
</html>