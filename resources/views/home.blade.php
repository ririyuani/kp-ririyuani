@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/baner1.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
                <div class="carousel-item">
                  <img src="/images/baner2.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
                <div class="carousel-item">
                  <img src="/images/baner3.jpg" alt="Carousel Image" class="d-block w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/display-promosii.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Banner</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/digital-printt.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Digital Print</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/souvenirr.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Souvenir</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/mugg.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Sablon Mug</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/stationeryy.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Stationery</p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/sablonn.png" alt="" class="w-100" />
              </div>
              <p class="categories-text">Sablon Kaos</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/bantalcustom.png');
                        "></div>
              </div>
              <div class="products-text">Bantal Custom</div>
              <div class="products-price">Rp80.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/totebag.png');
                        "></div>
              </div>
              <div class="products-text">Totebag Custom</div>
              <div class="products-price">Rp10.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/tas\ serut.png');
                        "></div>
              </div>
              <div class="products-text">Tas Serut</div>
              <div class="products-price">Rp60.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/eventdesk.png');
                        "></div>
              </div>
              <div class="products-text">Event Desk</div>
              <div class="products-price">Rp800.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/tumbler.png');
                        "></div>
              </div>
              <div class="products-text">Tumbler</div>
              <div class="products-price">Rp50.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/booth.png');
                        "></div>
              </div>
              <div class="products-text">Aksesoris Photobooth</div>
              <div class="products-price">Rp7.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/kipas.png');
                        "></div>
              </div>
              <div class="products-text">Kipas Custom</div>
              <div class="products-price">Rp6.000</div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="
                          background-image: url('/images/plakatacrylic.png');
                        "></div>
              </div>
              <div class="products-text">Plakat Acrylic</div>
              <div class="products-price">Rp300.000</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection