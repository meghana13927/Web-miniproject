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
        background-image: url("bn.jpeg");
        background-size: 1500px 800px;

       }
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
        <h2 align="center">Admin Login</h2>
        <p><br></p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2 align="center"></h2>
        <form method="POST">
          <p>
            <label>Username<span>*</span></label>
            <input type="text" name="username" placeholder="Username"  required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password" required>
          </p>
          <p>
		  </dl>
           <center> <input type="submit" name="submit" value="login" /></center>
          </p>
          <p>
            <a href=""></a>
          </p>
        </form>
		<?php
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	echo "<script>console.log('Hello')</script>";
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql = "select * from admin where username='$username' and password='$password'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['admin']=$username;
		$id=$_SESSION['admin'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='viewb.php'; </script>";
		if(!$_SESSION['admin'])
	{
		//Header("Location:index1.php"); //admin login page
		//exit;
	}
	}
	else
	{
		
		echo "<script>
				alert('Invalid username or Password');
				
			</script>";
	}
}
?>
      </div>
    </div>
  </div>
  <div class="credit">
   <a href="https://htmlcodex.com"></a>
  </div>
</div>
</body>
</html>