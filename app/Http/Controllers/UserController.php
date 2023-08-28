<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:5'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);
        
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message','User created and logged in');

    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out!');
    }
}
