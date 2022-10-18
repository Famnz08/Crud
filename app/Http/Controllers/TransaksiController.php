<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use DB;
class TransaksiController extends Controller
{
    public function index(){
        //$transaksi = Transaksi::all();


        //mengambil data dari database menggunakan db::table() dan disimpan ke dalam $transaksi
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array
    
        //diakhir first() jika hanya satu data yang diambil
    
        $transaksi = DB::table('transaksi')
                ->select('transaksi.*','pengguna.username','pengguna.nama')        
                ->join('pengguna', 'pengguna.id', '=', 'transaksi.id')
                ->get();
    
            //tampilkan view transaksi dan kirim datanya ke view tersebut
        return view('transaksi',compact(['transaksi']));
    }
    public function create(){
        $transaksi = DB::table('transaksi')
        ->get();

        return view('tambahtransaksi',compact(['transaksi']));
    }
    public function store(request $request){
        $transaksi = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'tgl_trx' => $request->tgl_trx,
            'id_user' => $request->id_user,
            'total_bayar' => $request->total_bayar,
            'bayar'=>$request->bayar
        ]);
        echo $transaksi->id_transaksi;

        return redirect('transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('edittransaksi',compact(['transaksi']));
    }
    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('_token','Edit'));
        return redirect('transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('transaksi');
    }
}
