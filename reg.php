<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Blood Donation</title>
<link type="text/css" rel="stylesheet" href="new.css"/>
<style> 
body{
        background-image: url("bnn.jpeg");
        background-size: 1500px 800px;

       }
       
.container {
    position:relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: lightblue;
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
        <h2 align="center">User Register</h2>
        <p><br></p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 align="center"></h2>
        <form method="POST" action="user_login.php">
          <p>
            <label>name<span></span></label>
            <input type="text" name="name" placeholder="name" required>
          </p>
          <p>
          <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="email" required><br><br>
          </p>
          <p>
            <label>password<span></span></label>
            <input type="text" name="password" placeholder="password" required>
          </p>
          </form>
            <form method="post" action="user_login.php">
          <center> <input type="submit" name="submit" value="Register" /></center>
</form>
          
       
		<?php
    	include("config.php");
if(isset($_POST['submit']))
{
	error_reporting(1);

	$name=$_POST['name'];
	$email=$_POST['email'];
    $password=$_POST['password'];
}  
	if(isset($_POST['submit'])){
        $query="insert into userlogin(name,email,password) values('$name','$email','$password')";
        $result1=mysqli_query($db,$query);
    
    if($result1){
        echo"Registered Sucessfully";
    }
}

	
	
    
		
		
	

?>
      </div>
    </div>
  </div>
  
   
</div>
</body>
</html>
