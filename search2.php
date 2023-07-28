<!DOCTYPE html>
<html>
<head>
    <title>Search Records</title>
</head>
<body>
    <h1>Search Records</h1>
    <form method="POST" action="search2.php">
        <input type="text" name="search" placeholder="Enter a keyword">
        <input type="submit" value="Search">
    </form>
    <?php
    include("config.php");
// Assuming you have a database connection established

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    // Perform the search query
    $sql = "SELECT * FROM register WHERE blood_group LIKE '%$search%'";
    $result = mysqli_query($con, $sql);

    // Check if any records were found
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border=1>";
        echo "<tr><th>Name</th><th>Age</th><th>Email</th><th>Address</th><th>Phone No</th><th>Blood Group</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the search results
            echo "<tr>";
            echo "<td> " . $row['name'] . "</td>";
            echo "<td> " . $row['age'] . "</td>";
            echo "<td> " . $row['email'] . "</td>";
            echo "<td> " . $row['address'] . "</td>";
            echo "<td> " . $row['phone_number'] . "</td>";
            echo "<td> " . $row['blood_group'] . "</td>";
            echo "</tr>";
            // Add more columns as needed
           
        }
            echo "</table>";
        
    } else {
        echo "No records found.";
    }

    // Close the database connection
    mysqli_close($con);
}
?>

</body>
</html>