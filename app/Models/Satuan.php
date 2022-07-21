<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satuan extends Model
{
    use HasFactory;
    protected $table='satuans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_satuan',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
