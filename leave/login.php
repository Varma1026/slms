<?php 
    include 'connect.php' ;
?>
<!doctype html>
<html lang="en">

<head>
    <title>login|SLMS</title>
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
        .form1
        {
            text-align:center;
            margin-top:30px;
        }

        .name
        {
            
            padding:5px;
            border-left:none;
            border-right:none;
            border-top:none;
            margin-top:5px;
        }
        .pw
        {
            border-left:none;
            border-right:none;
            border-top:none;
            padding:5px;
            
        }
        .reg
        {
            text-decoration:none;
        } 
        .head
        {
            color:#0081c2;
        }

    </style>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
                <div class="main">
                    <!-- MAIN CONTENT -->
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-- INPUTS -->
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="form">
                                                <form class="form1" action='login.php' method="post">
                                                    <h2 class="head"><b>LOGIN</b></h2>
                                                    <input class="name" type="text" name="username" placeholder="Username"><br><br>
                                                    <input class="pw" type="password" name="password" placeholder="Password"><br><br>
                                                    <button class="button1" type="submit" name="login">login</button>&nbsp;&nbsp;&nbsp;
                                                    <a class="para">forgot password?</a>
                                                    <br><br>
                                                    <p>Not a member?<a class="reg" href="register.html">&nbsp;register here</a></p>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- END INPUTS -->                   
            <!-- END WRAPPER -->
</body>

</html>
<?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * from `login` WHERE `username`='$username'";
$sqli=mysqli_query($conn,$query);
$row=mysqli_fetch_array($sqli);
if($sqli)
{
    if($row['password']==$password){
        session_start();
        $_SESSION["username"]=$username;
      header('location:index.html');
    }
    else{
        session_unset();
        echo "<script>alert('incorrect credentials')</script>";
    }
}
}
?>
