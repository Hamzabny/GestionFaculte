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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->date('datedenaissance');
            $table->string('password');
            $table->integer('role')->default(4);
            $table->unsignedBigInteger('departement_id')->nullable()->default(null); // Foreign key column
            $table->foreign('departement_id')->references('id')->on('departements');
            $table->unsignedBigInteger('classe_id')->nullable()->default(null);; // Foreign key column
            $table->foreign('classe_id')->references('id')->on('classes');

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
        Schema::dropIfExists('personal_access_tokens');
    }
};
