<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userliste extends Model
{
    use HasFactory;
    protected $fillable = [
        'NAME',
        'SURNAME',
        'TELEPHONE',
        'EMAIL',
    ];
}
