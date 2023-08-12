<?php
  $conn=mysqli_connect('localhost','root','','html_login');

    if(isset($_POST['submit']))
    {
      $firstName=$_POST['firstName'];
      $lastName=$_POST['lastName'];
      $email=$_POST['email'];
      $phoneNumber=$_POST['phoneNumber'];
      $city=$_POST['city'];
      
      $sqll="INSERT INTO info_tab (firstName,lastName,email,phoneNumber,city) VALUES ('$firstName','$lastName','$email','$phoneNumber','$city')";

      mysqli_query($conn,$sqll);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Ecoamrce.css">
<title>Student Information Form</title>
</head>
<body>
  <div class="container">
    <h2>Student Information</h2>
    <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <label for="firstName">First Name:</label>
      <input type="text" name="firstName" placeholder="Enter FirstName" required>
      
      <label for="lastName">Last Name:</label>
      <input type="text" name="lastName" placeholder="Enter LastName" required>
      
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Enter your email address" required>
      
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel"  name="phoneNumber" placeholder="Personal PhoneNumber" required>
      
      <label for="city">City:</label>
      <input type="text" name="city" placeholder="Current City" required>
      
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
