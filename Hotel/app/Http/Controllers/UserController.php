<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class UserController extends Controller
{
   
    public function loginSignUp() {

        return view('login_sign-up');
    }

    public function register(Request $req) {

        // return view('login_sign-up');
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        // Kiểm tra xem có lỗi không
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $req->merge(['password'=>Hash::make($req->password)]);
        try {
            User::create($req->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('login_sign-up');
    }
    public function login(Request $req) { 
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Incorrect username or password');
    }
<<<<<<< HEAD
    
=======
    public function logout() { 
        Auth::logout();
        return redirect()->back();
    }
>>>>>>> f6b8ce1ca37e5837fb923e470fe168ecb8baf9ee
    
}



