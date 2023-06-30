@extends('layouts.main')

@section('container')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">VEX<span>CAR</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
          <li class="nav-item active"><a href="/car" class="nav-link">Cars</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="/loginregister" class="nav-link"><b>Join Now</b></a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/mobil3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose Your Car</h1>
        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section bg-light">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/mob4.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="images/mob4.jpg">Kijang Innova Zenix</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Toyota</span>
                              <p class="price ml-auto">Rp 500.000 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a>
                              <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/mob3.jpg);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="images/mob3.jpg">Veloz</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Toyota</span>
                              <p class="price ml-auto">Rp 500.000 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a>
                              <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/mob2.png);">
                      </div>
                      <div class="text">
                          <h2 class="mb-0"><a href="images//mob2.png">Corolla Cross</a></h2>
                          <div class="d-flex mb-3">
                              <span class="cat">Toyota</span>
                              <p class="price ml-auto">Rp 500.000 <span>/day</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a>
                              <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  @endsection