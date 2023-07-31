<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $primaryKey = 'Matricula';
    public $incrementing = false;

    protected $fillable = [
        'Matricula',
        'Potencia',
        'Modelo',
        'Tipo',
    ];

    public function drivers()
    {
        return $this->belongsToMany(TruckDriver::class, 'conduce', 'truck_id', 'driver_id');
    }
}