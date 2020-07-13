@extends('layouts.master')

@section('content')

<!---------- Main Searchbox----------->

<section id="main-search-box">

    <div class="container-fluid pb-5 home-cover bg-prarallex">



        <div class="container p-1 my-0 search-box-navbar-container">

            <div class="row mb-5 desktop">
                <div class="col-2"><img src="{{ asset('images/home/logo-crop.png') }}" class="logo" id="logo"></div>
            </div>

            <!-----------Main search box navbar------------>

            <div class="row justify-content-center text-center">
                <div class="col-8 bg-white search-box-navbar desktop">
                    <div class="row">

                        <div class="col my-3">
                            <a href="" class="search-box-navbar-text"><i class="fas fa-hotel fa-2x img-top"></i><div>Hotels</div></a>
                        </div>

                        <div class="col my-3">
                            <a href="" class="search-box-navbar-text"><i class="fas fa-cocktail fa-2x"></i><div>Villas</div></a>
                        </div>

                        <div class="col my-3">
                            <a href="" class="search-box-navbar-text"><i class="far fa-building fa-2x"></i><div>Apartments</div></a>
                        </div>

                        <div class="col my-3">
                            <a href="" class="search-box-navbar-text"><i class="fas fa-umbrella-beach fa-2x"></i><div>Resorts</div></a>
                        </div>

                        <div class="col my-3">
                            <a href="" class="search-box-navbar-text"><i class="fas fa-home fa-2x"></i><div>Homestays</div></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <form>

        <div class="container bg-white search-area-container justify-content-center pt-5 pb-5 mt-0">            

            <div class="text-center mb-2 search-area-sentence">Book Domestic and International hotels and homestays. To list your property click here</div>

            <!-----------Main search box search area------------>

            <div class="row px-4">

                <div class="col-sm-4 py-2 border search-area-border-left">
                    <div class="text-muted search-area-title">CITY | PROPERTY</div>
                    <button class="btn btn-outline border-0 p-0 m-0 search-area-input-text" type="button" data-toggle="collapse" data-target="#citySelect" aria-expanded="true" aria-hidden="true" aria-controls="">Colombo</button>
                    <div class="search-area-input-text-small">City</div>

                    <div class="collapse input-result-card" id="citySelect">
                        <div class="card card-body m-0 border rounded-box p-2">
                            <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><input class="form-control" type="search" placeholder="Search" aria-label="Search" class="input-result-city-search"></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text" >Kandy <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Galle <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Nuwaraeliya <span class="text-muted"> | city</span></div></button>
                            <button type="button" class="list-group-item list-group-item-action py-1 border-0"><div class="input-result-city-text">Anuradapura <span class="text-muted"> | city</span></div></button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-2 col-6 py-2 border" >
                    <div class="text-muted search-area-title">CHECK-IN <i class="far fa-calendar-alt"></i></div>
                    <button class="btn btn-outline border-0 p-0 m-0 text-left" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="">
                        <div><span class=" search-area-input-text">9</span> <span class="input-result-date">Jul'20</span></div>
                        <div class="search-area-input-text-small">Thursday</div>
                    </button>

                    <div class="collapse multi-collapse  input-result-card" id="checkinSelect">
                        <div class="card card-body m-0 p-1 border rounded-box">
                            <img src="{{ asset('images/home/calendar.png') }}">    
                        </div>
                    </div>

                </div>
                    
                <div class="col-sm-2 col-6 py-2 border" >
                    <div class="text-muted search-area-title">CHECK-OUT <i class="far fa-calendar-alt"></i></div>
                    <button class="btn btn-outline border-0 p-0 m-0 text-left" type="button" data-toggle="collapse" data-target="#checkoutSelect" aria-expanded="false" aria-controls="">
                        <div><span class="  search-area-input-text">10</span> <span class="input-result-date">Jul'20</span></div> 
                        <div class="search-area-input-text-small">Friday</div>
                    </button>
                    
                    <div class="collapse input-result-card" id="checkoutSelect">
                        <div class="card card-body m-0 p-1 border rounded-box">
                            <img src="{{ asset('images/home/calendar.png') }}">    
                        </div>
                    </div>

                </div>


                <div class="col-sm-1 py-2 border">
                    <div class="text-muted search-area-title">CHILDREN</div>
                    <button class="btn btn-outline border-0 p-0 m-0 text-left" type="button" data-toggle="collapse" data-target="#childSelect" aria-expanded="false" aria-controls="">
                        <span class="  search-area-input-text">1</span>
                        <div class="search-area-input-text-small">Children</div>
                    </button>


                    <div class="collapse  input-result-card" id="childSelect">
                        <div class="card card-body m-0 p-0 border rounded-box">
                            <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action py-1 px-4 border-0">1</button>
                            <button type="button" class="list-group-item list-group-item-action py-1 px-4 border-0">2</button>
                            <button type="button" class="list-group-item list-group-item-action py-1 px-4 border-0">3</button>
                            <button type="button" class="list-group-item list-group-item-action py-1 px-4 border-0" disabled>4</button>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="col-sm-3 py-2 border search-area-border-right">
                    <div class="text-muted search-area-title">ROOMS | GUESTS</div>
                    <button class="btn btn-outline border-0 p-0 m-0 text-left" type="button" data-toggle="collapse" data-target="#roomSelect" aria-expanded="false" aria-controls="">
                        <span class="  search-area-input-text">1</span> <span class="search-area-input-text-2">Room</span>
                        <span class="  search-area-input-text">2</span> <span class="search-area-input-text-2">Adults</span>
                    </button>

                    <div class="collapse input-result-card" id="roomSelect">
                        <div class="card card-body m-0 p-1 border rounded-box p-4">
                            <div class="text-muted p-2 search-area-title">ROOMS</div>
                            <ul class="list-group list-group-horizontal p-4 shadow">
                            <li class="list-group-item p-2">1</li>
                            <li class="list-group-item p-2">2</li>
                            <li class="list-group-item p-2">3</li>
                            <li class="list-group-item p-2">4</li>
                            <li class="list-group-item p-2">5</li>
                            <li class="list-group-item p-2">6</li>
                            <li class="list-group-item p-2">7</li>
                            <li class="list-group-item p-2">8</li>
                            <li class="list-group-item p-2">9</li>
                            <li class="list-group-item p-2">10</li>

                            </ul>

                            <div class="text-muted p-2 search-area-title">GUESTS</div>
                            <ul class="list-group list-group-horizontal p-4 shadow">
                            <li class="list-group-item p-2">1</li>
                            <li class="list-group-item p-2">2</li>
                            <li class="list-group-item p-2">3</li>
                            <li class="list-group-item p-2">4</li>
                            <li class="list-group-item p-2">5</li>
                            <li class="list-group-item p-2">6</li>
                            <li class="list-group-item p-2">7</li>
                            <li class="list-group-item p-2">8</li>
                            <li class="list-group-item p-2">9</li>
                            <li class="list-group-item p-2">10</li>
                            </ul>
                            
                        </div>
                    </div>

                </div>

                </form>

            </div> 


            



            

            


        </div>

        <div class="row justify-content-center search-area-btn">
            <div class="col-sm-3 text-center">
                <a href="{{ url('/search-result') }}" class="btn btn-primary px-5 my-3 py-2">Search</a>
            </div>
        </div>

        </form>




    </div>

</section>




<section id="offers">

    <div class="container-fluid bg-dark px-0">

            <div class="col-12 pt-5 mt-5 mx-3">
                <div class="heading text-center text-light">Last Minute Offers</div>
            </div>

            <div class="row py-5 px-0">


<!----------------- Mobile ------------------>

            <div id="carouselExampleControls" class="carousel slide mobile" data-ride="carousel">
                <div class="carousel-inner p-5">
                    
                    <div class="carousel-item active">
                        <div class="card w-100 border-0">
                            <img class="card-img-top" src="https://q-cf.bstatic.com/images/hotel/max1024x768/603/60345914.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">Villa Domina</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Colombo</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 49,258</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="card w-100 border-0">
                            <img class="card-img-top" src="https://q-cf.bstatic.com/images/hotel/max1024x768/179/179659060.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">Villa Domina</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Colombo</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 49,258</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>   

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fas fa-arrow-circle-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-arrow-circle-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>


<!----------------- Desktop ------------------>


          <div id="carouselExampleFade1" class="carousel slide carousel-fade mx-5 desktop" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3 m-0 p-4">
                            <div class="card w-100 m-0 border-0">
                            <img class="card-img-top" src="https://q-cf.bstatic.com/images/hotel/max1024x768/603/60345914.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">Villa Domina</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Colombo</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 49,258</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-3 m-0 p-4">
                            <div class="card w-100 m-0 border-0">
                            <img class="card-img-top" src="https://q-cf.bstatic.com/images/hotel/max1024x768/179/179659060.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">Unique Design Apartments</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Kandy</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 96,485</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-3 m-0 p-4">
                            <div class="card w-100 m-0 border-0">
                            <img class="card-img-top" src="https://r-cf.bstatic.com/images/hotel/max1024x768/222/222662677.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">The Old Town Square</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Galle</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 64,482</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-3 m-0 p-4">
                            <div class="card w-100 m-0 border-0">
                            <img class="card-img-top" src="https://r-cf.bstatic.com/images/hotel/max1024x768/148/148144475.jpg" height="250" alt="Card image cap">
                            <div class="card-body pt-1">
                                <div class="offer-name">Sugar Loft Apartments</div>
                                <div class="offer-text"><i class="fas fa-map-marker-alt"></i> Nuwareliya</div>
                                <div class="offer-price mt-2 mb-1">Starting from LKR 38,469</div>
                                <div class="offer-review">
                                    <button type="button" class="btn btn-primary btn-sm p-0 m-0 py-1 px-1">9.1</button>
                                    Exceptional 
                                    <span>| 656 reviews</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-slide="prev">
                <i class="fas fa-arrow-circle-left fa-2x"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-slide="next">
                <i class="fas fa-arrow-circle-right fa-2x"></i>
                <span class="sr-only">Next</span>
            </a>
            </div>
            
            

          </div>
    </div>
</section>


<!--=================Properties================-->

<section id="properties">

    <div class="container rounded-box bg-white my-4">

        <div class="col-12 pt-5 mb-2">
            <div class="heading">Browse By Property Type</div>
                
        </div>

        <div class="row my-4 pb-5 px-4 justify-content-center">

<!----------------- Mobile ------------------>

            <div id="carouselExampleControls" class="carousel slide mobile" data-ride="carousel">
                <div class="carousel-inner p-1">
                    <div class="carousel-item active">
                        <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-3.jpg" class="d-block w-100" alt="...">
                        <div class="property-name">Hotels</div>
                        <div class="property-text">27748 Hotels</div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-1.jpg" class="d-block w-100" alt="...">
                        <div class="property-name">Villas</div>
                        <div class="property-text">27748 Villas</div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-4.jpg" class="img-responsive w-100" alt="...">
                        <div class="property-name">Apartments</div>
                        <div class="property-text">27748 Apartments</div>
                    </div>
                    <div class="carousel-item">
                            <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-2.jpg" class="img-responsive w-100" alt="...">
                            <div class="property-name">Homestays</div>
                            <div class="property-text">27748 Homes</div>
                        </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fas fa-arrow-circle-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fas fa-arrow-circle-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
                </div>







<!----------------- Desktop ------------------>


          <div id="carouselExampleFade" class="carousel slide carousel-fade mx-0 px-0 desktop" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3">
                            <a href=""><img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-3.jpg" class="img-responsive w-100 room-img properties-thumb-desktop" alt="..."></a>
                            <div class="property-name">Hotels</div>
                            <div class="property-text">27748 Hotels</div>
                        </div>
                        <div class="col-3">
                            <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-1.jpg" class="img-responsive w-100 properties-thumb-desktop" alt="...">
                            <div class="property-name">Villas</div>
                            <div class="property-text">27748 Villas</div>
                        </div>
                        <div class="col-3">
                            <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-4.jpg" class="img-responsive w-100 properties-thumb-desktop" alt="...">
                            <div class="property-name">Apartments</div>
                            <div class="property-text">27748 Apartments</div>
                        </div>
                        <div class="col-3">
                            <img src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-2.jpg" class="img-responsive w-100 properties-thumb-desktop" alt="...">
                            <div class="property-name">Homestays</div>
                            <div class="property-text">27748 Homes</div>
                        </div>
                    </div>
                
                </div>
                
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <i class="fas fa-arrow-circle-left fa-2x"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <i class="fas fa-arrow-circle-right fa-2x"></i>
                <span class="sr-only">Next</span>
            </a>
            </div>
            
            

          </div>
    </div>
</section>


<section id="cities">
    <div class="container-fluid bg-white mb-5 pb-5">
        
        <div class="container px-0">
            
            <div class="col-12 pt-5 my-5 ">
                <div class="heading">Where Are You Going?</div>
                
            </div>


            <div class="row mx-0 p-0">

                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://media.timeout.com/images/105242410/image.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Colombo</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/d7/c5/a8.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Kandy</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://www.dailynews.lk/sites/default/files/news/2019/03/28/z_p25-Galle-Fort-1_0.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Galle</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

 




                <div class="card text-white w-100 m-0 p-0 col-md-6">
                    <img class="card-img" src="https://img1.wsimg.com/isteam/ip/e94fcde3-e4d9-4466-95a9-375df208da02/6ba056c8-1f6c-4c78-acd2-f0e3bfe2d5e1.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Nuwareliya</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-6">
                    <img class="card-img" src="https://srilankafinder.com/wp-content/uploads/2016/12/Anuradhapura-view.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Anuradhapura</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-3">
                    <img class="card-img" src="https://i0.wp.com/www.uplist.lk/wp-content/uploads/2020/01/Jaffna-dutch-fort-sri-lanka.jpg?fit=1200%2C803&ssl=1" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Jaffna</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-3">
                    <img class="card-img" src="https://www.sigiriyajungles.com/wp-content/uploads/2016/09/trincomalee-header-mob-2.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Trincomalee</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-3">
                    <img class="card-img" src="https://media.timeout.com/images/102950271/630/472/image.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Dambulla</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-3">
                    <img class="card-img" src="https://1.bp.blogspot.com/-0m91cAshZgo/V2xH_7DJfgI/AAAAAAAAAEA/Wt_UtGaez8g2ioU-Z_ORX6pSU-OZpYzHACLcB/s1600/102287408.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Ratnapura</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>


                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://static.toiimg.com/photo/64826369/Ella-bridge.jpg?width=748&resize=4" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Ella</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://www.ceylonoutings.com/assets/images/beach/033.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Unawatuna</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="card text-white w-100 m-0 p-0 col-md-4">
                    <img class="card-img" src="https://i.pinimg.com/originals/b0/70/79/b0707958471ad0c26a8027a28a48e7f2.jpg" height="100%" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-end">
                        <div>
                            <h5 class="card-title my-0 py-0">Hikkaduwa</h5>
                            <p class="card-text">Get out of the house and into the sunshine.</p>
                        </div>
                        
                    </div>
                </div>





            </div>



        </div>


    </div>
</section>



@endsection