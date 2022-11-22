@extends('layout')

@section('container')

<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>


<main>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="/images/body.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" >
      <img src="/images/body1.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" >
      <img src="/images/body1.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid">
    <div class="row ">
        <h1 class="text-center bg-secondary p-3 mb-0">About us</h1>
        <div class="col-md-6 mt-0">
                <img src="/images/abc.jpg" >
        </div>
        <div class="col-md-6 p-5 ">
                <p class="h3 text center">Company</p>
                <p class="">eytydg dydgv  fvgdshad gdyusgad dygsad a gdyuv d gd duiadiuu daysdayy wey8y dowODASC</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row p-5 testimonial">
            <div class="frame">
                <div class="row p-3 bg-secondary m-5">
                    <div class="col-md-4 p-4">
                        <img src="/images/test.jpg" height="270px" width="270px" class="rounded-circle">

                    </div>
                    <div class="col-md-8 p-5 ">
                        Author name
                        <h2>Amazing customer service </h2>
                        <p>fds    dshfb gfdhsg fgsh fyue fuuiqo bdtge bsvgsyyhen  bhsuiolkmnb cdrstyhgbv dxnsjhgbv dsjhbd xnsjhgvd xsnhvd sv dsdfc vfv bffiuygb iuhgb hhb lf fhf uhcgbsd euhfdbf d h jchvbdjfhjb hvfgf fgds</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

<footer>
</footer>


@endsection