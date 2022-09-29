<html>
    <head>
        <style>

*{
            margin: 0px;
            padding: 0px;
        }
         .nav{
             margin: 0px;
             padding-left: 50px;
            background: purple;
            line-height: 80px;
            width: 100%;
            display: inline-block;
            color: white;
            font-weight: bolder;
    }
    body{
        background-color: lavender;
    }
    .sidemenu{
        background-color: powderblue;
        margin: 40px;
        padding: 30px;
        
    }
    sidemenu h2{
        text-align: center;
        padding-left: 20px;

    }
    a.bh{
            color: blue;
            font-weight: bolder;
            font-size: 20px;
        }
        a.bh:hover{
           color:red;
        }
        </style>
    </head>
<body>
    <div class="nav">

<?php
session_start();
 include 'Head.php';
 $data = file_get_contents("data.json"); 
 $data = json_decode($data,true);
 foreach($data as $row)
 {
	 if($_SESSION['passkey']==$row['password'])
	 {                              $_SESSION['tname'] = $row['name'];
									$_SESSION['tmail']=$row['e-mail'];
									$_SESSION['tgender']=$row['gender'];
									$_SESSION['day']=$row['dd'];
									$_SESSION['month']=$row['mm'];
									$_SESSION['year']=$row['yyyy'];
									break;
	 }
 }
?>

</div>
<div class="sidemenu">
<table>
<td>
<fieldset style="height:270px;width:300px">
<h2 style="text-align: center; margin-top:5px; text-decoration:underline">Account</h2> &nbsp &nbsp 
<hr/>
<ul style="list-style-type: none; padding-left:20px; margin-top:20px">
<li><a class="bh" href="BuyerHome.php">Home</a></li>
<li><a class="bh" href="#">View Profile</a></li>
<li><a class="bh" href="Edit.php">Edit Profile</a></li>
<li><a class="bh" href="ChangePass.php">Change Password</a></li>
<li><a class="bh" href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
   
<legend style="text-align: center; font-size:20px; font-weight:bolder;">Profile</legend>
<strong>Name:</strong> <?php echo $_SESSION['tname'];?> <br>
<strong>Email:</strong> <?php echo $_SESSION['tmail'];?> <br>
<strong>Gender:</strong>  <?php echo $_SESSION['tgender'];?> <br>
<strong>Date of Birth:</strong> <?php echo "".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'].""?> <br>

</fieldset>
</td>
</table>
</div>
<br><br>
<fieldset>
<?php include 'footer.php'?>
</fieldset>
</body>

</html> 
