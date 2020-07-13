@extends('layouts.master')

@section('content')


<section id="search-result">
    <div class="container">
        <div class="row">


            <!--=======================================================================
                                     Side Menu
            ==========================================================================-->

            <div class="col-md-3 ">

                <div class="row mt-3 pr-1 text-light">

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
                                     Apartment Details
            ==========================================================================-->






            <div class="col-md-9 p-0 pt-3">

                    <div class="row ml-1 justify-content-md-center">

                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">

                            <div class="row card-img-top no-gutters popup-gallery">
                                <a class="col-12" href="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369855.jpg"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369855.jpg" alt="" style="height:29rem; width:100%"></a>
                                <a class="col border" href="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369309.jpg"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369309.jpg" alt="" style="height:100%; width:100%"></a>
                                <a class="col border" href="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369300.jpg"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369300.jpg" alt="" style="height:100%; width:100%"></a>
                                <a class="col border" href="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369303.jpg"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369303.jpg" alt="" style="height:100%; width:100%"></a>
                                <a class="col border" href="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369457.jpg"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369457.jpg" alt="" style="height:100%; width:100%"></a>
                                <a class="col border" href="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369267.jpg"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/231/231369267.jpg" alt="" style="height100%; width:100%"></a>
                                <a class="col border" href="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369306.jpg"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/231/231369306.jpg" alt="" style="height100%; width:100%"></a>
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

                                    <div class="col-md-2 p-1 text-right border border-top-0 border-right-0 border-bottom-0">
                                        <div class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1" style="line-height: 1rem; font-size: 1rem; color: rgb(97, 97, 248);">Excellent <br/><span style="font-size: 0.7rem; color: rgb(90, 90, 90); ">791 reviews</span> </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary btn-lg p-0 m-0 py-1 px-2 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div class="my-4"></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <br/><span style="font-weight:bolder; font-size:1.1rem">LKR 5,297</span></div>
                                        
                                        <div><button type="button" class="btn btn-primary btn-block my-3 py-3">Reserve</button></div>


                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>

                    <div class="col-12 p-0 my-2">
                        <h5 class="mx-1" style="font-size: 1.5rem; font-weight:700">Apartment type</h5>
                    </div>


                    <div class="col-12 p-0 my-2">
                        
                        <div class="card text-left p-0">
                        
                        <div class="card-body">
                            <div class="row" style="font-size: .8rem">

                                <div class="col-md-2 p-2 border" style="background-color: #F7F7F7">
                                    <div><i class="fas fa-check text-success"></i> 3 Bedroom(s)</div>
                                    <div><i class="fas fa-check text-success"></i> 1 Living room(s)</div>
                                    <div><i class="fas fa-check text-success"></i> Kitchen</div>
                                    <div><i class="fas fa-check text-success"></i> Washing machine</div>
                                    <div><i class="fas fa-check text-success"></i> Refrigerator</div>
                                    <div><i class="fas fa-check text-success"></i> Ironing facilities</div>
                                </div>

                                <div class="col-md-4 p-2 border" style="background-color: #F7F7F7">
                                    <div><b>Benefits</b></div>
                                    <div><i class="far fa-check-circle text-success"></i> Free cancellation before July 14, 2020</div>
                                    <div><i class="far fa-check-circle text-success"></i> 1 kid under 13 years stays FREE</div>
                                </div>
                                
                                
                                
                                
                                
                                
                                <div class="col-md-4 no-gutters">

                                    <div class="row no-gutters">
                                        <div class="col-6 p-2 border" style="background-color: #F7F7F7">
                                            <div><b>Price per night</b></div>
                                            <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 5,297</div>
                                        </div>
                                        <div class="col-3 p-2 border" style="background-color: #F7F7F7">
                                            <div><b>Sleeps</b></div>
                                            <div class=" text-center" style="">
                                                <i class="fas fa-user"><span  style="font-size: 1.2rem"> x 2</span></i>
                                            </div>
                                        </div>
                                        <div class="col-3 p-2 border" style="background-color: #F7F7F7">
                                            <div><b>Select</b></div>
                                                <div class="form-group form-check text-center">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                </div>
                                        </div>                                                                                
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="col-md-6 p-2 border" style="background-color: #F7F7F7">
                                            <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 6,297</div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                            <div class=" text-center" style="">
                                                <i class="fas fa-user"><span  style="font-size: 1.2rem"> x 3</span></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                                <div class="form-group form-check text-center">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                </div>
                                        </div>                                                                                
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="col-md-6 p-2 border" style="background-color: #F7F7F7">
                                            
                                            <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 7,297</div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                            <div class=" text-center" style="">
                                                <i class="fas fa-user"><span  style="font-size: 1.2rem"> x 4</span></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                                <div class="form-group form-check text-center">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                </div>
                                        </div>                                                                                
                                    </div>

                                    <div class="row no-gutters">
                                        <div class="col-md-6 p-2 border" style="background-color: #F7F7F7">
                                            <div style="font-weight:bolder; font-size:1.1rem" class="text-danger">LKR 8,297</div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                            <div class=" text-center" style="">
                                                <i class="fas fa-user"><span  style="font-size: 1.2rem"> x 5</span></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 p-2 border" style="background-color: #F7F7F7">
                                                <div class="form-group form-check text-center">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                                </div>
                                        </div>                                                                                
                                    </div>

                                </div>







                                <div class="col-md-2 p-0">

                                    <div>
                                        <ul style="list-style-type:disc;" class="pl-1">
                                            <li>Confirmation is immediate</li>
                                            <li>No registration required</li>
                                            <li>No booking or credit card fees! </li>
                                        </ul>
                                    </div>

                                    <div class="alert alert-info text-center" role="alert">
                                        <div style="font-size: 0.7rem; line-height:0.7rem; font-weight:bold; color:green">No Risk!</div>  
                                        <div style="font-size: 0.7rem; line-height:0.7rem; color:green">No cancellation fee</div>
                                    </div>

                                    <div><button type="button" class="btn btn-primary btn-block my-1 py-2">Reserve</button></div>
                                
                                </div>
                                

                            </div>
                            
                        </div>
                        
                        </div>

                    </div> 
                    

                    <div class="col-12 p-0 my-2">
                        
                        <div class="alert alert-success" role="alert">
                            <div class="float-left m-2"><i class="fas fa-unlock-alt fa-2x"></i></div>
                        <div style="font-size: 1rem; color:#3a3a3a; font-weight:bold">Lock in a great price for your upcoming stay</div> 
                        <div style="font-size: .8rem; color:#3a3a3a;">Prices might go up, so secure your reservation today.</div> 
                    </div>

                    </div>

                    </div>



                        


                    </div>

            </div>
            






        </div>
    </div>
</section>









    
@endsection