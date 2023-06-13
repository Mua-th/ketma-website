<?php
  session_start();
  $current = $_SESSION['current'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css  ">
    <script src="https://kit.fontawesome.com/07e943f996.js" crossorigin="anonymous"></script>    
    <title>KETMA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"  aria-current="page" ></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          
              <li class="nav-item">
                <a class="nav-link  " href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  " href="#">CONTACT</a>
              </li>
          
            </ul>
            <div >  <a class="org me-3 nav-link" href="register.php">signup</a> </div>
            <div >  <a class="org me-3 nav-link" href="profil.php"><?php echo $current->prenom ;?></a> </div>
            <div >  <a class="org me-3 nav-link" href="login.php">login</a> </div>
            
          </div>
        </div>
      </nav>
      <div class="landing d-flex justify-content-center align-items-center">
      <div class="bglogo d-flex text-center justify-content-center align-items-center " id="animated"></div>
      </div>
      <div class="orgbg">

      </div>
        <div class="row bg d-flex justify-content-center">

          <div class="col-lg-4 col-md-3 col-sm-2 bg  "> 
            <div class="d-flex text-center justify-content-center align-items-center "><img class=" mt-5 ms-5 mb-5 me-5 c"src="img/full.png" alt="body"></div>
            <div class=" text-center  ms-5 ms-5 mb-5 me-5 " ><h2>LOREM</h2><p style="font-size: 12px;" class="d-flex">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum corrupti nostrum minus itaque ullam? Odio, delectus nesciunt quidem deserunt eaque, sequi sed, adipisci consequuntur veritatis laborum voluptate quisquam. Itaque, odit.</p></div>
          </div>

          <div class="col-lg-4 col-md-3 col-sm-2 bg "> 
            <div class="d-flex text-center justify-content-center align-items-center  "><img class=" mt-5 ms-5 mb-5 me-5 d"src="img/cheerful.png" alt="body"></div>
            <div class=" text-center  ms-5 ms-5 mb-5 me-5 " ><h2>LOREM</h2><p style="font-size: 12px;" class="d-flex">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum corrupti nostrum minus itaque ullam? Odio, delectus nesciunt quidem deserunt eaque, sequi sed, adipisci consequuntur veritatis laborum voluptate quisquam. Itaque, odit.</p></div>

          </div>
          
          <div class="col-lg-4 col-md-3 col-sm-2 bg "> 
            <div class="d-flex text-center justify-content-center align-items-center  "><img class=" mt-5 ms-5 mb-5 me-5 imgb"src="img/bodybuilder.png" alt="body"></div>
            <div class=" text-center ms-5 ms-5 mb-5 me-5 " ><h2>LOREM</h2><p style="font-size: 12px;" class="d-flex">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum corrupti nostrum minus itaque ullam? Odio, delectus nesciunt quidem deserunt eaque, sequi sed, adipisci consequuntur veritatis laborum voluptate quisquam. Itaque, odit.</p></div>

          </div>
        

        </div>
        <div class="row">
          <section class="col-lg-6 d-flex col-md-12 col-sm-12 mt-5 ms-5 mb-5 me-5">
            <article class="text-center d-flex ms-5 mt-5 mb-5 me-5" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi similique numquam voluptates distinctio, nihil repudiandae maxime tenetur, facilis assumenda nemo commodi iusto aut dignissimos? Quam, dignissimos? Nihil laborum laudantium explicabo.
            Sequi culpa officia ea deserunt rerum nobis perferendis possimus veritatis quibusdam impedit optio nihil nisi exercitationem eos id, earum praesentium ut illum laboriosam alias totam enim. Maiores iusto aperiam odit.
            Eum illum repudiandae delectus provident adipisci voluptate ipsa doloremque natus minus laborum officia, sed in aperiam impedit dignissimos aspernatur velit amet exercitationem quia? Ipsum expedita consequuntur alias, libero molestias cumque.</article>

          </section>
        </div>

      <!-- Footer -->
      <footer class="text-center text-lg-start text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->

          <!-- Right -->
          <div>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-secondary">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase  justify-content-center fw-bold mb-4" style="color: #1e1f22;">
                  <i ><img src="img/kesl.png" class="ic" alt="" ></i>
                  
                  KETMA
                </h6>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-secondary"></i> Casablanca </p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  mouadelgharbi2002@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-secondary"></i> 0600000000</p>
                <p><i class="fas fa-print me-3 text-secondary"></i> 0617640712</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="https://github.com/Mua-th">MUATH-RHB</a>
        </div>
        <!-- Copyright -->
      </footer>
<!-- Footer -->
    <script src="challengejs.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>