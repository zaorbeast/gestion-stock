<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sortie extends Model
{
    use HasFactory;
    protected $table='sorties';
    protected $fillable=[
        'Quantite',
        'Prix',
        'idprod'
    ];
}
