<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function index(){
        $pengguna = Pengguna::all();
        return view('pengguna',compact(['pengguna']));
    }
    public function create(){
        return view('tambahpengguna');
    }
    public function storepengguna(request $request){
        //dd($request);
        Pengguna::create([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'akses'=>$request->akses
        ]);
        return redirect('pengguna');
    }
    public function editpengguna($id){
        $pengguna = Pengguna::find($id);
        return view('editpengguna',compact(['pengguna']));
    }
    public function update($id, request $request){
        $pengguna = Pengguna::find($id);
        $pengguna->update($request->except('_token','Edit'));
        return redirect('pengguna');
    }
    public function hapusPasien($id){
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect('pengguna');
}
}