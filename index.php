<?php
session_start();
?>
<html>
<head>
    <title>blood</title>
    <style>
       body{
        background-image: url("Bd.jpg");
        background-size: 1500px 800px;

       }
  
        h1{
            text-align:center;
            color:lightblue;
            font-size:50px;
        }
        .btn{
            margin-left:680px;
            border:2px solid black;
            background-color:white;
            width: 150px;
            height: 65px;
           
            font-size:20px;
        }
        </style>
</head>
<body>
    <h1><i><b>BLOOD DONATION</b></i></h1>
    <form action="index1.php" method="post">
        <input type="submit" class="btn" value="ADMIN"/>
    </form>
    <form action="reg2.php " method="post">
        <input type="submit" class="btn" value="USER"/>
    </form>
</body>
</html>