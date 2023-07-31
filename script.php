<?php

use App\TruckDriver;
use App\Truck;
use App\Package;
use App\Province;

// Cargar el entorno de Laravel
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

// Crear un TruckDriver y asignarle un camión
$driver = new TruckDriver([
    'Dni' => '12345678A',
    'Poblacion' => 'Ciudad X',
    'Nombre' => 'Juan Perez',
    'tfno' => '555-1234',
    'Direccion' => 'Calle Principal 123',
    'Salario' => 2500.00,
]);
$driver->save();

$truck = new Truck([
    'Matricula' => 'AB1234',
    'Potencia' => '200hp',
    'Modelo' => 'Modelo A',
    'Tipo' => 'Carga',
]);
$truck->save();

// Asignar al camión al conductor
$driver->trucks()->attach($truck->Matricula);

// Verificar los camiones asignados al conductor
$driver->trucks;

// Crear un paquete y asignarlo a un conductor
$package = new Package([
    'Codigo' => 'PKG001',
    'Descripcion' => 'Paquete de prueba',
    'Destinatario' => $driver->Dni,
    'Direccion' => 'Calle Destino 456',
]);
$package->save();

// Verificar los paquetes asignados al conductor
$driver->packages;

// Crear una provincia
$province = new Province([
    'Codigo' => 'P001',
    'nombre' => 'Provincia X',
]);
$province->save();

// Obtener todos los conductores que pertenecen a una provincia
$driversInProvince = TruckDriver::where('Poblacion', 'Ciudad X')->get();

// Obtener el conductor de un paquete
$package->driver;

echo "Operaciones realizadas correctamente.\n";
