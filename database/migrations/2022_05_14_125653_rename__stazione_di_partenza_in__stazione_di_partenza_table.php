<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameStazioneDiPartenzaInStazioneDiPartenzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table-> renameColumn("Stazione_di_partenza","StazioneDiPartenza");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table-> renameColumn("Stazione_di_partenza","StazioneDiPartenza");
        });
    }
}
