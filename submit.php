<?php
  // get form data
  //header("Location: http://localhost/connection/HeritageHuesIndia/index.html");
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  // echo "The value of username is" . $username;
  // echo "The value of email is" . $email;
  // echo "The value of password is" . $password;
  // echo "The value of conf is" . $confirm_password;
  // check if passwords match
  if ($password != $confirm_password) {
    $error_msg = "Passwords do not match.";
    echo "Eror" . $error_msg;
  }

  // connect to database
  $conn = oci_connect("system", "system", "//localhost/xe");

  // check connection
  if (!$conn) {
    $e = oci_error();
    $error_msg = "Failed to connect to Oracle: " . $e['message'];
  }
  else echo "connected";
  // check if username or email already exists
  $stmt = oci_parse($conn, "SELECT * FROM register WHERE username = :username OR email = :email");
  oci_bind_by_name($stmt, ":username", $username);
  oci_bind_by_name($stmt, ":email", $email);
  oci_execute($stmt);
  $row = oci_fetch_assoc($stmt);
  if ($row) {
    if ($row['username'] == $username) {
      $error_msg = "Username already exists.";
    } elseif ($row['email'] == $email) {
      $error_msg = "Email already exists.";
    }
  }
  
  // insert user into table
  if (!isset($error_msg)) {
    echo "entered";
    $stmt = oci_parse($conn, "INSERT INTO register (username, email, password) VALUES (:username, :email, :password)");
    oci_bind_by_name($stmt, ":username", $username);
    oci_bind_by_name($stmt, ":email", $email);
    oci_bind_by_name($stmt, ":password", $password);
    oci_execute($stmt);
    oci_commit($conn);
    oci_free_statement($stmt);
    oci_close($conn);
    //header("Location: index.html");
    header("Location: http://localhost/connection/HeritageHuesIndia/index.php");
    exit();
  }

  // close connection
  oci_free_statement($stmt);
  oci_close($conn);
//}

?>