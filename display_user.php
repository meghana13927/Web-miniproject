<?php
session_start();
if(isset($_SESSION['admin']))
{
	$admin=$_SESSION['admin'];
}
	?>
	<html>
	<head>
	<title>TOURISM</title>
	<style>
	table.center {
            margin-left: auto;
            margin-right: auto;
        }
		body{
			background-color:#ccccff;
		}
		</style>
	</head>
	<body>
	<h2><center>User Details</center></h2>
	<table border="2px solid black" class="center" width="70%">
                                <thead>
                                    <tr>
                                        <th scope="col">SI.NO</th>
                                        <th scope="col">name</th>
                                        <th scope="col">age</th>
										 <th scope="col">email</th>
										 <th scope="col">address</th>
										 
										 <th scope="col">phone_number</th>
										<th scope="col">blood_group</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
									include 'config.php';
									$sql1 = "select * from register";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									if($num1 > 0)
									{ 
										while($row1 = mysqli_fetch_array($result1))
										{ 
											$sl+=1;
											$id=$row1[0];
											$name=$row1['name'];
											$age=$row1['age'];
											$email=$row1['email'];
											$address=$row1['address'];
											$phone_number=$row1['phone_number'];
											$blood_group=$row1['blood_group'];
											
											
								?>
                                    <tr>			
										<td><?php echo $sl; ?></td>
										
										<td><?php echo $name; ?></td>
										<td><?php echo $age; ?></td>
										<td><?php echo $email; ?></td>
										<td><?php echo $address; ?></td>
										<td><?php echo $phone_number; ?></td>
										<td><?php echo $blood_group; ?></td>
									
										
										<td>
											<form method="post" action="#">
											
												<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
												<td><button type="submit" name="delete" class="btn btn-danger">Delete</button></td>
												</form>
												</td>
										</tr>
										<?php
												}
												}
											?>
                                </tbody>
                            </table>
							<?php
										if(isset($_POST['delete']))
										{
											foreach ($_POST['id'] as $key => $value) 
											{	
												$selectid=$value;	
											}
											$query1 = "delete from register where id='".$selectid."'";
											mysqli_query($con,$query1) or die(mysqli_error($con));
											echo "<script>
												alert('record Deleted Successful');
											</script>";
											echo "<script> location.href='display_user.php'; </script>";
										}
									?>
									<p><center><a href="index.php">Back</a></center></p>
</body>
</html>