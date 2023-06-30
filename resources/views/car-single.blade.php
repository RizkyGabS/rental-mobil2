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
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Car Details</h1>
        </div>
      </div>
    </div>
  </section>
      

  <section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url(images/mob4.jpg);"></div>
                    <div class="text text-center">
                        <span class="subheading">Toyota</span>
                        <h2>Kijang Innova Zenix</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Mileage
                          <span>40,000</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Transmission
                          <span>Manual</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Seats
                          <span>7 Adults</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Fuel
                          <span>Bensin</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>The Kijang Innova Zenix carries a DOHC engine type, 4 cylinders in line 16 valves, with an overbore engine character.
                              The model is named M20A-FKS and is the latest engine generation from Toyota.</p>
                          </div>
                        </div>
                      </div>
            </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="car-details">
                          <div class="img rounded" style="background-image: url(images/mob3.jpg);"></div>
                          <div class="text text-center">
                              <span class="subheading">Toyota</span>
                              <h2>Veloz</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Mileage
                                <span>40,000</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Transmission
                                <span>Manual</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Seats
                                <span>7 Adults</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Fuel
                                <span>Bensin</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              </div>
              <div class="row">
                  <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <div class="d-flex justify-content-center">
                                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                    </li>
                                  </ul>
                                </div>
    
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                                <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                                <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                  <p>Toyota Veloz has very qualified specifications, has a sporty and luxurious impression. The sophistication of the features that are owned will make you interested in this car.</p>
                                </div>
                              </div>
                            </div>
                  </div>
                    </div>
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="car-details">
                          <div class="img rounded" style="background-image: url(images/mob2.png)"></div>
                          <div class="text text-center">
                              <span class="subheading">Toyota</span>
                              <h2>Corolla Cross</h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Mileage
                                <span>40,000</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Transmission
                                <span>Manual</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Seats
                                <span>7 Adults</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                  <div class="media-body py-md-4">
                      <div class="d-flex mb-3 align-items-center">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                          <div class="text">
                            <h3 class="heading mb-0 pl-3">
                                Fuel
                                <span>Bensin</span>
                            </h3>
                        </div>
                    </div>
                  </div>
                </div>      
              </div>
              </div>
              <div class="row">
                  <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <div class="d-flex justify-content-center">
                                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                    </li>
                                  </ul>
                                </div>
    
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                                <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                                <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="features">
                                                <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                                <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                  <p>The All New Corolla Cross continues to display the advantages of a modern SUV that is fun, comfortable and functional to
                                      support a variety of user activities, including environmentally friendly technology with the HEV variant.</p>
                                </div>
                              </div>
                            </div>
                  </div>
                    </div>
    </div>
  </section>
  @endsection