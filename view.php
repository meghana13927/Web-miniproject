<?php
$db = mysqli_connect("localhost", "root", "", "donate");
if (!$db) {
echo "not connected to database";
} else {
//echo "database connected";
}
//To Avoid Undefined Index Warning
if(isset($_POST['save']) || isset($_POST['update']) || isset($_POST['delete']) )
{
    $name = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $phone_number= $_POST["phone_number"];
    $blood_group = $_POST["blood_group"];
}
if (isset($_POST['display'])) {
    $query1 = "select * from register";
    $result1 = mysqli_query($db, $query1);
    $numrows = mysqli_num_rows($result1);
    if ($numrows == 0) {
    echo "No Records Found";
    } else {
        echo "<center><h1>User Details</h1></center>";
    echo "<center><table border=1 width=50%><tr><th>id<th><th>name</th><th>Age</th><th>email</th><th>blood_group</th><th>phone_number</th><th>address</th><tr>";
    while ($row = mysqli_fetch_array($result1)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age']  . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['blood_group'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td><a href=\"view.php?id=$row[id]\"onClick=\"return confirm('Are you want to delete?')\">delete</a></td>";
    echo "</tr>";
    }
    echo "</table></center>";
    }
    }

    
    ?>