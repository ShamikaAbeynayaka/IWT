<?php 

require_once('displayprofile.php');
?>



<!DOCTYPE html>
<html>
<head>
  <title>Profile page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/profile.css">
</head>
<body>


 <?php
    // Include or require the PHP file containing the function
    require_once 'sidebar.php';

    // Call the function to display the sidebar
    displaySidebar($username);
 ?>


<div class="content" style="background-image: url(assets/img/loginbg.jpg);">
   <div class="container">
    <h2><u>Welcome <?php echo $username; ?> !</u></h2>
    <form id="registrationForm" method="post" action="">
      <div class="form-group">
        <label for="firstName">Username</label>
        <input type="text" id="username" name="uname" value="<?php echo $username; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="lastName">National Identity Number</label>
        <input type="text" id="nic" name="nic" value="<?php echo $nic; ?>" readonly>
      </div>

       <div class="form-group">
        <label for="lastName">Phone Number</label>
        <input type="text" id="pnumber" name="pnumber" value="<?php echo $phoneNumber; ?>" readonly>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
      </div>

        <div class="form-group">
        <label for="lastName">Date of birth</label>
        <input type="date" id="Dob" name="Dob" value="<?php echo $dateOfBirth; ?>" readonly>
      </div>
    </form>

    <div class="form-group">
      <form action="redirect.php" method="post">
       <button type="submit" name="edit">Edit Profile</button>
      </form>
      </div>
      <div class="form-group">
     <form action="deleteAcc.php" method="post">
       <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</button>
     </form>
    </div>
     <div class="form-group">
     <form action="" method="">
       <button type="submit" style="background-color: green"><h3><b>+</b>POST AD</h3></button>
     </form>
    </div>


  </div>

</div>
</body>
</html>
