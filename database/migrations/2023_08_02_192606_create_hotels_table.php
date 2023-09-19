<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
{
    Schema::create('hotels', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('star_rating');
        $table->text('description');
        $table->decimal('price', 10, 2);
        // Add other columns as needed
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}