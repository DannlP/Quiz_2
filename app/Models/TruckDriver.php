<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TruckDriver extends Model
{
    protected $primaryKey = 'Dni';
    public $incrementing = false;
    
    protected $fillable = [
        'Dni',
        'Poblacion',
        'Nombre',
        'tfno',
        'Direccion',
        'Salario',
    ];
    
    public function trucks()
    {
        return $this->belongsToMany(Truck::class, 'conduce', 'driver_id', 'truck_id');
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'Destinatario');
    }
}

