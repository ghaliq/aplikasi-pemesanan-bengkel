<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest:pegawai')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function guard()
    {
        return Auth::guard('pegawai');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'nama_pegawai' => 'required|string',
            'id_pegawai' => 'required|numeric',
        ]);

        $credentials = [
            'nama_pegawai' => $request->input('nama_pegawai'),
            'id_pegawai' => $request->input('id_pegawai')
        ];

        if (Auth::guard('pegawai')->attempt($credentials)) {
            return redirect()->intended($this->redirectTo);
        }

        return redirect()->back()->withInput($request->only('nama_pegawai'))->withErrors([
            'nama_pegawai' => 'These credentials do not match our records.',
        ]);
    }
}
