<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Verified;
use App\Models\BarangKeluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consumer extends Model
{
    use HasFactory;
    protected $table = 'consumers';
    protected $primaryKey = 'NIC';

    protected $fillable = [
        'NIC',
        'nama_lengkap',
        'alamat',
        'tanggal_lahir',
        'nomor_telephone',
        'gender_id',
        'verified_id',
    ];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function verified(){
        return $this->belongsTo(Verified::class);
    }

    public function barangkeluar(){
        return $this->hasMany(BarangKeluar::class);
    }
}
