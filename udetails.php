<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Blood Donation</title>
<link type="text/css" rel="stylesheet" href="new.css"/>
<style> 
.container {
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: pink;
    box-shadow: 0 0 5px red;
}
.wrapper {
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
	background:lightblue;
}
.col-right {
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
}
</style>
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2 align="center">WELCOME</h2>
        <p><br></p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 align="center">user_deatils</h2>
        <form method="POST" action="#">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="name">Age:</label>
        <input type="text" id="age" name="age" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="tel" id="phone_number" name="phone_number" required><br><br>
          </form>
            <form action="display.html">
          <center> <input type="submit" name="submit" value="Donate" /></center>
</form>
          
       
		<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $blood_group = $_POST["blood_group"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
}  
	if(isset($_POST['submit'])){
        $sql = "INSERT INTO register (name, email, blood_group, phone_number, address)
    VALUES ('$name', '$email', '$blood_group', '$phone_number', '$address')";

    
        if($count>0)
	{
		session_start();
		$_SESSION['admin']=$name;
		$id=$_SESSION['admin'];
        echo"Thank You...";
        echo "<script> location.href=display.html'; </script>";
		if(!$_SESSION['admin'])
	{
		//Header("Location:udetails.php"); //udetails page
		//exit;
	}
	}
    
}


	
	
    
		
		
	

?>
      </div>
    </div>
  </div>
  
   
</div>
</body>
</html>
