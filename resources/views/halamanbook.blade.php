
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
          <li class="nav-item"><a href="/car" class="nav-link">Cars</a></li>
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
      </div>
    </div>
  </section>
  <div class="container">
    <section class="ftco-section bg-light">
    <div class="container">
            <section class="ftco-section ftco-no-pt bg-light"">
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
                                <label for="" class="label">Drop-off time</label>
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
        
        </div>
    </div>
</section>
@endsection