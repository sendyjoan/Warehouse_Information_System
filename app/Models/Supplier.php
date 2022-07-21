<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
