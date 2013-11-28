<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Main</title>
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
        <h1 class="logo"><a href="index.html"><img alt="Eni Gma" src="images/logo.png"></a></h1>
        <nav>
          <ul class="menu">
			<li class="current"><a href="index-ru.php">Главная</a></li>
            <li class=""><a href="About-Us-ru.php">O нас</a></li>
            <li class=""><a href="Services-ru.php">Услуги</a></li>
            <li class=""><a href="Package-ru.php">Предложения</a></li>
            <li class=""><a href="Contacts-ru.php ">Контакты</a></li>
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
              <p>Медициснкий спа - центр Св. Карлос является  первым медицинским спа в Азии, предлагающий интегративный подход в лечении.Данный центр является oдним из самых известных центров в Азии благодаря непревзойденному опыту интегрирования западной и альтернативной медицин на протяжении 20 лет. Мы предлагаем собственную систему диагностики, лечения и применяем новейшее медицинское оборудование.</p><br>
              <a href="About-Us-ru.php" class="button">дальше</a> </article>
        <article class="grid_3 prefix_2">
              <center><h3>Услуги</h3></center>
              <ul class="list-services">
            <li>
       
                  <h5><a href="Body-Treatments-ru.php">Процедуры для тела</a></h5>
                  <h5><a href="Medical-Equipment-ru.php">Аппаратные лечебные процедуры</a></h5>
				  <h5><a href="Body-Massage-ru.php">Массажи</a></h5>
				  <h5><a href="Medical-Spa-ru.php">Лечебные процедуры</a></h5>
				  <h5><a href="Spa-Facial-Therapies-ru.php">Процедуры для лица</a></h5>
				  <h5><a href="Hydro-Therapy-ru.php">Водные процедуры</a></h5>
				  <h5><a href="Hands&Feet-Treatment-ru.php">Процедуры "руки - ноги"</a></h5>
				  <h5><a href="Hair-Treatment-ru.php">Лечение волос</a></h5>
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