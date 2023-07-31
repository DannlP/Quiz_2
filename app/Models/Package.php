<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $primaryKey = 'Codigo';
    public $incrementing = false;
    
    protected $fillable = [
        'Codigo',
        'Descripcion',
        'Destinatario',
        'Direccion',
    ];


    public function driver()
    {
        return $this->belongsTo(TruckDriver::class, 'Destinatario');
    }
}