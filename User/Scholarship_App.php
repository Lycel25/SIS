<!DOCTYPE html>
<?php
$conn = new mysqli("localhost","root","","sis"); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link type="text/css" rel="stylesheet" href="css/login.css">
        <link type="text/css" rel="stylesheet" href="css/aform.css">
     <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/javas.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>CvSU-ScholarshipInformationSystem</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="cav.png" />
    <link href="bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>


    <header>

<?php
if(isset($_POST['submit'])){
$date = $_POST['date'];
$studnum = $_POST['studnum'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$cellphone = $_POST['cellphone'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$momname = $_POST['momname'];
$momocc = $_POST['momocc'];   
$dadname = $_POST['dadname'];
$dadocc = $_POST['dadocc'];
$nob = $_POST['nob'];
$nos = $_POST['nos'];
$income = $_POST['income'];
$scholarship_name = $_POST['scholarship_name'];
$gpa = $_POST['gpa'];
$units = $_POST['units'];
$reason = $_POST['reason'];
$course = $_POST['course'];
$year = $_POST['year'];   
$semester = $_POST['semester'];
$ay = $_POST['ay'];
$reference = $_POST['reference'];
$position = $_POST['position'];  



$sql="insert into tbl_appform(date, studnum, fullname, address, gender, cellphone, email, birthdate, birthplace, momname, momocc, dadname, dadocc, nob, nos, income, scholarship_name, gpa, units, reason, course, year, semester, ay, reference, position) values('$date', '$studnum', '$fullname', '$address', '$gender', '$cellphone', '$email','$birthdate','$birthplace','$momname','$momocc','$dadname', '$dadocc', '$nob', '$nos', '$income', '$scholarship_name', '$gpa', '$units','$reason','$course','$year','$semester','$ay', '$reference', '$position')";
$query=mysqli_query($conn,$sql);

  if($query){
echo "<script type='text/javascript'>alert('Upload successfully!')</script>";
echo "<script type='text/javascript'> document.location = 'Scholarship_App.php'; </script>";
} else{
echo "<script type='text/javascript'>alert('Failed to upload!')</script>";
}
} 
?>


</header> 

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

        .about {
            padding: 15px;
            margin: auto;
            max-width: 90%;
            background-color: #dddddd78;
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
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="Scholarship_App.php">Application for Scholarship</a></li>
            <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>

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














<!-- ***************** BODY ******************* -->



<div class="container2"> </br></br>
        <!-- Application Form -->
    <div align="center">

  <h3>Application for Scholarship</h3>
    <div align="center">
    <div class="container1">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 


<div class="row">
  <div class="column">
  </div>
  <div class="column">
      Date: <input type="date" class="form-control" id="date" placeholder="Date Today (m/d/y)" name="date" required>
  </div>
</div>

<h4>I. Personal Information</h4>

<div class="row">
  <div class="column">
      Student Number: <input type="text1" min="1" maxlength="9" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="studnum" placeholder="Enter Student Number" name="studnum" required>
  </div>
</div>

<div class="row">
  <div class="column">
      Name: <input type="text" class="form-control" id="fullname" placeholder="Enter First Name | MI. | Last Name" name="fullname" required>
  </div>
</div>

<div class="row">
  <div class="column">
    Address: <input type="text" class="form-control" id="address" placeholder="Enter Complete Address" name="address" required>
  </div>
  <div class="column">
     Gender:
    <input type="radio" name="gender" value="female" id="female" required>Female
    <input type="radio" name="gender" value="male" id="male">Male
  </div>
</div>

<div class="row">
  <div class="column">
    Contact No.: <input type="text" min="1" maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="cellphone" placeholder="Enter Cellphone Number" name="cellphone" required>
  </div>
  <div class="column">
    E-mail:<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
  </div>
</div>

<div class="row">
  <div class="column">
    Date of Birth: <input type="date" class="form-control" id="birthdate" placeholder="Enter Date of Birth" name="birthdate" required>
  </div>
  <div class="column">
    Birthplace:<input type="text" class="form-control" id="birthplace" placeholder="Enter Birthplace" name="birthplace" required>
  </div>
</div>

<div class="row">
  <div class="column">
    Mother's Name: <input type="text" class="form-control" id="momname" placeholder="Enter Mother's Name" name="momname"required>
  </div>
  <div class="column">
    Occupation:<input type="text" class="form-control" id="momocc" placeholder="Enter Mother's Occupation" name="momocc" required>
  </div>
</div>

<div class="row">
  <div class="column">
    Father's Name: <input type="text" class="form-control" id="dadname" placeholder="Enter Father's Name" name="dadname" required>
  </div>
  <div class="column">
    Occupation:<input type="text" class="form-control" id="dadocc" placeholder="Enter Father's Occupation" name="dadocc" required>
  </div>
</div>

<div class="row">
  <div class="column">
    No. of Brothers: <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="nob" placeholder="Enter the No. of Brothers" name="nob" required>
  </div>
  <div class="column">
    No. of Sisters: <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="nos" placeholder="Enter the No. of Sisters" name="nos" required>
  </div>
</div>

<div class="row">
  <div class="column">
      Estimated Annual Family Income: ₱<input type="text1" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="income" placeholder="Enter Annual Income" name="income" required>
  </div>
</div></br>

<h4>II. Scholarship:</h4>

  <div class="row">
     <div class="column">
      <div class="col-sm-12">
      Type of Scholarship: <select type="text" name="scholarship_name" required>
	      
      <option name="" value="1">Select...</option><optgroup label="CvSU SCHOLARSHIP PROGRAM">
      <option name="" value="">CvSU State Scholarship</option>
      <option name="" value="">Academic Scholarship</option>
      <option name="" value="">CvSU Scholarship Privelage</option>
      <option name="" value="">Service Scholarship</option>

      <optgroup label="CvSU FINANCIAL ASSISTANCE PROGRAM">
      <option name="" value="">Student Assistanship</option>
      <option name="" value="">Job Experience Program</option>

      <optgroup label="GOVERNMENT SCHOLARAHIP">
      <option name="" value="">Republic Act 7160 (RA 7160)</option>
      <option name="" value="">PVAO Government (Phils Veterans Affairs)</option>
      <option name="" value="">DND- CHED- PASUC</option>
      <option name="" value="">Presidential Decree 577 (PD 577)</option>
      <option name="" value="">City Government of Dasmarinas Scholarship Program</option>
      <option name="" value="">Municipality of Indang Scholarship</option>
      <option name="" value="">DA Agriculture Competitiveness Enhancement Fund</option>
      <option name="" value="">(ESGPPA) CHED Disbursement</option>
      <option name="" value="">CHED StuFAP - Tulong Dunong</option>

      <option name="" value="">1st District of Cavite by Cong. Abaya</option>
      <option name="" value="">2nd District of Cavite by Cong. Lani Revilla</option>
      <option name="" value="">3rd District of Cavite by Cong. Advincula</option>
      <option name="" value="">5th District of Cavite by Cong. Loyola</option>
      <option name="" value="">6th District of Cavite by Cong. Ferrer</option>
      <option name="" value="">7th District of Cavite by Cong. Tolentino</option>
      <option name="" value="">1st District of Batangas by Cong. Buhain</option>
      <option name="" value="">KALINGA Partylist</option>
      <option name="" value="">ANGKLA Partylist</option>
      <option name="" value="">*Iskolar ng Bayan (RA 10648)</option>

      <optgroup label="PRIVATE SCHOLARSHIP">
      <option name="" value="">Lifebank Foundation, Inc.</option>
      <option name="" value="">Cavite Association, USA Inc.</option>
      <option name="" value="">Cavite association of Jacksonville, Florida, USAScholarship Program</option>
      <option name="" value="">CvSU CEAP</option>
      <option name="" value="">OWWA(Overseas Workers Welfare Administration)</option>
      <option name="" value="">Norwegian Mission Alliance, Phil. Scholarship</option>
       <span class="error">* <?php echo $scholarship_nameErr;?></span>
      </select> </div> </div>
      <div class="column">
      GPA: <input type="text1" class="form-control" id="gpa" placeholder="Enter your GPA" name="gpa" required>
        </div>
    </div>

<div class="row">
  <div class="column">
    Total Enrolled Units: <input type="text1" min="1" maxlength="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');"class="form-control" id="units" placeholder="Enter Units" name="units" required>
  </div>
  </div> </br>

<h4>III. Reasons for Applying:</h4>
  <div class="row">
    <input type="text" class="form-control" id="reason" placeholder="Enter your Reason" name="reason" required>
  </div>


<h4>IV. Degree:</h4>
<div class="row">
  <div class="column">
    Course: <input type="text" class="form-control" id="course" placeholder="Enter your Course" name="course" required>
  </div>
  <div class="column">
    Year Level:<select type="text1" name="year" required>
    <option value="">Select...</option>
    <option value="1styr">1st Year</option>
    <option value="2ndyr">2nd Year</option>
    <option value="3rdyr">3rd Year</option>
    <option value="4thyr">4th Year</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="column">
    Semester: <select type="text1" name="semester" required>
    <option value="">Select...</option>
    <option value="1stsem">First Semester</option>
    <option value="2ndsem">Second Semester</option>
  </select>
  </div>
  <div class="column">
    A.Y.:<select type="text1" name="ay" required>
    <option value="1">Select...</option>
        <?php
          
    $query = $conn->query("SELECT * FROM  tbl_position where p_status = 'Enabled' ORDER BY p_title ASC");     
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
      echo '<option value="'.$row['p_title'].'">'.$row['p_title'].'</option>';
      }
    }?>
  </select>
  </div>
</div></br> 

<h4>V. Reference:</h4>
<div class="row">
  <div class="column">
    Name: <input type="text" class="form-control" id="reference" placeholder="Enter Reference" name="reference" required>
  </div>
  <div class="column">
    Position: <input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" required>
  </div>
</div> </br>


    <button type="submit" name="submit" value="Submit" class="btn1">Submit</button>

  </form>
  
    </div>
    </div>
    </div>
    

        <script>
            !function (e) { var t = function (t, n) { this.$element = e(t), this.type = this.$element.data("uploadtype") || (this.$element.find(".thumbnail").length > 0 ? "image" : "file"), this.$input = this.$element.find(":file"); if (this.$input.length === 0) return; this.name = this.$input.attr("name") || n.name, this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]'), this.$hidden.length === 0 && (this.$hidden = e('<input type="hidden" />'), this.$element.prepend(this.$hidden)), this.$preview = this.$element.find(".fileupload-preview"); var r = this.$preview.css("height"); this.$preview.css("display") != "inline" && r != "0px" && r != "none" && this.$preview.css("line-height", r), this.original = { exists: this.$element.hasClass("fileupload-exists"), preview: this.$preview.html(), hiddenVal: this.$hidden.val() }, this.$remove = this.$element.find('[data-dismiss="fileupload"]'), this.$element.find('[data-trigger="fileupload"]').on("click.fileupload", e.proxy(this.trigger, this)), this.listen() }; t.prototype = { listen: function () { this.$input.on("change.fileupload", e.proxy(this.change, this)), e(this.$input[0].form).on("reset.fileupload", e.proxy(this.reset, this)), this.$remove && this.$remove.on("click.fileupload", e.proxy(this.clear, this)) }, change: function (e, t) { if (t === "clear") return; var n = e.target.files !== undefined ? e.target.files[0] : e.target.value ? { name: e.target.value.replace(/^.+\\/, "") } : null; if (!n) { this.clear(); return } this.$hidden.val(""), this.$hidden.attr("name", ""), this.$input.attr("name", this.name); if (this.type === "image" && this.$preview.length > 0 && (typeof n.type != "undefined" ? n.type.match("image.*") : n.name.match(/\.(gif|png|jpe?g)$/i)) && typeof FileReader != "undefined") { var r = new FileReader, i = this.$preview, s = this.$element; r.onload = function (e) { i.html('<img src="' + e.target.result + '" ' + (i.css("max-height") != "none" ? 'style="max-height: ' + i.css("max-height") + ';"' : "") + " />"), s.addClass("fileupload-exists").removeClass("fileupload-new") }, r.readAsDataURL(n) } else this.$preview.text(n.name), this.$element.addClass("fileupload-exists").removeClass("fileupload-new") }, clear: function (e) { this.$hidden.val(""), this.$hidden.attr("name", this.name), this.$input.attr("name", ""); if (navigator.userAgent.match(/msie/i)) { var t = this.$input.clone(!0); this.$input.after(t), this.$input.remove(), this.$input = t } else this.$input.val(""); this.$preview.html(""), this.$element.addClass("fileupload-new").removeClass("fileupload-exists"), e && (this.$input.trigger("change", ["clear"]), e.preventDefault()) }, reset: function (e) { this.clear(), this.$hidden.val(this.original.hiddenVal), this.$preview.html(this.original.preview), this.original.exists ? this.$element.addClass("fileupload-exists").removeClass("fileupload-new") : this.$element.addClass("fileupload-new").removeClass("fileupload-exists") }, trigger: function (e) { this.$input.trigger("click"), e.preventDefault() } }, e.fn.fileupload = function (n) { return this.each(function () { var r = e(this), i = r.data("fileupload"); i || r.data("fileupload", i = new t(this, n)), typeof n == "string" && i[n]() }) }, e.fn.fileupload.Constructor = t, e(document).on("click.fileupload.data-api", '[data-provides="fileupload"]', function (t) { var n = e(this); if (n.data("fileupload")) return; n.fileupload(n.data()); var r = e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]'); r.length > 0 && (r.trigger("click.fileupload"), t.preventDefault()) }) }(window.jQuery)
    </script>
	
	




</br></br>



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
