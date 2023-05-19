<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['Nom_Classe'];

   
    public function departement()
    {
        return $this->hasMany(Departement::class);
    }
    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
}
