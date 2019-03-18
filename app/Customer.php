<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    Use SoftDeletes;

    public function invoices(){
        $this->hasMany(Invoice::class);
    }
}
