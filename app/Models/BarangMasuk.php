<?php

namespace App\Models;

use App\Models\Supplier;
use App\Models\Verified;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'barangmasuk';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'dokumen_pendukung',
        'verified_id',
        'supplier_NIS',
    ];

    public function verified(){
        return $this->belongsTo(Verified::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
