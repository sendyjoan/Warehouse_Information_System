<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    protected $primayKey = 'id';

    protected $fillable = [
        'id',
        'nama_jabatan',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
