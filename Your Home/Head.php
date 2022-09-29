<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: purple;
        }
        a{
            color: white;
            font-weight: bolder;
            font-size: 15px;
        }
        a:hover{
           color:red;
        }
        .button:hover{
            background-color: yellow;
            color: red;
       }
    

    </style>
</head>
<body>
<span style="font-size:40px;color:white;"><b>Your Home</b> &nbsp &nbsp &nbsp 
<?php
$home = "/Controller/BuyerHome.php";
$login = "Login.php";
$registration = "Registration.php";
$aboutUs = "AboutUs.php";
$blank = "";
$logout = "logout.php";
 if(!($_SESSION['flag']))
	echo "<a  href='$home'>Home</a>|<a href='$login'>Login</a>|<a href='$registration'>Registration</a>|<a href='$aboutUs'>About us</a>";
else 
	echo"Logged in as <a href=$blank>".$_SESSION['uname']."</a>|<a href='$logout'>Logout</a>";
?>
</body>
</html>