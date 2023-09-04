@extends('frontend.master')

@section('content')
<main>
    {{-- slider section --}}
    <section>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('/')}}assets/frontend/images/slider.jpg" class="d-block w-100" height="600" alt="...">
                <div class="carousel-captions d-none d-md-block">
                  <h3>Buy Products here & <span class="text-danger">Smile Always</span> </h3>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus odio aut id blanditiis! Facilis reprehenderit quasi assumenda magni nam ut.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}assets/frontend/images/slider1.jpg" class="d-block w-100" height="600" alt="...">
                <div class="carousel-captions d-none d-md-block">
                    <h3>Buy Products here & <span class="text-danger">Smile Always</span> </h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus odio aut id blanditiis! Facilis reprehenderit quasi assumenda magni nam ut.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('/')}}assets/frontend/images/slider2.jpg" class="d-block w-100" height="600" alt="...">
                <div class="carousel-captions d-none d-md-block">
                    <h3>Buy Products here & <span class="text-danger">Smile Always</span> </h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus odio aut id blanditiis! Facilis reprehenderit quasi assumenda magni nam ut.</p>
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
    </section>

    {{-- About Shop --}}
    <div class="container">
        <div class="row">
            <h2 class="text-center text-decoration-underline py-5">About Khilji Shop</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('/')}}assets/frontend/images/about/shop.jpg" class="d-block w-100" height="300" alt="...">
            </div>
            <div class="col-md-6">
                <h4>Our Sells Item</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe fugit molestias accusantium quos? Ipsa tempora fuga possimus quod soluta, amet, necessitatibus, vero numquam quisquam similique impedit officiis maxime accusamus illum doloribus corrupti eaque libero facere consectetur corporis at nam. Ipsam repellendus, pariatur in expedita harum eveniet placeat neque. Ipsa adipisci, consequatur voluptatum deserunt reiciendis dolorum illum molestias laboriosam neque asperiores culpa sequi, beatae corrupti possimus odit voluptatem delectus fugit qui recusandae tempore facere provident nulla numquam natus? Doloribus, nisi. Explicabo?</p>
            </div>
        </div>
    </div>
    {{-- Hot Products --}}
    <div class="container">
        <div class="row">
            <h2 class="text-center text-decoration-underline py-5">Our Hot Products</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product1.jpg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Watch</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product2.jpg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Body Soap</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product3.jpg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">I Phone</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product4.jpg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">T-shirt</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product5.jpg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Shoe</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('/')}}assets/frontend/images/product/product6.jpeg" class="card-img-top" height="250" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Sunglass</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, necessitatibus.</p>
                      <p class="text-danger">$4</p>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</main>
@endsection