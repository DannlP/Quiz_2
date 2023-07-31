<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConduceTable extends Migration
{
    public function up()
    {
        Schema::create('conduce', function (Blueprint $table) {
            $table->unsignedBigInteger('driver_id');
            $table->string('truck_id');

            $table->foreign('driver_id')->references('Dni')->on('truck_drivers');
            $table->foreign('truck_id')->references('Matricula')->on('trucks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conduce');
    }
}
