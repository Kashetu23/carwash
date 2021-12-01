<?php
$host="localhost";
$un="root";
$pwd="";
$dbname="csstudents";
$connection = mysqli_connect($host,$un,$pwd,$dbname);
 ?>
<html>
<head>
<title>Login |WELCOME</title>
</head>
<body>
  <h1>Welcome to Students Registration Page</h1>
  <p>Please fill in the form to login.</p>
  <form method="post" action="booking.php">

<input type="text" name="username" id="username"placeholder="Enter Username "required/>
<br/>
<input type="password" name="password" id="password"placeholder="Enter password"required/>
<br/>
<input type="submit" name="submit" id="submit" value="submit"/>
<a href="registration.php"> I do not have an account</a>

  </form>
  <?php
  if(isset($_POST['submit'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
     $sql = "SELECT * FROM `students` WHERE `username`='$username' AND
`password`='$password'";
    $result = mysqli_query($connection,$sql);
    if ($result) {
       $count= mysqli_num_rows($result);
       if ($count==1) {
         header('location: dashboard.php');
    }else{
      echo "Incorrect Usename and password";

    }
       }
    }else {
     echo "invalid! Check Server!";
    }


  ?>
</body>
</html>
