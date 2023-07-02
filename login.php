<?php
// Import DB class from db.php
require_once('includes/DB.php');

// login.php
// This page is used to log in to the site
// It is also used to log out of the site


// If the user is already logged in, redirect to the home page
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}


// If the user has submitted the form
if (isset($_POST['submit'])) {
    // Create a DB object
    $db = new DB();

    // Get the username and password from the form
    $email = $db->escape_string($_POST['email']);
    $password = $db->escape_string($_POST['password']);

    $login = $db->login($email, $password);

    // If the username and password are valid, redirect to the home page
    if ($login) {
        // Redirect to the home page
        header('Location: index.php');
        exit;
    } else {
        // If the username and password are not valid, set an error message
        $error = 'Invalid username or password';
    }
}

?>


<html>
<head>
<title>Streets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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


      background: #67c4ad;
        background: url("../signin/nice.png") top center;
      background: -webkit-linear-gradient(to top, #444997, #504397);
      background: -moz-linear-gradient(to top, #504397, #504397);
      background: -o-linear-gradient(to top, #504397, #504397);
      background: linear-gradient(to top, #504397, #504397);
      background-size: cover;
      background-attachment: fixed;
      font-family: 'Roboto', sans-serif;

      margin: 0;
      padding: 0;
      background-color: ;
      height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
      background: center
      margin-top: 40px;
      max-width: 400px;
      height: 400px;
      border: 1px solid #76b852;
      background-color: #cbebeb;
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
         <br>
        <br>
         <br>
        <h1 align="center" class="text-center text-black pt-1"><b>Welcome customer</b></h1>
        <div align="center" class="container">
            <div id="login-row" class="row gx-4 gx-lg-5 justify-content-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Sign in...</h3> <hr/>
<!--                            // If there is an error, display the error message-->

                            <?php if (isset($error)) { ?>
                                <div class="alert alert-danger">
                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control"  placeholder="Enter your email" required="">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="">
                            </div>
                            <div class="form-group text-left">
                                <label for="remember-me" class="text-info">
                                    <span>Remember me</span>
                                    <input type="checkbox" name="remember-me" id="remember-me">
                                </label>
                            </div><hr/>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-block" value="Login">
                            </div> <br/><br/><hr/>



                            <div id="register-link" class="text-right form-group">
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
