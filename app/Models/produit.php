<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $table='produits';
    protected $fillable=[
        'NomProd',
        'Categorie',
        'Quantnite',
        'Prix'
    ];
}
