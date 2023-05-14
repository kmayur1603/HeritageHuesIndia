<!-- <!DOCTYPE html>
<html>
<head>
  <title>Create a Community</title>
  <style>
    /* style for left column */
    html, body {
      height: 99.6%;
    }
    body {
      overflow: hidden;
      background-color: #ff9933;
      font-family: sans-serif;
    }

    .left-column {
      display: inline-block;
      vertical-align: top;
      width: 60%;
      height: 99.4%;
      background-color:#ff9933;
    }

    /* style for right column */
    .right-column {
      display: inline-block;
      vertical-align: top;
      width: 39.7%; 
      /* margin-top: 70px ; */
      height: 99.6%;
    }
    .benefits{
        width: 700px;
        margin: 50px auto;
        font-size: 20px;
        line-height: 1.5;
        text-align: center;
        color: #555;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
        background-color: #fff;
    }

    /* style for form container */
    .form-container {
      background-color: #fff;
      border-radius: 5px;
      padding: 40px;
      box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
      text-align: center;
      margin: 50px auto;
      width: 80%;
      border: 2px solid #138813;
    }

    /* style for the form */
    .form-control {
      display: block;
      margin-bottom: 20px;
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border-radius: 5px;
      border: 2px solid #138813;
    }

    .form-control:focus {
      outline: none;
      border-color: blue;
    }

    /* style for the button */
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #138813;
      color: #fff;
      font-size: 18px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .button:hover {
      background-color: #0e6d0e;
    }

    /* style for file input */
    .file-input {
      display: inline-block;
      width: 100%;
      margin-top: 10px;
      text-align: left;
    }

    .file-input label {
      display: inline-block;
      padding: 10px 20px;
      background-color: #138813;
      color: #fff;
      font-size: 18px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .file-input label:hover {
      background-color: #0e6d0e;
    }

    .file-input input[type="file"] {
      display: none;
    }

    /* style for error message */
    .error-message {
      color: red;
      font-size: 16px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="left-column">
    <h1>The Benefits of Creating a Community</h1>
    <div class="benefits">
        <p>Meet Like-Minded People: Creating a community allows you to meet people who share your interests and passions, making it easier to find new friends and connect with others who "get" you.</p>
        <p>Share Your Love of Something: Creating a community around a particular interest or hobby allows you to share your love of that thing with others who feel the same way. It's a great way to geek out together!</p>
        <p>Learn New Things: Being a part of a community means you're constantly learning from others. You can pick up new skills, learn about new topics, and discover new passions you never knew you had.</p>
        <p>Make a Difference: Creating a community around a cause or issue you care about can make a real difference in the world. Whether you're raising awareness for a particular cause, volunteering your time, or making a donation, your community can have a positive impact on the world around you.</p>
    </div>
  </div>
  <div class="right-column">
    <div class="form-container">
      <h1>Create a Community</h1>
      <form>
        <label for="community-name">Community Name</label>
        <input type="text" id="community-name" class="form-control" required>

        <label for="community-city">City</label>
        <input type="text" id="community-city" class="form-control" required>

        <label for="community-state">State</label>
        <input type="text" id="community-state" class="form-control" required>

        <label for="community-purpose">Purpose</label>
        <textarea id="community-purpose" class="form-control" rows="5"></textarea>

        <label for="image-upload" class="btn btn-primary">Upload Image</label>
        <input type="file" id="image-upload" accept="image/*" required>
        <p> </p>
        

        <a href="index.html"></a><button type="submit" class="button">Create Community</button></a>
      </form>
    </div>
  </div>
  <script>
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
       event.preventDefault();
       const communityName = document.getElementById('community-name').value;
       const communityCity = document.getElementById('community-city').value;
       const communityState = document.getElementById('community-state').value;
       const communityPurpose = document.getElementById('community-purpose').value;
       const communityImage = document.getElementById('image-upload').value;
 
       const community = {
          name: communityName,
          city: communityCity,
          state: communityState,
          purpose: communityPurpose,
          image: communityImage
       };
 
       let communities = JSON.parse(localStorage.getItem('communities')) || [];
       communities.push(community);
       localStorage.setItem('communities', JSON.stringify(communities));
 
       window.location.href = 'home.html';
    });
 </script>
 
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <title>Create a Community</title>
  <style>
    /* style for left column */
    html, body {
      height: 99.6%;
    }
    body {
      overflow: hidden;
      background-color: #ff9933;
      font-family: sans-serif;
    }

    .left-column {
      display: inline-block;
      vertical-align: top;
      width: 60%;
      height: 99.4%;
      background-color:#ff9933;
    }

    /* style for right column */
    .right-column {
      display: inline-block;
      vertical-align: top;
      width: 39.7%; 
      /* margin-top: 70px ; */
      height: 99.6%;
    }
    .benefits{
        width: 700px;
        margin: 50px auto;
        font-size: 20px;
        line-height: 1.5;
        text-align: center;
        color: #555;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
        background-color: #fff;
    }

    /* style for form container */
    .form-container {
      background-color: #fff;
      border-radius: 5px;
      padding: 40px;
      box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
      text-align: center;
      margin: 50px auto;
      width: 80%;
      border: 2px solid #138813;
    }

    /* style for the form */
    .form-control {
      display: block;
      margin-bottom: 20px;
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border-radius: 5px;
      border: 2px solid #138813;
    }

    .form-control:focus {
      outline: none;
      border-color: blue;
    }

    /* style for the button */
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #138813;
      color: #fff;
      font-size: 18px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .button:hover {
      background-color: #0e6d0e;
    }

    /* style for file input */
    .file-input {
      display: inline-block;
      width: 100%;
      margin-top: 10px;
      text-align: left;
    }

    .file-input label {
      display: inline-block;
      padding: 10px 20px;
      background-color: #138813;
      color: #fff;
      font-size: 18px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .file-input label:hover {
      background-color: #0e6d0e;
    }

    .file-input input[type="file"] {
      display: none;
    }

    /* style for error message */
    .error-message {
      color: red;
      font-size: 16px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="left-column">
    <h1>The Benefits of Creating a Community</h1>
    <div class="benefits">
        <p>Meet</p>
        <p>Share</p>
        <p>Learn</p>
        <p>Make</p>
    </div>
  </div>
  <div class="right-column">
    <div class="form-container">
      <h1>Create a Community</h1>
      <form method="POST" action="">
        <label for="community-name">Community Name</label>
        <input type="text" name="community-name" id="community-name" class="form-control" required>

        <label for="community-city">City</label>
        <input type="text" name="community-city" id="community-city" class="form-control" required>

        <label for="community-state">State</label>
        <input type="text" name="community-state" id="community-state" class="form-control" required>

        <label for="community-purpose">Purpose</label>
        <textarea id="community-purpose" class="form-control" rows="5"></textarea>

        <label for="image-upload" class="btn btn-primary">Upload Image</label>
        <input type="file" id="image-upload" accept="image/*" required>

        <button type="submit" class="button" name="create-community">Create Community</button>
      </form>
    </div>
  </div> 
  <?php
    if (isset($_POST['create-community'])) {
      $communityName = $_POST['community-name'];
      $communityCity = $_POST['community-city'];
      $communityState = $_POST['community-state'];

      // Connection details
    //   $db_username = "your_oracle_db_username";
    //   $db_password = "your_oracle_db_password";
    //   $db_sid = "your_oracle_db_sid";
    //   $db_service_name = "your_oracle_db_service_name";
    //   $db_port = "your_oracle_db_port";
      
      // Establish a connection to the database
      $conn = oci_connect("system", "system", "localhost/XE");

      if (!$conn) {
        echo "Failed to connect to Oracle database";
      } else {
        $query = "INSERT INTO community (name, city, state) VALUES ('$communityName', '$communityCity', '$communityState')";
        $stid = oci_parse($conn, $query);

        if (oci_execute($stid)) {
          echo "Community created successfully";
        } else {
          echo "Failed to create community";
        }

        oci_free_statement($stid);
        oci_close($conn);
      }
    }
  ?>
  <!-- <script>
    const form = document.getElementById('community-form');
    const button = document.getElementById('create-community');

    button.addEventListener('click', (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const communityData = {
        name: formData.get('community-name'),
        city: formData.get('community-city'),
        state: formData.get('community-state'),
        purpose: formData.get('community-purpose'),
        image: formData.get('community-image')
      };

      fetch('path/to/your/other/page', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(communityData)
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        // Handle response data here
      })
      .catch(error => {
        console.error(error);
        // Handle error here
      });
    });
  </script> -->
</body>
</html>

