<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'address',
        'specialization',
        'workplace',
        'experience',
        'user_id',
        'image',
    ];

     public function user(){
         return $this->belongsTo(User::class , 'user_id');
     }
}
