<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public function Country() {
        return $this->hasOne(Country::class)
    }
}
