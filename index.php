<?php include_once('topbar.php') ?>
<link rel="stylesheet" href="main.css">

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
<?php include_once('foot.php') ?>
  