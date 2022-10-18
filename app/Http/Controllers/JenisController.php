<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
use App\Models\Barang;
class JenisController extends Controller
{
    public function index(){
        $jenis = Jenis::with('Barang');
        return view('barang',['jenis'=>$jenis]);
    }
}
