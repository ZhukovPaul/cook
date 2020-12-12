<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecipesList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if ( !Schema::hasTable('recipe')) {
            
            Schema::create('recipe',function(Blueprint $table){
                $table->id();
                $table->string('slug');
                $table->string('name');
                $table->integer('locked');
                $table->integer('range');
                $table->date('created_at');
                $table->string('img');
                $table->text('short_description');
                $table->text('long_description');
                $table->text('recipe');

            });

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_list');
        //
    }
}
