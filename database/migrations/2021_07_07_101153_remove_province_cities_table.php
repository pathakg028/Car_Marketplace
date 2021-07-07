<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProvinceCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('province_cities');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('province_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('province_id');
            $table->biginteger('city_id');
            $table->timestamps();
        });
    }
}
