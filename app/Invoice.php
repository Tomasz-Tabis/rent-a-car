<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;
    public function invoice(){
        return $this->hasMany(InvoiceRule::class);
    }

    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    public function workers(){
        return $this->hasOne(Worker::class);
    }
}
