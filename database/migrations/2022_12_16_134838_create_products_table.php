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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('name');
            $table->text('content');
            $table->foreignId('image1')
            ->constrained('images');
            $table->foreignId('image2')
            ->nullable()
            ->constrained('images');
            $table->foreignId('image3')
            ->nullable()
            ->constrained('images');
            $table->foreignId('image4')
            ->nullable()
            ->constrained('images');
            $table->integer('state');
            $table->unsignedInteger('price');
            $table->boolean('is_selling');
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
        Schema::dropIfExists('products');
    }
};
