<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'fax',
        'address',
        'meta_keywords',
        'meta_des',
        'image'
    ];

    public function medicines(){
        return $this->belongsToMany(Medicine::class , 'medicines_pharmacies');
    }

}
