@extends('layout')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col">
             <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
           
                        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Navbar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Pricing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         Dropdown link
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                         <li><a class="dropdown-item" href="#">Action</a></li>
                                         <li><a class="dropdown-item" href="#">Another action</a></li>
                                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div class="background">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="/images/body.jpg" class="responsive" height="600px" width="1322px">
                        </div>
                        <div class="flip-box-back">
                            <img src="/images/body1.jpg"  class="responsive" height="600px" width="1322px">
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="row">
        <div class="col-md-6">
            <img src="/images/body.jpg" height="50px" width="50px">
        </div>
        <div class="col-6 p-5 m-5">
                <p class="">jhygvh bgytyfcgv bbbgyytfgcv bgyfv bg</p>
        </div>
    </div>
</div>

@endsection