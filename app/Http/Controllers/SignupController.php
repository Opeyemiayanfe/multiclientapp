<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Merchant;
use App\Signup;

class SignupController extends Controller
{
    public function index()
    {
        if(Auth::guard('signup')->check())
        {
        $merch = Merchant::all('merchant_id');
        return view('Merchants.dashboard',compact('merch'));
        }
       {
           return redirect('/merchant');
       }
       
    }
    public function create(){
        return view('Merchants.signup');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:signups'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

           $pass = request('password');

           $pwdhash = password_hash($pass, PASSWORD_DEFAULT);

        $sign = new Signup();

        $sign->name = request('name');
        $sign->email = request('email');
        $sign->address = request('address');
        $sign->password = $pwdhash;

        $sign->save();

        Merchant::create(['merchant_id' => 0]);

        Auth::guard('signup')->login($sign, true);
        
        return redirect('/signup');
    }
    public function show($id)
    {
        
    }
}

