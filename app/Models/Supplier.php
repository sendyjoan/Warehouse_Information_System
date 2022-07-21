<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Compeny;
use App\Models\Verified;
use App\Models\BarangMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'NIS';

    protected $fillable = [
        'NIS',
        'nama_lengkap',
        'alamat',
        'tanggal_lahir',
        'nomor_telephone',
        'gender_id',
        'verified_id',
        'perusahaan_NIPS',
    ];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function verified(){
        return $this->belongsTo(Verified::class);
    }

    public function perusahaan(){
        return $this->belongsTo(Compeny::class);
    }

    public function barangmasuk(){
        return $this->hasMany(BarangMasuk::class);
    }
}
