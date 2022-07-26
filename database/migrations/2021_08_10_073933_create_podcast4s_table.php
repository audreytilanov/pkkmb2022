<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcast4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast4s', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('nogugus',255);
            $table->string('klpgugus',255);
            $table->string('jwb1',255);
            $table->string('jwb2',255);
            $table->string('jwb3',255);
            $table->string('jwb4',255);
            $table->string('jwb5',255);
            $table->string('jwb6',255);
            $table->string('totalsalah',255);
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
        Schema::dropIfExists('podcast4s');
    }
}
