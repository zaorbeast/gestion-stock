<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entre extends Model
{
    use HasFactory;
    protected $table='entres';
    protected $fillable=[
        'id',
        'Quantinte',
        'idprod'
    ];
}
