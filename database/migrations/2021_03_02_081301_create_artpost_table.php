<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artpost', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->string('img');
            $table->string('title');
            $table->string('my_comment');
            $table->Integer('good_count');
            $table->Integer('view_count');
            $table->boolean('delete_flg');
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
        Schema::dropIfExists('artpost');
    }
}
