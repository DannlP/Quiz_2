<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckDriversTable extends Migration
{
    public function up()
    {
        Schema::create('truck_drivers', function (Blueprint $table) {
            $table->string('Dni')->primary();
            $table->string('Poblacion')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('tfno')->nullable();
            $table->string('Direccion')->nullable();
            $table->decimal('Salario', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('truck_drivers');
    }
}
