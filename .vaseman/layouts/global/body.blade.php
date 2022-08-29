@extends('global.html')

@push('meta')
{{-- GA --}}
@endpush

@section('superbody')
@section('header')

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ $uri->path() }}">
                    <h1 class="h2">Logis</h1>
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ $uri->path() }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="{{ $uri->path() }}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="{{ $uri->path() }}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="{{ $uri->path() }}">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Dropdown1</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown2</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown3</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown4</a></li>
                                <li><a class="dropdown-item" href="#">Dropdown5</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="{{ $uri->path() }}">
                                Contact
                            </a>
                        </li>
                        <button class="btn btn-primary ms-3" type="button">Get a Quote</button>
                    </ul>

                    <ul class="navbar-nav mb-2 mb-lg-0">
                    {{--  Right Menu  --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@show

@section('body')
@yield('content', $content ?? 'Content')
@show

@section('footer')
    <footer class="l-footer pt-5 pb-3 bg-dark text-white">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="l-footer__info mb-4">
                        <a href="{{ $uri->path() }}">
                            <h2 class="text-white">Logis</h2>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    </div>
                    <div class="l-social-links d-flex">
                        <a href="#">
                            <i class="fa-brands fa-twitter c-btn-icon d-flex justify-content-center align-items-center border border-white rounded-circle text-white me-2"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-facebook c-btn-icon d-flex justify-content-center align-items-center border border-white rounded-circle text-white me-2"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-instagram c-btn-icon d-flex justify-content-center align-items-center border border-white rounded-circle text-white me-2"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin c-btn-icon d-flex justify-content-center align-items-center border border-white rounded-circle text-white me-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h6 class="mb-3">Useful Links</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1 py-1">Home</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">About us</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Services</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Terms of service</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h6 class="mb-3">Our Services</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Web Design</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Web Development</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Product Management</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Marketing</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-link text-left px-0 py-1">Graphic Design</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="mb-3">Contact Us</h6>
                    <p>
                        A108 Adam Street<br>
                        New York, NY 535022<br>
                        United States<br>
                    </p>
                    <p>
                        <strong>Phone:</strong>+1 5589 55488 55<br>
                        <strong>Email:</strong>info@example.com
                    </p>
                </div>
            </div>
        <div class="l-footer__copyright text-center mt-4">
            <p class="mb-1">© Copyright <strong>Logis</strong>. All Rights Reserved</p>
            <p class="mb-0">Designed by BootstrapMade<p>
        </div>
    </div>
  </footer>
@show

@section('scroll-top')
    <a href="#" class="c-scroll-top btn bg-primary d-flex p-0 justify-content-center align-items-center">
        <i class="fa-regular fa-arrow-up text-white"></i>
    </a>
@show

@stop
