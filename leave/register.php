<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>register|SLMS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <style>
        .radin font{
            display:inline;
            padding:5px;
        }
    </style>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <center><h3>
                STUDENT LEAVE MANAGEMENT SYSTEM</h3></center>
            </div>
        </nav>
        <!-- END NAVBAR -->
 
                <div class="main">
                    <!-- MAIN CONTENT -->
                    <div class="main-content">
                        <div class="container-fluid">
                            <h3 class="page-title"></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- INPUTS -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"></h3>
                                        </div>
                                        <div class="panel-body">
                                           
            <form action="login.php" method="post">
            <div class="bg2">
                 <h1 class="task"><center><marquee><font face="" size ="10"color="">REGISTRATION FORM</marquee></font> <center></h1>
            <div class="bg1">
           <lable> FULL NAME  :</lable>
           <input class="form-control" type="text" name="name" placeholder="name"><br>
            <lable>ROLL NO  :</lable>
           <input class="form-control" type="text" name="rollno" placeholder="roll number"><br>
            <lable>BRANCH  :</lable>
            <select class ="form-control" name="branch">
            <option value="">select your option</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="IT">IT<o/ption>
            <option value="EEE">EEE</option>
            <option value="MECH">MECH</option>
            <option value="CIVIL">CIVIL</option>
            </select>
            <br>

            <lable>SECTION  :</lable>
           <input class="form-control" type="text" name="sec" placeholder="section">
           <br>
            <div class="radin">
            <lable>GENDER :</lable>
            <input type="radio" name="gender" value="M" ><font color="navy">male</font>
            <input type="radio" name="gender" value="F" ><font color="navy">female</font><br>
            <br></div>

            <lable>PHONE NUMBER  :</lable>
            <input class="form-control" type="number" name="phno" placeholder="phone number"><br>

            <lable>EMAIL ID  :</lable>
            <input class="form-control" type="email" name="emailid" placeholder="email id"><br>

            <lable>PARENT/GUARDIAN NAME  :</lable>
            <input class="form-control" type="" name="gname" placeholder="name"><br>

            <lable>PARENT/GAURDIAN PHONE NUMBER       :</lable>
            <input class="form-control" type="number" name="gphno" placeholder="phonenumber"><br>
            <lable>PASSWORD</lable>
            <input type="password" name="password" class="form-control"><br>
            <lable>CONFIRM PASSWORD</lable>
            <input type="password" name="cpassword" class="form-control"><br>
            <lable>RECOVERY QUESTION?  :</lable>
            						<select class="form-control" name="rquestion">
										<option value="Your pet name?">Your pet name?</option>
										<option value="Your native place?">Your native place?</option>
										<option value="Your school friend?">Your school friend?</option>
										<option value="Your grandmother's native place?">Your grandmother's native place?</option>
										<option value="Your favourite town?">Your favourite town?</option>
									</select>
            <input class="form-control"  type="text" name="ranswer" placeholder="answer"><br>

            <button  class="button1" name="register" type="submit">SUBMIT</button>

           </div>
        </form>
        </div>
        <!-- END WRAPPER -->
            <!-- Javascript -->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
 <?PHP
 if(isset($_POST["register"])){
	$name=$_POST["name"];
	$rollno=$_POST["rollno"];
	$branch=$_POST["branch"];
	$sec=$_POST["sec"];
	$gender=$_POST["gender"];
	$phno=$_POST["phno"];
	$emailid=$_POST["emailid"];
	$gname=$_POST["gname"];
	$gphno=$_POST["gphno"];
	$password=$_POST["password"];
	$rquestion=$_POST["rquestion"];
	$ranswer=$_POST["ranswer"];
	
    $query ="INSERT INTO `student_details` (`name`, `rollno`, `branch`, `sec`, `gender`, `phno`, `emailid`, `gname`, `gphno`, `password`, `rquestion`, `ranswer`) 
    VALUES ('$name','$rollno','$branch','$sec','$gender','$phno','$emailid','$gname','$gphno','$password','$rquestion','$ranswer')";
	$exe = mysqli_query($conn,$query);
	if($exe)
	{
		echo "user inserted";
        header('location:index.html');
	}
	else {
		echo "data failed";
	}
}
?>