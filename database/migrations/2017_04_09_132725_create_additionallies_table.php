<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionallies', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
            $table->string('weight');
            $table->string('product');
            $table->string('price_uah');
            $table->string('price_usd');
            $table->string('info');
            $table->string('photo');
            $table->string('path300х200');
            $table->string('path700х400');
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
        Schema::dropIfExists('additionallies');
    }
}
