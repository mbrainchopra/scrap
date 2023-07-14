<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accept extends Model
{
    protected $fillable = [
        'demail',
        'name',
        'address',
        'contact',
        'product_type',
        'quantity',
        'price',
        'status',
        'pstatus',
        'lang',
        'latt',
    ];


    use HasFactory;
}
