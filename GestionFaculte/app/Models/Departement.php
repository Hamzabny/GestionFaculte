<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
     use HasFactory;
    protected $fillable = ['Nom_Departement'];

   
    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
    public function classe()
    {
        return $this->hasMany(Classe::class);
    }
}
