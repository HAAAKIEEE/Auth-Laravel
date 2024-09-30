<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect("dashboard")->with("success", "Sukses Login");
        } else {
            return redirect("login")->with("error", "Gagal Login");
        }
    }
    public function register()
    {
        return view("auth.register");
    }
    public function register_user(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Hash password before saving to the database
        $data['password'] = bcrypt($data['password']);

        // Correct way to use create()
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        return redirect('dashboard')->with('success', 'berhasil');
    }

    public function logout(Request $request) {
        Auth::logout(); // Logout user
        
        // Hapus session dan regenerasi untuk keamanan
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
  
    }
}
