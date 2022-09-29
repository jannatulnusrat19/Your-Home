<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
        .card2{
            background-color: white;
        }
        .col-8{
            margin-top: 40px;
        }

    </style>
</head>
<body>

<div class="nav">
<?php
error_reporting(0);
session_start();
$_SESSION['uname'] = "";
$_SESSION['flag'] = 0;
include 'head.php'?>
</div>
<br>

<fieldset style="height:50px; margin-top: 30px;">
<center><h2>Find your future home here!</h2></center>
</fieldset>
<br><br>
<div class="sidemenu">
<table>
<td>
<fieldset style="height:270px;width:300px">
<h2 style="text-align: center; margin-top:5px; text-decoration:underline">Account</h2> &nbsp &nbsp 
<hr/>
<ul style="list-style-type: none; padding-left:20px; margin-top:20px">
<li><a class="bh" href="#">Home</a></li>
<li><a class="bh" href="Profile.php">View Profile</a></li>
<li><a class="bh" href="Edit.php">Edit Profile</a></li>
<li><a class="bh" href="ChangePass.php">Change Password</a></li>
<li><a class="bh" href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
</table>
<!-- </div> -->
<br><br>
<fieldset>
<h2 style="text-align: left; margin-top:5px; text-decoration:underline">Most Viewed Apartments</h2>
                <div class="card2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-4">
                                 <img class="card-img-top mt-3 p-2" src="images/247584256_356139062957072_5931969867426458258_n.jpg" alt="">   
                                </div>
                                <div class="col-8 ">
                                    <h4 class="mt-4">Peace Shelter✡</h4>
                                    <label>Location:Mirpur,Dohs</label> <br>
                                    <label>Square ft: 1200square ft</label> <br>
                                    <label>Description:3 Bed, Dining, Drawing, 4 Bath, Kitchen, 3 Balcony.</label> <br>
                                    <label>Asking price:3500/- per square ft.</label> <br>
                                    <label>Negotiable:No</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 

                                </div>
                                <div class="col-4">
                                    <img class="card-img-top mt-1 p-2" src="images/247317249_462016151869250_3200170028485453296_n.jpg" alt="">   
                                </div>
                                   <div class="col-8 ">

                                    <h4 class="mt-4">Daylight✡</h4>
                                    <label>Location:Banani,Dohs</label> <br>
                                    <label>Square ft: 1500square ft</label> <br>
                                    <label>Description:4 Bed, Dining, Drawing, 5 Bath, Kitchen, 4 Balcony.</label> <br>
                                    <label>Asking price:4500/- per square ft.</label> <br>
                                    <label>Negotiable:Slightly</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 
                               </div>
                                   <div class="col-4">
                                    <img class="card-img-top mt-1 p-2 mb-3" src="images/247375047_617027926123365_3465912541445192580_n.jpg" alt="">   
                                   </div>
                                   <div class="col-8 ">
                                    <h4 class="mt-4">Morning Bell✡</h4>
                                    <label>Location:Uttara</label> <br>
                                    <label>Square ft: 1200square ft</label> <br>
                                    <label>Description:3 Bed, Dining, Drawing, 4 Bath, Kitchen, 3 Balcony.</label> <br>
                                    <label>Asking price:4000/- per square ft.</label> <br>
                                    <label>Negotiable:Yes</label> <br>
                                    <span><a class="bh" href="#">Tap for more</a></span> 
                            </div>
                        </div>
                    </div>
                </div>
    </div>  
</fieldset>
<br><br>
<fieldset>
<?php include 'footer.php' ?>
</fieldset>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   <script src="js/bootstrap.js"></script>

</body>
</html>