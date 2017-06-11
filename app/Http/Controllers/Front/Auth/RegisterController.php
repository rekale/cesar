<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
    protected $redirectTo = '/';

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
            'sex' => ['required', Rule::in(['pria', 'wanita'])],
            'birthday' => 'required|date',
            'nik' => 'required|digits:16',
            'address' => 'required',
            'city' => 'required|max:255',
            'pos_code' => 'required|digits:5',
            'phone' => 'required',
            'no_rek' => 'required',
            'name_rek' => 'required|max:255',
            'password' => 'required|string|min:6|confirmed',
            'terms' => 'required',
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
            'sex' => $data['sex'],
            'birthday' => $data['birthday'],
            'nik' => $data['nik'],
            'address' => $data['address'],
            'city' => $data['city'],
            'pos_code' => $data['pos_code'],
            'phone' => $data['phone'],
            'no_rek' => $data['no_rek'],
            'name_rek' => $data['name_rek'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('front.auth.register');
    }

    protected function registered(Request $request, $user)
    {
        $name = $user['name'];
        flash("Your account has been registered, welcome {$name} !")->success();

        return redirect()->route('front.home');
    }
}
