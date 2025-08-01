<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descrizione',
        'prezzo',
    ];

    protected $table = 'prodotti';
} 