<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function logout() {
        Session::flush();
        return redirect('/login');
    }

    public function check (Request $request) {
        $data = User::where('username',$request->username)->where('password',$request->password)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data);
            $request->session()->put('role', User::find($data->id)->first());
            return redirect('/masyarakat/beranda-masyarakat');
        }
           else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;

        $cekData = User::where('username', $request->username)->exists();

        if ($cekData) {
            return redirect('login')->with('gagal', 'Username Suidah Ada Yang Menggunakan, Tolong Gunakan Nama Lain');
        }
        if ($password !== $password) {
            return redirect('login');
        } else {
            $user = new User();
            $user->nama = $nama;
            $user->username = $username;
            $user->password = $password;
            $user->telp = $telp;
            $user->role_id = '3';

            $user->save();

            $request->session()->put('logged_in', true);
            $data = User::where('username', $request->username);
            $request->session()->put('user', $data->first());

            return redirect('/masyarakat/beranda-masyarakat');
        }
    }
    public function dashboard(){
        $user = Session::get('user');
        $report = User::find($user->id)->pengaduans()->get();
        return view('masyarakat.beranda-masyarakat', compact('user', 'report'));
    }

    public function profile(){
        $user = Session::get('user');
        return view('masyarakat.profile', compact('user'));
    }

    public function complaint(){
        $user = Session::get('user');
        return view('masyarakat.complaint', compact('user'));
    }
}
