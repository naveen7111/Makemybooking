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
      <div id='app'>


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

            <li class="nav-item text-center mx-1 mt-2">
                <button class="btn btn-outline text-light p-0 px-1 border-0"  data-toggle="collapse" data-target="#msgNotification" aria-expanded="true" aria-hidden="true" aria-controls=""><i class="far fa-comment-alt"></i><sup><span class="bg-danger px-1 py-0 rounded shadow">1</span></sup></button> 
                <div class="collapse notification-box" id="msgNotification">
                        <div class="card card-body m-0 border p-2">
                            <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text" >Kandy <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Galle <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Nuwaraeliya <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Anuradapura <span class="text-muted"> | city</span></div></button>
                            </div>
                        </div>
                </div>
            </li>
            
            <li class="nav-item text-center mx-1 mt-2">
                <button class="btn btn-outline text-light p-0 px-1 border-0"  data-toggle="collapse" data-target="#Notification" aria-expanded="true" aria-hidden="true" aria-controls=""><i class="far fa-bell"></i><sup><span class="bg-danger px-1 py-0 rounded shadow">9+</span></sup></button> 
                <div class="collapse notification-box" id="Notification">
                        <div class="card card-body m-0 border p-2">
                            <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text" >Kandy <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Galle <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Nuwaraeliya <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Anuradapura <span class="text-muted"> | city</span></div></button>
                            </div>
                        </div>
                </div>
            </li>
            
            <li class="nav-item text-light">
                
                <span class="dropdown">
                    <button class="btn btn-outline dropdown-toggle border-0 text-light" type="button" data-target="#userMenuDropdown" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Abc{{-- Auth::user()->name --}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="userMenuDropdown">
                        <a class="dropdown-item" href="{{ url('/home#/user-home') }}">Dashboard</a>
                        <a class="dropdown-item" href="{{ url('/home#/user-bookings') }}">Bookings</a>
                        <a class="dropdown-item" href="{{ url('/home#/user-reviews') }}">Reviews</a>
                        <a class="dropdown-item" href="{{ url('/home#/user-likes') }}">Likes</a>
                        <a class="dropdown-item" href="{{ url('/home#/user-profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </span>

                <span><img class="avatar rounded" src="data:image/jpeg;base64,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"></span>

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

    
    <!-- Font-awesome CSS -->
    <script src="https://kit.fontawesome.com/6eeb7f77f8.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    


    <script>
        $('body').click(function() {
            $('.collapse').collapse('hide');
        });
    </script>



      
  </body>
</html>