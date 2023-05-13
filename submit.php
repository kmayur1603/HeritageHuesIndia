<?php
echo "hicheck";
if (!isset($_POST['submit'])) {
  echo "hi";
  // get form data
  //header("Location: http://localhost/connection/HeritageHuesIndia/index.html");
  $username = $_POST['username'];
  echo $username;
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // check if passwords match
  if ($password != $confirm_password) {
    $error_msg = "Passwords do not match.";
  }

  // connect to database
  $conn = oci_connect("system", "system", "//localhost/xe");

  // check connection
  if (!$conn) {
    $e = oci_error();
    $error_msg = "Failed to connect to Oracle: " . $e['message'];
  }

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
    $stmt = oci_parse($conn, "INSERT INTO register (id, username, email, password) VALUES (users_seq.nextval, :username, :email, :password)");
    oci_bind_by_name($stmt, ":username", $username);
    oci_bind_by_name($stmt, ":email", $email);
    oci_bind_by_name($stmt, ":password", $password);
    oci_execute($stmt);
    oci_commit($conn);
    oci_free_statement($stmt);
    oci_close($conn);
    //header("Location: index.html");
    header("Location: http://localhost/connection/HeritageHuesIndia/index.html");
    exit();
  }

  // close connection
  oci_free_statement($stmt);
  oci_close($conn);
}

?>