<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name'); // Tour name
            $table->text('description'); // Tour description
            $table->decimal('price', 10, 2); // Tour price
            $table->string('image'); // Image path or URL
            $table->integer('tour_id')->default(0); // You can use 0 or null as the default value


            // Foreign key to link the tour to a user (assuming a user_id column)
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
