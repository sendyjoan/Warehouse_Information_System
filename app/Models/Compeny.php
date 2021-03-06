<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Verified;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compeny extends Model
{
    use HasFactory;
    protected $table = 'compenies';
    protected $primaryKey = 'NIPS';

    protected $fillable = [
        'NIPS',
        'nama_perusahaan',
        'alamat_perusahaan',
        'verified_id',
    ];

    public function verified(){
        return $this->belongsTo(Verified::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
}
