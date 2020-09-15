<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(){
        Schema::create('wears', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('gender')->max(1);
            $table->text('color');
            $table->text('brand');
            $table->text('category');
            $table->text('type');
            $table->integer('price');

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
        Schema::dropIfExists('wears');
    }
}
