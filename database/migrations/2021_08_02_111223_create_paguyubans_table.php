<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaguyubansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paguyubans', function (Blueprint $table) {
            $table->id();
            $table->string('slug',255);
            $table->string('nama', 100);
            $table->text('keterangan');
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
        Schema::dropIfExists('paguyubans');
    }
}
