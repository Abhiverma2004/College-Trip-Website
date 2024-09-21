<?php
$insert =false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("connection to this database failed due to " . mysqli_connect_error());
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$desc = isset($_POST['desc']) ? $_POST['desc'] : '';

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

if($con->query($sql)==true){
  $insert =true;
}
else{
  echo "ERROR: $sql <br> $con->error";
  
}

$con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Travel Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>    
  <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
  <div class="container">
    <h1>Welcome to IIT Kharagpur US Trip form</h1>
    <p>Enter your details and submit this form to confirm your participation in the trip</p>
    <?php
    if($insert == true){
    echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to se you joining us for the Us trip</p>";
    }
    ?>

    <form action="index.php" method="post">
      <input type="text" name="name" id="name" placeholder="Enter your name">
      <input type="text" name="age" id="age" placeholder="Enter your Age">
      <input type="text" name="gender" id="gender" placeholder="Enter your gender">
      <input type="email" class="email" id="email" placeholder="Enter your email">
      <input type="phone" class="phone" id="phone" placeholder="Enter your phone">
      <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      <button class="btn">Submit</button>
    </form>
  </div>
  
  <script src="index.js"></script>
</body>
</html>
