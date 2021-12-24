<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <script >  
//  function matchPassword() {  
// //   var pw1 = document.getElementById("pswd1").value;  
// //   var pw2 = document.getElementById("pswd2").value;  
// //   if(pw1 === pw2)  
// //   {   
// //     alert("Passwords did not match");
// //     // window.location.href = "index.php";
// //   } else {  
// //   // alert("Password created successfully"); 
// //   window.location.href = "insert.php"; 
// //   }  
// // }  
</script>  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-head fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/logoa.gif" alt="" width="250px"  class="d-inline-block align-text-top">
      <!-- <img src="images/name.png" alt="" width="300"  class="d-inline-block align-text-top"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Home</a>
        <a class="nav-link" href="#Brands"><i class="bi bi-dribbble"></i> Brands</a>
        <a class="nav-link" href="#About"><i class="bi bi-megaphone"></i> About</a>
        <a class="nav-link" href="#ContactUs"><i class="bi bi-person-lines-fill"></i> Contact Us</a>
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-power"></i> Login</a>
      </div>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              <form action="php\login_con.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                    <div id="passwordHelpBlock" class="form-text">
                      Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.<br><br>
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    
              </div>
         
              <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
               </form>
              <div class="modal-footer">
                      <p class="ms-0">Don't have an account ?</p>
                      <button href="" class="btn btn-outline-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Sign Up</button>
</div>
      </div>
    </div>
  </div>
</div>

     <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <form  method="post" action="php\insert.php">
  <div class="mb-3">
    <label for="InputName" class="form-label">Enter Name</label>
    <input type="text" class="form-control" id="InputName" name="fname" required>
    <label for="exampleInputEmailz" class="form-label">Enter Email address</label>
    <input type="email" class="form-control" id="exampleInputEmailz" aria-describedby="emailHelp" name="Email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pswd1" class="form-label">Password</label>
    <input type="password" class="form-control" id="pswd1" name="password111"  required>
  </div>
  <div class="mb-3">
    <label for="pswd2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="pswd2" name="confirmpass" required>
  </div>
  <div class="mb-3">
    <label for="bd" class="form-label">Birth Date</label>
    <input type="date" class="form-control" id="bd" name="bdate" required>
  </div>
  <div class="mb-3">
    <div class="form-floating">
  <textarea class="form-control" placeholder="." id="floatingTextarea2" style="height: 100px" name="addr"></textarea>
  <label for="floatingTextarea2">Address</label>
</div>
  </div>
   <div class="mb-3">
    <label for="idphnoz" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="idphnoz" required name="phno">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1z" required>
    <label class="form-check-label" for="exampleCheck1z">Please accept our terms and conditions</label>
  </div>
  <button type="submit"   class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>

<script src="bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

</body>
</html>