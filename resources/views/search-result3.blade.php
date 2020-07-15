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
                        <form method="POST" action="{{ route('search') }}">
                            @csrf
                        <div class="form-group my-4">
                            <label for="cityOproperty">Destination/Property name :</label>
                            <input name="cityOproperty" type="text" class="form-control-sm w-100 border-0" id="cityOproperty" placeholder="{{ $cityOproperty }}" required>
                        </div>
                        <div class="form-group my-4">
                            <label for="checkIn">Check-in date :</label>
                            <input name="checkIn" type="date" class="form-control-sm w-100 border-0" id="checkIn" value="{{ $checkIn }}"  required>
                        </div>
                        <div class="form-group my-4">
                            <label for="checkOut">Check-out date :</label>
                            <input name="checkOut" type="date" class="form-control-sm w-100 border-0" id="checkOut" value="{{ $checkOut }}"  required>
                        </div>
                        <div class="form-group my-4">
                            <select class="custom-select custom-select-sm  col" name="adults" value="{{ $adults }}"  required>
                                <option value="1" {{ $adults==1 ? 'selected' : '' }}>1 adult</option>
                                <option value="2" {{ $adults==2 ? 'selected' : '' }}>2 adults</option>
                                <option value="3" {{ $adults==3 ? 'selected' : '' }}>3 adults</option>
                                <option value="4" {{ $adults==4 ? 'selected' : '' }}>4 adults</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <select class="custom-select custom-select-sm  col" name="children"  required>
                                <option value="0" {{ $children==0 ? 'selected' : '' }}>No children</option>
                                <option value="1" {{ $children==1 ? 'selected' : '' }}>1 child</option>
                                <option value="2" {{ $children==2 ? 'selected' : '' }}>2 children</option>
                                <option value="3" {{ $children==3 ? 'selected' : '' }}>3 children</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                    <select class="custom-select custom-select-sm col" name="rooms"  required>
                                    <option value="1" {{ $rooms==1 ? 'selected' : '' }}>1 room</option>
                                    <option value="2" {{ $rooms==2 ? 'selected' : '' }}>2 room</option>
                                    <option value="3" {{ $rooms==3 ? 'selected' : '' }}>3 room</option>
                                    <option value="4" {{ $rooms==4 ? 'selected' : '' }}>4 room</option>
                                    <option value="5" {{ $rooms==5 ? 'selected' : '' }}>5 room</option>
                                    <option value="6" {{ $rooms==6 ? 'selected' : '' }}>6 room</option>
                                    <option value="7" {{ $rooms==7 ? 'selected' : '' }}>7 room</option>
                                    <option value="8" {{ $rooms==8 ? 'selected' : '' }}>8 room</option>
                                    <option value="9" {{ $rooms==9 ? 'selected' : '' }}>9 room</option>
                                    <option value="10" {{ $rooms==10 ? 'selected' : '' }}>10 room</option>
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
                        <div class="heading">Colombo : {{ $resultCount }} properties found</div>
                    </div>

                    <div class="row ml-sm-1 justify-content-md-center">


                        @foreach ($properties as $property)
                            
                        

                        <div class="card mb-3 border-0">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            
                            <div class="row">
                                <a class="col-12 m-0 mb-1 p-0"><img src="{{ $property->propertyImg1 }}" class="card-img search-result-thumb-main" id="{{ $property->id }}" alt="..."></a>
                                <a class="col-3 m- p-0 border" onmouseover="document.getElementById('{{ $property->id }}').src = '{{ $property->propertyImg1 }}'"><img src="{{ $property->propertyImg1 }}" class="search-result-thumb" alt="..." ></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="document.getElementById('{{ $property->id }}').src = '{{ $property->propertyImg2 }}'"><img src="{{ $property->propertyImg2 }}" class="search-result-thumb" alt="..." ></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="document.getElementById('{{ $property->id }}').src = '{{ $property->propertyImg3 }}'"><img src="{{ $property->propertyImg3 }}" class="search-result-thumb" alt="..." ></a>
                                <a class="col-3 m-0 p-0 border" onmouseover="document.getElementById('{{ $property->id }}').src = '{{ $property->propertyImg4 }}'"><img src="{{ $property->propertyImg4 }}" class="search-result-thumb" alt="..." ></a>
                            </div>
                            </div>
                            <div class="col-md-8 pl-sm-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-8">
                                        <h5 class="card-title my-0">{{ $property->propertyName }} </h5>
                                        <p class="card-text my-0 text-primary search-result-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="card-text my-0 text-primary search-result-location"><i class="fas fa-map-marker-alt"></i> {{ $property->propertyCity }} | <a data-toggle="modal" data-target="#map{{ $property->id }}"><b>View on map</b></a></p>

                                        
                                        
                                            

                                                    <div class="card-text mt-2 mb-0 py-0 search-result-room-type"> 

                                                        {{ $property->roomType }} - 
                                                        @if(($property->roomCapacity)>4)
                                                            <i class="fas fa-user"></i> x {{ $property->roomCapacity }}
                                                        @else
                                                            @for($i=0 ; $i<$property->roomCapacity ; $i++)
                                                                <i class="fas fa-user"></i>
                                                            @endfor
                                                        @endif
                                                        
                                                
                                                    </div>
                                                    <div class="card-text my-0 py-0 text muted search-result-bed-type">
                                                        {{ $property->roomBedtype }}
                                                    </div>

                                                


                                               

                                        
                                        
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

                                       

                                                @if (($property->roomsAvailable)<5 && ($property->roomsAvailable)!=0)
                                                    <div><button type="button" class="btn btn-danger my-3 py-0">Only {{ $property->roomsAvailable }} left</button></div>
                                                @endif

                                                <div><small class="text-muted">1 night, 2 adults</small></div>

                                                <div><small class="text-muted"><del>LKR {{ $property->roomDPrice }}</del></small> <span class="search-result-price">LKR {{ $property->roomAPrice }}</span></div>

                                                @if(($property->roomsAvailable)>=1)
                                                    <div><a href="{{ route('room', [$property->id]) }}" class="btn btn-outline-primary btn-block my-3 py-1">Select your room</a></div>
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

                                        

                                                @if (($property->roomsAvailable)<5)
                                                <div class="float-right"><button type="button" class="btn btn-danger my-3 py-0">Only {{ $property->roomsAvailable }} left</button></div>
                                                @endif

                                                <div><small class="text-muted">1 night, 2 adults</small></div>

                                                <div><span class="search-result-price">LKR {{ $property->roomAPrice }}</span> <small class="text-muted"><del>LKR {{ $property->roomDPrice }}</del></small> </div>
                                        
                                                @if(($property->roomsAvailable)>=1)
                                                    <div class="text-right mx-4"><a href="{{ route('room', [$property->id]) }}" class="btn btn-outline-primary btn-block my-3 py-1">Select your room</a></div>
                                                @else
                                                    <div><button type="button" class="btn btn-block btn-outline-danger my-3 py-1"><i class="far fa-clock fa-4x"></i> <div>JUST MISSED IT!</div></button></div>
                                                @endif

                                            
                                    
                                    </div>

                                </div>
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>



<!-- Modal -->
<div class="modal w-100 fade" id="map{{ $property->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="{!! $property->propertyMap !!}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</div>





                        @endforeach



                        



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