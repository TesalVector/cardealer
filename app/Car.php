<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mohsentm\EnumValue;

class Car extends Model
{
    use EnumValue;

    public function package(){
        return $this->belongsToMany(Package::class);
    }
}
