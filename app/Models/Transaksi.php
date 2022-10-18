<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';
    protected $guarded = [];  
}
