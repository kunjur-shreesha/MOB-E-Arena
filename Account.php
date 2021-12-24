<?php 
    session_start();   
    include("php\getName.php");
    if(!$_SESSION["username"])
    {
        header('Location: index.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.css">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css\mainpage.css">
</head>
<body style="background-image:url('images/bk.png');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;color:whitesmoke">
    <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-head fixed-top" style="height:80px">
                <div class="container">
                    <a class="navbar-brand" href="#" style="padding-top:0" >
                    <img src="images/logoa.gif" alt="" width="250px" class="d-inline-block align-text-top">
                    <!-- <img src="images/name.png" alt="" width="300"  class="d-inline-block align-text-top"> -->
                    </a>
                    
                    <div class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px">
                        <i class="bi bi-person-circle"></i> &nbsp<?php echo $_SESSION["name_logged"];?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="Account.php"><i class="bi bi-person-bounding-box"></i>&nbsp Profile</a></li>
                            <li><a class="dropdown-item" href="ChangePassword.php"><i class="bi bi-tools"></i>&nbsp Change Password</a></li>
                            <li><a class="dropdown-item" href="php\logout.php"><i class="bi bi-box-arrow-left"></i>&nbsp Logout</a></li>
                        </ul>
                        </li>
                    </div>
                    
                </div>
            </nav><br><br><br><br>
    </div>
    <div>
        <div class="container mt-4">
            <div class="col-lg-6 mx-auto">
                <h3 class=" pb-2" style="text-align:center;">
                    <span style="border-bottom:1px grey solid;font-style:italic"><b>My Profile</b></span>
                </h3>
                <div class="h-100 p-5 text-white  rounded-007 wrapper" style=" background-color: #fff;
    background-color: rgba(37, 39, 77,0.7);;border-radius: 2rem !important">
                        <img src="avatar.jpg" style="border:3px white solid;margin-left:150px " alt="" class="rounded-circle" width="250px" height="250px">
                        <div style="font-size:20px;margin-left:100px;color:whitesmoke" class="mt-5">
                            <?php
                                $name = $_SESSION['name_logged'];
                                $email = $_SESSION['username'];
                               $phno =  $_SESSION['phno_logged'];
                              $addr =  $_SESSION['addr_logged'];
                              $bdate =  $_SESSION['bdate_logged'];
                            ?>
                            <p><span style="font-weight:700;margin-right:120px">Name : </span><?php echo $name ?></p>
                            <p><span style="font-weight:700;margin-right:75px">Birth-Date : </span><?php echo $bdate ?></p>
                            <p><span style="font-weight:700;margin-right:125px">Email : </span><?php echo $email ?></p>
                            <p><span style="font-weight:700;margin-right:100px">Address : </span><?php echo $addr ?></p>
                            <p><span style="font-weight:700;margin-right:30px">Phone Number : </span><?php echo $phno ?></p>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                               <a href="mobiles.php" style="text-decoration:none;color:white"><button class="btn btn-primary btn-lg btn-block" style="font-size:15px;padding:7px 15px 7px 15px;border-radius:20px" type="button">Go Back</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>






    <script src="bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>