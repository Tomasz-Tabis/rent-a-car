<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
