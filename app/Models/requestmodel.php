<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestmodel extends Model
{ protected $table=requests;

    protected $fillable = [
        'name',
        'address',
        'contact',
        'payment_mode',
        'district',
        'product_type',
        'quantity',
        'unit',
        'latitude',
        'longitude',
    ];
    use HasFactory;
}
