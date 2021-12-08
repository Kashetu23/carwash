<?php
//$host = "localhost";
//$un = "root";
//$pwd = "";
//$dbname = "project1";
//$connection = mysqli_connect($host,$un,$pwd,$dbname);
// session_start();

    // Import DB class from db.php
    require_once('includes/DB.php');

    //if isset $_POST['register'] insert into db as new user
    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $db = new DB();
        $register = $db->insertUser($name, $phone, $email, $password, $gender) ;
        header ( 'Location: ' . ( $register ? 'booking.php' : '' ) );
    }

 ?>
<html lang="en-US">
    <head>
    <title>Streets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
    <!-- Custom Theme files -->
    <!--<link href="style.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
    body {

      background: #7ee0cb;
      background: url("img/single.jpg") top center;
      background: -webkit-linear-gradient(to top, #56779c, #a54ca1);
      background: -moz-linear-gradient(to top, #a54ca1, #a54ca1);
      background: -o-linear-gradient(to top, #a54ca1,#a54ca1);
      background: linear-gradient(to top, #a54ca1, #a54ca1);
      background-size: first.jpg;
      background-attachment: fixed;
      font-family: 'Roboto', sans-serif;

      margin: 0;
      padding: 0;
      /*background-color: ;*/
      height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 40px;
      max-width: 400px;
      height: 500px;
      border: 1px solid #78d4d0;
        background: #cbebeb center;
    }
    #login .container #login-row #login-column #login-box #login-form {
      padding: 15px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
    </style>
    <body>
      <div id="login">
      <br/>
      <br/>
            <h2 align="center" class="text-center text-black pt-1"><b>Create an account</b></h2>
            <div align="center" class="container">
                <div id="login-row" class="row gx-4 gx-lg-5 justify-content-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h4 class="text-center text-info"><b>Enter your details...</b></h4>
                                <div class="form-group">
                                  <b>Full Name: </b>
                                   <input class="text" type="text" name="name" placeholder="Enter Full Name" required="">
                                </br>
                              </br>
                              <b>Phone: </b>
                              <input class="text" type="text" name="phone" placeholder="Enter Phone number" required="">
                                </br>
                              </br>
                              <b> Email:</b>
                              <input class="text" type="email" name="email" placeholder="Please email" required="">
                            </br>
                            </br>
                              <b>Password: </b>
                                  <input class="text" type="password" name="password" placeholder="Enter password" required="">
                                  </br>
                                 </br>
                               <b>Gender:</b>
                            <select name="gender">
                            <option value="">Select Gender</option>
                           <option value="male">Male</option>
                            <option value="female">Female</option>
                             </select>

                                </div>
                                <div class="form-group">
                                </br>
                                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
                                   <a href="login.php"> Already have an account</a>
                                </br>
                                    <input type="submit" name="register" class="btn btn-info btn-md" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
