@extends('layouts.master')

@section('content')


<section id="search-result">
    <div class="container">
        <div class="row">


            <!--=======================================================================
                                     Side Menu
            ==========================================================================-->


            <div class="col-3">

                <div class="card mt-3">
                <img src="https://r-cf.bstatic.com/images/hotel/max1024x768/344/34405073.jpg" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title my-0">Sugar Loft Apartments </h5>
                        <p class="card-text my-0 text-primary" style="font-size: 0.8rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </p>
                    <p class="card-text my-0 text-primary" style="font-size: 0.8rem;"><i class="fas fa-map-marker-alt"></i> Bambalapitiya , Colombo <br/> <a href="#">View on map</a></p>
                    
                    <div class="card-text mt-2 mb-0 py-0" style="font-size: 0.9rem; font-weight:bold">Standard Double Room - <i class="fas fa-user mr-1"></i><i class="fas fa-user"></i></div>

                    <div class="media my-1">
                        <button type="button" class="btn btn-primary btn-lg p-0 m-0 py-1 px-1 ml-1 align-self-right">9.1</button>
                        <div class="media-body ml-2">
                            <div class="mt-0 mb-1" style="line-height: 1rem; font-size: 1rem; color: rgb(97, 97, 248);">Excellent <br/><span style="font-size: 0.7rem; color: rgb(90, 90, 90); ">791 reviews</span> </div>
                        </div>
                    </div>

                </div>
                </div>

                <div class="card text-left p-0 my-2" style="font-size: .8rem">
                        <div class="card-header p-2">
                            <b>Your booking details</b>
                        </div>
                        <div class="card-body p-2">

                            <div class="my-1"><b>You selected</b></div>
                            Standard Double Room | 1 twin bed 

                            <div class="my-1"><b>Check-in</b></div>
                            <div>Tuesday, July, 7, 2020</div>  
                            
                            <div class="my-1"><b>Check-out</b></div>
                            <div>Wednesday, July, 8, 2020</div>

                            <div class="my-2"><b>No of nights</b> : 1</div>

                            <div class="my-2"><b>No of adults</b> : 2</div>

                            <div class="my-2"><b>No of children</b> : 0</div>

                            

                        </div>
                </div>

                <div class="card text-left p-0 my-2" style="font-size: .8rem">
                        <div class="card-body p-2">

                            <div class="my-1">
                                <div class="row no-gutters">
                                    <div class="col-6"><b>Total room rates</b></div> 
                                    <div class="col-2 text-center">LKR</div>
                                    <div class="col-4 text-right">5920.00</div>   
                                </div>    
                            </div> 

                            <div class="my-1">
                                <div class="row no-gutters">
                                    <div class="col-6"><b>Tax</b></div> 
                                    <div class="col-2 text-center">LKR</div>
                                    <div class="col-4 text-right">500.00</div>   
                                </div>    
                            </div> 
                            
                            <div class="my-1 p-0">
                                <div class="row no-gutters border border-left-0 border-right-0 py-1">
                                    <div class="col-6"><b>Total</b></div> 
                                    <div class="col-2 text-center">LKR</div>
                                    <div class="col-4 text-right">6420.00</div>   
                                </div>    
                            </div> 

                        </div>
                </div>
                    
            </div>


            

            <!--=======================================================================
                                     Booking Details
            ==========================================================================-->






            


            <div class="col-9 p-0 pt-3">
                    
                    <form class="needs-validation" method="POST" action="https://sandbox.payhere.lk/pay/checkout"  novalidate> 
                    <div class="container-fluid bg-white p-4">

                        <div class="col-12 p-0 my-2">
                            <h5 class="py-2" style="font-size: 1.5rem; font-weight:700">Guest Information</h5>
                            
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-2">
                                <label for="exampleFormControlSelect1">Title<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Ms.</option>
                                </select>
                            </div>
                            <div class="form-group col-5">
                                <label for="validationCustom01">First Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="first_name" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please enter your first name.
                                </div>
                    
                            </div>
                            <div class="form-group col-5">
                                <label for="validationCustom01">Last Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="last_name" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please enter your last name.
                                </div>
                            </div>
                             
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email<sup class="text-danger">*</sup></label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Email<sup class="text-danger">*</sup></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                
                        </div>
                        <div class="form-row">
                        <div class="form-group col-6">
                            <label for="exampleInputPassword1">Address<sup class="text-danger">*</sup></label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleInputPassword1">City<sup class="text-danger">*</sup></label>
                            <input type="text" name="city" class="form-control" id="exampleInputPassword1" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">Phone number<sup class="text-danger">*</sup></label>
                                <input type="password" name="phone" class="form-control" id="exampleInputPassword1" required>
                                <div class="invalid-feedback">
                                Please provide a valid email.
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Country<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="country" id="exampleFormControlSelect1">
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                <div class="invalid-feedback">
                                Please select a country.
                            </div>
                            </div>
                        </div>
                        
                        
                        

                    </div>


                    <div class="container-fluid bg-white p-4 my-2">
                    
                        <div class="col-12 p-0 my-2">
                            <h5 class="py-2" style="font-size: 1.5rem; font-weight:700">Let us know what you need</h5>
                        </div>

                        <div>Requests are fulfilled on a first come, first served basis. We'll send yours right after you book.</div>

                        <div class="form-group mt-3">
                            <label for="exampleFormControlTextarea1">Special requests</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                    </div>


                    <div class="container-fluid bg-white p-4 my-2">
                    
                        <div class="col-12 p-0 my-2">
                            <h5 class="py-2" style="font-size: 1.5rem; font-weight:700">Estimated time of arrival</h5>
                        </div>

                        <div>To ensure a warm welcome and a smooth check in, let your host know your expected time of arrival in advance. You can do that here or contact them directly using the details.</div>

                        <div class="form-inline my-3">
                            <label for="exampleInputPassword1"><b>Arrival time :</b> Thursday, 9 July 2020 </label>
                            <select class="form-control mx-2" id="exampleFormControlSelect1">
                                <option>I don't know</option>
                                <option>00:00</option>
                                <option>01:00</option>
                                <option>02:00</option>
                                <option>03:00</option>
                            </select>
                        </div>

                        <div class="text-right">
                            <input type="hidden" name="merchant_id" value="1214893">    <!-- Replace your Merchant ID -->
                            <input type="hidden" name="return_url" value="http://localhost/booking/BookingReturn.blade.php">
                            <input type="hidden" name="cancel_url" value="http://localhost/booking/BookingCancel.blade.php">
                            <input type="hidden" name="notify_url" value="http://localhost/booking/Notify.blade.php">  
                            <input type="hidden" name="order_id" value="RoomNo12345">
                            <input type="hidden" name="items" value="Standard Double Room"><br>
                            <input type="hidden" name="currency" value="LKR">
                            <input type="hidden" name="amount" value="6420"> 
                            <button type="submit" class="btn btn-primary my-5 px-5">Proceed to pay</button>
                        </div>
                        
                        
                    </div>
                    </form>

            </div>
            






        </div>
    </div>
</section>









    
@endsection