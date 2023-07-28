<html>
    <head>
        <title>Blood Donation</title>
    </head>
    <body>
            <h3 align="center"> Please Search for a specific blood_group you want to see the details: </h3>
            <br />

            
            <input type="text" name="blood" />
            <input class="src_btn" type="submit" name="search" value="Search" />
                <table width="800" border="1" cellpadding="1" cellspacing="1">
                <tr>
                <th>name</th>
                <th>age</th>
                <th>email</th>
                <th>address</th>
                <th>phone_number</th>
                <th>blood_group</th>
                </tr> 
<?php
if(isset($_POST["search"]))
{
$connection = mysqli_connect('localhost', 'root', '', 'donate');
$sql="SELECT * FROM register WHERE blood_group = '$search'";
$Joined_records=mysqli_query($connection,$sql);

if (isset($_POST['blood'])){
    $search = $_POST['blood'];
}
while ($row=mysqli_fetch_assoc($Joined_records)){
    echo"<tr>";
    echo"<td>".$row["name"]."</td>";
    echo"<td>".$row["age"]."</td>";
    echo"<td>".$row["email"]."</td>";
    echo"<td>".$row["address"]."</td>";
    echo"<td>".$row["phone_number"]."</td>";
    echo"<td>".$row["blood_group"]."</td>";
    echo"</tr>";

}
}

?>
    </body>
</html>