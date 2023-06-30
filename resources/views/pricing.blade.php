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
          <li class="nav-item active"><a href="/pricing" class="nav-link">Pricing</a></li>
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
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Pricing</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="car-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th class="bg-primary heading">Per Hour Rate</th>
                            <th class="bg-dark heading">Per Day Rate</th>
                            <th class="bg-black heading">Leasing</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url(images/mob4.jpg);"></div></td>
                            <td class="product-name">
                                <h3>Kijang Innova Zenix</h3>
                            </td>
                            
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 60.000</span>
                                        <span class="per">/per hour</span>
                                    </h3>
                                </div>
                            </td>
                            
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 500.000</span>
                                        <span class="per">/per day</span>
                                    </h3>
                            </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 3.000.000</span>
                                        <span class="per">/per week</span>
                                    </h3>
                                </div>
                            </td>
                          </tr><!-- END TR-->

                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url(images/mob3.jpg);"></div></td>
                            <td class="product-name">
                                <h3>Veloz</h3>
                            </td>
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 60.000</span>
                                        <span class="per">/per hour</span>
                                    </h3>
                                </div>
                            </td>
                            
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 500.000</span>
                                        <span class="per">/per day</span>
                                    </h3>
                            </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 3.000.000</span>
                                        <span class="per">/per week</span>
                                    </h3>
                                </div>
                            </td>
                          </tr><!-- END TR-->

                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url(images/mob2.png);"></div></td>
                            <td class="product-name">
                                <h3>Corolla Cross</h3>
                            </td>
                            
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 60.000</span>
                                        <span class="per">/per hour</span>
                                    </h3>
                                </div>
                            </td>
                            
                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 500.000</span>
                                        <span class="per">/per day</span>
                                    </h3>
                            </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="/halamanbook">Rent a car</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num currency">Rp 3.000.000</span>
                                        <span class="per">/per week</span>
                                    </h3>
                                </div>
                            </td>
                          </tr>>
                         <!-- END TR-->
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        </div>
    </section>
@endsection