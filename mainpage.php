<?php session_start();   include("php\getName.php");if(!$_SESSION["username"])
{
    //Do not show protected data, redirect to login...
    header('Location: index.php');
} ?>
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
    <link rel="stylesheet" href="css\mainpage.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-head fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/logoa.gif" alt="" width="250px"  class="d-inline-block align-text-top">
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
</nav><br><br><br>

<div>
    <div class="container py-4 " >
      <div class="row align-items-md-stretch">
      <div class="col-lg-12">
        <div class="h-100 p-5 text-white bg-dark bg-back rounded-007 wrapper">
          <div class="row">
              <h3 class=" pb-2" style="text-align:center"><i>Lorem Epsum</i></h3>
              <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt hic ipsam harum cupiditate necessitatibus voluptas sunt neque fugiat eligendi aliquam rerum quibusdam ut itaque, magnam adipisci. Ad, molestiae unde?<i>
              <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt hic ipsam harum cupiditate necessitatibus voluptas sunt neque fugiat eligendi aliquam rerum quibusdam ut itaque, magnam adipisci. Ad, molestiae unde?<i>
              <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt hic ipsam harum cupiditate necessitatibus voluptas sunt neque fugiat eligendi aliquam rerum quibusdam ut itaque, magnam adipisci. Ad, molestiae unde?<i>
              <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt hic ipsam harum cupiditate necessitatibus voluptas sunt neque fugiat eligendi aliquam rerum quibusdam ut itaque, magnam adipisci. Ad, molestiae unde?<i>
          </div>
        </div>
      </div>
</div>


</div><br>
<div class="container" style="font-style:normal">
<div>
  <!-- <aside class="rounded-007">
    <h4 style="text-align:center"><em>Refine Results</em></h4>
    <h6 class=" pb-2 pt-2" >Price Range</h6>
    <div class="price">
                            <input type="radio" class="form-check-input" name="price_range" id="price_1"> <label class="form-check-label" for="price_1">Rs. 5,000 and below </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_2"> <label class="form-check-label" for="price_2">Rs. 5,000 - Rs. 7,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_3"> <label class="form-check-label" for="price_3">Rs. 7,000 - Rs. 10,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_4"> <label class="form-check-label" for="price_4">Rs. 10,000 - Rs. 15,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_5"> <label class="form-check-label" for="price_5">Rs. 15,000 - Rs. 20,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_6"> <label class="form-check-label" for="price_6">Rs. 20,000 - Rs. 30,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_7"> <label class="form-check-label" for="price_7">Rs. 30,000 - Rs. 50,000 </label><br>
                            <input type="radio" class="form-check-input" name="price_range" id="price_8"> <label class="form-check-label" for="price_8">Rs. 50,000 and above </label><br><br>
    </div>
    <h6 class="  pt-2" >Popular Brands</h6>
    <div class="brands">
        
                            <input type="checkbox" class="form-check-input" name="Apple" id="brand_1"> <label class="form-check-label" for="brand_1">Apple</label><br>
                            <input type="checkbox" class="form-check-input" name="Samsung" id="brand_2"> <label class="form-check-label" for="brand_2">Samsung</label><br>
                            <input type="checkbox" class="form-check-input" name="OnePlus" id="brand_3"> <label class="form-check-label" for="brand_3">OnePlus</label><br>
                            <input type="checkbox" class="form-check-input" name="Xiaomi" id="brand_4"> <label class="form-check-label" for="brand_4">Xiaomi</label><br>
                            <input type="checkbox" class="form-check-input" name="Realme" id="brand_5"> <label class="form-check-label" for="brand_5">Realme</label><br>
                            <input type="checkbox" class="form-check-input" name="Oppo" id="brand_6"> <label class="form-check-label" for="brand_6">Oppo</label><br>
                            <input type="checkbox" class="form-check-input" name="Vivo" id="brand_7"> <label class="form-check-label" for="brand_7">Vivo</label><br>
                            <input type="checkbox" class="form-check-input" name="Poco" id="brand_8"> <label class="form-check-label" for="brand_8">Poco</label><br>
    </div>
    <h6 class="  pt-2" >RAM</h6>
    <div class="ram">
        
                            <input type="checkbox" class="form-check-input" name="3gb_ram" id="ram_1"> <label class="form-check-label" for="ram_1">3 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="4gb_ram" id="ram_2"> <label class="form-check-label" for="ram_2">4 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="6gb_ram" id="ram_3"> <label class="form-check-label" for="ram_3">6 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="8gb_ram" id="ram_4"> <label class="form-check-label" for="ram_4">8 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="12gb_ram" id="ram_5"> <label class="form-check-label" for="ram_5">12 GB & above </label><br>
                            
    </div>
    <h6 class="  pt-2" >Internal Memory</h6>
    <div class="rom">
        
                            <input type="checkbox" class="form-check-input" name="32gb_rom" id="rom_1"> <label class="form-check-label" for="rom_1">32 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="64gb_rom" id="rom_2"> <label class="form-check-label" for="rom_2">64 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="128gb_rom" id="rom_3"> <label class="form-check-label" for="rom_3">128 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="256gb_rom" id="rom_4"> <label class="form-check-label" for="rom_4">256 GB & above </label><br>
                            <input type="checkbox" class="form-check-input" name="512gb_rom" id="rom_5"> <label class="form-check-label" for="rom_5">512 GB & above </label><br>
                            
    </div>
    <h6 class="  pt-2" >Camera Resolution</h6>
    <div class="camera">
        
                            <input type="checkbox" class="form-check-input" name="12mp_cam" id="cam_1"> <label class="form-check-label" for="cam_1">12 MP & above </label><br>
                            <input type="checkbox" class="form-check-input" name="16mp_cam" id="cam_2"> <label class="form-check-label" for="cam_2">16 MP & above </label><br>
                            <input type="checkbox" class="form-check-input" name="20mp_cam" id="cam_3"> <label class="form-check-label" for="cam_3">20 MP & above </label><br>
                            <input type="checkbox" class="form-check-input" name="48mp_cam" id="cam_4"> <label class="form-check-label" for="cam_4">48 MP & above </label><br>
                            <input type="checkbox" class="form-check-input" name="64mp_cam" id="cam_5"> <label class="form-check-label" for="cam_5">64 MP & above </label><br>
                            <input type="checkbox" class="form-check-input" name="108mp_cam" id="cam_6"> <label class="form-check-label" for="cam_6">108 MP & above </label><br>
                            
    </div>
    <h6 class="  pt-2" >Network Type</h6>
    <div class="network">
        
                            <input type="checkbox" class="form-check-input" name="5g_net" id="net_1"> <label class="form-check-label" for="net_1">5G </label><br>
                            <input type="checkbox" class="form-check-input" name="4g_net" id="net_2"> <label class="form-check-label" for="net_2">4G </label><br>
                            <input type="checkbox" class="form-check-input" name="volte_net" id="net_3"> <label class="form-check-label" for="net_3">VOLTE </label><br>              
    </div>
    <h6 class="  pt-2" >Connectivity & More</h6>
    <div class="connectivity">
        
                            <input type="checkbox" class="form-check-input" name="bluetooth_con" id="con_1"> <label class="form-check-label" for="con_1"> Bluetooth 5</label><br>
                            <input type="checkbox" class="form-check-input" name="nfc_con" id="con_2"> <label class="form-check-label" for="con_2"> NFC</label><br>
                            <input type="checkbox" class="form-check-input" name="fm_con" id="con_3"> <label class="form-check-label" for="con_3"> FM</label><br>              
                            <input type="checkbox" class="form-check-input" name="fig_sen_con" id="con_4"> <label class="form-check-label" for="con_4"> Fingerprint scanner</label><br>
                            <input type="checkbox" class="form-check-input" name="indisp_sen_con" id="con_5"> <label class="form-check-label" for="con_5"> In-display fingerprint scanner</label><br>
                            <input type="checkbox" class="form-check-input" name="face_con" id="con_6"> <label class="form-check-label" for="con_6"> Face unlock</label><br>              
                            <input type="checkbox" class="form-check-input" name="wifi_con" id="con_7"> <label class="form-check-label" for="con_7" > Wi-Fi 6</label><br>              
    </div>
    <h6 class="  pt-2" >Operating System</h6>
    <div class="os">
        
                            <input type="checkbox" class="form-check-input" name="and_os" id="os_1"> <label class="form-check-label" for="os_1"> Android</label><br>
                            <input type="checkbox" class="form-check-input" name="ios_os" id="os_2"> <label class="form-check-label" for="os_2"> iOS</label><br>       
    </div>
   
</aside> -->
<main>
  <form action="" method="post" id="search_form">
  <div class="row">
    <div class="col-lg-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light rounded-007" style="width: 280px;">
            
          </div>
    </div>
     <!-- <div class="b-example-divider"></div> -->
    <div class="col-lg-9">

       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam labore nostrum qui? Eaque assumenda facere cupiditate beatae quibusdam repellat non? Corrupti aliquid temporibus accusantium cum vitae minima voluptas repellat nemo?</p>
  </div>
  <br>
  

  </form>
</main>
</div>




</div>

<div>
     <!-- Footer -->
<footer class="page-footer font-small bg-head">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3 ">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="foot">About us</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="foot">Brands</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="foot">Awards</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="foot">Help</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!" class="foot">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="" style="margin: 0 15%;color:white">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-3" style="color:white">
        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-2  d-flex justify-content-center">

          <!-- Facebook -->
          <a class="fb-ic foot px-4" style="font-size:25px;">
            <i class="bi bi-facebook"></i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic foot px-4" style="font-size:25px;">
            <i class="bi bi-twitter"></i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic foot px-4" style="font-size:25px;">
           <i class="bi bi-google"></i>
          </a>
          <!--Linkedin -->
          <a class="li-ic foot px-4" style="font-size:25px;">
            <i class="bi bi-linkedin"></i>
          </a>
          <!--Instagram-->
          <a class="ins-ic foot px-4" style="font-size:25px;">
            <i class="bi bi-instagram"></i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic foot px-4" style="font-size:25px;">
            <i class="bi bi-pinterest"></i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 foot">© 2020 Copyright:
    <a href="#" class="foot">DON@NITTE</a>
  </div>
  <!-- Copyright -->

</footer>
</div>


<script src="bootstrap-5.1.3-dist\js\bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</body>
</html>