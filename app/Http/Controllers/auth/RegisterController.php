<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:255|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'terms'=>'required',
        ]);    

        User::create([
            'level_id'=> $request->level_id,
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect('/');
    }
}
