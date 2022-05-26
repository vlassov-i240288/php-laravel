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
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('Заголовок');
            $table->text('inform')->comment('Содержание новости');
            $table->string('image')->comment('Картинка новости');
//            $table->foreignId('category_id')
//                ->references('id')
//                ->on('categories')
//                ->cascadeOnDelete();
            $table->boolean('is_private')
                ->default(true)
                ->comment('Доступно ли содержание новости для неавторизованных');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
