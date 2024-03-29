<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("link")->nullable();
            $table->string("rating")->nullable();
            $table->string("duration")->nullable();
            $table->string("category_id")->nullable();
            $table->string("description")->nullable();
            $table->string("release_date")->nullable();
            $table->string("tranding")->nullable();
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
        Schema::dropIfExists('movies');
    }
}
