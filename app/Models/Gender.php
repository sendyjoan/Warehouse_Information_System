<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'genders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_gender',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
