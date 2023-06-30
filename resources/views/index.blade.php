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
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
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
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/mobil4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            <p style="font-size: 18px;">We Provide Quality Vehicles for Every Need. Get Your Dream Car with Our Car Rental.</p>
	            <a href="/pricing" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form action="#" class="request-form ftco-animate bg-primary">
		          		<h2>Make your trip</h2>
                  <div class="form-group">
                    <label for="" class="label">Choose a Car</label><br/>
                    <select id="disabledSelect" class="form-select" placeholder="choose">
                      <option selected disabled value="">Choose</option>
                      <option>Corolla Cross</option>
                      <option>Kijang Innova Zenix</option>
                      <option>Veloz</option>
                    </select>
                  </div>
			    				<div class="form-group">
			    					<label for="" class="label">Target Location</label>
			    					<input type="text" class="form-control" placeholder="City, Airport, Station, etc">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Pick-up date</label>
			                <input type="text" class="form-control" id="book_pick_date" placeholder="Date">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Drop-off date</label>
			                <input type="text" class="form-control" id="book_off_date" placeholder="Date">
			              </div>
		              </div>
		              <div class="form-group">
		                <label for="" class="label">Pick-up time</label>
		                <input type="text" class="form-control" id="time_pick" placeholder="Time">
		              </div>
			            <div class="form-group">
			              <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
			            </div>
						<blockquote><small style="color: aliceblue; text-decoration: underline;"><a href="https://api.whatsapp.com/send?phone=6281233088987" style="color: aliceblue;">
							konfirmasi ke whatsapp jika sudah reservasi</a></small></blockquote>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>   
					          </div>
					        </div>
					        <p><a href="/car" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/mob4.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Kijang Innova Zenix</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Toyota</span>
			    						<p class="price ml-auto">Rp 500.000 <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/mob3.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Veloz</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Toyota</span>
			    						<p class="price ml-auto">Rp 500.000 <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/mob5.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Corolla Cross</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Toyota</span>
			    						<p class="price ml-auto">Rp 500.000 <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="/booking" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/details" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/image_5.jpg);">
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