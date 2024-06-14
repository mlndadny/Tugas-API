<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieappTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentalps_580', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->string('jenis_ps', 50);
            $table->string('tanggal_sewa', 10);
            $table->string('poster', 300);
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
        Schema::dropIfExists('rentalps_580');
    }
}
