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
            <li><a class="dropdown-item" href="./Account.php"><i class="bi bi-person-bounding-box"></i>&nbsp Profile</a></li>
            <li><a class="dropdown-item" href="./ChangePassword.php"><i class="bi bi-tools"></i>&nbsp Change Password</a></li>
            <li><a class="dropdown-item" href="php\logout.php"><i class="bi bi-box-arrow-left"></i>&nbsp Logout</a></li>
          </ul>
        </li>
      </div>
    
  </div>
</nav>
	

	