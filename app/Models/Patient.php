<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'address',
        'description',
        'user_id',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
