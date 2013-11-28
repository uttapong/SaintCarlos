<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
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
    <script src="js/forms.js"></script>

    <script>
	$(document).ready(function() {	
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
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
<div class="extra-block"> 
      <!--==============================row-top=================================-->

<?include"lang.php"?>
  </div>
      
      <!--==============================header=================================-->
      
   <header>
    <div class="row-nav">
        <div class="main">
        <h1 class="logo"><a href="index.html"><img alt="Eni Gma" src="images/logo.png"></a></h1>
        <nav>
           <ul class="menu">
			<li class="###"><a href="index-en.php">Home</a></li>
            <li class=""><a href="About-Us-en.php">About Us</a></li>
            <li class="###"><a href="Services-en.php">Services</a></li>
            <li class="###"><a href="Package-en.php">Package</a></li>
            <li class="current"><a href="Contacts-en.php ">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      </div>
  </header>
  
  <!--==============================content=================================-->
  
   <section id="content">  
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper border-vert">
        <article class="grid_5">
              <h3>Contact Detail</h3>
              <div class="map">
<iframe width="" height="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Krung+Siam+St.Carlos+Hospital+Ban+Klang+Pathum+Thani+Thailand&amp;aq=0&amp;oq=krung+siam&amp;sll=14.003991,100.556327&amp;sspn=0.00634,0.010568&amp;ie=UTF8&amp;hq=Krung+Siam+St.Carlos+Hospital&amp;hnear=Ban+Klang,+Pathum+Thani,+Thailand&amp;ll=14.012,100.548747&amp;spn=0.018772,0.021584&amp;t=m&amp;output=embed"></iframe>
            </div>




             
             <dl class="address">
                <dt>Krung Saim St.Carlos Medical & Spa<br>
                5/84, Moo 2, Tiwanon Road, Tambon Ban Klang, Amphur Muang,<br>
				Pathum Thani, 12000 Thailand
                
				</dt>
                <dd> <span>Telephone :</span>+66 (2) 975-6727</dd>
                
                <dd> <span>FAX :</span>0-2975-6737</dd>
				<dd> <span>E-Mail :</span>spa@stcarlos.com</dd>       
              </dl>
        
         </article>
        <article class="grid_5 prefix_2">
              <h3>Contact Form</h3>
             
    <form id="contact-form">
          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <fieldset>
            <div>
              <label class="name">
                <input type="text" value="Name :">
                <br>
                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="email">
                <input type="email" value="E-mail :">
                <br>
                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="phone">
                <input type="tel" value="Phone :">
                <br>
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="message">
                <textarea>Message :</textarea>
                <br>
                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a><a class="button" data-type="submit">Send</a></div>
          </fieldset>
        </form>
    
     </article>
      </div>
     </div>
  </div>  
 </section>   
 </div>
<div class="block"> 
     <!--==============================footer================================-->
      <footer>
  <?include"inc-footer.php"?>

  </footer>
    </div>
</body>
</html>