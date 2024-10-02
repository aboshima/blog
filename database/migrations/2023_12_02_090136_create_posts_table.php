<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('writer')->nullable();

            $table->string('title');
            $table->text('content');
            $table->string('lang', 2)->default('ar');
            $table->string('image')->nullable()->default('default_post.png');
            $table->boolean('is_active')->nullable()->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('view')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('shares')->default(0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
