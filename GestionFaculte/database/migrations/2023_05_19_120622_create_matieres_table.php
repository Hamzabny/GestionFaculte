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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_Matiere');
          //  $table->unsignedBigInteger('classe_id'); // Foreign key column
          //  $table->foreign('classe_id')->references('id')->on('classes');
            $table->timestamps();
        });
        
        $matieres = [
            ['nom_Matiere' => 'Matiere 1'],
            ['nom_Matiere' => 'Matiere 2'],
            ['nom_Matiere' => 'Matiere 3'],
            ['nom_Matiere' => 'Matiere 4'],
            ['nom_Matiere' => 'Matiere 5'],
        ];
    
        DB::table('matieres')->insert($matieres);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matieres');
    }
};
