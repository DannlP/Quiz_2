<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'Codigo';
    public $incrementing = false;

    protected $fillable = [
        'Codigo',
        'nombre',
    ];

}