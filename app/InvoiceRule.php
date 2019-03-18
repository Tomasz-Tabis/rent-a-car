<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceRule extends Model
{
    public function car(){
        return $this->hasOne(Car::class);
    }

    public function invoiceRule(){
        return $this->belongsTo(Invoice::class);
    }
}
