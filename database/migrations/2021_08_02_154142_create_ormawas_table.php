<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrmawasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ormawas', function (Blueprint $table) {
            $table->id();
            $table->string('slug',255);
            $table->tinyInteger('jenis_ormawa');
            $table->string('nama', 100);
            $table->string('singkatan', 50)->nullable();
            $table->text('keterangan');
            $table->text('programstudi')->nullable();
            $table->text('contact');
            $table->string('logo', 50)->nullablable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ormawas');
    }
}
