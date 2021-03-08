<?php

namespace App\Http\Controllers;

use App\User;
use App\SettingRole;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        $user = Session::get('user');
        $report = User::find($user->id)->tanggapans('users', 'pengaduan')->get();
        return view('admin.home', compact('user', 'report'));
    }

    public function usersetting(){
        $user = Session::get('user');

        $roleset = SettingRole::all();

        $petugas = User::where('role_id' , '2')->get();
        $masyarakat = User::where('role_id' , '3')->get();
        $banned = User::where('role_id' , '4')->get();
        
        $pengguna = User::all();
        return view('admin.user-setting', compact('pengguna', 'user', 'roleset', 'petugas', 'masyarakat', 'banned'));
    }

    public function rolesort(Request $request, $id){
        SettingRole::where('id', $id)->update([
            'role_sort' => $request->role_sort,
        ]);
        return redirect()->action('AdminController@usersetting');
    }
}
