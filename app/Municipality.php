<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
   protected $table="municipalities";

   protected $guarded=[];

   public function district(){
       return $this->belongsTo(District::class);
   }

}
