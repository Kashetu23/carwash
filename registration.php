<?php
$host="localhost";
$un="root";
$pwd="";
$dbname="csstudents";
$connection = mysqli_connect($host,$un,$pwd,$dbname);
 ?>
<html>
<head>
<title>registration |WELCOME</title>
</head>
<body>
  <h1>Welcome to Students Registration Page</h1>
  <p>Please fill in the form to register.</p>
  <form method="post" action="about.php">
    <input type="text" name="fullname" id="fullname" placeholder="Enter Fullname"required/>
  <br/>
  <input type="text" name="phone" id="phone"placeholder="Enter phone number"required/>
<br/>
<input type="text" name="username" id="username"placeholder="Enter Username "required/>
<br/>
<input type="password" name="password" id="password"placeholder="Enter password"required/>
<br/>
<input type="submit" name="submit" id="submit" value="submit"/>
<a href="login.php"> I have an account</a>

  </form>
  <?php
  if(isset($_POST['submit'])) {
    $fullname =$_POST['fullname'];
    $phone =$_POST['phone'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql = " INSERT INTO `students`( `fullname`, `phone`, `username`, `password`)VALUES('$fullname','$phone', '$username','$password')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
      echo "registration Successful";
    }else {
    echo "registration Unsucessful";
    }
  }

  ?>
</body>
</html>
