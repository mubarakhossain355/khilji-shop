@extends('frontend.master')

@section('content')
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
@endsection