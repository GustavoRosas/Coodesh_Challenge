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
            $table->string('title');
            $table->string('url');
            $table->string('imageUrl');
            $table->string('newsSite');
            $table->string('summary');
            $table->string('publishedAt');
            $table->string('updatedAt');
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
