<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Classe');
            //$table->unsignedBigInteger('departement_id'); // Foreign key column
           // $table->foreign('departement_id')->references('id')->on('departements');
            $table->timestamps();
        });
         // Add five claase
     $classes = [
        ['Nom_Classe' => 'Classe 1'],
        ['Nom_Classe' => 'Classe 2'],
        ['Nom_Classe' => 'Classe 3'],
        ['Nom_Classe' => 'Classe 4'],
        ['Nom_Classe' => 'Classe 5'],
    ];

    DB::table('classes')->insert($classes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
