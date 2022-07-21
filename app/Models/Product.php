<?php

namespace App\Models;

use App\Models\Satuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'barcode';

    protected $fillable = [
        'barcode',
        'nama_product',
        'perusahaan_NIPS',
        'satuan_id',
    ];

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }
}
