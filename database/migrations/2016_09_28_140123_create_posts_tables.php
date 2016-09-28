<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $talbe->string('slug');
            $table->text('content')->nullable();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->json('tags')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $talbe->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
        Schema::drop('categories');
    }
}
