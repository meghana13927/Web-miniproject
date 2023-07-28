<?php
session_start();
?>
<html>
<head>
    <title>blood</title>
    <style>
       body{
        background-image: url("bn.jpeg");
        background-size: 1500px 800px;

       }
  
        h1{
            text-align:center;
            color:red;
            font-size:50px;
        }
        .btn{
            margin-left:680px;
            border:2px solid black;
            background-color:red;
            width: 150px;
            height: 65px;
           
            font-size:20px;
        }
        </style>
</head>
<body>
    <h1><i><b>CUSTOMER DETAILS</b></i></h1>
    <form action="display_user.php" method="post">
        <input type="submit" class="btn" name="display" value="VIEW"/>
        
    </form>
</body>
</html>