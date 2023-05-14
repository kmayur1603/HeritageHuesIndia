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
      <h1>Register</h1>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "password") {
          echo "<p>Error: Passwords do not match.</p>";
        } elseif ($_GET['error'] == "userexists") {
          echo "<p>Error: Username or Email already exists.</p>";
        }
      }
    ?>
      <form action="submit.php" method="post">
        <input type="text" placeholder="Username" name="username" style="color: orange" required>
        <input type="email" placeholder="Email" name="email" style="color: orange" required>
        <input type="password" placeholder="Password" name="password" style="color: green" required>
        <input type="password" placeholder="Confirm Password" name="confirm_password" style="color: green" required>
        <h6><a href="index.php" style="text-decoration: none">Already have an account? Sign in</a></h6>
        <button type="submit">Sign Up</button>
      </form>
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "passwordmatch") {
            echo "<p style='color:red;'>Error: Passwords do not match.</p>";
          }
          elseif ($_GET['error'] == "userexists") {
            echo "<p style='color:red;'>Error: Username or Email already exists.</p>";
          }
        }
      ?>
    </div>
  </body>
</html>
