@extends('layouts.master')

@section('content')


<section id="room-page">
    <div class="container">
        <div class="row pt-5">


            <!--=======================================================================
                                     Side Menu
            ==========================================================================-->

            <div class="col-md-3 pt-2">

                <div class="row mt-3 pr-sm-1 text-light reservation-container">

                    <div class="col-12 py-3 mb-2 bg-dark rounded-box">
                        <form>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Destination/Property name :</label>
                            <input type="email" class="form-control-sm w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Colombo">
                        </div>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Check-in date :</label>
                            <input type="email" class="form-control-sm w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Monday, July, 6, 2020">
                        </div>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Check-out date :</label>
                            <input type="email" class="form-control-sm w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Monday, July, 7, 2020">
                        </div>
                        <div class="form-group my-4">
                            <select class="custom-select custom-select-sm  col">
                                <option value="1" selected>1 adult</option>
                                <option value="2">2 adults</option>
                                <option value="3">3 adults</option>
                                <option value="4">4 adults</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <select class="custom-select custom-select-sm  col">
                                <option selected>No children</option>
                                <option value="1">1 child</option>
                                <option value="2">2 children</option>
                                <option value="3">3 children</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                    <select class="custom-select custom-select-sm col">
                                    <option value="1" selected>1 room</option>
                                    <option value="2">2 room</option>
                                    <option value="3">3 room</option>
                                    <option value="4">4 room</option>
                                    </select>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>

                </div>

                <div class="row pr-1">
                
                    <div class="col-12 bg-white pt-0 px-0 mx-0">

                        <div style="" class="mt-0 mb-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.513666787981!2d79.8635045!3d6.8752137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3080e0d0a330e637!2sVictoria%20Palace.lk!5e0!3m2!1sen!2slk!4v1594099407018!5m2!1sen!2slk" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="300px"></iframe>
                        </div> 
                        

                         
                        <div style=" font-size:.8rem;" class="border p-2 m-2">
                            <div style="font-weight: 600; font-size:1rem" class="mt-4 mb-1">Facilities</div>
                            <div class="p-2">
                                <div class="my-2"><i class="fas fa-shuttle-van fa-1x text-primary"></i> Airport shuttle</div>
                                <div class="my-2"><i class="fas fa-home text-primary"></i></i> Family rooms</div>
                                <div class="my-2"><i class="fas fa-wifi text-primary"></i> Free WIFI</div>
                                <div class="my-2"><i class="fas fa-parking text-primary"></i> Free parking</div>
                                <div class="my-2"><i class="fas fa-smoking-ban text-primary"></i> Non-smoking rooms</div>
                                <div class="my-2"><i class="far fa-snowflake text-primary"></i> Air conditioning</div>
                                <div class="my-2"><i class="fas fa-bath text-primary"></i> Private Bathroom</div>
                                <div class="my-2"><i class="fas fa-tv text-primary"></i> Flat-screen TV</div>
                            </div>
                            
                        </div>

                        <div style=" font-size:.8rem;" class="border p-2 m-2">
                            <div style="font-weight: 600; font-size:1rem" class="mt-4 mb-1">Nearby landmarks</div>
                            <div class="p-2">

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Barefoot Gallery</div>
                                    </div>
                                    <span class="badge badge-info my-1">3.5km</span>
                                </div>

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Arcade Independence Square</div>
                                    </div>
                                    <span class="badge badge-info my-1">4.5km</span>
                                </div>

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Ratmalana Airport</div>
                                    </div>
                                    <span class="badge badge-info my-1">11.3km</span>
                                </div>

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Dehiwala Zoo</div>
                                    </div>
                                    <span class="badge badge-info my-1">2.3km</span>
                                </div>


                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">National Zoological Gardens of Sri Lanka</div>
                                    </div>
                                    <span class="badge badge-info my-1">2.3km</span>
                                </div>

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Laksala</div>
                                    </div>
                                    <span class="badge badge-info my-1">2.5km</span>
                                </div>

                                <div class="media my-2">
                                    <div class="media-body">
                                        <div class="">Barefoot Gallery</div>
                                    </div>
                                    <span class="badge badge-info my-1">2.6km</span>
                                </div>

                            </div>
                            
                        </div>

                      




                        
                    </div>
                </div>

            </div>


            <!--=======================================================================
                                     Room Details
            ==========================================================================-->






            <div class="col-md-9 p-0 pt-4">

                    <div class="row mx-1 justify-content-md-center">

                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">

                            <div class="row card-img-top no-gutters popup-gallery">
                                <a class="col-12"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369855.jpg" id="mainImage" class="room-page-thumb-main" style=""></a>
                                <a class="col border" onmouseover="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369309.jpg')"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369309.jpg" class="room-page-thumb" alt="" ></a>
                                <a class="col border" onmouseover="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369300.jpg')"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369300.jpg" class="room-page-thumb" alt="" ></a>
                                <a class="col border" onmouseover="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369303.jpg')"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369303.jpg" class="room-page-thumb" alt="" ></a>
                                <a class="col border" onmouseover="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369457.jpg')"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369457.jpg" class="room-page-thumb" alt="" ></a>
                                <a class="col border" onmouseover="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369267.jpg')"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369267.jpg" class="room-page-thumb" alt="" ></a>
                                <a class="col border" onmouseover="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369306.jpg')"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369306.jpg" class="room-page-thumb" alt="" ></a>
                            </div>

                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-10">
                                        <h5 class="card-title my-1" style="font-size: 2rem; font-weight:600">Victoria Palace </h5>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;"><i class="fas fa-map-marker-alt"></i> No.93/1 , Manning Place , Colombo | <b><a href="#">View on map</a></b></p>

                                        <div class="card-text my-3 py-0 text muted" style="line-height:1.2rem; font-size: 1rem;">
                                            

Located in Colombo, an 18-minute walk from Mount Lavinia Beach, OYO 473 Victoria Palace has accommodations with free WiFi and free private parking. The property is around 5.1 km from American Embassy, 9.7 km from R Premadasa Stadium and 11.3 km from Khan Clock Tower. The hotel has family rooms.

The rooms in the hotel are equipped with a flat-screen TV. At OYO 473 Victoria Palace rooms contain a private bathroom.<br/><br/>

Barefoot Gallery is 3.4 km from the accommodation, while Arcade Independence Square is 4.5 km from the property. The nearest airport is Ratmalana Airport, 11.3 km from OYO 473 Victoria Palace.

We speak your language! 
                                        </div>
                                        
                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold; color:green">FREE cancellation | No prepayment needed</div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.7rem; color:green">Risk Free: You can cancel later, so lock in this great price today! </div>
                                    </div>

                                <!--==============================Desktop===================================-->

                                    <div class="col-md-2 p-1 text-right border border-top-0 border-right-0 border-bottom-0 desktop">
                                        
                                        <div class="media my-2 mb-3">
                                            <div class="media-body">
                                                <div class="mt-0 mb-1 search-result-review">Excellent <br/><span class="search-result-review-count" >791 reviews</span> </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <br/>LKR<br/><span class="search-result-price"> 105,297</span></div>
                                        
                                        <div><a href="#property-reserve" type="button" class="btn btn-primary btn-block my-4 py-3">Reserve</a></div>
                                        

                                    </div>

                                    <!--==============================Mobile===================================-->

                                    <div class="col-md-2 p-4  mobile">
                                        
                                        <div class="media text-left my-1 mb-3 float-right">
                                            <div class="media-body">
                                                <div class="mt-0 mb-1 search-result-review">Excellent <br/><span class="search-result-review-count" >791 reviews</span> </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <br/>LKR<br/><span class="search-result-price">5,297</span>  </div>
                                        
                                        <div class="text-right mx-4 mt-5"><a href="#property-reserve" type="button" class="btn btn-primary btn-block my-3 py-3">Reserve</a></div>
                                    
                                    </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>

                    <div class="col-12 p-0 my-2" id="property-reserve">
                        <h5 class="mx-1" style="font-size: 1.5rem; font-weight:700">Room type </h5>
                    </div>

                    <div class="col-12 p-0 my-2">

                        <div class="card text-left p-0">
                        <div class="card-body">
                            <div class="row" style="font-size: .8rem">
                                
                                <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Check-in</b></div>
                                    <div class="text-primary mt-1" style="font-size: 1rem; font-weight: bold;">Tuesday, July, 7, 2020</div>
                                    <div>From 12:00 PM</div>
                                </div>
                                
                                <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Check-out</b></div>
                                    <div class="text-primary mt-1" style="font-size: 1rem; font-weight: bold;">Wednesday, July, 8, 2020</div>
                                    <div>1-night stay</div>
                                </div>

                                <div class="col-md-3 col-6 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Guests</b></div>
                                    <div class="text-primary mt-1" style="font-size: 1rem; font-weight: bold;">2 adults</div>
                                    <div></div>
                                </div>

                                <div class="col-md-3 col-6 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Children</b></div>
                                    <div class="text-primary mt-1" style="font-size: 1rem; font-weight: bold;">2 children</div>
                                    <div></div>
                                </div>
                                
                                

                                <div class="col-md-3 py-3">
                                    
                                    <div><button type="button" class="btn btn-primary btn-block my-1 py-2">Change search</button></div>
                                </div>

                            </div>
                            
                        </div>
                        
                        </div>

                    </div>

                    <div class="col-12 p-0 my-2">
                        
                        <div class="card text-left p-0">
                        <div class="card-header p-2">
                            <b>Double Room</b> | <i class="fas fa-bed"></i> 1 full bed
                        </div>
                        <div class="card-body">
                            <div class="row" style="font-size: .8rem">

                                <div class="col-md-2 p-1"><img class="" src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369855.jpg" alt="" style="width:100%; height:100%"></div>
                                
                                <div class="col-md-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Benefits</b></div>
                                    <div><i class="far fa-check-circle text-success"></i> Free cancellation before July 14, 2020</div>
                                    <div><i class="far fa-check-circle text-success"></i> 1 kid under 13 years stays FREE</div>
                                </div>
                                
                                <div class="col-md-2 col-8 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Price per night</b></div>
                                    <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 5,297</div>
                                </div>
                                
                                <div class="col-md-2 col-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Rooms</b></div>
                                    <div class="m-1">
                                        <select class="custom-select custom-select-sm col w-100">
                                        <option value="1" selected>1 room</option>
                                        <option value="2">2 room</option>
                                        <option value="3">3 room</option>
                                        <option value="4">4 room</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="alert alert-info text-center my-2 p-1" role="alert">
                                        <div style="font-size: 0.7rem; line-height:0.7rem; font-weight:bold; color:green">No Risk!</div>  
                                        <div style="font-size: 0.7rem; line-height:0.7rem; color:green">No cancellation fee</div>
                                    </div>
                                    <div><a href="{{ url('/booking') }}" type="button" class="btn btn-primary btn-block my-1 py-2">Reserve</a></div>
                                </div>

                            </div>
                            
                        </div>
                        
                        </div>

                    </div> 
                    
                    <div class="col-12 p-0 my-2">
                        
                        <div class="card text-left p-0">
                        <div class="card-header p-2">
                            <b>Deluxe Room</b> | <i class="fas fa-bed"></i> 1 king bed
                        </div>
                        <div class="card-body">
                            <div class="row" style="font-size: .8rem">

                                <div class="col-md-2 p-1"><img class="" src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369465.jpg" alt="" style="width:100%; height:100%"></div>
                                
                                <div class="col-md-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Benefits</b></div>
                                    <div><i class="far fa-check-circle text-success"></i> Free cancellation before July 14, 2020</div>
                                    <div><i class="far fa-check-circle text-success"></i> 1 kid under 13 years stays FREE</div>
                                </div>
                                
                                <div class="col-md-2 col-8 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Price per night</b></div>
                                    <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 7,365</div>
                                </div>
                                
                                <div class="col-md-2 col-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Rooms</b></div>
                                    <div class="m-1">
                                        <select class="custom-select custom-select-sm w-100">
                                        <option value="1" selected>1 room</option>
                                        <option value="2">2 room</option>
                                        <option value="3">3 room</option>
                                        <option value="4">4 room</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="alert alert-info text-center p-1" role="alert">
                                        <div style="font-size: 0.7rem; line-height:0.7rem; font-weight:bold; color:green">No Risk!</div>  
                                        <div style="font-size: 0.7rem; line-height:0.7rem; color:green">No cancellation fee</div>
                                    </div>
                                    <div><a href="{{ url('/booking') }}" type="button" class="btn btn-primary btn-block my-1 py-2">Reserve</a></div>
                                </div>

                            </div>
                            
                        </div>
                        
                        </div>

                    </div> 

                    <div class="col-12 p-0 my-2">
                        
                        <div class="card text-left p-0">
                        <div class="card-header p-2">
                            <b>Standard Single Room</b> | <i class="fas fa-bed"></i> 1 twin bed
                        </div>
                        <div class="card-body">
                            <div class="row" style="font-size: .8rem">

                                <div class="col-md-2 p-1"><img class="" src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369855.jpg" alt="" style="width:100%; height:100%"></div>
                                
                                <div class="col-md-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Benefits</b></div>
                                    <div><i class="far fa-check-circle text-success"></i> Free cancellation before July 14, 2020</div>
                                    <div><i class="far fa-check-circle text-success"></i> 1 kid under 13 years stays FREE</div>
                                </div>
                                
                                <div class="col-md-2 col-8 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Price per night</b></div>
                                    <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 4,320</div>
                                </div>
                                
                                <div class="col-md-2 col-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Rooms</b></div>
                                    <div class="m-1">
                                        <select class="custom-select custom-select-sm w-100">
                                        <option value="1" selected>1 room</option>
                                        <option value="2">2 room</option>
                                        <option value="3">3 room</option>
                                        <option value="4">4 room</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="alert alert-info text-center p-1" role="alert">
                                        <div style="font-size: 0.7rem; line-height:0.7rem; font-weight:bold; color:green">No Risk!</div>  
                                        <div style="font-size: 0.7rem; line-height:0.7rem; color:green">No cancellation fee</div>
                                    </div>
                                    <div><a href="{{ url('/booking') }}" type="button" class="btn btn-primary btn-block my-1 py-2">Reserve</a></div>
                                </div>

                            </div>
                            
                        </div>
                        
                        </div>

                    </div> 


                    <div class="col-12 p-0 my-2">
                        
                        <div class="alert alert-success" role="alert">
                            <div class="float-left m-2"><i class="fas fa-unlock-alt fa-2x"></i></div>
                        <div class="lock-reservation-title" style="">Lock in a great price for your upcoming stay</div> 
                        <div class="lock-reservation-text" style="">Prices might go up, so secure your reservation today.</div> 
                    </div>

                    </div>



                        


                    </div>

            </div>
            






        </div>
    </div>
</section>









    
@endsection