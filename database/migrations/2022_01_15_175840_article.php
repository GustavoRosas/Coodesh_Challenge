<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('featured')->default(false);
            $table->string('title',150);
            $table->string('url', 150);
            $table->string('imageUrl', 150);
            $table->string('newsSite', 60);
            $table->string('summary', 500);
            $table->string('publishedAt', 30);
            $table->string('updatedAt', 30);
            $table->json('launches');
            $table->json('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
