<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table="provinces";

    public function districts(){
        return $this->hasMany(District::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
