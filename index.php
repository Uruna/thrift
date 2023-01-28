<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thriftonic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
          crossorigin="anonymous">
          <link rel="shortcut icon" href="./images/Logo.png" type="image/x-icon">
          <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&family=Heebo:wght@400;500;700&display=swap" rel="stylesheet">
          <script src="https://kit.fontawesome.com/7300af8bbb.js" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="main.css">
          <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
     -->
</head>

<body>
  <!-- navbar -->
  <header class="header">
    <nav class="navbar navbar-expand-lg header-nav fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./images/Logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link" href="#Collection">Collections</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
                </li> -->
      </ul>
      <form class="d-flex" role="search" action="login.html">
        <a href="login.html">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-outline-success" type="submit">Login</button>
      </a>
      </form>
    </div>
  </div>
</nav>
  </header>

  
<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/ban1.jpg" class="d-block w-100" style="width:100%; height: 720px;" alt="banner1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/ban2.jpg" class="d-block w-100" style="width:100%; height: 720px;" alt="banner2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/jack.jpg" class="d-block w-100" style="width:100%; height: 720px;" alt="banner3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Winter Jackets</h5>
        <p>Get the fluffiest jacket this Winter</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- Category Section -->
<section id="Collection">
<div class="card-title">
  <h1>Our Collections</h1>
</div>

<div class="card-container">
  <div class="card-item"><img src="./images/sweat.jpg" style="height: 320px; width: 420px;"/></div>
  <div class="card-item"><p>Tops</p></div>

  <div class="card-item"><img src="./images/foot.jpg" style="height: 320px; width: 420px;" /></div>
  <div class="card-item">Footwears</div>
  <div class="card-item"><img src="./images/skr.jpg" style="height: 320px; width: 420px;" /></div>
  <div class="card-item">Bottoms</div>
  <div class="card-item"><img src="./images/dres.jpg" style="height: 320px; width: 420px;" /></div>
  <div class="card-item">Dresses</div>
  <div class="card-item"><img src="./images/trad.jpg" style="height: 320px; width: 420px;" /></div>
  <div class="card-item">Traditionals</div>
  <div class="card-item"><img src="./images/cap.JPG" style="height: 320px; width: 420px;" /></div>
  <div class="card-item">Accesories</div>
</div>
</section>
<!-- Latest Products -->
<div class="card-title">
  <h1>Latest Products</h1>
</div>
  <div class="row">
    <div class="col-4">
      <img src="./images/yel.JPG">
      <h4>Some Title</h4>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
      </div>
      <p>Rs.600</p>
    </div>
    <div class="col-4">
      <img src="./images/pink.JPG">
      <h4>Some Title</h4>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
      </div>
      <p>Rs.600</p>
    </div>
    <div class="col-4">
      <img src="./images/red.JPG" style="height: 487.23px; width: 365.43px;">
      <h4>Some Title</h4>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star-half-stroke"></i>
        <i class="fa-regular fa-star"></i>
      </div>
      <p>Rs.600</p>
    </div>
    <div class="col-4">
      <img src="./images/white.JPG" style="height: 487.23px; width: 365.43px;">
      <h4>Some Title</h4>
      <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
      </div>
      <p>Rs.600</p>
    </div>
  </div>

  <!-- Footer -->

<footer class="footer">
  <div class="inner-footer">
      <div class="row">
          <div class="footer-col">
            <img class="footlog" src="./images/Logo.png">
              <h4>Contact</h4>
              <ul>
                <li>thriftonicnepal@gmail.com</li>
                <li>Number:9841******</li>
              </ul>
          </div>

          <div class="footer-col">
              <h4>About Us</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy policies</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
          </div>

          <div class="footer-col">
              <h4>Social links</h4>
              <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
      </div>
  </div>
  <div class="outer-footer">
      Copyright &copy; 2023 Thriftonic, Inc. All Rights Reserved
  </div>

</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>