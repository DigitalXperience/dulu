<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'PARENT_ID',
        'USER_ID',
        'PRODUCT_QUANTITY',
        'USER_TELEPHONE',
        'PRODUCT_NAME',
        'PRODUCT_PRICE',
        'DILIVARY_STATUS',
        'CREATION_DATE',
    ];
}
