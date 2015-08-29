<?php

namespace App\Http\Controllers\Auth;
use Mail;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'telephone' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
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
        $user=new User;
        $user->name= $data['name'];
        $user->password= bcrypt($data['password']);
        $user->email= $data['email'];
        $user->remember_token= $data['_token'];
        $user->admin = "0";
        $user->key_active = "0";
        Mail::send('emails.register_success', array('name'=>$data['name'], 'token'=>$data['_token'],'email'=>$data['email']), function($message) use ($data){
            $message->from('dinhphu94@gmail.com', 'GFashionShop');
            $message->to($data['email'], $data['name'])->subject('Welcome to GFashion Shop!');
        });

        $user->save();
        return $user;
    }
}
