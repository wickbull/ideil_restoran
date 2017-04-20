<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('product');
<<<<<<< HEAD
            $table->string('photo');
=======
            $table->string('weight');
            $table->string('price_uah');
            $table->string('price_usd');
            $table->string('photo');
            
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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
        Schema::dropIfExists('foods');
    }
}
