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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Departement');
            $table->timestamps();
        });
    
     // Add five departments
     $departements = [
        ['Nom_Departement' => 'Department 1'],
        ['Nom_Departement' => 'Department 2'],
        ['Nom_Departement' => 'Department 3'],
        ['Nom_Departement' => 'Department 4'],
        ['Nom_Departement' => 'Department 5'],
    ];

    DB::table('departements')->insert($departements);
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departements');
    }
};
