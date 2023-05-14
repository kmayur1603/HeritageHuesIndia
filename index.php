<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>HeritageHuesIndia</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <h1> HERITAGE HUES INDIA</h1>
  <body>
    <div class="background">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    
    <div class="form-container">
      <h1 >Login</h1>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" placeholder="Username" style="color: orange" name="Username" required>
        <input type="password" placeholder="Password" style="color: green" name="Password" required>
        <a href="signup.php" style="text-decoration: none"><h6>Don't have an account? Sign Up</h6></a>
        <button type="submit"><a href="home.html" style="text-decoration: none">Login</a></button>
      </form>
    </div>
    <?php
    error_reporting(0);

 $conn = oci_connect("system", "system", "localhost/XE");
 if (!$conn) {

 $m = oci_error();

 echo $m['message'], "\n";

 exit;

 }
 else{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['Username'];
    $_SESSION['usr']=$name;
    $pass = $_POST['Password'];
    if (empty($name)) {
        echo "username is empty";
    }
    else if (empty($pass)) {
        echo "password is empty";
    }
    else {
      button1($conn, $name, $pass);
    }
  }
 }
 function button1($conn, $name, $pass){
  $s = oci_parse($conn, "SELECT username FROM register where username='$name' and password='$pass'");
            oci_execute($s);
            $row = oci_fetch_all($s, $res);
            if($row){
              header("Location: http://localhost/connection/HeritageHuesIndia/home.html?Username=$name");
            }
            else{

                echo '<script>alert("Wrong username or password")</script>';
            }

 }
?>
  </body>
</html>
