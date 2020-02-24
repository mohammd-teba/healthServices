<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name',
        'cost'
    ];

    public function pharmacies(){
        return $this->belongsToMany(Pharmacy::class , 'medicines_pharmacies');
    }
}
