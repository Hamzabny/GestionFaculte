<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    
    protected $fillable = ['fullname', 'registration_number', 'departement_id', 'classe_id', 'matiere_id', 'hire_date', 'phone', 'address', 'city']; // Include all fillable fields

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
