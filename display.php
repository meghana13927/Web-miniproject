<?php
$db = mysqli_connect("localhost", "root", "", "donate");
if (!$db) {
echo "not connected to database";
} else {
//echo "database connected";
}
//To Avoid Undefined Index Warning
if(isset($_POST['save']) || isset($_POST['delete']) )
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone_number= $_POST["phone_number"];
    $blood_group = $_POST["blood_group"];
}
if (isset($_POST['save'])) {
$query = "insert into register(name,age,email,address,phone_number,blood_group) values('$name','$age','$email','$address','$phone_number','$blood_group')";
$result1 = mysqli_query($db, $query);
if ($result1) {
echo "<script>
       alert('Entered successfully.');
	   </script>";
	   echo "<script> location.href='display.html';</script>";
	    
}
}


if (isset($_POST['delete'])) {
$query1 = "select * from register where name='$name'";
$result1 = mysqli_query($db, $query1);
$numrows = mysqli_num_rows($result1);
if ($numrows == 0) {
echo "no data found ";
} else {
$query = "delete from register where name='$name'";
$result1 = mysqli_query($db, $query);
if ($result1) {
echo "$name was Deleted Successfully";
}
}
}


?>