<!doctype html>
<html>
<head>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .button{
    background-color: rebeccapurple;
    color: white;
    padding: 5px;
    border: none;
    text-align: left;
}
.button:hover{
     background-color: yellow;
     color: red;
 }
    .my-form{
     background-color: lightblue;
     padding: 20px;
     padding-top: 150px;
     margin: auto;
     margin-top: 50px;
     width: 30%;
     height: 700px;
     text-align: center;  
 }
 .remember{
     text-align: left;
     padding-left: 90px;
     margin-left: 150px;
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
    .error {color: #FF0000;}
    a.active{
        color: blue;
    }
    </style>
</head>
<body>
<div class="nav">
<?php session_start();
include 'Head.php';?>
</div>
</fieldset>
<?php $name = $pass = $error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
	   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                              if($row['username']==$_POST['uname'] && $row['password']==$_POST['pass'])
							  {
									$_SESSION['flag'] = 1;
									$_SESSION['uname']=$_POST['uname'];
									$_SESSION['passkey']=$row['password'];
									header("location: Dashboard.php");
									
									break;
							  }
							 
                          }  
						  if($_SESSION['flag']!=1) $error = "Invalid Username or Password";
						  
						  $_COOKIE['us'] = "";
						  $_COOKIE['password'] = "";
						  if(isset($_POST['remember'])){
							  setcookie('us',$_POST['uname'],time()+30);
							  setcookie('password',$_POST['pass'],time()+30);
						  }
                           
	
	 
	 }
 
 ?>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="my-form">
Username:<input type = "text" name="uname" value="<?php {if(isset($_COOKIE['us'])) echo $_COOKIE['us'];}?>"><br>
<br>
Password:<input type = "password" name="pass" value="<?php {if(isset($_COOKIE['password'])) echo $_COOKIE['password'];}?>">
<br>
 <<?php
 echo $error;
 ?>
 
<br>
<div class="remember">
<input type = "checkbox" name="remember">Remember me<br>
    </div>
    <br>
    <input class="button" type="submit" value="Log in"> <span><a class="active" href="#">Forgot Password?</a></span> 

</div>
</form>
<br><br>
<fieldset>
<?php include 'footer.php';?>
</fieldset>

</body></html>