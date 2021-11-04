<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();
            $table->string('titolo_viaggio');
            $table->string('durata');
            $table->string('prezzo');
            $table->string('data_di_partenza');
            $table->string('partecipanti');
            $table->string('descrizione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaggi');
    }
}
