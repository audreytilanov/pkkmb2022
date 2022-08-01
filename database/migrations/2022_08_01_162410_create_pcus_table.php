<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcus', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan',255);
            $table->string('a',255);
            $table->string('b',255);
            $table->string('c',255);
            $table->string('d',255);
            $table->string('e',255);
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
        Schema::dropIfExists('pcus');
    }
}
