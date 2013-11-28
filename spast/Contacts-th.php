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
			<li class="###"><a href="index-th.php">หน้าหลัก</a></li>
            <li class="###"><a href="About-Us-th.php">เกี่ยวกับเรา</a></li>
            <li class="###"><a href="Services-th.php">การบริการ</a></li>
            <li class="###"><a href="Package-en.php">แพ็คเกจ</a></li>
            <li class="current"><a href="Contacts-th.php ">ติดต่อเรา</a></li>
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
              <h3>รายละเอียดการติดต่อ</h3>
              <div class="map">
              <iframe width="" height="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=206143753775650235086.0004e74608810e52d0ea3&amp;ie=UTF8&amp;t=m&amp;ll=14.004241,100.554621&amp;spn=0.003123,0.003219&amp;z=17&amp;output=embed"></iframe>
            </div>
             
             <dl class="address">
                <dt>โรงพยาบาลกรุงสยามเซนคาร์ลอส<br>
                5/48 หมู่ 2 ถนนติวานนท์ ตำบลบ้านกลาง อำเภอเมืองปทุมธานี<br>
                จังหวัดปทุมธานี 12000
				</dt>
                <dd> <span>โทรศัพท์ :</span>0-2975-6700</dd>
                
                <dd> <span>โทรสาร :</span>0-2975-6737</dd>
				<dd> <span>อีเมล :</span>spa@stcarlos.com</dd>       
              </dl>
        
         </article>
        <article class="grid_5 prefix_2">
              <h3>ติดต่อสอบถาม</h3>
             
    <form id="contact-form">
          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <fieldset>
            <div>
              <label class="name">
                <input type="text" value="ชื่อ - นามสกุล :">
                <br>
                <span class="error">*This is not a valid name.</span> <span class="empty">*โปรดกรุณาระบุ.</span> </label>
            </div>
            <div>
              <label class="email">
                <input type="email" value="อีเมล :">
                <br>
                <span class="error">*This is not a valid email address.</span> <span class="empty">*โปรดกรุณาระบุ.</span> </label>
            </div>
            <div>
              <label class="phone">
                <input type="tel" value="เบอร์โทรศัพท์ :">
                <br>
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*โปรดกรุณาระบุ.</span> </label>
            </div>
            <div>
              <label class="message">
                <textarea>ข้อความ :</textarea>
                <br>
                <span class="error">*The message is too short.</span> <span class="empty">*โปรดกรุณาระบุ.</span> </label>
            </div>
            <div class="buttons-wrapper"><a class="button" data-type="reset">ลบข้อมูล</a><a class="button" data-type="submit">ส่งคำถาม</a></div>
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