<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }
    public function actionregister(Request $request)
    {
        $validate = $request->validate([
            'nama_pengguna' => 'required',
            'username' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'pegawai_id' => 'required',
        ]);
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);
        return redirect()->route('login');
    }
}
