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
          <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="/pricing" class="nav-link">Pricing</a></li>
          <li class="nav-item"><a href="/car" class="nav-link">Cars</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="/loginregister" class="nav-link"><b>Join Now</b></a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/image_1.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to VEXCAR!</h2>

	            <p>We are a trusted vehicle rental service provider that provides reliable, 
                comfortable and efficient transportation solutions for our customers. 
                With years of experience in this industry, we are committed to providing the best service to our customers.
                </p>
	            <p>Our vision is to become a trusted travel partner and the first choice in vehicle rental. 
                We understand that each customer's transportation needs are different, 
                therefore we offer a wide selection of vehicles to suit your preferences and budget.
              </p>
              <p>Our advantage lies in our well-maintained and regularly updated vehicle flotilla. 
                From comfortable family cars to elegant luxury cars, we have a vehicle to meet your every travel need. 
                All of our vehicles are equipped with the latest security features to provide a sense of security and comfort to our customers.
              </p>
	            <p><a href="/car" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
@endsection