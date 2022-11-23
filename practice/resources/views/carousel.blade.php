@extends('layout')
@section('container')

<div class="container">
  <div class="row">
    <div class="col">
      
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="container">
            <div class="carousel-item active" >
              <div class="row">
                <div class="col-md-5">
                  <img src="/images/body.jpg" class="d-block w-100" alt="..." >
                </div>
                <div class="col-md-7">
                  <p >bgyghbn cftghb </p>
                </div>
              </div>
            </div>

            <div class="carousel-item" >
              <div class="row">
                <div class="col-md-5">
                  <img src="/images/body1.jpg" class="d-block w-100" alt="..." >
                </div>
                <div class="col-md-7">
                  <p >bgyghbn cftghb </p>
                </div>
              </div>
            </div>
            <div class="carousel-item" >
              <div class="row">
                <div class="col-md-5">
                  <img src="/images/body1.jpg" class="d-block w-100" alt="..." >
                </div>
                <div class="col-md-7">
                  <p >bgyghbn cftghb </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1>Hello</h1>
</div>



    @endsection