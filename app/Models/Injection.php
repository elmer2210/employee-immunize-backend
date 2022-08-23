<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injection extends Model
{
    use HasFactory;
    protected $fillable = [
        'injection_type',
        'injectiondate',
        'dosis',
    ];

    public function profile(){
        return $this->hasMany(Profile::class);
    }
}
