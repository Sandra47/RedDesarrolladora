<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
             $table->text('extract');
            $table->string('image');

            $table->longText('body');

            $table->unsignedBigInteger('category_id');
            
            $table->enum('status', ['Borrador', 'Publicar'])->default('Borrador');

            $table->unsignedBigInteger('user_id');
            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//ondelete si elimane un usuario quiero se eliminen todo los post de este usuario 

            
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
