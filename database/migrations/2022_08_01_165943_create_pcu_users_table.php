<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcuUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcu_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('gugus',255);
            $table->string('nourut',255);
            $table->string('fakultas',255);
            $table->string('angkatan',255);
            $table->string('jwb1',255);
            $table->string('jwb2',255);
            $table->string('jwb3',255);
            $table->string('jwb4',255);
            $table->string('jwb5',255);
            $table->string('jwb6',255);
            $table->string('jwb7',255);
            $table->string('jwb8',255);
            $table->string('jwb9',255);
            $table->string('jwb10',255);
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
        Schema::dropIfExists('pcu_users');
    }
}
