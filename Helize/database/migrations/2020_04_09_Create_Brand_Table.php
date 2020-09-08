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
        Schema::create('Brand', function (Blueprint $table) {
            $table->bigIncrements('idBrand');
            $table->text('name');
            $table->timestamps();
            /*
             * Relation foring key and primary key
             * */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('Brand');
    }
}
