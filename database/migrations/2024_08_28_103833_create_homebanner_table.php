<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomebannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homebanner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('main_title')->nullable();
            $table->string('des')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('alt')->nullable();
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
        Schema::dropIfExists('homebanner');
    }
}
