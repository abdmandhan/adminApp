<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerankinganAhpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perankingan_ahps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->unique();
            $table->decimal('nilai', 2, 2);
            $table->foreignId('predikat_id');
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
        Schema::dropIfExists('perankingan_ahps');
    }
}
