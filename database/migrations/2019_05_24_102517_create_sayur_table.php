<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSayurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis');
            $table->string('nama');
            $table->integer('x1');
            $table->integer('y1');
            $table->integer('x2');
            $table->integer('y2');
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
        Schema::dropIfExists('sayur');
    }
}
