<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanitiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panitias', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 50)->nullablable();
            $table->text('nama')->nullable();
            $table->string('jabatan', 50)->nullablable();
            $table->string('photo', 50)->nullablable();
            $table->string('divisi', 50)->nullablable();
            $table->string('contact', 225)->nullablable();
            $table->text('anggota')->nullablable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panitias');
    }
}
