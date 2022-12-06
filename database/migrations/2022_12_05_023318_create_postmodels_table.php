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
        Schema::create('postModels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();//글작성 시간
            $table->string('u_id',35)->unique();//유저id
            $table->string('title',250);//제목
            $table->text('content');//내용
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postModels');
    }
};
