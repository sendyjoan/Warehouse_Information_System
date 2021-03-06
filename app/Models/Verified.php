<?php

namespace App\Models;

use App\Models\Compeny;
use App\Models\Consumer;
use App\Models\Supplier;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Verified extends Model
{
    use HasFactory;
    protected $table = 'verifieds';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_verified',
    ];

    public function compeny(){
        return $this->hasMany(Compeny::class);
    }

    public function consumer(){
        return $this->hasMany(Consumer::class);
    }

    public function supplier(){
        return $this->hasMany(Supplier::class);
    }

    public function barangkeluar(){
        return $this->hasMany(BarangKeluar::class);
    }

    public function barangmasukr(){
        return $this->hasMany(BarangMasuk::class);
    }
}
