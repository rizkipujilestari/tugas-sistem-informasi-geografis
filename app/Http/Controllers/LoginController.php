<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ],[
            'email.required'    => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',
        ]);

        $authInfo = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if (Auth::attempt($authInfo)) 
        {
            if (Auth::user()->role == 'admin') {
                return redirect('admin/dashboard');
            } else { 
                return redirect('member');
            }
        } 
        else {
            return redirect('login')->withErrors('Username dan Password tidak sesuai!')->withInput();
        }

    }

    public function logout() 
    {
        Auth::logout();
        return redirect('/');
    }
}
