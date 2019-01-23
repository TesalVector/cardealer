<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mohsentm\EnumValue;

class Car extends Model
{
    use EnumValue;

    public function basicPackage(){
        return $this->belongsToMany(Package::class);
    }

    public function extraPackage(){
        return $this->belongsToMany(Package::class,"car_extra_package");
    }
}
