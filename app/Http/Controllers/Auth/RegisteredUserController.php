<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'day'=>['required', 'numeric'],
            'month'=>['required', 'numeric'],
            'year'=>['required', 'numeric'],
            
        ]);

        $birthday = strtotime($request->get('year') . '-' . $request->get('month') . '-' . $request->get('day'));
        $birthday= date('y-m-d', $birthday);

        $userinfo = array();
        $userinfo['fname'] = $request->get('fname');
        $userinfo['lname'] = $request->get('lname');
        $userinfo['email'] = $request->get('email');
        $userinfo['password'] = bcrypt($request->get('password'));
        $userinfo['sex'] = $request->get('sex')=='male'? 1 : 0 ;
        $userinfo['b_day'] = $birthday;


        $user = User::create($userinfo);

        Auth::loginUsingId($user->id);

        return redirect()->route('dashboard');
        // $user = User::insert($userinfo);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
