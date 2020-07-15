<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'userFname' => $data['name'],
            'email' => $data['email'],
            'userTitle' => $data['userTitle'],
            'userFname' => $data['userFname'],
            'userLname' => $data['userLname'],
            'userPid' => $data['userPid'],
            'userPhone' => $data['userPhone'],
            'userAddress' => $data['userAddress'],
            'userCity' => $data['userCity'],
            'userCountry' => $data['userCountry'],
            'userAvatar' => $data['userAvatar'],
            'userPidType' => $data['userPidType'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function details(Request $request){

        $userEmail = $request->userEmail;
        return view('auth.customer.customer-signup-details')->with('userEmail', $userEmail);

    }





}
