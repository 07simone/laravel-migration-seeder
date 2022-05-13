<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda',255);
            $table->string('Stazione di partenza',50);
            $table->string('Stazione di arrivo',50);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice treno',50);
            $table->string('Numero Carrozze',50);
            $table->boolean('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
