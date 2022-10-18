<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    use AutoNumberTrait;
    public function getAutoNumberOptions()
            {
                return [
                    'id_barang' => [
                        'format' => 'Brg?', // Format kode yang akan digunakan.
                        'length' => 4 // Jumlah digit yang akan digunakan sebagai nomor urut
                    ]
                ];
            }

    use HasFactory;
    protected $table='barang';
    protected $guarded = [];  
}
