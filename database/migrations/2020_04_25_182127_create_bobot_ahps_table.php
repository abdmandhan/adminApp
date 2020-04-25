<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotAhpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_ahps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->unique();
            $table->decimal('criteria_1', 2, 2);
            $table->decimal('criteria_2', 2, 2);
            $table->decimal('criteria_3', 2, 2);
            $table->decimal('criteria_4', 2, 2);
            $table->decimal('criteria_5', 2, 2);
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
        Schema::dropIfExists('bobot_ahps');
    }
}
