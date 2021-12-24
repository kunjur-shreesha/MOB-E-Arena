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
    <!-- <link rel="stylesheet" href="css\mainpage.css"> -->
    <link rel="stylesheet" href="css\PAssword.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-head fixed-top" style="height:80px">
                <div class="container">
                    <a class="navbar-brand" href="#" style="padding-top:0"   >
                    <img src="images/logoa.gif" alt="" width="250px" class="d-inline-block align-text-top">
                    <!-- <img src="images/name.png" alt="" width="300"  class="d-inline-block align-text-top"> -->
                    </a>
                    
                    <div class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px">
                        <i class="bi bi-person-circle"></i> &nbsp<?php echo $_SESSION["name_logged"];?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box"></i>&nbsp Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-tools"></i>&nbsp Change Password</a></li>
                            <li><a class="dropdown-item" href="php\logout.php"><i class="bi bi-box-arrow-left"></i>&nbsp Logout</a></li>
                        </ul>
                        </li>
                    </div>
                    
                </div>
            </nav><br><br><br><br>
    </div>
    <div>
           <h3 class=" pb-2" style="text-align:center;">
                    <span style="border-bottom:0.5px grey solid;font-family: 'Righteous', cursive;font-size:30px">Change Password</span>
                </h3>
                        <div class="card mt-4">
                            <div class="container">
                                <form action="php/updatePassword.php" method="post">
                                    <div class="mb-3">
                                        <label for="paz1" class="form-label">Enter Current Password</label>
                                        <input type="text" class="form-control" id="paz1" name="oldpass" required>
                                    </div><br><br>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="newpass" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword2" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" name="conpass" required>
                                    </div><br>
                                     <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-info" style="font-size:20px;padding:5px 20px 5px 20px;border-radius:30px;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
<br>
                <a href="mobiles.php" style="color:#90a9b0;text-decoration:underline" >Go Back</a>
    </div>
    </div>






    <script src="bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>