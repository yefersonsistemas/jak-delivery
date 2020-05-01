@extends('layouts.index_layouts')
@section('header')
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="#">{{$companyName}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ac tion</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Sign in <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
@endsection
@section('content')
<section class="st-container">

    <carousel />

</section>
<div class="section-1-container section-container">
  <div class="container">
      <div class="row">
          <div class="col section-1 section-description wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <h2>Section 1</h2>
              <div class="divider-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><span></span></div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 section-1-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col-md-4">
                <div class="section-1-box-icon">
                  <i class="fas fa-magic"></i>
                </div>
              </div>
              <div class="col-md-8">
                  <h3>Branding</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 section-1-box wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="row">
              <div class="col-md-4">
                <div class="section-1-box-icon">
                  <i class="fas fa-cog"></i>
                </div>
              </div>
              <div class="col-md-8">
                  <h3>Web design</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 section-1-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col-md-4">
                <div class="section-1-box-icon">
                  <i class="fab fa-twitter"></i>
                </div>
              </div>
              <div class="col-md-8">
                  <h3>Social media</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
              </div>
            </div>
      </div>
  </div>
</div>
<div class="container mb-4">
    <div class="row">
      <div class="col-md-12 text-center seccion-selling">
        <h3>Ventas</h3>
      </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                    style="height: 180px; width: 100%; display: block;"
                    src="https://tomatesenmijardin.files.wordpress.com/2017/04/pepito-2.png?w=500"
                    data-holder-rendered="true">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                    style="height: 180px; width: 100%; display: block;"
                    src="https://i.pinimg.com/originals/69/e8/05/69e805379e2fee0d828b697ce2cbdd29.jpg"
                    data-holder-rendered="true">
                <div class="card-body">
                    <h5 class="card-title">pepito</h5>
                    <p class="card-text">con mucho huevo pa que lleve</p>
                    <button class="btn btn-primary">comprareichon</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                    style="height: 180px; width: 100%; display: block;"
                    src="https://2.bp.blogspot.com/-hhRCUc9j7Yg/UB8ID91Ze0I/AAAAAAAAAws/Tlg6bIV29HY/s1600/Pepito%2Bde%2BLa%2BCasita%2Bde%2BMaribri.jpg"
                    data-holder-rendered="true">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180"
                    style="height: 180px; width: 100%; display: block;"
                    src="https://media-cdn.tripadvisor.com/media/photo-s/1a/29/d7/b4/cheese-steak-sandwich.jpg"
                    data-holder-rendered="true">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer')
<div class="footer-top ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 footer-about wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <img class="logo-footer" src="https://azmind.com/demo/bootstrap-footer/template-3/assets/img/logo.png" alt="logo-footer" data-at2x="assets/img/logo.png">
                <p>
                    We are a young company always looking for new and creative ideas to help you with our products in
                    your
                    everyday work.
                </p>
                <p><a href="#">Our Team</a></p>
            </div>
            <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown animated"
                style="visibility: visible; animation-name: fadeInDown;">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                <p><i class="fab fa-skype"></i> Skype: you_online</p>
            </div>
            <div class="col-md-4 col-lg-3 footer-social wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <h3>Follow us</h3>
                <p>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </p>
            </div>
        </div>

    </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <p class="">© {{$companyName}} {{date('Y')}}</p>
        </div>
    </div>
  </div>
</div>

@endsection
