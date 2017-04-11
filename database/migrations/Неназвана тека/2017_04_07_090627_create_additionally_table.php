<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionallyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionallys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('additionally');
            $table->string('parent_id');
            $table->softDeletes();
            $table->timestamps(); //допилити
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additionallys');
    }
}
