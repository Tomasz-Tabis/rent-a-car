<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    public function invoiceRule(){
        return $this->hasMany(InvoiceRule::class );

    }
}
