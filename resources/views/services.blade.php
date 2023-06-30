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
          <li class="nav-item active"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
          <li class="nav-item"><a href="/car" class="nav-link">Cars</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="/loginregister" class="nav-link"><b>Join Now</b></a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/image_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Our Services</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
              <div class="row">
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Maintained Vehicle</h3>
              <p>Safety and comfort are our priority. All of our vehicles undergo regular maintenance and quality checks to ensure the highest quality.</p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">24/7 Customer Service</h3>
              <p>Our team is ready to serve you whenever you need it. Contact us for information,
                 reservations, or other assistance. We are committed to providing the best service to you.</p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Clean Vehicle</h3>
              <p>Our vehicles are also always clean and tidy so you can enjoy your trip comfortably.
                By keeping our vehicles clean, we want to provide a pleasant and refreshing experience for you as our customer.
              </p>
            </div>
          </div>
                  </div>
                  <div class="col-md-3">
                      <div class="services services-2 w-100 text-center">
              <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
              <div class="text w-100">
              <h3 class="heading mb-2">Various Vehicle Rentals</h3>
              <p>We provide a wide range of vehicles, from comfortable family cars, fuel-efficient economy cars, 
                to elegant luxury cars. Choose a vehicle that suits your needs and preferences.</p>
            </div>
          </div>
                  </div>
              </div>
          </div>
      </section>
@endsection