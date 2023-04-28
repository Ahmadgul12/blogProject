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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('contents'); 
            $table->string('cover_image_path'); 
            $table->unsignedInteger('views')->default(0); 
            $table->foreignId('category_id')->constrained(); 
            $table->foreignId('author_id')->constrained(); 
            $table->boolean('is_public')->default(0); 
            $table->softDeletes(); 
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
        Schema::dropIfExists('articles');
    }
};
