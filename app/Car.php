<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function invoiceRule(){
        $this->hasMany(InvoiceRule::class );
    }
}
