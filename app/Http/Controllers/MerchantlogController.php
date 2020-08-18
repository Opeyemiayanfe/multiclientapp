<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Signup;

class MerchantlogController extends Controller
{
    public function create()
    {
        return view('Merchants.merchantlog');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
            $req = request('email');
            $reqpass = request('password');
        $sign = Signup::where('email',$req)->get();
        $pass = Signup::where('email',$req)->value('password');
       
        if(count($sign)<1)
        {
            return redirect('/merchlogin/create')->with('emailerror','Email does not exist');
        }
        
        {
            $pwdchecked = password_verify($reqpass, $pass);

            if($pwdchecked == false)
            {
                return redirect('/merchlogin/create')->with('pwderror','Incorrect Password');
            }
            elseif($pwdchecked == true)
            {
                Auth::guard('signup')->attempt(request(['email', 'password']));
                return redirect('/signup');
            }
        }
        
    }
    public function destroy()
    {
        Auth::guard('signup')->logout();
        
        return redirect('/merchant');
    }
}
