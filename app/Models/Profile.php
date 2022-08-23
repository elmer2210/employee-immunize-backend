<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_born',
        'direction_home',
        'injection_estate',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public  function injection(){
        return $this->belongsTo(Injection::class);
    }
}
