<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('title',255);
            $table->text('description');
            $table->string('model',255);
            $table->year('model_year');
            $table->bigInteger('seller_id');
            $table->unsignedBigInteger('address_id');
            $table->tinyInteger('is_paid');
            $table->boolean('is_reviewed');
            $table->unsignedBigInteger('reviewed_by');
            $table->timestamp('reviewed_at');
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
        Schema::dropIfExists('advertisements');
    }
}
