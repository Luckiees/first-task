<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PostModelLists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table->string('uid',35)->unique();
            $table->string('title',250);
            $table->integer('c_num');//카테고리 분류 넘버
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PostModelLists');
    }
};
