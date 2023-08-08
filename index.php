<?php if (isset($_COOKIE['Ins_Login'])) {header("Location: Dashboards/AdminDashboard.php");

}elseif (isset($_COOKIE['std_Login'])) {header("Location: Dashboards/studentDadhboard.php");

} elseif (isset($_COOKIE['staff_login'])) {header("Location: Dashboards/StaffDashboard.php");

}
else{ ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./CSS/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SACH Student Information System</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0">
              <a class="navbar-brand" href="#">
                <img src="./Images/Logo.png" width="70" height="70" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item" >
                      <a class="nav-link" href="about us page\about us.html" style="color:rgb(20, 108, 148)">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="WebinarHome.php" style="color:rgb(20, 108, 148)">Webinar</a>
                  </li>
                  <form class="form-inline my-2 my-lg-0"  action="LOGIN\Login.php" method="get">
                      <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: rgb(20, 108, 148);">Log In</button>
                  </form>   
              </div>
            </nav>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-1">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleCaptions" class="carousel slide custom-slider" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./Images/img3.jpg" class="d-block w-100 darken-image" alt="...">
                <div class="carousel-caption d-md-block">
                  <p class="h5">WELCOME TO THE</p>
                  <h2 class="h2"> <b>SACH STUDENT INFORMATION SYSTEM</b> </h2>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./Images/img2.jpg" class="d-block w-100 darken-image" alt="img1">
                <div class="carousel-caption d-md-block">
                  <p class="h5">Empower Your Institution with Our Student Information System</p>
                  <h4 class="h4"><b>With our system, you can streamline operations, enhance communication, and foster academic success throughout your institution.</b></h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./Images/img4.jpg" class="d-block w-100 darken-image" alt="...">
                <div class="carousel-caption d-md-block">
                  <p class="h5">Unleashing Knowledge at Your Fingertips</p>
                  <h4 class="h4"><b>Our webinar series offers an engaging platform for interactive learning and knowledge sharing on a variety of topics.</b></h4>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4 pt-3 pb-5">
          <div class="col-md-7 pt-4">
              <h1 class="hero-title"><strong>SACH Student <br>Information System</strong></h1>
              <p class="mt-3 custom-hero-para"><small>
                We believe that education is the cornerstone of personal and societal growth.With this 
                <br>vision in mind, our student information system aims to empower students by providing a 
                comprehensive platform for managing and accessing essential academic information.
               </small></p><br>
               <form class="form-inline my-2 my-lg-0"  action="LOGIN\LOGIN\Login.php" method="get">
                  <button type="submit" class="btn btn-primary mb-2 custom-try-button" style="color:white;background-color: rgb(20, 108, 148);">Sign In Now</button>
               </form>
          </div>
          
          <div class="col-md-5 pt-4 mt-1">
            <img src="./Images/about.jpg" class="img-fluid" alt="..." style="object-fit: cover">
        </div>
      </div>
  </div>
 

    <section class="container-fluid last-info" style="background-color:rgb(20, 108, 148) ;">
      <div class="row ml-5 pt-5 ">
        <div class="col-md-4 pb-2"> 
            <div class="row"><img src="./Images/Logo.png" width="70" height="70" alt="logo"></div>
            <div class="row"><P style="color:#fff" clas="text-center">SACH STUDENT INFORMATION SYSTEM</P></div>
        </div>

        <div class="col-md-2 pl-2 pb-4">
          <p class="last-para"><b>Quick Links</b></p>
          <a class=" last-para" href="#" >Home</a><br>
          <a class=" last-para" href="#" >About</a><br>
          <a class=" last-para" href="#" >Webinar</a><br>
          <a class=" last-para" href="#">Sign in</a>
          
        </div>
        <div class="col-md-6 pl-2">
          <p class="last-para"><b>Contact us</b></p>
          <dl class="row">
            <dt class="col-1 col-sm-auto icon"><i class="fas fa-phone"></i></dt>
            <dd class="col-11 col-sm-auto mt-0 pt-0">
              <a class=" last-para" href="#">Telephone</a><br>
            </dd>
            <dt class="col-1 col-sm-auto icon"><i class="fas fa-envelope"></i></dt>
            <dd class="col-11 col-sm-auto mt-0 pt-0">
              <a class=" last-para" href="#">Email</a><br>
            </dd>
            <dt class="col-1 col-sm-auto icon"><i class="fab fa-facebook"></i></dt>
            <dd class="col-11 col-sm-auto mt-0 pt-0">
              <a class=" last-para" href="#">Facebook</a><br>
            </dd>
            <dt class="col-1 col-sm-auto icon"><i class="fab fa-twitter"></i></dt>
            <dd class="col-11 col-sm-auto mt-0 pt-0">
              <a class=" last-para" href="#">Twitter</a><br>
            </dd>
          
          </dl>
          
          
        </div>
          
      </div>
    </section>

    <div class="container">
    </div>
    <footer class="py-1 " style="background-color: rgb(20, 108, 148)">
      <div class="container text-light text-center pt-3 pb-2">
          <small class="text-white-50">&copy; Copyright. All right reserved</small>
      </div>
    </footer>
  

   









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php } ?>