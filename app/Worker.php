<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;

    public function invoice(){
        return $this->belongsToMany(Invoice::class);
    }
}
