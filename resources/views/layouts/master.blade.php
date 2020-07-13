<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <title>Makemybooking.LK</title>
  </head>
  <body>
<div id="app">

<section id="navigation">

  <div class="container-fluid m-0 p-0">


<!-------------- Navigation bar --------------->

<nav class="navbar navbar-expand-lg  fixed-top">
<a class="navbar-brand m-0 p-0" href="{{ url('/') }}"><div class="col-2"><img src="{{ asset('images/home/logo-crop.png') }}" class="logo" id="logo" style="height: 50px"></div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-right" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item text-center mx-3 mt-2">
                <a href="" class="navigation-text" style="color:#afacac;"><i class="fas fa-hotel fa-1x img-top"></i><span> Hotels</span></a>
            </li>
            <li class="nav-item text-center mx-3 mt-2">
                <a href="" class="navigation-text" style="color:#afacac;"><i class="fas fa-home fa-1x"></i><span> Villas</span></a>
            </li>
            <li class="nav-item text-center mx-3 mt-2">
                <a href="" class="navigation-text" style="color:#afacac;"><i class="far fa-building fa-1x"></i><span> Apartments</span></a>
            </li>
            <li class="nav-item text-center mx-3 mt-2">
                <a href="" class="navigation-text" style="color:#afacac;"><i class="fas fa-home fa-1x"></i><span> Resorts</span></a>
            </li>
            <li class="nav-item text-center mx-3 mt-2">
                <a href="" class="navigation-text" style="color:#afacac;"><i class="fas fa-home fa-1x"></i><span> Homestays</span></a>
            </li>
            <li class="nav-item mx-1">
                <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">Sign in <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>        
        




        

  </div>

</section>
    








  @yield('content')



<section id="footer">
    
  <div class="container-fluid bg-secondary py-5">

        <div class="container">

            <div class="row">

                <div class="col-12 text-center mt-5">
                    <div class="footer-heading">Save time, save money!</div>
                    <div class="footer-text">Sign up and we'll send thebest deals to you</div>
                </div>
                

                <div class="col-12 mt-4 d-flex justify-content-center d-flex">

                    <form class="form">
                    
                    <div class="row text-center">
                      <div class="col-sm-9 my-1 justify-content-center d-flex p-1">
                        <input type="text" class="form-control" placeholder="Your Name" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                      </div>
                      <div class="col-sm-2 my-1 p-1">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                      </div>
                    </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid py-3" style="background-color: #03094c">

        <div class="row text-center">
            <div class="col-12">
                <span class="footer-menu-text">My Account</span>
                <span class="footer-menu-text">Customer Service</span>
                <span class="footer-menu-text">Terms & Conditions</span>
            </div>
            <div class="col-12">
                <hr/>
            </div>
            <div class="col-12 copyright">
                Copyright &copy; 2020 Makemybooking.lk Allrights reserved.
            </div>
        </div>

    </div>

</section>







</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>

    <!-- Font-awesome CSS -->
    <script src="https://kit.fontawesome.com/6eeb7f77f8.js" crossorigin="anonymous"></script>

    <script>
        /*Image Thumbnail*/
        function imageThumbnail(imgsrc){
            document.getElementById("mainImage").src = imgsrc;
        }

        /* Collapse Toggle */
        $('body').click(function() {
            $('.collapse').collapse('hide');
        });
    </script>


  </body>
</html>