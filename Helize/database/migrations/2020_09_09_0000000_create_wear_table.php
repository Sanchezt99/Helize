<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Brand;

class CreateWearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(){
        Schema::create('wear', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('gender');
            $table->text('color');
            $table->text('brand');
            $table->text('category');
            $table->text('type');
            $table->foreignId('idBrand')->constrained();

            $table->timestamps();
        });
    }
    public function brand(){
        return $this->hasOne(Brand::class);
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
}
