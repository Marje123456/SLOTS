<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'idc',
        'ident',
        'rut',
        'patent',
        'address',
        'email',
        'phone'
    ];
}
