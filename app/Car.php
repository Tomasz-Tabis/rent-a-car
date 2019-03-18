<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function invoiceRule(){
        return $this->hasMany(InvoiceRule::class );

    }
}
