@extends('layouts.master')

@section('content')


<section id="search-result">
    <div class="container">
        <div class="row">


            <!--=======================================================================
                                     Side Menu
            ==========================================================================-->

            <div class="col-lg-3 ">

                <div class="row mt-sm-5 pt-3 pr-lg-4 text-light reservation-container">

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

                <div class="row pr-4">
                    <div class="col-12 my-2"><a class="btn btn-outline-dark btn-block search-result-sidemenu-heading" data-toggle="collapse" href="#filterCollapse" role="button" aria-expanded="false" aria-controls="filterCollapse">Filter by <i class="fas fa-sort-amount-down-alt"></i></a></div>
                    <div class="col-12 bg-white rounded-box py-3 collapse" id="filterCollapse">
                        

                        <div class="mt-4 mb-1 search-result-sidemenu-heading-2">Budget</div> 
                        <form class="border p-2 search-result-sidemenu-text">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 0 - 10,000 per night</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 10,000 - 20,000 per night</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 20,000 - 30,000 per night</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 30,0000 - 40,000 per night</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 40,000 - 50,000 per night</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">LKR 50,000 + per night</label>
                            </div>
                        </form>

                        <div class="mt-4 mb-1 search-result-sidemenu-heading-2">Ratings</div> 
                        <form class="border p-2 search-result-sidemenu-text">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">1 Star</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">2 Stars</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">3 Stars</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">4 Stars</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">5 Stars</label>
                            </div>
                        </form>

                        <div style="font-weight: 600; font-size:1rem" class="mt-4 mb-1">Property Type</div> 
                        <form class="border p-2 search-result-sidemenu-text">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Hotels</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Apartments</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Villas</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Resorts</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Homestays</label>
                            </div>
                        </form>

                        <div class="mt-4 mb-1 search-result-sidemenu-heading-2">Bed Preference</div> 
                        <form class="border p-2 search-result-sidemenu-text">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Twin Beds</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Single Bed</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Double Bed</label>
                            </div>

                            <button class="btn btn-outline-dark btn-block" type="submit">Search</button>
                        </form>





                        
                    </div>
                </div>

            </div>


            <!--=======================================================================
                                     Search Result
            ==========================================================================-->



            <div class="col-lg-9 p-0 search-result-container">
                    
                    <div class="row my-2 py-1 border border-top-0 border-left-0 border-right-0">
                        <div class="heading">Colombo : 2,341 properties found</div>
                    </div>

                    <div class="row ml-sm-1 justify-content-md-center">

                        <div class="card mb-3 border-0">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <a class="col-12 m-0 mb-1 p-0"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/344/34405073.jpg" class="card-img search-result-thumb-main" id="mainImage" alt="..."></a>
                                <a class="col-3 m- p-0 border" onmouseover="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/900/90068968.jpg')"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/900/90068968.jpg" class="search-result-thumb" alt="..." onclick="imageThumbnail('https://r-cf.bstatic.com/images/hotel/max1024x768/900/90068968.jpg')"></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/745/74529578.jpg')"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/745/74529578.jpg" class="search-result-thumb" alt="..." onclick="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/745/74529578.jpg')"></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/904/90480616.jpg')"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/904/90480616.jpg" class="search-result-thumb" alt="..." onclick="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/904/90480616.jpg')"></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/905/90574561.jpg')"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/905/90574561.jpg" class="search-result-thumb" alt="..." onclick="imageThumbnail('https://q-cf.bstatic.com/images/hotel/max1024x768/905/90574561.jpg')"></a>
                            </div>
                            </div>
                            <div class="col-md-8 pl-sm-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-8">
                                        <h5 class="card-title my-0">Sugar Loft Apartments </h5>
                                        <p class="card-text my-0 text-primary search-result-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary search-result-location"><i class="fas fa-map-marker-alt"></i> Bambalapitiya , Colombo | <a href="#">View on map</a></p>

                                        <div class="card-text mt-2 mb-0 py-0 search-result-room-type">Standard Double Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>
                                        <div class="card-text my-0 py-0 text muted search-result-bed-type">1 full bed</div>
                                        
                                        @if(true)
                                            <div class="card-text mt-2 mb-0 py-0 search-result-refund">FREE cancellation | No prepayment needed</div>
                                            <div class="card-text my-0 py-0 text muted search-result-risk">Risk Free: You can cancel later, so lock in this great price today! </div>
                                        @else
                                            <div class="alert alert-danger my-3 search-result-similar-properties w-100" role="alert">
                                            <div class="float-left mr-2"><div class="clock mr-2"></div></div> changing your dates or check out these <br/><a href="">similar Properties</a></div>
                                        @endif

                                    </div>



                                    <!--==============================Desktop===================================-->

                                    <div class="col-md-4 p-1 text-right border border-top-0 border-right-0 border-bottom-0 desktop">
                                        
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="mt-0 mb-1 search-result-review">Excellent <br/><span class="search-result-review-count" >791 reviews</span> </div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><button type="button" class="btn btn-danger my-3 py-0">Only 3 left</button></div>

                                        <div class="my-4"></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <span class="search-result-price">LKR 5,297</span></div>

                                        @if(true)
                                            <div><a href="{{ url('/search-result/room') }}" class="btn btn-outline-primary btn-block my-3 py-1">Select your room</a></div>
                                        @else
                                            <div><button type="button" class="btn btn-outline-danger my-3 py-1"><i class="far fa-clock fa-4x"></i> <div>JUST MISSED IT!</div></button></div>
                                        @endif

                                    </div>

                                    <!--==============================Mobile===================================-->

                                    <div class="col-md-4 p-4  mobile">
                                        
                                        <div class="media text-left my-1">
                                            <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 align-self-left mr-1">9.1</button>
                                            <div class="media-body">
                                                <div class="mt-0 mb-1 search-result-review">Excellent <br/><span class="search-result-review-count" >791 reviews</span> </div>
                                            </div>
                                        </div>

                                        <div class="float-right"><button type="button" class="btn btn-danger my-3 py-0">Only 3 left</button></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><span class="search-result-price">LKR 5,297</span> <small class="text-muted"><del>LKR 10,597</del></small> </div>
                                        
                                        @if(true)
                                            <div class="text-right mx-4"><a href="{{ url('/search-result/room') }}" class="btn btn-outline-primary btn-block my-3 py-1">Select your room</a></div>
                                        @else
                                            <div><button type="button" class="btn btn-block btn-outline-danger my-3 py-1"><i class="far fa-clock fa-4x"></i> <div>JUST MISSED IT!</div></button></div>
                                        @endif
                                    
                                    </div>

                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>



                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <div class="col-12 m-0 mb-1 p-0"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/134/134394306.jpg" class="card-img" alt="..."></div>
                                <div class="col-3 m- p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/647/64763848.jpg" class="search-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/239/239918306.jpg" class="search-result-thumb" alt="..." ></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/139/139151576.jpg" class="search-result-thumb" alt="..." ></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/239/239918033.jpg" class="search-result-thumb" alt="..." ></div>
                            </div>
                            </div>
                            <div class="col-md-8 pl-sm-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-8">

                                        <h5 class="card-title my-0">The Kingsbury Colombo</h5>
                                        <p class="card-text my-0 text-primary search-result-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary search-result-location"><i class="fas fa-map-marker-alt"></i>  Fort , Colombo | <a href="#">View on map</a></p>

                                        <div class="card-text mt-2 mb-0 py-0 search-result-room-type">Superior Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>
                                        <div class="card-text my-0 py-0 text muted search-result-bed-type" >Multiple bed types</div>

                                        <div class="alert alert-danger my-3 search-result-similar-properties desktop" role="alert">
                                        <div class="float-left mr-2"><div class="clock mr-2"></div></div> changing your dates or check out these <a href="">similar Properties</a>
                                        </div>

                                        <div class="alert alert-danger my-3 search-result-similar-properties mobile " role="alert">
                                        <div class="float-left"><div class="clock mr-2"></div></div> changing your dates or check out these <a href="">similar Properties</a>
                                        </div>

                                    </div>

                                    <!--==============================Desktop===================================-->

                                    <div class="col-4 p-1 text-right border border-top-0 border-right-0 border-bottom-0 desktop">
                                        <div class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1 search-result-review">Excellent <br/><span class="search-result-review-count">791 reviews</span> </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><button type="button" class="btn btn-outline-danger my-3 py-1"><i class="far fa-clock fa-4x"></i> <div>JUST MISSED IT!</div></button></div>
                                        
                                    </div>


                                    <!--==============================Mobile===================================-->

                                    <div class="col-md-4 p-3  mobile">
                                        
                                        <div class="media text-left my-3">
                                            <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 align-self-left mr-1">9.1</button>
                                            <div class="media-body">
                                                <div class="mt-0 mb-1 search-result-review">Excellent <br/><span review="search-result-review-count" >791 reviews</span> </div>
                                            </div>
                                        </div>

                                        <div class=""></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><span class="search-result-price">LKR 5,297</span> <small class="text-muted"><del>LKR 10,597</del></small> </div>
                                        
                                        <div class="text-right mx-4"><a href="{{ url('/search-result/room') }}" class="btn btn-outline-danger btn-block my-3 py-1"><i class="far fa-clock fa-4x"></i> <div>JUST MISSED IT!</div></a></div>
                                    </div>





                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>


                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <div class="col-12 m-0 mb-1 p-0"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/239/239402778.jpg" class="card-img" alt="..."></div>
                                <div class="col-3 m- p-0 border"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/256/256755645.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/251/251287101.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/251/251286545.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/239/239402394.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                            </div>
                            </div>
                            <div class="col-md-8 pl-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-8">
                                        <h5 class="card-title my-0">Mövenpick Hotel Colombo</h5>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;"><i class="fas fa-map-marker-alt"></i> Kollupitiya , Colombo | <a href="#">View on map</a></p>

                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold">Deluxe Twin Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.8rem;">1 full bed</div>
                                        
                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold; color:green">FREE cancellation | No prepayment needed</div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.7rem; color:green">Risk Free: You can cancel later, so lock in this great price today! </div>
                                    </div>

                                    <div class="col-4 p-1 text-right border border-top-0 border-right-0 border-bottom-0">
                                        <div class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1" style="line-height: 1rem; font-size: 1rem; color: rgb(97, 97, 248);">Excellent <br/><span style="font-size: 0.7rem; color: rgb(90, 90, 90); ">791 reviews</span> </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><button type="button" class="btn btn-danger my-3 py-0">Only 3 left</button></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <span style="font-weight:bolder; font-size:1.1rem">LKR 5,297</span></div>
                                        
                                        <div><a href="{{ url('/search-result/room') }}" class="btn btn-outline-primary my-3 py-1">Select your room</a></div>
                                    </div>


                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>



                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <div class="col-12 m-0 mb-1 p-0"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/247/247098300.jpg" class="card-img" alt="..."></div>
                                <div class="col-3 m- p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/167/167073434.jpg" class="room-result-thumb" alt="..." style="height: 53px; width:100%"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/247/247098209.jpg" class="room-result-thumb" alt="..." style="height: 53px; width:100%"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/247/247100398.jpg" class="room-result-thumb" alt="..." style="height: 53px; width:100%"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/210/210431490.jpg" class="room-result-thumb" alt="..." style="height: 53px; width:100%"></div>
                            </div>
                            </div>
                            <div class="col-md-8 pl-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-8">
                                        <h5 class="card-title my-0">ME Colombo</h5>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;"><i class="fas fa-map-marker-alt"></i> Havelock Town , Colombo | <a href="#">View on map</a></p>

                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold">Standard Double Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.8rem;">1 full bed</div>
                                        
                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold; color:green">FREE cancellation | No prepayment needed</div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.7rem; color:green">Risk Free: You can cancel later, so lock in this great price today! </div>
                                    </div>

                                    <div class="col-4 p-1 text-right border border-top-0 border-right-0 border-bottom-0">
                                        <div class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1" style="line-height: 1rem; font-size: 1rem; color: rgb(97, 97, 248);">Excellent <br/><span style="font-size: 0.7rem; color: rgb(90, 90, 90); ">791 reviews</span> </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div class="my-4"></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <span style="font-weight:bolder; font-size:1.1rem">LKR 5,297</span></div>
                                        
                                        <div><a href="{{ url('/search-result/room') }}" class="btn btn-outline-primary my-3 py-1">Select your room</a></div>
                                    </div>


                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>


                        <div class="card mb-3 border-0" style="">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <div class="col-12 m-0 mb-1 p-0"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/344/34405073.jpg" class="card-img" alt="..."></div>
                                <div class="col-3 m- p-0 border"><img src="https://r-cf.bstatic.com/images/hotel/max1024x768/900/90068968.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/745/74529578.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/904/90480616.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                                <div class="col-3 m-0 p-0 border"><img src="https://q-cf.bstatic.com/images/hotel/max1024x768/905/90574561.jpg" class="room-result-thumb" alt="..." style="width: 100%; height: 100%;"></div>
                            </div>
                            </div>
                            <div class="col-md-8 pl-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-8">
                                        <h5 class="card-title my-0">Colombo Court Hotel & Spa</h5>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;"><i class="fas fa-map-marker-alt"></i> Colombo | <a href="#">View on map</a></p>

                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold">Standard Double Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.8rem;">1 full bed</div>
                                        
                                        <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold; color:green">FREE cancellation | No prepayment needed</div>
                                        <div class="card-text my-0 py-0 text muted" style="line-height:1rem; font-size: 0.7rem; color:green">Risk Free: You can cancel later, so lock in this great price today! </div>
                                    </div>

                                    <div class="col-4 p-1 text-right border border-top-0 border-right-0 border-bottom-0">
                                        <div class="media">
                                        <div class="media-body">
                                            <div class="mt-0 mb-1" style="line-height: 1rem; font-size: 1rem; color: rgb(97, 97, 248);">Excellent <br/><span style="font-size: 0.7rem; color: rgb(90, 90, 90); ">791 reviews</span> </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                                        </div>

                                        <div><button type="button" class="btn btn-danger my-3 py-0">Only 1 left</button></div>

                                        <div><small class="text-muted">1 night, 2 adults</small></div>

                                        <div><small class="text-muted"><del>LKR 10,597</del></small> <span style="font-weight:bolder; font-size:1.1rem">LKR 5,297</span></div>
                                        
                                        <div><a href="{{ url('/search-result/room') }}" class="btn btn-outline-primary my-3 py-1">Select your room</a></div>
                                    </div>


                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>



                        <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                        </nav>


                    </div>

            </div>

        </div>
    </div>
</section>









    
@endsection