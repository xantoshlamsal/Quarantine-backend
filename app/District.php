<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class District extends Model
{
    protected $table="districts";

    public function province(){
        return $this->belongsTo(Project::class);
    }

}
