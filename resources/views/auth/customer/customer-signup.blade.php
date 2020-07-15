@extends('layouts.master')

@section('content')

<div class="container ">

    <div class="row p-md-5 p-2 pt-4 justify-content-center">
        

            <div class="card col-md-5 mt-5">

                <div class="card-body">

                    <div class="heading">Sign up</div>
                    <div class="my-3">
                        <form method="post" action="{{ route('register-details') }}">
                            @csrf
                        <div class="form-group">
                            <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button href="" type="submit" class="btn btn-primary btn-block">Get started</button>
                        </form>
                    </div>

                    <div class="text-muted text-center my-2"><small>or sign in with one click</small></div>
                    
                    <button type="button" class="btn btn-block btn-outline-danger m-1 p-2"><i class="fab fa-google"></i> Google</button>
                    <button type="button" class="btn btn-block btn-outline-primary m-1 p-2"><i class="fab fa-facebook-f"></i> Facebook</button>
                    <button type="button" class="btn btn-block btn-outline-secondary m-1 p-2"><i class="fab fa-apple"></i> Apple</button>
                    
                    <div class="my-2 text-center">Already have an account? <a href="{{ route('login') }}"><span class="text-primary"><b>Sign in</b></span></a></div>

                </div>

            </div>


    </div>

    

</div>
    
@endsection