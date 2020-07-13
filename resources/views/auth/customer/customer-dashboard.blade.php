@extends('layouts.user-layout')

@section('content')

<section id="user-dashboard">
    <div class="container">
        <div class="row">


            <!--=======================================================================
                                     Side Menu
            ==========================================================================-->


            <div class="col-md-3">

                <div class="row px-md-2">

                    <ul class="list-group w-100 mb-2">
                        <router-link to="/user-home">
                        <li class="list-group-item">Home</li>
                        </router-link>

                        <router-link to="/user-bookings">
                        <li class="list-group-item">Bookings</li>
                        </router-link>

                        <router-link to="/user-reviews">
                        <li class="list-group-item">Reviews</li>
                        </router-link>

                        
                        <router-link to="/user-likes">
                        <li class="list-group-item">Likes</li>
                        </router-link>

                        
                        <router-link to="/user-profile">
                        <li class="list-group-item">Profile</li>
                        </router-link>

                    </ul>


                    <div class="col-12 py-3 mb-2 bg-dark text-light">
                        <form>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Destination/Property name :</label>
                            <input type="email" class="form-control-sm w-100 border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Colombo">
                        </div>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Check-in date :</label>
                            <input type="email" class="form-control-sm w-100 border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Monday, July, 6, 2020">
                        </div>
                        <div class="form-group my-4">
                            <label for="exampleInputEmail1">Check-out date :</label>
                            <input type="email" class="form-control-sm w-100 border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Monday, July, 7, 2020">
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

                

                

                
                    
            </div>


            

            <!--=======================================================================
                                     Booking Details
            ==========================================================================-->






            


            <div class="col-9 p-0 desktop">
                    
                    
                    <router-view></router-view>


                    

                    


                    

            </div>
            






        </div>
    </div>
</section>


@endsection