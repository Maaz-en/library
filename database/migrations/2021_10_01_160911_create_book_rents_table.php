<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('u_id');
            $table->bigInteger('b_id');
            $table->timestamp('issued_on')->nullable();
            $table->timestamp('returned_on')->nullable();
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
        Schema::dropIfExists('book_rents');
    }
}
