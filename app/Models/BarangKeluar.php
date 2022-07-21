<?php

namespace App\Models;

use App\Models\Consumer;
use App\Models\Verified;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'barangkeluar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'dokumen_pendukung',
        'verified_id',
        'consumer_NIC',
    ];

    public function verified(){
        return $this->belongsTo(Verified::class);
    }

    public function consumer(){
        return $this->belongsTo(Consumer::class);
    }
}
