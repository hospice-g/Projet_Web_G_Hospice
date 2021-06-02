<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonADsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maison_a_ds', function (Blueprint $table) {
            
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->integer('prix');
            $table->string('type_action');
            $table->string('lieu_maison');
            $table->integer('num_user');
            $table->string('photo');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('maison_a_ds');
    }
}
