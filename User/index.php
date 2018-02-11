<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CvSU-ScholarshipInformationSystem</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="cav.png" />
    <link href="bootstrap.min.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

    <!-- NAVBAR
    ================================================== -->
    <style>
        /* use navbar-wrapper to wrap navigation bar, the purpose is to overlay navigation bar above slider */
        .navbar-wrapper {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            height: 51px;
        }
        .navbar-wrapper > .container {
            padding: 0;
        }

		.container {
            padding: 15px;
        }
		
		.navbar-inverse {
			background-color: #22222282;
		}
		
		.menu {
			width: 13%;
			float: left;
			padding: 0;
		}
		.main {
			width: 87%;
			float: left;
			padding: 0;
			margin-top: 0;
		}
		
		hr { 
			display: block;
			border-width: 3px;
			width: 80%;
			float: left;
			margin-bottom: 0;
			margin-top: 0;
		}
		.main > h3, h1 {
			margin-top: 0;
			margin-bottom: 0;
			font-family: Sakkal Majalla;
			font-weight: bold;
			color: white;
        }
		h1 {
			margin-top: 0;
			margin-bottom: 0;
			font-family: Sakkal Majalla;
			font-weight: bold;
			font-size: 55px;
			color: white;
        }
		
		
		
		@media all and (max-width: 768px ){
            .navbar-wrapper {
                position: relative;
                top: 0px;
            }
        }


/* ===================================== Navigation - MENU ============================== */

        ul {
            list-style-type: none;
            margin: 0;
             padding: 0;
            overflow: hidden;
            background-color: #171616;
            border-bottom-style: solid;
            border-bottom-color: #ffbb00;
            border-bottom-width: 2px;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: gray;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
            text-decoration: none; 
            color: #d9edf7;
        }

        .active {
            background-color: #333;
            color: #38a93a;
            text-decoration: none;
        }

/* ===================================== ...END... Navigation - MENU ============================== */



/* ===================================== Footer - MENU ============================== */


        .footer {
            left: 0;
            bottom: 0;
            padding:1px;
            width: 100%;
            background-color: #171616;
            color: #fdfcca;
            text-align: center;
            border-top-style: solid;
            border-top-color: #ffbb00;
        }

/* ===================================== ...END... Footer - MENU ============================== */


/* ===================================== ABOUT - home pg ============================== */
        .container2 {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            max-width: 100%;
            height:auto;
            background-color: green;
        }


        .mv {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            max-width: 30%;
            height:auto;
            background-color: green;
            float:right;
        }





        .about {
            padding: 15px;

            max-width: 70%;
            background-color: #ecef4dba;
            border-radius: 6px;
        }


        .univ {
            padding: 15px;
            max-width: 100%;
            background-color: #777777d4;
            color:white;
            border-radius: 6px;
        }

        



        hr.home { 
            display: block;
            width: 100%;
            border-width: 2px;

        }
        
        h3 {
            margin-top: 5px;
            margin-bottom: 1px;
            font-weight: bold;   
            font-family: Buxton Sketch;
            font-size: 30px;
        }

         h2 {
            margin-top: 5px;
            margin-bottom: 1px;
            font-weight: bold;   
            font-family: Buxton Sketch;
            font-size: 30px;
            background-color: #a9ab23;
            color: white;
            padding:15px;
        }

        p {
            margin-top: 15px;
            margin-bottom: 5px;
            margin-left: 20px;
            margin-right: 20px;
            font-family: Browallia New;
            font-size: 24px;
            line-height: 1;
            text-indent: 40px;
        }

        .p1 {
            margin-top: 15px;
            margin-bottom: 5px;
            margin-left: 20px;
            margin-right: 20px;
            font-family: Browallia New;
            font-size: 24px;
            line-height: 1;
        }



    </style>
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
                <div class="container">
				<div class="menu">
					<img src="cav.png" alt="CvSU" height="115" width="135">
				</div>

				<div class="main">
					<h1>CAVITE STATE UNIVERSITY - MAIN CAMPUS</h1>
					<hr> <br>
					<h3>SCHOLARSHIP INFORMATION SYSTEM</h3>
				</div>
            </nav>

        </div>
    </div>

    <div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        
        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div>
                    <img data-u="image" src="../img/gallery/1300x500/001.jpg" />
                </div>
                <div>
                    <img data-u="image" src="../img/gallery/1300x500/002.jpg" />
                </div>
                <div>
                    <img data-u="image" src="../img/gallery/1300x500/003.jpg" />
                </div>
            </div>
            

            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
            </style>
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        

           <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    </div>


	
	<!--***************** Navigation MENU *******************-->
	
	
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="Scholarship_App.php">Application for Scholarship</a></li>
            <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LogIn</a></li>
        </ul>
	
	<!--***************** Navigation MENU - (END) *******************-->
	
	

<!--***************** LOGIN *******************-->


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$myuser = $_POST['username'];
$mypass= $_POST['password'];
    if ($myuser == '' || $mypass == '') {
        echo " <div class='alert alert-danger'>Enter username or password</div>";

}
else
{


include "db.php";
$result = mysqli_query($conn,"select * from tbl_login where username = '$myuser' and password='$mypass'");
if (mysqli_num_rows($result)>0)
{
   $row = mysqli_fetch_array($result);
$ty = $row['type'];
   if ($row[3]== $ty && $ty == 'admin'){
  $_SESSION['uname']=$myuser;
    echo "<script>location.href='index.php'</script>";
   }else if ($row[3]== $ty && $ty == 'hr'){
     $_SESSION['uname']=$myuser;
      echo "<script>location.href='index-hr.php'</script>";        /*  <<<<<<<<<<<<<<<<<<<<<<   */
   }
}
else
{
  echo " <div class='alert alert-danger'>Your username or password is incorrect</div>";
  echo ""; 
 
}
}
}
?>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h3>LogIn to youre Account</h3>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text01" placeholder="Enter Username" name="uname" required></br>

      <label for="psw"><b>Password</b></label>
      <input type="password01" placeholder="Enter Password" name="psw" required></br>
        
      <button type="submit" class="btn01">Login</button></br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

  
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>












<!--***************** BODY *******************-->



	<div class="container2"> </br></br>



        <div class="mv">
        <div class="univ">
        <h2>UNIVERSITY VISION</h2>
        <hr class="home">
        <p>  The Premier University in historic Cavite recognized for excellence in the development of globally and morally upright individuals.</p> </div> </br>
        
        <div class="univ">
        <h2>UNIVERSITY MISSION</h2>
        <hr class="home">
        <p>  Cavite State University shall provide excellent, equitable, and relevant educational opportunities in the arts, sciences and technology through quality instruction and responsive research and development activities.</p>
        <p>   It shall produce professional, skilled and morally upright individuals for global competitiveness.</p> 
        </div>
    </div>


        <div class="about">
        
        <h3>OFFICE OF THE STUDENT AFFAIRS</h3>
        <hr class="home">
        <p>  As an institution of higher learning, the Cavite State University caters to the needs of students, not only in the acquisition of education but also in their personality development. To ensure that the students’ potentials for advancement are maximized, the Student Welfare Services was established. The Student Welfare Services had been renamed Office of Student Affairs (OSA). It is a major project under the Office of the Vice President for Academic Affairs.</p>

        <p>  The Office of Student Affairs started as one of the functional units of the then Don Severino Agricultural College (DSAC) in 1980. Through the years, the name of the Office was changed to Student Services Project in 1986, Student Services in 1989, Student Welfare Services in 1991 and renamed again to Office of Student Affairs in 1998 when DSAC was elevated into a university, the Cavite State University. Since then, the Office has been providing different student services to its clients such as guidance and counseling, admission and testing, and student development services like student organization and socio-cultural affairs, student publication and placement of students and graduates. The mandated National Service Training Program (NSTP) subject was also offered by the Office in 2002. The Office will continue and shall remain committed to provide student welfare and development activities to the CvSU academic community and the public.</p> </br>

        <h3>OBJECTIVES</h3>
        <hr class="home">
        <p>
         To attract the best and brightest secondary education graduates to study in CvSU; and</br>
         To provide scholasrships to qualified and underprivileged students.</br>
         To attract the best and brightest secondary education graduates to study in CvSU; and</br>
         To provide scholasrships to qualified and underprivileged students.
        </p>

        </div></br></br>





</div>

	
        <!-- FOOTER -->


<div class="footer">
  <p>Copyright © 2018. CvSU Scholarship System</p>
</div>



    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <script type="text/javascript" src="../js/jssor.slider.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: 1,                                    //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: 1,   			            //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,          //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $Align: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
              
                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>
</html>