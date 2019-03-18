<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceRule extends Model
{
    use SoftDeletes;

    public function car(){
        $this->hasOne(Car::class);
    }

    public function invoiceRule(){
        $this->belongsTo(Invoice::class);
    }
}
