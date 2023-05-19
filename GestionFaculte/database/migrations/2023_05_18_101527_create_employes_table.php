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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('fullname');
          //  $table->string('depart');
          $table->unsignedBigInteger('departement_id'); // Foreign key column
          $table->foreign('departement_id')->references('id')->on('departements');
          $table->unsignedBigInteger('classe_id'); // Foreign key column
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->unsignedBigInteger('matiere_id'); // Foreign key column
            $table->foreign('matiere_id')->references('id')->on('matieres');
            $table->date('hire_date');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
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
        Schema::dropIfExists('employes');
    }
};
