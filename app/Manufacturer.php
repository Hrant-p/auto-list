<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function cars()
    {
        $this->hasMany(Car::class);
    }
}
