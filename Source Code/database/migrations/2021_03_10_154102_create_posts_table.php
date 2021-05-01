<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('cat_name');
            $table ->string('sub_name');
            $table ->string('autherid');
            $table ->string('name');
            $table ->string('email');
            $table ->string('last_seen')->nullable();
            $table ->string('user_image')->nullable();
            $table->string('post_title');
            $table->longText('post_desc');
            $table->string('post_mobile')->nullable();
            $table->string('post_image');
            $table->string('post_price')->nullable();
            $table->string('post_location');
            $table->timestamp('publish_time')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
