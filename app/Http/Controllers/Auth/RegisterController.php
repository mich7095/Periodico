<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;

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
  protected $redirectTo = '/home';

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
      'name' => 'required|string|max:255',
      'username' => 'required|string|max:255|unique:users',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return User
  */
  protected function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'username' => $data['username'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
      'avatar' => 'http:lorempixel/300/300/people?'.random_int(1, 1000),
      'email_token' => base64_encode($data['email'])
      //I have used the base64 encoding for the user’s email address
    ]);
  }
  /**
  * Handle a registration request for the application.
  *
  * @param \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function register(Request $request)
  {
    $this->validator($request->all())->validate();
    event(new Registered($user = $this->create($request->all() )));
    dispatch(new SendVerificationEmail($user));
    return view('verification');
  }
  /**
  * Handle a registration request for the application.
  *
  * @param $token
  * @return \Illuminate\Http\Response
  */
  public function verify($token)
  {
    $user = User::where('email_token',$token)->first();
    $user->verified = 1;
    if($user->save()){
      return view('emailconfirm',['user' => $user]);
    }
  }
}
