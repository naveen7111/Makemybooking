@extends('layouts.master')

@section('content')

<div class="container ">

    <div class="row p-md-5 p-2 pt-4 justify-content-center">
        

            <div class="card col-md-5 mt-5">

                <div class="card-body">

                    <div class="heading">Sign in</div>
                    <div class="my-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" required autocomplete="current-password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </form>
                    </div>

                    <div class="text-muted text-center my-2"><small>or sign in with one click</small></div>
                    
                    <button type="button" class="btn btn-block btn-outline-danger m-1 p-2"><i class="fab fa-google"></i> Google</button>
                    <button type="button" class="btn btn-block btn-outline-primary m-1 p-2"><i class="fab fa-facebook-f"></i> Facebook</button>
                    <button type="button" class="btn btn-block btn-outline-secondary m-1 p-2"><i class="fab fa-apple"></i> Apple</button>
                    
                    <div class="my-2 text-center">Don't have an account yet? <a href="{{ route('register') }}"><span class="text-primary"><b>Sign up</b></span></a></div>

                </div>

            </div>


    </div>

    

</div>
    
@endsection