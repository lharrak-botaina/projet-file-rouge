<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockage', function (Blueprint $table) {
            $table->increments("id_stockage")->nullable();
            $table->string('value_ckeckbox')->nullable();
           
            $table->unsignedInteger("id_ingredient_stock")->nullable();
            $table->foreign('id_ingredient_stock')
            ->references('id_ingredient')
            ->on('ingredients')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stockage');
    }
};
