<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class CustomAuthController extends Controller
{
    public function showRegisterForm(){
        return view('admin.register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/')->with('Status','you are register');
    }

    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/');

        }
        return "Somethings wrong";
    }

    public function validation($request){
       return $this->validate($request, [
           'name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
           'lastname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|min:6|confirmed',
        ]);
    }
}
