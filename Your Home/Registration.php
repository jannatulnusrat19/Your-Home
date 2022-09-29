<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    .details{
        background-color: powderblue;
        width: 60%;
        height: 70%;
        margin-top: 20px;
        margin-left: 350px;
        padding: 30px;
    }
    .error{
  color:red;
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
    </style>
</head>
<body>
<div class="nav">
<?php
session_start();
$_SESSION['uname'] = "";
$_SESSION['flag'] = 0;
include 'head.php'?>
</div>
<br> <br>
<?php  
 $message = '';   
 $error='';

 $name_err = $email_err = $uname_err = $pass_err = $cpass_err = $gender_err =$date_err= '';
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["uname"]))  
      {  
           $name_err = "Name is required";  
      }
    else {
  $EmptyArr = str_word_count($_POST['uname']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$_POST['uname']) || $EmptyArr<2) 
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
    
    
  }
       if(empty($_POST["email"]))  
      {  
           $email_err = "Email is required";  
      }  
    else {
    
    // check if e-mail address is well-formed
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
      
    }
  }
       if(empty($_POST["usname"]))  
      {  
           $usname_err = "Username is required";  
      }  
       if(empty($_POST["pass"]))  
      {  
           $pass_err = "Password is required";  
      }
    else{
      if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST['pass']))
      
        $pass_err = "Password is invalid";
      else
        $pass_err = "";}
       if(empty($_POST["cpass"]))  
      {  
           $cpass_er = "Confirm password filed cannot be empty";  
      } 
    else{
      if($_POST["cpass"]!=$_POST["pass"])
        $cpass_err = "Mismatched password.. Try again.";
    }
       
       if(!isset($_POST["gender"]))  
      {  
           $gender_err = "Gender cannot be empty";  
      } 
    if(empty($_POST["dd"]))  
      {  
           $date_err = "date is required";  
      }  
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
     if($name_err=="" && $email_err=="" && $uname_err=="" && $pass_err=="" && $cpass_err=="" && $gender_err==""&& $date_err==""  
      ){
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['uname'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["usname"],
                     'password'     =>      $_POST["pass"],
                     'gender'     =>     $_POST["gender"],  
                    'dd'     =>     $_POST["dd"] ,
                    'mm'    =>     $_POST["mm"],
                     'yyyy' =>     $_POST["yy"]
          
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
     }
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 }
 ?>


<center><h2 style="height:50px; margin: 30px; line-height:50px">New here? Register now & find your future home</h2></center>



<form action = "" method = "post">

<div class="details">
<table>
<tr><td>Name</td><td>:<input type = "text" name="uname" class="form-control"><span class="error"><?php echo $name_err;?></span></br></td></tr>

<tr><td>Email</td><td>:<input type = "text" name="email" class="form-control"><span class="error"><?php echo $email_err;?></span></br></td></tr>

<tr><td>Username</td><td>:<input type = "text" name="usname" class="form-control"><span class="error"><?php echo $uname_err;?></span></br></td><tr>

<tr><td>Password</td><td>:<input type = "password" name="pass" class="form-control"><span class="error"><?php echo $pass_err;?></span></br></td></tr>

<tr><td>Confirm Password</td><td>:<input type = "password" name="cpass" class="form-control"><span class="error"><?php echo $cpass_err;?></span></br></td></tr>
</table>

<br>
<legend>Gender</legend>
<input type = "radio" name="gender" value="Male">Male&nbsp <input type = "radio" name="gender" value="Female">Female&nbsp <input type = "radio" name="gender" value="Other">Other
<span class="error"><?php echo $gender_err;?></span>

<br>


<legend>Date of Birth:</legend>
<input type = "text" name = "dd" width=100>/&nbsp <input type = "text" name = "mm" width=100>/&nbsp <input type = "text" name="yy" width=100> (dd/mm/yyyy)</fieldset>
<span class="error"><?php echo $date_err;?></span>
<br><br>
<input class="button" type="submit" value="Submit"> &nbsp &nbsp <button type="reset" class="button" value="Reset">Reset</button>
<br>
</div>
</form>
<?php echo $message;
echo $error;
  ?>
 <br><br> <br>
  <fieldset>
  <?php include 'footer.php'?>
  </fieldset>

</body>
</html>