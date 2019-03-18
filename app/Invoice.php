<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function invoice(){
        $this->hasMany(InvoiceRule::class);
    }

    public function customers(){
        $this->belongsTo(Customer::class);
    }

    public function workers(){
        $this->hasOne(Worker::class);
    }
}
