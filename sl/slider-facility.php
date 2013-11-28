<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <script>

</script>
<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script>

        jssor_slider1_starter = function (containerId) {
            var jssor_slider1 = new $JssorSlider$(containerId, {
                $ShowLoading: true,                                 //[Optional] Show loading screen or not default value is false
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: false,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 400,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 400
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, direction navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $DirectionNavigatorOptions: {
                    $Class: $JssorDirectionNavigator$,              //[Requried] Class to create direction navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            });
        };
    </script>
    <!-- Jssor Slider Begin -->
    <div id="slider1_container" class="slider1" style="position: relative; top: 0px; left: 0px; width: 600px;
        height: 400px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
<!----------------------------------------- Slides Container --------------------------------------->
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 600px; height: 400px; overflow: hidden;">
            
            
			
			<div>
                <a href="xxxxxxxxxxxx.php"><img u="image" src="../images/slct/rsp1.1.png" /></a>
                <img u="thumb" src="../images/slct/rsp1.2.png" />
            </div>
			<div>
                <a href="xxxxxxxxxxxx.php"><img u="image" src="../images/slct/rsp2.1.png" /></a>
                <img u="thumb" src="../images/slct/rsp2.2.png" />
            </div>
			
			<div>
                <a href="inpatient-accommodation.php"><img u="image" src="../images/slct/ward1.1.png" /></a>
                <img u="thumb" src="../images/slct/ward1.2.png" />
            </div>
			<div>
                <a href="inpatient-accommodation.php"><img u="image" src="../images/slct/ward2.1.png" /></a>
                <img u="thumb" src="../images/slct/ward2.2.png" />
            </div>
			<div>
                <a href="inpatient-accommodation.php"><img u="image" src="../images/slct/ward3.1.png" /></a>
                <img u="thumb" src="../images/slct/ward3.2.png" />
            </div>
			<div>
                <a href="benjarong-restaurant.php"><img u="image" src="../images/slct/ben1.1.png" /></a>
                <img u="thumb" src="../images/slct/ben1.2.png" />
            </div>
			<div>
                <a href="benjarong-restaurant.php"><img u="image" src="../images/slct/ben2.1.png" /></a>
                <img u="thumb" src="../images/slct/ben2.2.png" />
            </div>
			<div>
                <a href="mezzo.php"><img u="image" src="../images/slct/mez1.1.png" /></a>
                <img u="thumb" src="../images/slct/mez1.2.png" />
            </div>
			
			
			
            
        </div>
        
        <!-- DirectionNavigator Skin Begin -->
        <style>
            .slider1 .al, .slider1 .ar, .slider1 .aldn, .slider1 .ardn, .slider1 .alhv, .slider1 .arhv
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/sprite-03.png) no-repeat;
                overflow:hidden;
            }
            .slider1 .al { background-position: -120px -60px; }
            .slider1 .al:hover, .slider1 .alhv { background-position: 0px 0px; }
            .slider1 .aldn { background-position: -120px -60px; }
            .slider1 .ar { background-position: -180px -60px; }
            .slider1 .ar:hover, .slider1 .arhv { background-position: -60px 0px; }
            .slider1 .ardn { background-position: -180px -60px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="al" style="width: 55px; height: 55px; top: 122px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="ar" style="width: 55px; height: 55px; top: 122px; right: 8px">
        </span>
        <!-- DirectionNavigator Skin End -->
        
        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="slider1-T" style="position: absolute; width: 600px; height: 60px; left:0px; bottom: 0px;">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <!-- Thumbnail Item Skin Begin -->
            <style>
                .slider1-T .w, .slider1-T .pav:hover .w, .slider1-T .phv .w
                {
                	position: absolute;
                	WIDTH: 62px;
                	HEIGHT: 32px;
                	border: white 1px dashed;
                }
                * html .slider1-T .w
                {
                	WIDTH /**/: 62px;
                	HEIGHT /**/: 32px;
                }
                .slider1-T .pdn .w, .slider1-T .pav .w
                {
                	border-style: solid;
                }
                .slider1-T .c
                {
                	WIDTH: 62px;
                	HEIGHT: 32px;
                	FILTER:  alpha(opacity=45);
                	opacity: .45;
                	
                	transition: opacity .6s;
                    -moz-transition: opacity .6s;
                    -webkit-transition: opacity .6s;
                    -o-transition: opacity .6s;
                }
                .slider1-T .p:hover .c, .slider1-T .phv .c, .slider1-T .pav .c
                {
                	FILTER:  alpha(opacity=0);
                	opacity: 0;
                }
                .slider1-T .p:hover .c, .slider1-T .phv .c
                {
                	transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }
            </style>
            <div u="slides">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 62px; HEIGHT: 32px; TOP: 0; LEFT: 0;">
                    <div class=w><ThumbnailTemplate style=" WIDTH: 100%; HEIGHT: 100%; border: none;position:absolute; TOP: 0; LEFT: 0;"></ThumbnailTemplate></div>
                    <div class=c style="POSITION: absolute; BACKGROUND-COLOR: #000; TOP: 0; LEFT: 0">
                    </div>
                </div>
            </div>
        </div>
        <a style="display: none" href="http://slideshow.jssor.com">Image Slider</a>
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
<img width=0 height=0 />

</body>
</html>