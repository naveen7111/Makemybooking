@extends('layouts.master')

@section('content')

<div class="container ">

    <div class="row p-md-5 p-2 pt-4 justify-content-center">
        

            <div class="card col-12 mt-5">

                <div class="card-body">






                    <form action="{{ route('register') }}" method="POST"> 
                    @csrf
                        <div class="container-fluid bg-white p-4">

                        <div class="col-12 p-0 my-2">
                            <h5 class="py-2" style="font-size: 1.5rem; font-weight:700">User Information</h5>
                            
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-2">
                                <label for="exampleFormControlSelect1">Title<sup class="text-danger">*</sup></label>
                                <select class="form-control" id="exampleFormControlSelect1" name="userTitle">
                                <option value="Mr.">Mr.</option>
                                <option value="Mr.">Mrs.</option>
                                <option value="Mr.">Ms.</option>
                                </select>
                            </div>
                            <div class="form-group col-5">
                                <label for="validationCustom01">First Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="userFname" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please enter your first name.
                                </div>
                    
                            </div>
                            <div class="form-group col-5">
                                <label for="validationCustom01">Last Name<sup class="text-danger">*</sup></label>
                                <input type="text" name="userLname" class="form-control" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Please enter your last name.
                                </div>
                            </div>
                             
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Password<sup class="text-danger">*</sup></label>
                                <input type="password" name="userPw" class="form-control" id="exampleInputEmail1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                    
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Confirm Password<sup class="text-danger">*</sup></label>
                                <input type="password" name="userCpw" class="form-control" id="exampleInputEmail1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                    
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-group my-4 col-12">
                                    <div class="input-group-prepend">
                                        <select class="form-control" id="exampleFormControlSelect1" name="userPidType">
                                        <option value="nic">NIC</option>
                                        <option value="dlNo">DL</option>
                                        <option value="ppNo">Passport</option>
                                        </select>
                                    </div>
                                <input type="text" name="userPid" class="form-control" id="exampleInputPassword1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">Phone number<sup class="text-danger">*</sup></label>
                                <input type="password" name="userPhone" class="form-control" id="exampleInputPassword1" required>
                                <div class="invalid-feedback">
                                Please provide a valid email.
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">Address<sup class="text-danger">*</sup></label>
                                <input type="text" name="userAddress" class="form-control" id="exampleInputPassword1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">City<sup class="text-danger">*</sup></label>
                                <input type="text" name="userCity" class="form-control" id="exampleInputPassword1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Country<sup class="text-danger">*</sup></label>
                                <select class="form-control" name="userCountry" id="exampleFormControlSelect1">
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

                        <div class="form-group my-3">
                            <input type="hidden" name="email" value="{{ $userEmail }}">
                            <button href="" type="submit" class="btn btn-primary btn-block">Create account</button>
                        </div>
                        
                        
                        

                    </div>
                    </form>


                    


                    
                    
                        
                        
                        
                        
                    </div>
                    </form>





                    




                </div>

            </div>


    </div>

    

</div>
    
@endsection