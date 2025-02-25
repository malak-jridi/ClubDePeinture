<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvenements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   

    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titre');
            $table->string('date');
            $table->string('description');
            $table->datetime('deleted_at')->nullable();
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
            Schema::dropIfExists('evenements');

    
    }
}
