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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments("id_ingredient")->nullable();
            $table->string('name_ingredient')->nullable();
            $table->string('photo_ingredient')->nullable();
            
            $table->timestamps();

        });
        Schema::create('categorie', function (Blueprint $table) {
            $table->increments("id")->nullable();
            $table->string("name")->nullable();
            
            
        });
      

        Schema::create('recettes', function (Blueprint $table) {
            $table->increments("id_recette")->nullable();
            $table->string('nom_recette')->nullable();
            $table->string('photo_recette')->nullable();
            $table->string('video_place')->nullable();
            $table->string('description_recette')->nullable();
           
            $table->unsignedInteger("id_ingredient_recette")->nullable(); //Unique key
            $table->foreign('id_ingredient_recette')
            ->references('id_ingredient')
            ->on('ingredients')
            ->onDelete('cascade');
            
        });
        Schema::create('ingredients_recettes', function (Blueprint $table) {
            
           
            $table->unsignedInteger("id_recette")->nullable(); //Unique key
            $table->foreign('id_recette')
            ->references('id_recette')
            ->on('recettes')
            ->onDelete('cascade');
            $table->unsignedInteger("id_ingredient")->nullable(); //Unique key
            $table->foreign('id_ingredient')
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
    
};
